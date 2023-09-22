<?php
include('../Connection_admin/connection.php');

if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $name_u = $_POST['name'];
    $password_u = $_POST['password'];
    $gmail_u = $_POST['gmail'];
    $number_u = $_POST['number'];
    $address_u = $_POST['address'];
    $update = "UPDATE `users` SET  `u_username`='$name_u' ,`u_password`='$password_u' ,`u_gmail`='$gmail_u' ,`u_number`='$number_u'  ,`u_address`='$address_u'  WHERE `id`=$id";
    if( mysqli_query($con,$update)){
        
        echo '<script>alert("User Updated!!")</script>';
        echo '<script>window.location.replace("../index.php");</script>';
        
    }
}
