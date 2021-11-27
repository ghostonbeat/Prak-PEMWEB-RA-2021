<?php

$db = mysqli_connect("localhost", "root", "", "tugas7");

function Select_All($query){
    global $db;
    $query_results = mysqli_query($db, $query);
    $datas = [];
    while($data = mysqli_fetch_object($query_results)){
        $datas[] = $data;
    }
    return $datas;
}

function Insert_Data($data){
    global $db;
    //Ambil masukan pengguna dari form
    $mrk = $data["mrk"];
    $typ = $data["typ"];
    $cpu = $data["cpu"];
    $ram = $data["ram"];
    $stg = $data["stg"];
    $gpu = $data["gpu"];
    $hrg = $data["hrg"];

    //Unggah gambar terleih dahulu
    $img = Upload_Image();
    if( !$img ){
        return false;
    }

    //Jika gambar berhasil diunggah, cetak dan jalankan Query
    $query = "INSERT INTO 
        laptop 
        VALUES ('', '$mrk', '$typ', '$cpu', '$ram', '$stg', '$gpu', '$img', '$hrg')";

    mysqli_query($db, $query);
}

function Update_Data($data, $id){
    global $db;
    //Ambil masukan pengguna dari form
    $mrk = $data["mrk"];
    $typ = $data["typ"];
    $cpu = $data["cpu"];
    $ram = $data["ram"];
    $stg = $data["stg"];
    $gpu = $data["gpu"];
    $hrg = $data["hrg"];
    $oldImg = $data["oldImg"];

    //Cek apakah gambar diubah 

    //Jika tidak maka gunakan gambar lama
    if ( $_FILES["img"]["error"] === 4 ){
        $img = $oldImg;
    }
    //Jika ya maka unggah gambar terlebih
    else{
        unlink("../media/photo/".$oldImg); //menghapus gambar sebelumnya dari direktori
        $img = Upload_Image(); //mengunggah gambar baru ke direktori
    }
    if( !$img ){
        return false;
    }
    
    //Jika gambar valid, cetak dan jalankan Query
    $query = "UPDATE laptop SET
        mrk='$mrk',
        typ='$typ',
        cpu='$cpu',
        ram='$ram',
        stg='$stg',
        gpu='$gpu',
        img='$img',
        hrg='$hrg'
        WHERE id='$id'
    ";

    mysqli_query($db, $query);
}

function Delete_Data($id){
    global $db;
    mysqli_query($db, "DELETE FROM laptop WHERE id = '$id'");
}

function Search_Data($keyword){
    global $db;
    $query = "SELECT * FROM 
        mahasiswa 
        WHERE 
        nama     LIKE '%$keyword%' OR
        nim      LIKE '%$keyword%' OR
        prodi    LIKE '%$keyword%' OR
        angkatan LIKE '%$keyword%'
    ";
    $query_results = mysqli_query($db, $query);
    $datas = [];
    while($data = mysqli_fetch_object($query_results)){
        $datas[] = $data;
    }
    return $datas;
}

function Upload_Image(){
    $FileName  = $_FILES["img"]["name"];
    $FileSize  = $_FILES["img"]["size"];
    $FileError = $_FILES["img"]["error"];
    $FileTmp   = $_FILES["img"]["tmp_name"];

    //TIPE-TIPE PESAN ERROR UPLOAD FILE
    // 0 => 'There is no error, the file uploaded with success',
    // 1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    // 2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    // 3 => 'The uploaded file was only partially uploaded',
    // 4 => 'No file was uploaded',
    // 6 => 'Missing a temporary folder',
    // 7 => 'Failed to write file to disk.',
    // 8 => 'A PHP extension stopped the file upload.',

    //Cek apakah tidak ada file yang diunggah
    if ($FileError === 4){
        echo "<script>
                alert('Please choose file!');
                document.location.href = 'index.php';
            </script>";
        return false;
    }
    
    //Cek format file yang diunggah
    $ValidFileFormat = ["jpg", "jpeg", "png"];

    $FileFormat = explode(".", $FileName);
    $FileFormat = end($FileFormat);
    $FileFormat = strtolower($FileFormat);

    if ( !in_array($FileFormat, $ValidFileFormat)){
        echo "<script>
                alert('Please choose between .jpg .jpeg .png file format!');
                document.location.href = 'index.php';
            </script>";
        return false;
    }

    //Cek ukuran file yang diunggah, harus < 1 Mb
    if ($FileSize > 1048576){
        echo "<script>
                alert('Please choose file with size less than 1 Mb!');
                document.location.href = 'index.php';
            </script>";
        return false;
    }
    
    //File lolos ketiga tahap pengecekan
    $FileName = uniqid();
    $FileName .= ".";
    $FileName .= $FileFormat;

    move_uploaded_file($FileTmp, "../media/photo/".$FileName);

    return $FileName;

}

?>