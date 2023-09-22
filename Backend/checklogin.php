<?php
session_start();
include_once "../Connection/connection.php";
$email   =  $_POST["email"];
$pass   =  $_POST["pass"];

$selectque = "SELECT * FROM `users` WHERE u_gmail='$email' AND u_password='$pass'";

$emailque =mysqli_query($con,$selectque);
$check = mysqli_fetch_array($emailque);
$_SESSION['check'] = $check; 

if(isset($_SESSION['check'])){
    if($email == 'admin@gmail.com' && $pass == 'admin@123'){

        header("Location:.././Admin/index.php");
    }
    else{
        $user = $_SESSION["check"]["u_username"];
        echo "<script>alert('Welcome ".$user."')</script>";
        echo '<script>window.location="../index.php"</script>';
        
    }
    
}
else{
    echo '<script>alert("Please Enter valid Email or Password")</script>';
    echo '<script>window.location="../Frontend/login.php"</script>';

}
