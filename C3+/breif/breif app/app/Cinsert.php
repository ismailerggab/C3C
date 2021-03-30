<?php
session_start();

include './core/init.php';
if (isset($_POST['html']) && isset($_POST['php']) && isset($_POST['javascript']) && isset($_POST['ajax']) && isset($_POST['cgi']) )  {
   
    $html = $_POST['html'];
    $php = $_POST['php'];
    $javascript = $_POST['javascript'];
    $ajax = $_POST['ajax'];
    $cgi = $_POST['cgi'];

    if (empty($email)) {
        header("Location: index.php?error=Email is required");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "INSERT INTO `skilles`(html, cgi, php, javascript, ajax) VALUES ('$html','$javascript' , '$php', '$ajax', '$cgi')";


      

        $result = mysqli_query($conn, $sql);
        exit;
       
        if (!$result) {
            die($sql);
        } else{
            header("location: index.php?Your account has been created");
        }

}
}


<div class="next__step" id="next__step" style="display: none;">
									<p>Please entere your C level</p>

									<div class="form-group d-flex align-items-center">
										<label class="label" for="html">your LEVEL in html</label>

										<select class="form-control" name="html" id="SELECT">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="form-group d-flex align-items-center">
										<label class="label" for="html">your LEVEL in JavaScript</label>

										<select class="form-control" name="javascript" id="SELECT">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="form-group d-flex align-items-center">
										<label class="label" for="html">your LEVEL in php</label>

										<select class="form-control" name="php" id="SELECT">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="form-group d-flex align-items-center">
										<label class="label" for="html">your LEVEL in AJAX</label>

										<select class="form-control" name="ajax" id="SELECT">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</div>
									<div class="form-group d-flex align-items-center">
										<label class="label" for="html">your LEVEL in CGI</label>

										<select class="form-control" name="cgi" id="SELECT">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>

									</div>
</div>
									<div class="col-md-12">
											<div class="form-group">
												<a class="btn btn-secondary p-3" id="nextBTN">Next</a>
											</div>
										</div>
									<div>