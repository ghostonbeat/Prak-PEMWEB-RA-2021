<!--

	Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

-->
<?php
require_once('app/User.php');

$user = new User();
$user->authenticate($_POST['uname'], $_POST['pass']);
