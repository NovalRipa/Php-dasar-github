<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title</title>
</head>
<body>
    <fieldset>
    <legend>Fungsi Perhitungan Luas & Keliling</legend>
    <form method="post" action="">
        Masukkan Jari-Jari <input type="text" name="jari" />
        <br>
        <input type="submit" name="simpan" value="hasil" />
    </form>
</fieldset>
</body>    
</html>
<?php
        if(isset($_POST['simpan'])){
            function luaslingkaran($jari, $phi="3.14"){
                $jari **= 2;
                $luas = $jari * $phi;
                return $luas;
            }
            function kellingkaran($jari, $phi="3.14"){
                $kel = ($jari * $phi) * 2;
                return $kel;
            }
            echo "Jari-Jari = ";
            echo $_POST['jari'];
            echo "<br>";
            echo "Luas Lingkaran = ";
            echo luaslingkaran($_POST['jari']);
            echo "<br>";
            echo "keliling Lingkaran = ";
            echo kellingkaran($_POST['jari']);
        }
        ?>