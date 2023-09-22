<?php

include_once "../Connection/connection.php";
$email   =  $_POST["email"];

$selectque = "SELECT  `u_gmail` FROM `users` WHERE u_gmail='$email' ";


$emailque =mysqli_query($con,$selectque);
$check = mysqli_fetch_array($emailque);
?>