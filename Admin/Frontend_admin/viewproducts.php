<?php

$logo = "../../images/mj.png";
$icon = "../../images/mj.png";
$home = "../index.php";
$logout_path = "../../Backend/destroy.php";

include('../Html_admin/htmls.php');
include('../Connection_admin/connection.php');
$sql = "SELECT * FROM `products`";
$result = $con->query($sql);

?>
    <h1 class="text-2xl font-bold flex justify-center my-3">View Products</h1>

<table class="flex justify-center items-center mt-4">
    <tr>
        <th style="border: 2px solid black;padding:10px;">Id</th>
        <th style="border: 2px solid black;padding:10px;">Image</th>
        <th style="border: 2px solid black;padding:10px;">Name</th>
        <th style="border: 2px solid black;padding:10px;">Description</th>
        <th style="border: 2px solid black;padding:10px;">Price</th>
    </tr>
    <?php
    if ($result->num_rows > 0) :
        // output data of each row
        while ($row = $result->fetch_assoc()) :
            
            ?>
            <tr>
                <td style="border: 1px solid black;padding:10px; " class="font-bold"><?= $row["p_id"] ?></td>
                <td style="border: 1px solid black;padding:10px; "><?= $row['p_image'] ?> </td>
                <td style="border: 1px solid black;padding:10px; "><?= $row['p_name'] ?></td>
                <td style="border: 1px solid black;padding:10px; "><?= substr($row['p_desc'], 0, 10) ?>.... </td>
                <td style="border: 1px solid black;padding:10px; " class="font-bold"><?= $row['p_price'] ?>/-</td>
                <td style="border: 1px solid black;padding:10px; " class="bg-blue-600 text-white "><a href="../Backend_admin/updateproducts.php?url=<?= $row['p_id']?>">Edit</a></td>
                <td style="border: 1px solid black;padding:10px; " class="bg-red-600 text-white"><a href="../Backend_admin/deleteproducts.php?url=<?= $row['p_id']?>">Delete</a></td>
            </tr>
    <?php
        endwhile;
    endif;
    ?>

</table>
<a href="../index.php" class="p-2 bg-red-600 text-white rounded-full px-4 hover:bg-red-400">Cancel</a>
<?php
include('../Html_admin/htmle.php');
?>