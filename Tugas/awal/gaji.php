<?php 

$gaji = 2000000;
$pajak = ($gaji-($gaji *(10/100)));

echo "<br>Gaji : $gaji  ";
echo "<br>Potongan 10%  ";
echo "<br>Gaji Ahmad  = $pajak";

$alas = 10;
$luas = 30;
$a = 2;

$b = $a * $alas + $luas ;

echo "<br><br> Menghitung luas tabung ";
echo "<br> Rumus L = 2 x luas alas + luas selimut tabung";
echo "<br> luas alas : 10 ";
echo "<br> luas selimut : 30 ";

$phi = 3.14 ;
$r = 8;
$t = 12;
$a = 0.3;

$d = $a * $phi * $r * $r * $t;

echo "<br><br>Mengitung volume kerucut ";
echo "<br>Rumus volume = 1/3 x phi.r2.t ";
echo "<br>R : 8 ";
echo "<br>T : 12 ";
echo "<br>Hasil volume kerucut : $d";

$p = 7;
$l = 15;
$t = 25;
$a = 1/2;

$b = $a * ($p * $l * $t);

echo "<br><br> Mengitung volume prisma ";
echo "<br> Rumus volume prisma = 1/2 x (pajang x lebar x tinggi)";
echo "<br> Panjang : $p ";
echo "<br> Lebar : $l ";
echo "<br> tinggi : $t ";
echo "<br> Hasil Volume prisma : $b";

?>