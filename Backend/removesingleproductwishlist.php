<?php
include('../Connection/connection.php');
$userid = $_GET['userid'];
$productid = $_GET['p_id'];
$delete = "DELETE  FROM `wishlist` WHERE `wishlist`.`u_id`=$userid AND `wishlist`.`p_id`=$productid";
if( mysqli_query($con,$delete)){
    header("location:../Frontend/products.php");
}
?>