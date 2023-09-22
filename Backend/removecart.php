<?php
include('../Connection/connection.php');
$userid = $_GET['userid'];
$delete = "DELETE  FROM `cart` WHERE `cart`.`u_id`=$userid";
if( mysqli_query($con,$delete)){
    header("location:../Frontend/products.php");
}
?>