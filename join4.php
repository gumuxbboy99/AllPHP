<?php
include("inner_header.php");
echo "<table border=2>";
  $conn = new mysqli("localhost","root","","noraphat");
  $r = $conn->query("select products.*, suppliers.* from (products inner join suppliers on products.supplierid = suppliers.supplierid)");	
  $s = 0;
  while ($o = $r->fetch_object()) {
$s++;
    echo 
"<tr><td>".$s."</td><td>".$o->SupplierID
."</td><td>".$o->CompanyName
."</td><td>".$o->ContactName
."</td><td>". $o->ProductName
."</td><td>". $o->QuantityPerUnit
."</td><td>". $o->UnitPrice
."</td><td>". $o->UnitsInStock
."</td><td>". $o->Discontinued
."</td></tr>";
}
echo"</table>";
include("inner_footer.php");
?>