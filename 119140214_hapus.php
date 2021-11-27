<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

-->

<?php
 include "119140214_koneksi.php";
 $nim = $_GET["nim"];

 mysqli_query($kon, "DELETE FROM webinar WHERE nim='$nim'");
 
 header("location:119140214_peserta.php")
?>
