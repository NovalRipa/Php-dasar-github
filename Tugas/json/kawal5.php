<?php

    $url = "https://api.kawalcorona.com/sembuh/";
    // persiapkan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $vid = curl_exec($ch);
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
    <title>Sembuh</title>
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
        <legend>Data Sembuh</legend>
        <table border=1>
            <tr>
                <th colspan=2>Sembuh</th>           
            </tr>
            <?php
$data = json_decode($vid);
    ?>
            <tr>
                <td><?php echo $data->name; ?></td>
                <td><?php echo $data->value; ?></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>