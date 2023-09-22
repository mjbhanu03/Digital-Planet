<?php 
include('../Connection/connection.php');

$id = $_POST['id'];
$name_u = $_POST['username'];
$password_u = $_POST['pass'];
$gmail_u = $_POST['email'];
$number_u = $_POST['number'];
$address_u = $_POST['address'];
$update = "UPDATE `users` SET  `u_username`='$name_u' ,`u_password`='$password_u' ,`u_gmail`='$gmail_u' ,`u_number`='$number_u'  ,`u_address`='$address_u'  WHERE `id`=$id";
if( mysqli_query($con,$update)){
    
    echo '<script>window.location.replace("../index.php");</script>';
    
}
?>