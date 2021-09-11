<?php

echo "1. Pengulangan For <br>";
echo "<br>";

for ($i = 0 ; $i <= 5; $i++){
    echo " Ini Perulangan ke - $i <br>";
}

echo "<br>";
echo "2. Pengulangan while <br>";
echo "<br>";

$ulangi = 0;
while ($ulangi <= 5) {
    echo " Ini Perulangan ke - $ulangi <br>";
    $ulangi++;
}

echo "<br>";
echo "3. Pengulangan do-while <br>";
echo "<br>";

$ulangi = 1;
do{
    echo " Ini Perulangan ke - $ulangi <br>";
    $ulangi++;
}while ($ulangi < 10);


echo "<br>";
echo "4. Pengulangan Foreach <br>";
echo "<br>";

$books = [
    "Panduanan belajar java untuk pemula",
    "Membangun Aplikasi  Java dengan Netbean",
    "TUtorial Java dan Mysql",
    "Membuat Penggajian Destop dengan Java ",
    "Ripa Noval Kh"
];

echo "<h5> Judul Buku Java </h5>";
echo "<ol>";
foreach ($books as $buku ){
    echo "<li> $buku </li>";
}
echo "<o/>";

?>