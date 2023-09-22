<?php
        include('../Connection_admin/connection.php');

        $cgname = $_POST['cgname'];


        $sql = "INSERT INTO `categories`(  `cg_name`) VALUES
         ('$cgname')";


if( mysqli_query($con,$sql)){
        header('location:../Frontend_admin/addcategory.php');
}     
    
?>