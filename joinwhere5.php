<?php
include("inner_header.php");
echo "<table border=2>";
  $conn = new mysqli("localhost","root","","noraphat");
  $r = $conn->query("select products.*, categories.* from (products inner join categories on products.categoryid = categories.categoryid)
	group by categories.CategoryName");	
  $s = 0;
  while ($o = $r->fetch_object()) {
$s++;
    echo 
"<tr><td>".$s."</td><td>".$o->ProductID
."</td><td>".$o->ProductName
."</td><td>". $o->CategoryID
."</td><td>". $o->CategoryName
."</td><td>". $o->Description
."</td></tr>";
}
echo"</table>";
include("inner_footer.php");
?>