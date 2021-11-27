<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

-->

<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "pemweb";

$kon = mysqli_connect($host, $user, $password, $db);

if (!$kon) {
    die("Koneksi Gagal".mysqli_connect_error());
}
?> 
