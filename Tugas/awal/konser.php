<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>KONSER AMAL ASSLAAM BAHAGIA</h1>
    <hr>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Pemesan</td><td>:</td><td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kode Studio</td><td>:</td>
                <td><select name="kode">
                    <option value="studio1" name="studio1">Studio 1</option>
                    <option value="studio2" name="studio2">Studio 2</option>
                </select></td>
            </tr>
            <tr>
                <td>Jenis Kelas</td><td>:</td>
                <td>
                    <input type="radio" name="kelas" value="VIP">VIP
                    <input type="radio" name="kelas" value="FESTIVAL">FESTIVAL
                </td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td><td>:</td><td><input type="text" name="jumlah_tiket" required></td>
            </tr>
            <tr>
                <td></td><td></td><td><input type="submit" name="simpan" value="Tampil">
            <input type="reset" name="reset" value="Batal"></td>
            </tr>

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
    </form>
    <br>
    <br>
    <br>
    <br>
    <center><a href="1.php">Ripa Noval Kh</a></center>
    
</body>
</html>