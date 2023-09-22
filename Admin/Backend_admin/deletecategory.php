<?php
    include('../Connection_admin/connection.php');
    $usersid = $_GET['url'];
    $del = "DELETE  FROM `categories` WHERE `categories`.`cg_id`=$usersid";
    if( mysqli_query($con,$del)){
        echo '<script>alert("category Deleted!!")</script>';
        echo '<script>window.location.replace("../Frontend_admin/viewcategory.php");</script>';
        
    }
?>