<?php
    
    $bil1 = @$_POST['bil1'];
    $bil2 = @$_POST['bil2'];
    $hasil = @$_POST['hasil'];
    //jika tombol + di klik
    if(isset($_POST['tambah']))
    {
        $hasil = $bil1 + $bil2;
    }
    //jika tombol - di klik
    if(isset($_POST['kurang']))
    {
        $hasil = $bil1 - $bil2;
    }
    //jika tombol * di klik
    if(isset($_POST['kali']))
    {
        $hasil = $bil1 * $bil2;
    }
    //jika tombol / di klik
    if(isset($_POST['bagi']))
    {
        $hasil = $bil1 / $bil2;
    }
    //jika tombol % di klik
    if(isset($_POST['mod']))
    {
        $hasil = $bil1 % $bil2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Minggu-5</title>
</head>
<body>

    <br><br><br><br> <br><br><br><br> <br><br><br><br>
    <h3 style="text-align: center">KALKULATOR SEDERHANA</h3>

    <form method="post">
        <table border="5" bgcolor="#edf0dd" align="center">

            <tr>
                <td>Bilangan-Pertama</td>
                <td>:</td>
                <td>
                    <input type="number" name="bil1" value="<?=$bil1?>">
                </td>
            </tr>

            <tr>
                <td>Bilangan-Kedua</td>
                <td>:</td>
                <td>
                    <input type="number" name="bil2" value="<?=$bil2?>">
                </td>
            </tr>

            <tr>
                <td>Operator</td>
                <td>:</td>
                <td>
                    <input type="submit" name="tambah" value="+">
                    <input type="submit" name="kurang" value="-">
                    <input type="submit" name="kali" value="*">
                    <input type="submit" name="bagi" value="/">
                    <input type="submit" name="mod" value="%">
                </td>
            </tr>

            <tr>
                <td>Hasil</td>
                <td>:</td>
                <td>
                    <input type="text" name="hasil" value="<?=$hasil?>">
                </td>
            </tr>

        </table>    
    </form>

</body>
</html>