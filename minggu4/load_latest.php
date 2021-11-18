<?php
    require 'functions.php';
    if ( isset($_POST["submit"])){
        createData($_POST);
    }
    $mahasiswa = query("SELECT * FROM mahasiswa");
    
?>
<table class="table table-bordered">
    <tr>
        <th width=30%>Nama</th>
        <th width=20%>NIM</th>
        <th width=30%>Prodi</th>
        <th width=15%>Angkatan</th>
        <th width=5%>Aksi</th>
    </tr>
    <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td> <?= $mhs["nama"] ?> </td>
            <td> <?= $mhs["nim"] ?> </td>
            <td> <?= $mhs["prodi"] ?> </td>
            <td> <?= $mhs["angkatan"] ?> </td>
        </tr>
    <?php endforeach; ?>
</table>