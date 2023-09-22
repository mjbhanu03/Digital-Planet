<?php
    include('../Connection_admin/connection.php');
    $usersid = $_GET['url'];
    $del = "DELETE  FROM `users` WHERE `users`.`id`=$usersid";
    if( mysqli_query($con,$del)){
        
        echo '<script>alert("User Deleted!!")</script>';
        echo '<script>window.location.replace("../index.php");</script>';
        
    }
?>