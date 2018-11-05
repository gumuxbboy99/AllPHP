<?php
include("inner_header.php");
echo "<table border=2>";
  $conn = new mysqli("localhost","root","","noraphat");
  $r = $conn->query("select order_details.*, products.* from (order_details inner join products on order_details.productid = products.productid) 
  group by products.ProductName" );	
  $s = 0;
  while ($o = $r->fetch_object()) {
$s++;
    echo 
"<tr><td>".$s."</td><td>".$o->OrderID
."</td><td>".$o->ProductID
."</td><td>".$o->UnitPrice
."</td><td>". $o->Quantity
."</td><td>". $o->ProductName
."</td></tr>";
}
echo"</table>";
include("inner_footer.php");
?>