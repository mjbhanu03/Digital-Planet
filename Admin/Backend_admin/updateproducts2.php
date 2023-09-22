<?php
include('../Connection_admin/connection.php');

if(isset($_POST['update'])){
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $cg = $_POST['cg'];
    $update = "UPDATE `products` SET  `cg_id`='$cg' ,`p_name`='$name' ,`p_desc`='$description' ,`p_price`='$price'    WHERE `p_id`=$id";
    if( mysqli_query($con,$update)){
        echo '<script>alert("Product Updated!!")</script>';
        echo '<script>window.location.replace("../index.php");</script>';
            }
}
