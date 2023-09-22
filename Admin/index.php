<?php
$logo = "../images/mj.png";
$icon = "../images/download.png";
$home = "index.php";
$login_path = "../Frontend/login.php";
$logout_path = ".././Backend/destroy.php";
include('./Html_admin/htmls.php');
if(isset($_SESSION['check'])){
if($_SESSION['check']['u_gmail'] == "admin@gmail.com" && $_SESSION['check']['u_password'] == "admin@123"){

?>

<div class="w-full space-y-5 flex items-center justify-center flex-col h-screen">
    <div class="w-52 border-2 p-2 px-10  rounded-xl hover:bg-slate-300  hover:text-white hover:font-bold  duration-300">
        <a href="./Frontend_admin/addcategory.php" class="w-full flex  justify-center  ">Add Categories</a>
    </div>
    
    <div class="w-52 border-2 p-2 px-10  rounded-xl hover:bg-slate-300   hover:text-white hover:font-bold  duration-300 ">
        <a href="./Frontend_admin/viewcategory.php" class="w-full  flex  justify-center">View Categories</a>
    </div>
    
    <div class="w-52 border-2 p-2 px-10  rounded-xl hover:bg-slate-300   hover:text-white hover:font-bold  duration-300 ">
        <a href="./Frontend_admin/addproducts.php" class="w-full  flex  justify-center">Add Products</a>
    </div>
    
    <div class="w-52 border-2 p-2 px-10  rounded-xl hover:bg-slate-300   hover:text-white hover:font-bold  duration-300 ">
        <a href="./Frontend_admin/viewproducts.php" class="w-full  flex  justify-center">View Products</a>
    </div>
    
    <div class="w-52 border-2 p-2 px-10  rounded-xl hover:bg-slate-300   hover:text-white hover:font-bold  duration-300 ">
        <a href="./Frontend_admin/viewusers.php" class="w-full  flex  justify-center">View Users</a>
    </div>
    
    
    <div class="w-52 border-2 p-2 px-10  rounded-xl hover:bg-slate-300   hover:text-white hover:font-bold  duration-300 ">
        <a href="./Frontend_admin/vieworders.php" class="w-full  flex  justify-center">View Orders</a>
    </div>
    
</div>

<?php
}
else{
    header("location:".$login_path);
}
}

else{
    header("location:".$login_path);
}
include('./Html_admin/htmle.php');
?>