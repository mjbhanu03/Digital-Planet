<?php
$logo = "../../images/mj.png";
$icon = "../../images/mj.png";
$home = "../index.php";
$logout_path = "../../Backend/destroy.php";

include('../Html_admin/htmls.php');
include('../Connection_admin/connection.php');

$sql = "SELECT * FROM `categories`";
$connect = mysqli_query($con, $sql);
?>

<h1 class="text-2xl font-bold flex justify-center my-3">View Categories</h1>

<table class="flex justify-center items-center mt-4">
    <tr>
        <th style="border: 2px solid black;padding:10px;">Id</th>
        <th style="border: 2px solid black;padding:10px;">Name</th>
    </tr>

    <?php
    if ($connect->num_rows > 0) {
        while ($row = $connect->fetch_assoc()) {
    ?>
            <tr>
                <td style="border: 1px solid black;padding:10px; " class="font-bold"><?= $row["cg_id"] ?></td>
                <td style="border: 1px solid black;padding:10px; "><?= $row['cg_name'] ?> </td>
                <td style="border: 1px solid black;padding:10px; " class="bg-red-600 text-white"><a href="../Backend_admin/deletecategory.php?url=<?= $row['cg_id']?>">Delete</a></td>
        
            </tr>
        
    <?php
        }
    }
    ?>
</table>
<a href="../index.php" class="p-2 bg-red-600 text-white rounded-full px-4 hover:bg-red-400">Cancel</a>

    <?php
    include('../Html_admin/htmle.php');
    ?>