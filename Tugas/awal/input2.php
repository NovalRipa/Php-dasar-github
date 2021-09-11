<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title</title>
</head>
<body>
    <h1>Input Bilangan</h1>
    <form method="post" action="">
        Masukkan Banyaknya Bilangan <input type="text" name="n" />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    echo "<br>";
    $n = $_POST['n'];
    echo "<form method='post' action='proses.php'>";
    for ($i = 0; $i <= $n-1; $i++)
    {
        echo "Bil ke-".($i+1)." <input type='text' name='data".$i."' /><br>";
    }
    echo "<input type='submit' name='submit' value='Submit' />";
    echo "<input type='hidden' name='n' value='".$n."' />";
    echo "</form>";
?>

</body>
<br>
    <br>
    <br>
    <br>
    <center><a href="1.php">Ripa Noval Kh</a></center>
    
</html>