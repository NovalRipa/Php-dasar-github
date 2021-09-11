<?php 
if(isset($_POST['submit'])){
    $nama= @$_POST['nama'];
    $nis= @$_POST['nis'];
    $pai= @$_POST['pai'];
    $pkn=@$_POST['pkn'];
    $mtk=@$_POST['mtk'];
    $indo=@$_POST['indo'];
    $ingg=@$_POST['binggris'];
    $kwu=@$_POST['kwu'];
    $alquran=@$_POST['alquran'];
    $bk=@$_POST['bk'];
    $rpl=@$_POST['rpl'];
    $tkj=@$_POST['tkj'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <style>
        body{
        background-image: url("bg.jpg");
        }
    </style>
</head>
<body>
    
    <center>
        <h2>Form Cetak Nilai Siswa<br></h2>

        <table align = 'center' class="table1" border = '1' cellspacing = '1' cellpadding = '10' 
    style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;' width = '435'>
            <?php
            for ($i = 0; $i < count($nama); $i++) {
            ?>
            <tr>
                <th colspan="4" align="left">
                <form method = 'POST' action = 'latihan7.php'>
                Nama :
                <?php echo $nama[$i]; ?><br>
                Nis :
                <?php echo $nis[$i]; ?>
                </th>
            </tr>

            <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
            </tr>

            <tr>
                <td align="center">1</td>
                <td align="left">Pendidikan Agama Islam</td>
                <td align="center">
                    <?php
                    if($pai[$i] > 85  && $pai[$i] <= 100 ){
                        echo 'A';
                        $bobot_pai[$i]=4;
                    }else if($pai[$i] > 70 && $pai[$i] <= 85 ){
                        echo 'B';
                        $bobot_pai[$i]=3;
                    }else if($pai[$i] > 60 && $pai[$i] <= 70 ){
                        echo 'C';
                        $bobot[$i]=2;
                    }else if($pai[$i] > 40 && $pai[$i] <= 60 ){
                        echo 'D';
                        $bobot_pai[$i]=1;
                    }else if($pai[$i] > 0 && $pai[$i] <= 40 ){
                        echo 'E';
                        $bobot_pai[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td align="center">2</td>
                <td align="left">PPKN</td>
                <td align="center">
                    <?php
                    if($pkn[$i] > 85  && $pkn[$i] <= 100 ){
                        echo 'A';
                        $bobot_pkn[$i]=4;
                    }else if($pkn[$i] > 70 && $pkn[$i] <= 85 ){
                        echo 'B';
                        $bobot_pkn[$i]=3;
                    }else if($pkn[$i] > 60 && $pkn[$i] <= 70 ){
                        echo 'C';
                        $bobot_pkn[$i]=2;
                    }else if($pkn[$i] > 40 && $pkn[$i] <= 60 ){
                        echo 'D';
                        $bobot_pkn[$i]=1;
                    }else if($pkn[$i] > 0 && $pkn[$i] <= 40 ){
                        echo 'E';
                        $bobot_pkn[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td align="center">3</td>
                <td align="left">Matematika</td>
                <td align="center">
                    <?php
                    if($mtk[$i] > 85  && $mtk[$i] <= 100 ){
                        echo 'A';
                        $bobot_mtk[$i]=4;
                    }else if($mtk[$i] > 70 && $mtk[$i] <= 85 ){
                        echo 'B';
                        $bobot_mtk[$i]=3;
                    }else if($mtk[$i] > 60 && $mtk[$i] <= 70 ){
                        echo 'C';
                        $bobot_mtk[$i]=2;
                    }else if($mtk[$i] > 40 && $mtk[$i] <= 60 ){
                        echo 'D';
                        $bobot_mtk[$i]=1;
                    }else if($mtk[$i] > 0 && $mtk[$i] <= 40 ){
                        echo 'E';
                        $bobot_mtk[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td align="center">4</td>
                <td align="left">Bahasa Indonesia</td>
                <td align="center">
                    <?php
                    if($indo[$i] > 85  && $indo[$i] <= 100 ){
                        echo 'A';
                        $bobot_indo[$i]=4;
                    }else if($indo[$i] > 70 && $indo[$i] <= 85 ){
                        echo 'B';
                        $bobot_indo[$i]=3;
                    }else if($indo[$i] > 60 && $indo[$i] <= 70 ){
                        echo 'C';
                        $bobot_indo[$i]=2;
                    }else if($indo[$i] > 40 && $indo[$i] <= 60 ){
                        echo 'D';
                        $bobot_indo[$i]=1;
                    }else if($indo[$i] > 0 && $indo[$i] <= 40 ){
                        echo 'E';
                        $bobot_indo[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td align="center">5</td>
                <td align="left">Bahasa Inggris</td>
                <td align="center">
                    <?php
                    if($ingg[$i] > 85  && $ingg[$i] <= 100 ){
                        echo 'A';
                        $bobot_ingg[$i]=4;
                    }else if($ingg[$i] > 70 && $ingg[$i] <= 85 ){
                        echo 'B';
                        $bobot_ingg[$i]=3;
                    }else if($ingg[$i] > 60 && $ingg[$i] <= 70 ){
                        echo 'C';
                        $bobot_ingg[$i]=2;
                    }else if($ingg[$i] > 40 && $ingg[$i] <= 60 ){
                        echo 'D';
                        $bobot_ingg[$i]=1;
                    }else if($ingg[$i] > 0 && $ingg[$i] <= 40 ){
                        echo 'E';
                        $bobot_ingg[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td align="center">6</td>
                <td align="left">Produk Kreatif dan Kewirausahaan </td>
                <td align="center">
                    <?php
                    if($kwu[$i] > 85  && $kwu[$i] <= 100 ){
                        echo 'A';
                        $bobot_kwu[$i]=4;
                    }else if($kwu[$i] > 70 && $kwu[$i] <= 85 ){
                        echo 'B';
                        $bobot_kwu[$i]=3;
                    }else if($kwu[$i] > 60 && $kwu[$i] <= 70 ){
                        echo 'C';
                        $bobot_kwu[$i]=2;
                    }else if($kwu[$i] > 40 && $kwu[$i] <= 60 ){
                        echo 'D';
                        $bobot_kwu[$i]=1;
                    }else if($kwu[$i] > 0 && $kwu[$i] <= 40 ){
                        echo 'E';
                        $bobot_kwu[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td align="center">7</td>
                <td align="left">Al-Quran</td>
                <td align="center">
                    <?php
                    if($alquran[$i] > 85  && $alquran[$i] <= 100 ){
                        echo 'A';
                        $bobot_alquran[$i]=4;
                    }else if($alquran[$i] > 70 && $alquran[$i] <= 85 ){
                        echo 'B';
                        $bobot_alquran[$i]=3;
                    }else if($alquran[$i] > 60 && $alquran[$i] <= 70 ){
                        echo 'C';
                        $bobot_alquran[$i]=2;
                    }else if($alquran[$i] > 40 && $alquran[$i] <= 60 ){
                        echo 'D';
                        $bobot_alquran[$i]=1;
                    }else if($alquran[$i] > 0 && $alquran[$i] <= 40 ){
                        echo 'E';
                        $bobot_alquran[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td align="center">8</td>
                <td align="left">Bimbingan Konseling</td>
                <td align="center">
                    <?php
                    if($bk[$i] > 85  && $bk[$i] <= 100 ){
                        echo 'A';
                        $bobot_bk[$i]=4;
                    }else if($bk[$i] > 70 && $bk[$i] <= 85 ){
                        echo 'B';
                        $bobot_bk[$i]=3;
                    }else if($bk[$i] > 60 && $bk[$i] <= 70 ){
                        echo 'C';
                        $bobot_bk[$i]=2;
                    }else if($bk[$i] > 40 && $bk[$i] <= 60 ){
                        echo 'D';
                        $bobot_bk[$i]=1;
                    }else if($bk[$i] > 0 && $bk[$i] <= 40 ){
                        echo 'E';
                        $bobot_bk[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td align="center">9</td>
                <td align="left">Produktif RPL</td>
                <td align="center">
                    <?php
                    if($rpl[$i] > 85  && $rpl[$i] <= 100 ){
                        echo 'A';
                        $bobot_rpl[$i]=4;
                    }else if($rpl[$i] > 70 && $rpl[$i] <= 85 ){
                        echo 'B';
                        $bobot_rpl[$i]=3;
                    }else if($rpl[$i] > 60 && $rpl[$i] <= 70 ){
                        echo 'C';
                        $bobot_rpl[$i]=2;
                    }else if($rpl[$i] > 40 && $rpl[$i] <= 60 ){
                        echo 'D';
                        $bobot_rpl[$i]=1;
                    }else if($rpl[$i] > 0 && $rpl[$i] <= 40 ){
                        echo 'E';
                        $bobot_rpl[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td align="center">10</td>
                <td align="left">Produktif TKJ</td>
                <td align="center">
                    <?php
                    if($tkj[$i] > 85  && $tkj[$i] <= 100 ){
                        echo 'A';
                        $bobot_tkj[$i]=4;
                    }else if($tkj[$i] > 70 && $tkj[$i] <= 85 ){
                        echo 'B';
                        $bobot_tkj[$i]=3;
                    }else if($tkj[$i] > 60 && $rpl[$i] <= 70 ){
                        echo 'C';
                        $bobot_tkj[$i]=2;
                    }else if($tkj[$i] > 40 && $tkj[$i] <= 60 ){
                        echo 'D';
                        $bobot_tkj[$i]=1;
                    }else if($tkj[$i] > 0 && $tkj[$i] <= 40 ){
                        echo 'E';
                        $bobot_tkj[$i]=0;
                    }else{
                        echo "Nilai Tidak Ada";
                    }
                    ?>
                </td>
            </tr>
           
           
            

            <tr>
                <td colspan="3" align="center" cellpadding="4">
                    <?php
                    $ratarata = ( $bobot_pai[$i] + $bobot_pkn[$i] +$bobot_mtk[$i] + $bobot_indo[$i] 
                     + $bobot_ingg[$i] + $bobot_kwu[$i] + $bobot_alquran[$i] + $bobot_bk[$i] 
                     + $bobot_rpl[$i] + $bobot_tkj[$i]) / 10;
                    echo "Nilai Rata-Ratanya Adalah = $ratarata";
                    ?>
                    <?php
            }
            ?> 
             </table>
             <a href="cetak.php">Kembali</a>
             
</body>   
</html>