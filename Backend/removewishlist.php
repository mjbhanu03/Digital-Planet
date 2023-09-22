<?php
include('../Connection/connection.php');
$userid = $_GET['userid'];
$delete = "DELETE  FROM `wishlist` WHERE `wishlist`.`u_id`=$userid";
if( mysqli_query($con,$delete)){
    header("location:../Frontend/wishlist.php");
}
?>