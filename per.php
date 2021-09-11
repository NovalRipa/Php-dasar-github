<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form sederhana</title>
</head>
<body>
    <h2>Form sederhana</h2>
    <form action="" method="POST">
    <table>
    <tr>
    <td>Nama </td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
    </tr>
    <tr>
    <td>Umur </td>
    <td>:</td>
    <td><input type="text" name="umur"></td>
    </tr>
    <tr>
    <td>Alamat </td>
    <td>:</td>
    <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="Submit" name="simpan" value="Kirim"></td>
    </tr>
    </form>
    </table>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>KONSER AMAL ASSALAM BAHAGIA</h2>
    <hr>
    <form action="konser2.php" method="POST" name = "input">
    <table>
    <tr>
    <td>Nama Pemesan</td>
    <td>:</td>
    <td><?php echo $_POST ["nama"]?></td>
    </tr>
    <tr>
    <td>Kode Studio </td>
    <td>:</td>
    <td><?php echo $_POST ["kode"]?></td>
    </tr>
    <tr>
    <td>Bintang Tamu</td>
    <td>:</td>
    <td><?php
    $kode = $_POST['kode'];
    if ($kode == "studio 1"){
        echo "Opick ";
    }else {
        echo "Raihan ";
    }
    
    ?></td>
    </tr>
    <tr>
    <td>Jenis Kelas</td>
    <td>:</td>
    <td><?php echo $_POST ["qyt"]?></td>
    </tr>
    <td>Harga </td>
    <td>:</td>
    <td><?php
    $jenis = $_POST ["qyt"];
    if ($jenis == "VIP"){
        echo "50000";
        $harga = 50000;
    }elseif ($jenis == "FESTIVAL"){
        echo "25000";
        $harga = 25000;
    }
    ?></td>
    </tr>
    </table>
    
    </form>
</body>
</html>


<?php

echo "<h2>KONSER AMAL ASSALAM BAHAGIA</h2><hr>";

if (isset($_POST ['input'])){
     $harga = 25000;
    $harga = 50000;
    $nama = $_POST ['nama'];
    $jenis = $_POST ['jenis'];
    if (isset($_POST['qty'])){
        $k = $_POST['qty'];
    }
    if($jenis == "Opick" && $k == "studio 1"){
        $harga = 25000;
    }elseif ($jenis == "Opick" && $k == "studio 2"){
        $harga = 50000;
    }elseif ($jenis == "Raihan" && $k == "studio 1"){
        $harga = 25000;
    }elseif ($jenis == "Raihan" && $k == "studio 2"){
        $harga = 50000;
    }
    $jumlah = $_POST ['jumlah'];
    $total = ($jumlah*$harga);

    if ($jumlah > 15){
        $diskon = (($total *20)/100);
    }else {
        
    }
   

    echo "Nama Pemesan : $nama <br>";
    echo "Nama Studio : $k <br>";
    echo "Harga Tiket : $harga <br>";
    echo "Jumlah Tiket : $jumlah <br>";
    echo "Total Biaya : $total <br>";

    
}


?>
