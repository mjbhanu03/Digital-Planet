<?php
        include('../Connection_admin/connection.php');

        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category = $_POST['cg'];
        $filename = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $upload_loc = '../../uploaded_images/'.$filename;

    $path =  move_uploaded_file(
        $file_tmp,
        $upload_loc
     );
        $sql = "INSERT INTO `products`( `cg_id`, `p_name`, `p_desc`, `p_price`, `p_image`) VALUES
         ('$category','$name','$description','$price','$upload_loc')";
         
         
     if($path){
             $connect = mysqli_query($con,$sql);     
             header('location:../Frontend_admin/addproducts.php');
        }
    
    
?>