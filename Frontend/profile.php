<?php
$login_path = "./login.php";
$logout_path = "../Backend/destroy.php";
$logo = "../images/mj.png";
$home = "../index.php";
$about_page = "./aboutus.php";
$contactpage = "./contactus.php";
$termscondition = "./termsandconditions.php";

include('../html/htmls.php');

?>

<div class="flex justify-center items-center h-screen w-full flex-col ">

    <form action="../Backend/updateprofile.php" method="post" class="flex bg-slate-800 text-white py-10 px-20 flex-col w-[40%] space-y-5 border-solid border-2 border-black rounded-3xl shadow-lg shadow-slate-800	">
        <?php
        if (isset($_SESSION['check'])) {
        ?>
            <div class="w-fulll flex items-center justify-center space-x-3">
                <img src="../images/mee (1).jpeg" name="image" id="" class="  h-[50px] w-[50px] rounded-full">
                <h3 class=" text-2xl font-bold "> <?= $_SESSION['check']['u_username'] ?></h3>
            </div>

            <div class="flex flex-col space-y-8">
                <hr>
                <input type="text" name="id" placeholder="Enter your first name" value="<?= $_SESSION['check']['id'] ?>" class="border-solid h-8 rounded-md border-2 text-black " hidden>
                <input type="text" name="username" placeholder="Enter your first name" value="<?= $_SESSION['check']['u_username'] ?>" class="border-solid h-8 rounded-md border-2 text-black " required>
                <input type="number" name="number" placeholder="Enter your number" value="<?= $_SESSION['check']['u_number'] ?>" class="border-solid h-8 rounded-md border-2 text-black " required>
                <input type="email" name="email" placeholder="Enter your E-mail" value="<?= $_SESSION['check']['u_gmail'] ?>" class="border-solid h-8 rounded-md border-2 text-black " required>
                <input type="text" name="address" placeholder="Enter your address" value="<?= $_SESSION['check']['u_address'] ?>" class="border-solid h-8 rounded-md border-2 text-black " required>
                <input type="text" name="pass" placeholder="Enter your password" value="<?= $_SESSION['check']['u_password'] ?>" class="border-solid h-8 rounded-md border-2 text-black " required>
                <div class="flex w-full space-x-5">
                    <input type="submit" value="Update" name="submit" class=" bg-blue-600 h-8 w-full rounded-xl font-semibold  hover:bg-white hover:text-black ">
                    <a href="../index.php" class="bg-red-600 w-full text-white font-semibold rounded-xl flex justify-center p-1   hover:bg-white hover:text-black">Cancel</a>
                </div>
            </div>
        <?php
        } else {
            header("location:../index.php");
        } ?>
    </form>

</div>
<?php
include('../html/htmle.php');
?>