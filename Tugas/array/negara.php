<?php
echo "1. Output array dengan menggunakan peintah PRINT_R()";
echo "<br>";

$array = [
 'Indonesia','Malaysia','Singapura','Thailand','Filipina'];

echo '<pre>';
print_r($array);
echo "<br>";

echo "2. Output array assosiatif";
echo "<br>";
echo "<br>";
echo "<br>";

$kota = [
    "Indonesi" => "Jakarta",
    "Malaysi" => "Kuala Lumpur",
    "Singapura" => "Singapura",
    "Thailand" => "Bangkok",
    "Filipina" => "Manila"
];

foreach ($kota as $key => $variabel) {
    echo " <li>Ibukota ".$key. " adalah " .$variabel;
    echo "<br>";
    echo "<br>";
    
}

?>