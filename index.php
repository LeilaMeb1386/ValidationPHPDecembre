<?php
require_once('./functions/db.php');
require_once('./templates/header.html');
$products=getAllProducts();
 ?>
 <table>
 <tr>
   <th>nameProd</th>
   <th>quantity</th>
   <th>disponibility</th>
   <th>name</th>
 </tr>
 <?php
 foreach ($products as $key => $value) {
   $tr = "<tr>";
   $tr .= "<td>" . $value['nameProd'] . "</td>";
   $tr .= "<td>" . $value['quantity'] . "</td>";
   $tr .= "<td>" . $value['disponibility'] . "</td>";
    $tr .= "<td>" . $value['name'] . "</td>";

   $tr .= "</tr>";
      echo $tr;

 }
 ?>

</table>
 <?php
 require_once('./templates/footer.html');
  ?>
