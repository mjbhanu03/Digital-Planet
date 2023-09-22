<?php
$logo = "../../images/mj.png";
$icon = "../../images/mj.png";
$home = "../index.php";
$logout_path = "../../Backend/destroy.php";
    include('../Html_admin/htmls.php');

?>

<div class="flex justify-center items-center h-screen w-full flex-col ">

    <h1 class="text-2xl font-bold flex justify-center mb-5">Add Category</h1>
    <form action="../Backend_admin/insertcategory.php" method="post" class="flex text-black border-4 py-12 px-20 flex-col space-y-6  rounded-3xl">
        <input type="text" name="cgname" placeholder="Enter Category Name" class="border-2 rounded-md p-1" required>
        <div class="w-full flex  justify-center space-x-4">
            <input type="submit" value="Submit" class="bg-blue-600 text-white font-semibold rounded-md w-max p-1 px-10 hover:bg-blue-500">
            <a href="../index.php" class="bg-red-600 text-white font-semibold rounded-md w-max p-1 px-10 hover:bg-red-500">Cancel</a>
        </div>
    </form>
    
</div>
<?php
include('../Html_admin/htmle.php');
?>