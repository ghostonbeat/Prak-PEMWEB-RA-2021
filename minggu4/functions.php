<?php
    $conn = mysqli_connect("localhost", "root", "", "tugas4");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    
    function createData($data){
        global $conn;
        $nama_baru     = $_POST["nama"];
        $nim_baru      = $_POST["nim"];
        $prodi_baru    = $_POST["prodi"];
        $angkatan_baru = $_POST["angkatan"];
        
        $query_input = "INSERT INTO mahasiswa
                        VALUES
                        ('', '$nama_baru', '$nim_baru', '$prodi_baru', '$angkatan_baru' )
                       ";
        mysqli_query($conn, $query_input);
    }
?>