<?php
include("inner_header.php");
echo "<table border=2>";
  $conn = new mysqli("localhost","root","","noraphat");
  $r = $conn->query("select order_details.*, orders.* from (order_details inner join orders on order_details.orderid = orders.orderid)
  group by orders.employeeid");	
  $s = 0;
  while ($o = $r->fetch_object()) {
$s++;
    echo 
"<tr><td>".$s."</td><td>".$o->OrderID
."</td><td>".$o->ProductID
."</td><td>".$o->CustomerID
."</td><td>". $o->EmployeeID
."</td><td>". $o->UnitPrice
."</td><td>". $o->Quantity
."</td><td>". $o->Discount
."</td></tr>";
}
echo"</table>";
include("inner_footer.php");
?>