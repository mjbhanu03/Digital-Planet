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
    $sql = "SELECT * FROM `cart`, `products` WHERE `cart`. `p_id`=`products`.`p_id` AND `cart`.`u_id`=$checkk";
    $all_products = mysqli_query($con, $sql);
}

?>

<div class="items-center w-full px-2 justify-center flex flex-col mt-11 sm:text-[15px] text-xs sm:px-28">

    <form action="../Backend/proceedtocheckout.php?userid=<?= $_SESSION['check']['id'] ?>" class="space-y-5 w-max flex flex-col itmes-center justify-center" method="post">

        <?php
        if (isset($_SESSION['check'])) {
            while ($products = mysqli_fetch_assoc($all_products)) :
        ?>
                <div class="w-full border-2  flex flex-row items-center rounded-xl ">
                    <div class="p-3">
                        <img src="<?= $products['p_image'] ?>" class="rounded-md h-[180px] w-[180px]">
                    </div>

                    <div class="flex flex-col w-max  p-2 space-y-3">
                        <div class="font-bold">
                            <p><?= $products['p_name'] ?></p>
                        </div>

                        <p>Qty:</p>
                        <div class="border-2 p-1 flex w-max space-x-5 ">
                            <input type="number" name="qty[]" min="1" max="3" value="1">
                            <input type="number" name="p_id[]" value="<?= $products['p_id'] ?>" hidden>
                        </div>

                        <div class=" flex w-max space-x-5 ">
                            <p>Price: <?= $products['p_price']?>/- </p>
                        </div>

                        <div class="p-1 rounded-md px-3 w-max bg-red-500 text-white">
                            <a href="../Backend/removesingleproductcart.php?userid=<?= $_SESSION['check']['id'] ?>&p_id=<?= $products['p_id'] ?>">Remove</a>
                        </div>

                    </div>
                </div>
                <div>
                
                </div>
            <?php endwhile;
            ?>
            <div class="flex justify-center">
                <input type="submit" value="Proceed to Checkout" name="submit" class="bg-blue-600 text-white p-2 mt-3 w-max px-3 rounded-xl">
            </div>
    </form>

    <div class="w-full flex mt-5">
        <div class="w-full flex justify-end">
            <a href="../Backend/removecart.php?userid=<?= $_SESSION['check']['id'] ?>" class="bg-red-600 w-max px-5 text-white font-semibold rounded-xl flex justify-center p-2   hover:bg-red-500 ">Clear All</a>
        </div>
    </div>
</div>

<?php
        } else {
            echo "<script>window.location.replace('../index.php')</script>";
        }
        include('../html/htmle.php');
?>