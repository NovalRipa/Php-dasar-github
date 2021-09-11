<?php 

$json  = '{
    "nama" : "Ripa Noval",
    "domisili" : "Bandung",
    "Usia" : 17,
    "wni" : true,
    "hobi" : [
        " Berenang "," Berlari "," Bertamasya "
        ]
}';

$mahasiswa = json_decode($json);

echo "Nama : {$mahasiswa->nama} <br>";
echo "Domisili : {$mahasiswa->domisili} <br>";

echo "Hobi :" .implode(", " , $mahasiswa->hobi);


?>