<!DOCTYPE html>
<html>
<head>
	<title>document</title>
</head>
<body>
	<h3>form tambah data alat musik</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for ="nama"> Nama : </label><br>
				<input type="text" name="nama" id="nama" required><br><br>
			</li>
			<li>
				<label for="Jenis bunyi">jenis bunyi : </label><br>
				<input type="text" name="jenis bunyi" id="jenisbunyi" required><br><br>
			</li>
			<li>
				<label for="cara main">Cara main : </label><br>
				<input type="text" name="caramain" id="caramain" required><br><br>
			</li>
			<li>
				<label for="asal">Asal : </label><br>
				<input type="text" name="asal" id="asal" required>
			</li>
			<br>
			<button type="submit" name="tambah">tambah data</button>
			<button type="submit">
				<a href="index.php" style="text-decoration: none; color: black;">kembali</a>
			</button>

		</ul>
	</form>
	<?php
require '../php/functions.php';
if (isset($_POST['tambah'])) {
 	if (tambah($_POST) > 0) {
 		echo "<script>
 					alert('Data berhasil ditambahkan!');
 					document.location.href = '../php/admin.php';
 				</script>";
 	}else {
 		echo "<script>
 					alert('Data gagal ditambahkan!');
 					document.location.href = '../php/admin.php';
 				</script>";
 	}
 } 

 ?>
</body>
</html>