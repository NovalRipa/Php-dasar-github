<?php

    $url = "https://api.kawalcorona.com/";
    // persiapkan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $dataCovid = curl_exec($ch);
    // tutup curl
    curl_close($ch);
    // menampilkan hasil curl
    // echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Global</title>
</head>
<body>
    <center>
        <nav>
            <a href="kawal.php">Data Covid</a> |            
            <a href="kawal2.php">Data Covid Provinsi</a> |
            <a href="kawal3.php">Data Indonesia</a> |
            <a href="kawal4.php">Data Positif</a> |
            <a href="kawal5.php">Data Sembuh</a> |
            <a href="kawal6.php">Data Meninggal</a> |
        </nav>
    </center>
    <fieldset>
        <legend>Data Covid Global</legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Negara</th>
                <th>Positif</th>
                <th>Meninggal</th>
                <th>Sembuh</th>
            </tr>
            <?php
$no = 1;
$data = json_decode($dataCovid);
foreach ($data as $covid) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $covid->attributes->Country_Region; ?></td>
                <td><?php echo $covid->attributes->Confirmed; ?></td>
                <td><?php echo $covid->attributes->Deaths; ?></td>
                <td><?php echo $covid->attributes->Recovered; ?></td>
            </tr>
            <?php
}?>
        </table>
    </fieldset>
</body>
</html>