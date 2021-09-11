<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <header>
        <h1>KONSER AMAL ASSALAAM BAHAGIA</h1>
    </header>
    <hr>

    <table width=250>


        <?php

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jumlah_tiket = $_POST['jumlah_tiket'];
    
        $kode = $_POST['kode'];
        if($kode == "studio1"){
                $bintang = "Opik";
        } else {
                $bintang = "Raihan";
        }

        $kelas = $_POST['kelas'];
        if ($kelas == 'VIP') {
                $harga = 50000;
        } else {
                $harga = 25000;
        }

        $total = $harga * $jumlah_tiket;
    

    echo "<tr>";
            echo "<td>Nama</td>
            <td>:</td>
            <td>$nama</td>";
    echo "<tr>";
    echo "<tr>";
            echo "<td>Kode Studio</td>
            <td>:</td>
            <td>$kode</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Bintang Tamu</td>
            <td>:</td>
            <td>$bintang</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Kelas Studio</td>
            <td>:</td>
            <td>$kelas</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Harga Tiket</td>
            <td>:</td>
            <td>$harga</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Jumlah Tiket</td>
            <td>:</td>
            <td>$jumlah_tiket</td>";
    echo "</tr>";
    echo "<tr>";
            echo "<td>Total</td>
            <td>:</td>
            <td>$total</td>";
    echo "</tr>";
    
        }
        ?>
  </table>

    <h3><a href="konser.php">INPUT KEMBALI</a></h3>
    
    </body>
</html>