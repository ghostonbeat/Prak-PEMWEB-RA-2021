<!--

	Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

-->

<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header('location: index.php');
    
?>