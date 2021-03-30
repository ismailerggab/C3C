<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    if($_SESSION['isAdmin'] == 1){
        // echo "Hello Admin " . $_SESSION['name'];
        include 'pages/admiDashboard.php';
    } else {
        header("location: user.php");
    }
} else{
    header('location: index.php');
}
     
?>