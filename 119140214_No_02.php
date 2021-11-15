<!--

	Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

Soal Praktikum :
Buatlah program untuk mengurutkan data dari 10 buah data yang acak!
(“larine”, “aduh”, “qifuat”, “toda”, “anevi”, “samid”, “kifuat”);

-->


<?php
    function mengurutkan()
    {
        $nama = array("Larine", "Aduh", "Qifuat", "toda", "Anevi", "Samid", "Kifuat", "Aji", "Bagas", "Kara");
        sort($nama);
        print_r($nama);
    }

    echo "<h3> Nama 10 buah data yang acak : (Larine, Aduh, Qifuat, toda, anevi, Samid, Kifuat, Aji, Bagas, Kara)</h3>";
    
    echo "<h3> Nama 10 buah data yang sudah di urutkan: </h3>";
    echo "<pre>";
    	mengurutkan();
    echo "</pre>";
    
?>

