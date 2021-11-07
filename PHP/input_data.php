<?php 
include 'connect.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

if(!($nim=='' || $nama=='' || $prodi=='' || $angkatan=='')){
	$sql = mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('$nim','$nama','$prodi','$angkatan')");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data mahasiswa ";
}else{
	$result['status'] = "0";
	$result['msg'] = "tidak berhasil Menambah Data mahasiswa ";
}
echo json_encode($result);

?>