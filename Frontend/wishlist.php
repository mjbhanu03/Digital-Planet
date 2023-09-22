<?php
$login_path = "./login.php";
$logout_path = "../Backend/destroy.php";
$logo = "../images/mj.png";
$home = "../index.php";
$about_page = "./aboutus.php";
$contactpage = "./contactus.php";
$termscondition = "./termsandconditions.php";

include('../html/htmls.php');
include('../Connection/connection.php');

if (isset($_SESSION['check'])) {
    $checkk = $_SESSION['check']['id'];
    $sql = "SELECT * FROM `wishlist`, `products` WHERE `wishlist`. `p_id`=`products`.`p_id` AND `wishlist`.`u_id`=$checkk";
    $all_products = mysqli_query($con, $sql);
}

?>

<div class=" grid grid-cols-1 gap-4 sm:grid sm:grid-cols-3 mt-8 sm:gap-1 md:grid md:grid-cols-2 md:gap-4 xl:grid xl:grid-cols-4 xl:gap-4 items-center w-full px-28 justify-center">
    <?php
    if (isset($_SESSION['check'])) {
        while ($row = mysqli_fetch_assoc($all_products)) :
    ?>
            <div class=" w-[230px] drop-shadow-md items-center rounded-md border-2 justify-between p-1 flex flex-col h-[325px]">
                <div class="w-full flex items-center  justify-center ">
                    <img src="<?= $row['p_image'] ?>" class="rounded-md h-[180px] w-fit">
                </div>
                <div class="text-sm w-full font-bold">
                    <h1><?= $row['p_name'] ?></h1>
                </div>
                <div class="w-full text-[13px] flex items-center space-x-2">
                    <a href="./singleproduct.php?id=<?= $row['p_id'] ?>" class="w-full rounded-xl flex  justify-center col-span-2 bg-blue-700 border-blue-700 border-2 text-white font-semibold py-1">Buy Now</a>
                    <a href="../Backend/addtocart.php?url=<?= $row['p_id'] ?>&userid=<?= $_SESSION['check']['id'] ?>" class="rounded-xl flex  justify-center w-full col-span-2 border-2 py-1 font-semibold border-black">Add to Cart</a>
                </div>
                <div class="p-1 rounded-xl flex items-center justify-center w-full bg-red-500 text-white">
                    <a href="../Backend/removesingleproductwishlist.php?userid=<?= $_SESSION['check']['id'] ?>&p_id=<?= $row['p_id'] ?>" class="w-full flex items-center justify-center">Remove</a>
                </div>

            </div>
        <?php endwhile;
        ?>
</div>
<div class="w-full flex justify-end">
    <a href="../Backend/removewishlist.php?userid=<?= $_SESSION['check']['id'] ?>" class="bg-red-600 w-max  px-4 text-white font-semibold rounded-xl flex justify-center p-1   hover:bg-red-500 ">Clear All</a>
</div>

<?php
    } else {
        echo "<script>alert('Please login to add products to wishlist!!!')</script>";
        echo "<script>window.location.replace('../index.php')</script>";
    }
    include('../html/htmle.php');
?>