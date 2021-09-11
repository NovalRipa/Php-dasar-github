<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title</title>
</head>
<body>
    <fieldset>
        <legend>Fungsi Input Biodata</legend>
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td><td>:</td>
                <td>
                    <input type="radio" name="jk" value="laki">Laki-Laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td><td>:</td>
                <td>
                    <input type="date" name="tl" id="lahir">
                </td>
            </tr>

            <tr>
                <td>Agama</td><td>:</td>
                <td><select name="agama">
                    <option value="">Pilih Agama</option>
                    <option value="Islam" name="agama">Islam</option>
                    <option value="Hindu" name="agama">Hindu</option>
                    <option value="Kristen" name="agama">Kristen</option>
                    <option value="Buddha" name="agama">Buddha</option>
                    <option value="Khonghucu" name="agama">Khonghucu</option>
                </select></td>
            </tr>

            <tr>
                <td>Alamat</td><td>:</td>
                <td>
                    <textarea name="alamat"  cols="30" rows="10"></textarea>
                </td>
            </tr>

            <tr>
                <td>Hobi</td><td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Futsal">Futsal
                    <input type="checkbox" name="hobi[]" value="Mancing">Mancing
                    <input type="checkbox" name="hobi[]" value="Berenang">Berenang
                    <input type="checkbox" name="hobi[]" value="Membaca">Membaca
                    <input type="checkbox" name="hobi[]" value="Bernyayi">Bernyayi
                    <input type="checkbox" name="hobi[]" value="Game">Game
                </td>
            </tr>

            <tr>
                <td></td><td></td><td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>


<br>
<html>
    <table>
        <?php

        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $tl = $_POST['tl'];
            $jk = $_POST['jk'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];
            $hobi = $_POST['hobi'];
        ?>

        <?php function biodata($nama,$jk,$tl,$agama,$alamat,$hobi){ ?>
            <tr>
                <td></td><td><?php $biodata .= "Nama : " .$nama. "<br>"; ?></td>
                <td></td><td><?php $biodata .= "Jenis Kelamin : " .$jk. "<br>"; ?></td>
                <td></td><td><?php $biodata .= "Tanggal Lahir : " .$tl. "<br>"; ?></td>
                <td></td><td><?php $biodata .= "Agama : " .$agama. "<br>"; ?></td>
                <td></td><td><?php $biodata .= "Alamat : " .$alamat. "<br>";?></td>
                <td></td><td><?php $biodata .= "Hobi : " .implode(", ", $hobi)?></td>
            </tr>
            <?php return $biodata;
            }
            echo biodata($nama,$jk,$tl,$agama,$alamat,$hobi);
        }
            ?>
    </table>
</html>