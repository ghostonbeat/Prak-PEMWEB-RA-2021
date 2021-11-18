<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
    if ( isset($_POST["submit"])){
        createData($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Pemweb 4</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Markus Togi Fedrian Rivaldi Sinaga - 118140037</h1>

        </div>
        <div class="mainContent cf light-shadow">
            <div class="leftContent light-shadow">

                <h2 class="lm">Masukkan data baru</h2>
                
                <form action="" method="post" id="dataBaru">
                    <div class="row cf">
                        <div class="col1">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="col2">
                            <input type="text" name="nama" id="nama" autocomplete="off">
                        </div>
                    </div>
                    <div class="row cf">
                        <div class="col1">
                            <label for="nim">NIM</label>
                        </div>
                        <div class="col2">
                            <input type="text" name="nim" id="nim" autocomplete="off">
                        </div>
                    </div>
                    <div class="row cf">
                        <div class="col1">
                            <label for="prodi">Prodi</label>
                        </div>
                        <div class="col2">
                            <input type="text" name="prodi" id="prodi" autocomplete="off">
                        </div>
                    </div>
                    <div class="row cf">
                        <div class="col1">
                            <label for="angkatan">Angkatan</label>
                        </div>
                        <div class="col2">
                            <input type="text" name="angkatan" id="angkatan" autocomplete="off">
                        </div>
                    </div>
                    <div class="row cf">
                        <button type="submit" name="submit" class="submit-button" id="submitData" onclick="loadData()">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
            <div class="middleContent light-shadow">
                <h2 class="lm">Data Tersimpan</h2>
                <div id="dataTable">
                    <table class="table table-bordered">
                        <tr>
                            <th width=30%>Nama</th>
                            <th width=20%>NIM</th>
                            <th width=30%>Prodi</th>
                            <th width=15%>Angkatan</th>
                            <th width=5%>Aksi</th>
                        </tr>
                        <div id="DataStored">
                            <?php foreach($mahasiswa as $mhs) : ?>
                            <tr>
                                <td> <?= $mhs["nama"] ?> </td>
                                <td> <?= $mhs["nim"] ?> </td>
                                <td> <?= $mhs["prodi"] ?> </td>
                                <td> <?= $mhs["angkatan"] ?> </td>
                            </tr>
                            <?php endforeach; ?>
                        </div>
                        
                    </table>
                </div>
            </div>
            <div class="rightContent light-shadow">
                <h2 class="lm">Detail Data</h2>
                <div class="row cf">
                    <div class="col1">
                        Nama
                    </div>
                    <div class="col2">
                        Markus Togi
                    </div>
                </div>
                <div class="row cf">
                    <div class="col1">
                        NIM
                    </div>
                    <div class="col2">
                        111
                    </div>
                </div>
                <div class="row cf">
                    <div class="col1">
                        Prodi
                    </div>
                    <div class="col2">
                        Teknik Informatika
                    </div>
                </div>
                <div class="row cf">
                    <div class="col1">
                        Angkatan
                    </div>
                    <div class="col2">
                        2018
                    </div>
                </div>
                <div class="row cf">
                    <button class="submit-button deleteButton">Hapus</button>
                    <button class="submit-button editButton">Sunting</button>
                </div>
            </div>
        </div>
        <div class="footer">

        </div>
    </div>
    <script src="b.js"></script>
</body>
</html>