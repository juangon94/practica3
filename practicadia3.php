<?php
$total =$_GET["total"];
$iva = 19; //19%
$re = 11;  //11%
$iva=$total*$iva/100;
$re=$total*$re/100;
$total1 =$iva;
$total2 =$re;
$total3 =$total1 + $total2 +$total;
echo "IVA: $total1";
echo "<br>";
echo "RE: $total2";
echo "<br>";
echo "TOTAL: $total3";
echo "<br>";
?>