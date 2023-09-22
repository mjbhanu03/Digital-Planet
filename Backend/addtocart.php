<?php
    include('../Connection/connection.php');
    $productid = $_GET['url'];
    $userid = $_GET['userid'];

        $insert = "INSERT INTO `cart`(`u_id`, `p_id`,`quantity`) VALUES ('$userid','$productid',1)";
        if(mysqli_query($con,$insert)){
            header("location:../Frontend/products.php");
        }
?>