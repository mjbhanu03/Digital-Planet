<?php
    include('../Connection/connection.php');
    $productid = $_GET['url'];
    $userid = $_GET['userid'];

        $insert = "INSERT INTO `wishlist`(`u_id`, `p_id`) VALUES ('$userid','$productid')";
        if(mysqli_query($con,$insert)){
            header("location:../Frontend/products.php");
        }
?>