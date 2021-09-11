<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Hasil Rata-rata Bilangan</h1>
    <?php
    $n = $_POST['n'];
    for ($i=0; $i <= $n - 1; $i++)
    {
        $bilangan[$i] = $_POST['data'.$i];
    }
    $jumlah = 0;
    for ($i=0; $i <= $n - 1; $i++)
    {
        $jumlah += $bilangan[$i];
    }
    $rataRata = $jumlah/$n;
    for ($i=0; $i <= $n - 1; $i++)
    {
        echo "Bilangan ke-".($i+1)." =".$bilangan[$i]."<br>";
    }
    echo "<br>Rata-ratanya adalah : ".$rataRata;
?>
</body>
<br>
    <br>
    <br>
    <br>
    <center><a href="1.php">Ripa Noval Kh</a></center>
    
</html>