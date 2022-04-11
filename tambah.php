<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1, shrink-to-fit=no">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Data Mahasiswa</title>
</head>

<body>
	<div class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						Tambah Mahasiswa
					</div>
					<div class="card-body">
						<form action="simpan.php" method="post">
							<div class="mb-3">
								<label for="nim" class="from-label">NIM</label>
								<input type="number" class="form-control" id="nim" name="nim_mhs" placeholder="isikan NIM" required>
							</div>
							<div class="mb-3">
								<label for="nim" class="from-label">NAMA</label>
								<input type="text" class="form-control" id="nama" name="nama_mhs" placeholder="isikan NAMA" required>
							</div>
							<div class="mb-3">
								<label for="jurusan" class="from-label">JURUSAN</label>
								<input type="text" class="form-control" id="jurusan" name="jurusan_mhs" placeholder="isikan JURUSAN" required>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</body>
</html>