<?php 

include ('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM tbl_mahasiswa WHERE id_mhs = '$id'";

if($connection->query($query)){


	header("location: index.php");

} else {


	echo"Data Gagal Disimpan!!";
	
}
?>