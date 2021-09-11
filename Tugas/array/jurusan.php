<?php
$data= array("jurusan1"=>"Teknik Informatika"
,"jurusan2"=>"Sistem Informasi"
,"jurusan3"=>"Teknik Komputer",
"jurusan4"=>"Manajemen Informatika");

foreach($data as $index => $nilai) {
    echo "Kata kunci Index=  " . $index . ", Nilai = " . $nilai;
    echo "<br>";
}

// $jurusan = [
   // "Teknik Informatika" ,
    //"Sistem Informasi",
    //"Teknik Komputer",
   // "Manajemen Informatika",
//];

//foreach ($jurusan as $kejuruan => $jurus) {
  //  echo $jurus .' - '. "ada di index " .$kejuruan ;
    //echo "<br>";
//}

// pilihan lain 

// $jurusan = array("Teknik Informatika", "Sistem Informasi", "Teknik Komputer", "Manajemen Informatika");
// $jumlah_array = count($jurusan);
// for($i = 0; $i < $jumlah_array ; $i++) {
    // echo "Jurusan ".$jurusan[$i]." - ada di index $i";
    // echo "<br>";
// }
?>

