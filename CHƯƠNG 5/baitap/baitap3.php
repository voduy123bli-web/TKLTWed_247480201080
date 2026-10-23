<?php 
do{
$x=rand(1,1000);
$y=rand(1,1000);
    }
while ($x <= $y);

$tong =$x + $y;
$tru =$x - $y;
$tich =$x * $y;
$thuong =$x / $y;
$du = $x%$y;


echo "<br>$x + $y =" . $tong;
echo "<br>$x - $y =" . $tru;
echo "<br>$x * $y =" . $tich;
echo "<br>$x / $y =" . $thuong;
echo "<br>$x % $y = ".$du;


?>