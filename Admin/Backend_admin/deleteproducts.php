<?php
    include('../Connection_admin/connection.php');
    $productid = $_GET['url'];
    $del = "DELETE FROM `products` WHERE `p_id`=$productid";
    if( mysqli_query($con,$del)){
        echo '<script>alert("Product Deleted!!")</script>';
        echo '<script>window.location.replace("../index.php");</script>';
    }
?>