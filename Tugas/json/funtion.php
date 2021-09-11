
<?php

echo "<b>Contoh 1.</b>";
echo "<br>";
echo "<br>";


// mmbuat fungsi
function perkenalan(){
  echo "Assalamulaikmu, ";
  echo "Perkenalkan, nama saya Ardianta<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan();

echo '<br>';
// memanggilnya lagi
perkenalan();

echo "<hr>";


echo "<b>Fungsi dengan Parameter</b>";
echo "<br>";
echo "<br>";

// mmbuat fungsi
function per($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
per("Muhardian", "Hi");

  $saya = "Indry";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  per($saya, $ucapanSalam);
  echo "<br>";
echo "<hr>";

echo "<b>Fungsi yang Megembalikan Nilai</b>";
echo "<br>";
echo "<br>";

// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

echo "Umur saya adalah ". hitungUmur(2003, 2021) ." tahun";

echo "<hr>";

echo "<b>Memangil Fungsi di dalam Fungsi</b>";
echo "<br>";
echo "<br>";


// membuat fungsi
function hitung($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function lan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  // memanggil fungsi lain
  echo "Saya berusia ". hitung(2003 , 2021) ." tahun<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}


// memanggil fungsi perkenalan
lan("Ripa Noval Kh");
echo "<br>";
echo "<hr>";

echo "<b>Fungsi rekursif</b>";
echo "<br>";
echo "<br>";

function faktor($angka) {
  if ($angka < 2) {
    return 1;
  } else {
  // memanggil dirinya sendiri
  return ($angka * faktor($angka-1));
  }
}

// memanggil fungsi
echo "faktorial 5 adalah " . faktor(5);

echo '<hr>';

?>