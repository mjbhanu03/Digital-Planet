<?php

$logo = "../../images/mj.png";
$icon = "../../images/mj.png";
$home = "../index.php";
$logout_path = "../../Backend/destroy.php";


include('../Html_admin/htmls.php');
include('../Connection_admin/connection.php');
$sql = "SELECT * FROM `users`"; 
  
$result = $con->query($sql);

?>

<table  class="flex justify-center items-center mt-4" >
    <tr >    
        <th style="border: 2px solid black;padding:10px;">Id</th>
        <th style="border: 2px solid black;padding:10px;">username</th>
        <th style="border: 2px solid black;padding:10px;">G-mail</th>
        <th style="border: 2px solid black;padding:10px;">Address</th>
        <th style="border: 2px solid black;padding:10px;">Number</th>
    </tr>
<?php
  if ($result->num_rows > 0) :
    // output data of each row
    while($row = $result->fetch_assoc()) :

?>
    <tr >
        <td style="border: 1px solid black;padding:10px; " class="font-bold"><?= $row["id"]?></td>
        <td style="border: 1px solid black;padding:10px; "><?= $row['u_username']?> </td>
        <td style="border: 1px solid black;padding:10px; "><?= $row['u_gmail']?></td>
        <td style="border: 1px solid black;padding:10px; "><?=  $row['u_address']?> </td>
        <td style="border: 1px solid black;padding:10px; " ><?= $row['u_number']?></td>
        <td style="border: 1px solid black;padding:10px; " class="bg-blue-600 text-white "><a href="../Backend_admin/updateusers.php?url=<?= $row["id"]?>">Edit</a></td>
        <td style="border: 1px solid black;padding:10px; " class="bg-red-600 text-white"><a href="../Backend_admin/deleteusers.php?url=<?= $row["id"]?>">Delete</a></td>
    </tr>
    <?php
    endwhile;
endif;

?>

</table>
<a href="../index.php" class="p-2 bg-red-500 text-white  rounded-md px-4 hover:bg-red-400">Cancel</a>
<?php
include('../Html_admin/htmle.php');
?>