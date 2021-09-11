<?php
$perusahaan = [
    'Nama' => 'Ripa Noval',
    'Umur' => '17 Thn',
    'Alanat' => 'jalan',
    'Hobi' => ['bobo' , 'ppp' ,'kkk'],
    'Media Sosial' => ['Instagram' => 'Ripa Noval' , 'Facebook' => 'Ripa']
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Memanggil array 2 dimesi" . "<br>";
echo "<br>";
echo $perusahaan ['Hobi'] [2];
echo "<br>";
echo $perusahaan ['Media Sosial'] ['Instagram'];

?>