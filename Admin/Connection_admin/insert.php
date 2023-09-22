<?php
include('./connection.php');
include('../Backend/check.php');

session_start();

$username   =  $_POST["username"];
$number   =  $_POST["number"];
$email   =  $_POST["email"];
$address   =  $_POST["address"];
$pass    =  $_POST["pass"];
$cpass    =  $_POST["cpass"];

$query = "INSERT INTO `users`( `u_username`, `u_password`, `u_gmail`, `u_number`, `u_address`) VALUES ('$username ','$pass','$email','$number','$address')";



if($pass == $cpass){
    if(isset($check)){        
        echo '<script>alert("Email is already taken.")</script>';    
        echo '<script>window.location="../Frontend/signup.php"</script>';  
    }
    else{
        $connect = mysqli_query($con,$query);
        header("Location:../Frontend/login.php");
    }
}
else{
    echo '<script>alert("Both passwords are not same.")</script>';  
    echo '<script>window.location="../Frontend/signup.php"</script>';  
}

?>