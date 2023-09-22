
<?php 
$login_path = "./login.php";
$logout_path ="../Backend/destroy.php";
$logo = "../images/mj.png";
$home = "../index.php";
$about_page = "./aboutus.php";
$contactpage = "./contactus.php";
$termscondition = "./termsandconditions.php";

include('../html/htmls.php');
if(!isset($_SESSION['check'])){
?>
<div class="flex justify-center items-center h-screen  bg-transparent">
    <form action="../Backend/checklogin.php" method="post" class="flex bg-slate-800 text-white py-10 px-20 flex-col space-y-5  rounded-3xl shadow-lg shadow-slate-800	">
        <h3 class="flex w-full justify-center items-center  text-2xl font-bold ">Login Form</h3>
        <div class="flex flex-col space-y-8">
    <hr>
    <input type="email" name="email" placeholder="Enter your E-mail"  class="border-solid h-8 rounded-md border-2 text-black " required>
    <input type="password" name="pass" placeholder="Enter your password" class="border-solid h-8 rounded-md border-2 text-black" required>
    <input type="submit" value="Log In" class="h-8 rounded-xl font-semibold border-solid border-2 hover:bg-white hover:text-black ">
</div>
    <p>Create a New Account?<a href="./signup.php" class="text-blue-400 hover:text-purple-800">SignUp Page.</a></p>
    </form>
</div>

<?php }
else{
    header('location:../index.php');
}
 include('../html/htmle.php');?>
