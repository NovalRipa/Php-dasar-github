
<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<h2><center>Pemesan Kamar Hotel </center></h2>
    <hr>
    
    <?php
if (isset($_POST ['input'])){
    $nama = $_POST ['nama'];
    $Superior = 850000;
    $Deluxe = 950000;
    $Junior = 1400000;
    $tanggal ;
    $no;
    $dura;
    $total;

    $jenis = $_POST ['jenis'];
    if($jenis == "Superior"){
        $harga = 850000;
    } else {
        
    }
    
    $jenis = $_POST ['jenis'];
    if($jenis == "Deluxe"){
        $harga = 950000;
    } else {
        
    }
    $jenis = $_POST ['jenis'];
    if($jenis == "Junior"){
        $harga = 1400000;
    } else {
        
    }
    $total = $harga * $nama ;

    echo "<td>Tanggal Pemesan </td>
    <td>:$tanggal<br></td>
    <td></td>
    </tr>";

    echo "<tr>
    <td>Nama Tamu </td>
    <td>:$nama<br></td>
    <td></td>
    </tr>";

    echo "<tr>
    <td>No indetitas</td>
    <td>:$no<br></td>
    <td></td>
    </tr>";

    echo "<tr>
    <td>Jenis Kamar</td>
    <td>: $jenis<br></td>
    <td></td>
    </tr>";

    echo "
    <td>Durasi Penginapan </td>
    <td>:$dura<br></td>
    <td></td>
    </tr>";

}


?>
    
    <h3><a href="hotel.php">INPUT KEMBALI</a></h3>

</body>
</html>