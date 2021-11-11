<?php
$password = "";
$nama_data_base="data_mahasiswa";

$koneksi= mysqli_connect("localhost", "root", $password, $nama_data_base);

if (!$koneksi){
    die('Koneksi tidak terhubung');
}
?>