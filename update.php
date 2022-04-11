<?php 

include ('koneksi.php');

$id_mhs = $_POST['id_mhs'];
$nim_mhs = $_POST['nim_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$jurusan_mhs = $_POST['jurusan_mhs'];

$query = "UPDATE tbl_mahasiswa SET nim_mhs = '$nim_mhs', nama_mhs = '$nama_mhs', jurusan_mhs = '$jurusan_mhs' WHERE id_mhs = '$id_mhs'";

if($connection->query($query)){
	header("Location: index.php");
} else {
	echo "Data Gagal Disimpan";
}

?>