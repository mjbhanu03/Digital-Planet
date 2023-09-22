<?php
$logo = "../../images/mj.png";
$icon = "../../images/mj.png";
$home = "../index.php";

include('../Connection_admin/connection.php');
include('../Html_admin/htmls.php');
$usersid = $_GET['url'];
$select = "SELECT * FROM `users` WHERE `id`=$usersid";
$connect = mysqli_query($con, $select);


while($row = mysqli_fetch_array($connect)){

    $id = $row['id'];
    $username = $row['u_username'];
    $password = $row['u_password'];
    $gmail = $row['u_gmail'];
    $number = $row['u_number'];
    $address = $row['u_address'];

?>

<div class="flex justify-center items-center h-screen w-full ">

    <form action="updateusers2.php?url='<?=$id?>'" method="post" class="flex text-black border-4 py-12 px-20 flex-col space-y-6  rounded-3xl " enctype="multipart/form-data">
        <input type="number" name="id"  class="border-2 rounded-md p-1" value="<?= $id?>" hidden>
        <input type="text" name="name" placeholder="Enter Username" class="border-2 rounded-md p-1" value="<?= $username?>" required>
        <input type="text" name="password" placeholder="Enter Password" class="border-2 rounded-md p-1" value="<?= $password?>" required>
        <input type="gmail" name="gmail" placeholder="Enter G-mail" class="border-2 rounded-md p-1" value="<?= $gmail?>" required>
        <input type="number" name="number" placeholder="Enter number" class="border-2 rounded-md p-1" value="<?= $number?>" required>
        <input type="text" name="address" placeholder="Enter Address" class="border-2 rounded-md p-1" value="<?= $address?>" required>

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