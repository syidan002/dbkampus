<?php


include('koneksi.php');

$nim_mhs = $_POST['nim_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$jurusan_mhs = $_POST['jurusan_mhs'];



$query = "INSERT INTO tbl_mahasiswa (nim_mhs, nama_mhs, jurusan_mhs) VALUES ('$nim_mhs', '$nama_mhs', '$jurusan_mhs')";


if($connection->query($query)){


	header("location: index.php");

} else {


	echo"Data Gagal Disimpan!!";
	
}

?>