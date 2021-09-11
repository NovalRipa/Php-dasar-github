<?php

echo "<h3>3. Menghitung Diskon PPDB<br></h3>";

$gaji = 8000000;
$mei = ($gaji-($gaji *(30/100)));
$juni = ($gaji-($gaji *(20/100)));
$juli = ($gaji-($gaji *(10/100)));

echo "<br>Uang : $gaji  ";
echo "<br>Potongan 30%  ";
echo "<br>Bayar  = $mei </br>";

echo "<br>Uang : $gaji  ";
echo "<br>Potongan 20%  ";
echo "<br>Bayar  = $juni </br>";

echo "<br>Uang : $gaji  ";
echo "<br>Potongan 10%  ";
echo "<br>Bayar  = $juli";

?>