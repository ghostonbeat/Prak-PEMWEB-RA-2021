<!--

    Nama            : Tri Aji Bagaskara
    NIM             : 119140214
    Kelas           : Pemrograman web RB
    Kelas Praktikum : Pemrograman web RA

-->

<?php
include "119140214_koneksi.php";

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$instansi = $_POST["instansi"];
$Jurusan = $_POST["Jurusan"];
$email = $_POST['email'];
$kontak = $_POST['kontak'];


$foto = $_FILES['foto']['name'];
$ekstensi = array('png', 'jpg', 'jpeg');
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($foto, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location : 119140214_tugas_7.php?alert=ekstensi");
}
else {
    if ($ukuran < 1500000) {
        move_uploaded_file($_FILES['foto']['tmp_name'], 'foto/'.$foto);
        $sql = "INSERT INTO webinar VALUES('$nim', '$nama', '$instansi', '$email', '$kontak', '$foto')";
        $query = mysqli_query($kon, $sql);
        header("location:119140214_tugas_7.php?alert=sukses");
    }
    else {
        header("location:119140214_tugas_7.php?alert=ukuran");
    }
}



if (!$query) {
    die("Data Gagal Ditambahkan, Coba Lagi".mysqli_error($kon));
}
?>
