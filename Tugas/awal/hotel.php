<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<body>
    <h2><center>Pemesan Kamar Hotel </center></h2>
    <hr>
    <form action="hotel2.php" method="POST">
    <table>
    <tr>
    <td>Tanggal Pemesan </td>
    <td>:</td>
    <td><input type="date" name="tanggal"></td>
    </tr>

    <tr>
    <td>Nama Tamu </td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
    </tr>

    <tr>
    <td>No Indetitas</td>
    <td>:</td>
    <td><input type="text" name="no"></td>
    </tr>

    <tr>
    <td>Jenis Kamar</td>
    <td>:</td>
    <td><select name="jenis">
    <option value="Superior">Superior</option>
    <option value="Deluxe">Deluxe </option>
    <option value="Junior">Junior Suite</option>
    </select></td>
    </tr>

    <tr>
    <td>Durasi Penginapan </td>
    <td>:</td>
    <td><input type="text" name="dura"></td>
    </tr>

    <tr>
    <td></td>
    <td></td>
    <td>
    <input type="Submit" name="input" value="Tampil">
    <input type="Submit" name="reset" value="Batal">
    </td>
    </tr>
    </table>
    
    </form>

    <br>
    <br>
    <br>
    <br>
    <center><a href="1.php">Ripa Noval Kh</a></center>
    
</body>
</html>

