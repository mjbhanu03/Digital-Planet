<?php
$login_path = "./login.php";
$logout_path = "../Backend/destroy.php";
$logo = "../images/mj.png";
$home = "../index.php";
$about_page = "./aboutus.php";
$contactpage = "./contactus.php";
$termscondition = "./termsandconditions.php";

include('../html/htmls.php');
require('../Connection/connection.php');
$sql = "SELECT * FROM products";
$all_products = $con->query($sql);
?>

<div class=" grid grid-cols-1 gap-4 mt-5 sm:grid sm:grid-cols-3 sm:gap-1 md:grid md:grid-cols-2 md:gap-4 xl:grid xl:grid-cols-4 xl:gap-4 items-center w-full px-28 justify-center">
    <?php
    // foreach($product as $products) : 
    while ($row = mysqli_fetch_assoc($all_products)) {
    ?>
        <div class=" w-[230px] drop-shadow-md items-center rounded-md border-2 justify-between p-1 flex text-sm flex-col h-[325px]">
            <a href="./singleproduct.php?id=<?= $row['p_id']?>">

                <div class="w-full flex items-center  justify-center ">
                    
                    <img src="<?php echo $row['p_image']; ?>" alt="" class="rounded-md h-[170px] w-fit">
                </div>
                <div class="w-full font-bold">
                    <h1> <?= $row['p_name'] ?> </h1>
                </div>
                <div class="w-full text-sm">
                    <p><?= substr($row['p_desc'], 0, 40) ?>...</p>
                </div>
                <div class="w-full font-bold">
                    <h1> ₹<?= $row['p_price'] ?>/- </h1>
                </div>
            </a>
                <div class="w-full text-[13px] grid grid-cols-5 gap-2 items-center ">
                <a href="./singleproduct.php?id=<?= $row['p_id']?>" class="rounded-xl flex  justify-center col-span-2 bg-blue-700 border-2 border-blue-700 text-white font-semibold py-1">Buy Now</a>
                
                <?php if (isset($_SESSION['check'])) { ?>
                    <a href="../Backend/addtocart.php?url=<?= $row['p_id'] ?>&userid=<?= $_SESSION['check']['id']?>" class="rounded-xl flex  justify-center col-span-2 border-2 py-1 font-semibold border-black hover:bg-black hover:border-2 hover:text-white ">Add to Cart</a>
                    <a href="../Backend/insertwishlist.php?url=<?= $row['p_id'] ?>&userid=<?= $_SESSION['check']['id'] ?>" class="rounded-xl flex  justify-center  py-1 text-xl"><i class="fa-solid fa-heart " style="color: #ff0000;"></i></a>
                    <?php } else {
                 echo   '<a href="../Frontend/login.php" class="rounded-xl flex  justify-center col-span-2 border-2 py-1 font-semibold border-black hover:bg-black hover:border-2 hover:text-white">Add to Cart</a>';
                    echo '<a href="../Frontend/login.php" class="rounded-xl flex  justify-center  py-1 text-xl"><i class="fa-solid fa-heart " style="color: #ff0000;"></i></a>';
                }
                ?>

            </div>
        </div>
    <?php } ?>
</div>

<?php
include('../html/htmle.php');
?>