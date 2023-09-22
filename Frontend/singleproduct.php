<?php
$login_path = "./login.php";
$logout_path = "../Backend/destroy.php";
$logo = "../images/mj.png";
$home = "../index.php";
$about_page = "./aboutus.php";
$contactpage = "./contactus.php";
$termscondition = "./termsandconditions.php";

include('../Connection/connection.php');
include('../html/htmls.php');
$getid = $_GET['id'];
$select = "SELECT * FROM `products` WHERE `products`.`p_id`=$getid";
$data = mysqli_query($con,$select);
?>
<div class="w-full  flex  justify-center items-center">
    
    <?php
    while($row =mysqli_fetch_assoc($data)){
        ?>
        
        <div class="w-[30%] flex justify-center ">
        <img src=" <?= $row['p_image']?>" class="w-fit h-[100%] p-4" alt="">
    </div>
    <div class="w-[70%] ">
        <div class="w-full p-5">
            <h1 class="font-bold text-2xl"><?= $row['p_name']?></h1>
        </div>
        <div class="w-[60%] p-5">
            <h1 class=" text-md">
            <?= $row['p_desc']?>
            </h1>  
        </div>
            <div class="w-full p-5">
            <a href="../Backend/addtocart.php?url=<?= $row['p_id'] ?>&userid=<?= $_SESSION['check']['id'] ?>" class="p-2 px-10 w-max border-2 hover:bg-black hover:text-white border-black rounded-xl">Add to Cart</a>
                <!-- <a href="#" class="p-2 px-10 w-max border-2 hover:bg-black hover:text-white border-black rounded-xl">Add To Cart</a> -->
            </div>
        </div>
    <?php }?>
</div>

<?php
include('../html/htmle.php');
?>