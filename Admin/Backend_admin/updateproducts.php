<?php
$logo = "../../images/mj.png";
$icon = "../../images/mj.png";
$home = "../index.php";

include('../Connection_admin/connection.php');
include('../Html_admin/htmls.php');
$usersid = $_GET['url'];
$select = "SELECT * FROM `products` WHERE `p_id`=$usersid";
$connect = mysqli_query($con, $select);


while($row = mysqli_fetch_array($connect)){

    $id = $row['p_id'];
    $category_id = $row['cg_id'];
    $pname = $row['p_name'];
    $pdesc = $row['p_desc'];
    $pprice = $row['p_price'];

?>

<div class="flex justify-center items-center h-screen w-full ">

<form action="./updateproducts2.php"  method="post" class="flex text-black border-4 py-12 px-20 flex-col space-y-6  rounded-3xl " enctype="multipart/form-data">
        <input type="text" name="id" value="<?= $id?>"  class="border-2 rounded-md p-1" hidden>
        <input type="text" name="name" value="<?= $pname?>" placeholder="Enter Product Name" class="border-2 rounded-md p-1" required>
        <input type="text" name="description" value="<?= $pdesc?>" placeholder="Enter Product Description" class="border-2 p-1 rounded-md" required>
        <input type="number" name="price" value="<?= $pprice?>" placeholder="Enter Product Price" class="border-2 rounded-md p-1" required>
        
        <?php
        $s = "SELECT * FROM `categories`";
        $cg_connect = mysqli_query($con,$s);
        ?>
        
        <label for="category">Choose a Category:</label>
        <select id="Category" name="cg">
        <?php
            if ($cg_connect->num_rows > 0) :
              // output data of each row
              while($rows = $cg_connect->fetch_assoc()) :
          ?>
            <option value=" <?= $rows['cg_id']?> "><?= $rows['cg_name']?></option>
        <?php
        endwhile;
        endif;
    ?>
        </select>

        <div class="w-full flex  justify-center space-x-4">
            <input type="submit" name="update" value="Update" class="bg-blue-600 text-white font-semibold rounded-md w-max p-1 px-10 hover:bg-blue-500">
            <a href="../index.php" class="bg-red-600 text-white font-semibold rounded-md w-max p-1 px-10 hover:bg-red-500">Cancel</a>
        </div>
    </form>
</div>

<?php
}

include('../Html_admin/htmle.php');
?>