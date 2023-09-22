<?php
$login_path = "./login.php";
$logo = "../images/mj.png";
$home = "../index.php";
$about_page = "./aboutus.php";
$contactpage = "./contactus.php";
$termscondition = "./termsandconditions.php";

include('../html/htmls.php');
?>

<div class="flex justify-center items-center h-screen  ">
    <form action="../Connection/insert.php" method="post" class="flex bg-slate-800 text-white py-10 px-20 flex-col space-y-5 rounded-3xl shadow-lg shadow-slate-800	">
        <h3 class="flex w-full justify-center items-center  text-2xl font-bold ">SignUp Form</h3>

        <div class="flex flex-col space-y-8">
            <hr>

            <input type="text" name="username" placeholder="Enter your first name" class="border-solid h-8 rounded-md border-2 text-black " required>
            <input type="number" name="number" placeholder="Enter your number" class="border-solid h-8 rounded-md border-2 text-black " required>
            <input type="email" name="email" placeholder="Enter your E-mail" class="border-solid h-8 rounded-md border-2 text-black " required>
            <input type="text" name="address" placeholder="Enter your address" class="border-solid h-8 rounded-md border-2 text-black " required>

            <div class="flex space-x-2">
                <input type="password" name="pass" placeholder="Enter your password" class="border-solid h-8 rounded-md border-2 text-black " required>
                <input type="password" name="cpass" placeholder="Confirm your password" class="border-solid h-8 rounded-md border-2 text-black " required>
            </div>

            <input type="submit" value="Sign Up" name="submit" class="h-8 rounded-xl font-semibold border-solid border-2 hover:bg-white hover:text-black ">
        </div>

        <p class="flex items-center justify-center">Back to Login Page.&nbsp;<a href="./login.php" class=" text-blue-400 hover:text-purple-800">Login Page?</a></p>
    </form>
</div>
<?php include('../html/htmle.php'); ?>