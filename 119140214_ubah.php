<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

-->

<?php
include "119140214_koneksi.php";

session_start();
$_SESSION['nim'] = $_POST['nim'];

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$instansi = $_POST["instansi"];
$email = $_POST['email'];
$kontak = $_POST['kontak'];

if (!file_exists($_FILES['foto']['name'])) {
    $foto = $_FILES['foto']['name'];
    $ekstensi = array('png', 'jpg', 'jpeg');
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($foto, PATHINFO_EXTENSION);
    
    if (!in_array($ext, $ekstensi)) {
        header("location : 119140214_edit.php?alert=ekstensi");
    }
    else {
        if ($ukuran < 1500000) {
            move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$foto);
            $sql = "UPDATE webinar SET nama = '$nama', instansi='$instansi', email='$email', wa='$kontak', foto='$foto' WHERE nim='$nim'";
            $query = mysqli_query($kon, $sql);
            header("location:119140214_peserta.php");
        }
        else {
            header("location:119140214_edit.php?alert=ukuran");
        }
    }
}
else {
    $sql = "UPDATE webinar SET nama = '$nama', instansi='$instansi', email='$email', wa='$kontak' WHERE nim='$nim'";
    $query = mysqli_query($kon, $sql);
    header("location:119140214_peserta.php");
}


if (!$query) {
    die("Data Gagal Ditambahkan, Coba Lagi".mysqli_error($kon));
}
?>
