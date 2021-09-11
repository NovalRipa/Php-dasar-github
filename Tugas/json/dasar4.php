<?php

$listMahasiswaJSON = '[
    { "nama" : "Ripa Noval" },
    { "nama" : "Renza Risqi" },
    { "nama" : "Taufin Aji" },
    { "nama" : "Rahmad Dwi" }
]';

$listMahasiswaJSON = json_decode($listMahasiswaJSON);

foreach ($listMahasiswaJSON as $key => $mahasiswa){
    echo "{key}. Nama : {$mahasiswa->nama} <br>";
}

?>