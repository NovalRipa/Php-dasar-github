
<?php

echo "<h3>1. Grade penilaian<br></h3>";
$nilai = 1000 ;
if ($nilai <= 100  && $nilai >= 90){
    echo "Grade A <br> ";
    echo "sangat baik ";
}
elseif ($nilai <= 89  && $nilai >= 70){
    echo "Grade B <br>";
    echo "Baik ";
}
elseif ($nilai <= 69  && $nilai >= 55){
    echo "Grade C <br>";
    echo "kurang";
}
else {
    echo " Grade E <br>";
    echo " Nilai tidak ada";
}


?>