<?php
include('../Connection/connection.php');
$userid = $_GET['userid'];
$quantity = $_POST['qty'];
$productid = $_POST['p_id'];

if (isset($_POST['submit'])) {
    $index = 0;
    foreach ($productid as $productids) {
        $insert = "INSERT INTO `orders`(`u_id`,`p_id`,`quantity`) VALUES ($userid,$productids,$quantity[$index])";
        $orderdata = mysqli_query($con, $insert);
        $index++;
    }
    

    header('location:./removecart.php?userid='.$userid);
    // var_export($quantity);
}
?>
