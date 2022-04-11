<?php 

include('koneksi.php');

$id = $_GET['id'];
$query = "SELECT * FROM tbl_mahasiswa WHERE id_mhs = $id LIMIT 1 ";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <title>Edit Mahasiswa</title>
</head>
<body>
	<div class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						Edit Mahasiswa
					</div>
					<div class="card-body">
						<form action="update.php" method="POST">

							<div class="form-group">
								<label>NIM</label>
								<input type="text" name="nim_mhs" value="<?php echo $row['nim_mhs'] ?>"placeholder="Masukkan NIM Mahasiswa" class="form-control">
								<input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs'] ?>">
							</div>

							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs'] ?>"placeholder="Masukkan Nama Mahasiswa" class="form-control">
							</div>

							<div class="form-group">
								<label>Jurusan</label>
								<textarea class="form-control" name="jurusan_mhs" placeholder="Masukkan Jurusan Mahasiswa" rows="4" ><?php echo $row['jurusan_mhs'] ?></textarea>
							</div>

							<button type="submit" class="btn btn-success">UPDATE</button>
							<button type="reset" class="btn btn-warning">RESET</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>