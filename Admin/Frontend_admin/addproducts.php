<?php
    $logo = "../../images/mj.png";
    $icon = "../../images/mj.png";
    $home = "../index.php";
$logout_path = "../../Backend/destroy.php";

include('../Html_admin/htmls.php');
include('../Connection_admin/connection.php');
$sql = "SELECT * FROM `categories`";
$connect = mysqli_query($con,$sql);

?>

<div class="flex flex-col justify-center items-center h-screen w-full ">

    <h1 class="text-2xl font-bold flex justify-center mb-5">Add Product</h1>
    <form action="insertproducts.php" method="post" class="flex text-black border-4 py-12 px-20 flex-col space-y-6  rounded-3xl " enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter Product Name" class="border-2 rounded-md p-1" required>
        <input type="text" name="description" placeholder="Enter Product Description" class="border-2 p-1 rounded-md" required>
        <input type="number" name="price" placeholder="Enter Product Price" class="border-2 rounded-md p-1" required>
        <input type="file" name="image" placeholder="Upload Product image" id="image" class="border-2 rounded-md p-1" required>
        
        <label for="category">Choose a Category:</label>
        <select id="Category" name="cg">
        <?php
            if ($connect->num_rows > 0) :
              // output data of each row
              while($row = $connect->fetch_assoc()) :
          ?>
            <option value=" <?= $row['cg_id']?> "><?= $row['cg_name']?></option>
        <?php
        endwhile;
        endif;
    ?>
        </select>

        <div class="w-full flex  justify-center space-x-4">
            <input type="submit" value="Submit" class="bg-blue-600 text-white font-semibold rounded-md w-max p-1 px-10 hover:bg-blue-500">
            <a href="../index.php" class="bg-red-600 text-white font-semibold rounded-md w-max p-1 px-10 hover:bg-red-500">Cancel</a>
        </div>
    </form>

</div>
<?php
include('../Html_admin/htmle.php');
?>