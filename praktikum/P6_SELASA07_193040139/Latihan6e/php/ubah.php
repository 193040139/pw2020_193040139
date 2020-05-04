<!DOCTYPE html>
<html>
<head>
	<title>ubah data alat musik</title>
</head>
<body>
	<h3>form ubah data alat musik</h3>
	<form action="" method="post">
		<input type="hidden" name="id" id="id" value="<?= $alt['id'];?>">
		<ul>
			<li>
				<label for ="nama"> Nama : </label><br>
				<input type="text" name="nama" id="nama" required value="<?= $alt['nama']?>"><br><br>
			</li>
			<li>
				<label for="Jenis bunyi">jenis bunyi : </label><br>
				<input type="text" name="jenis bunyi" id="jenisbunyi" required value="<?= $alt['jenisbunyi']?>"><br><br>
			</li>
			<li>
				<label for="cara main">Cara main : </label><br>
				<input type="text" name="caramain" id="caramain" required value="<?= $alt['caramain']?>"><br><br>
			</li>
			<li>
				<label for="asal">Asal : </label><br>
				<input type="text" name="asal" id="asal" required value="<?= $alt['asal']?>">
			</li>
			<br>
			<button type="submit" name="ubah">ubah data</button>
			<button type="submit">
				<a href="index.php" style="text-decoration: none; color: black;">kembali</a>
			</button>

		</ul>
	</form>
	<?php
require '../php/functions.php';

$id = $_GET['id'];
$alt = query("SELECT * FROM alatmusik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
 	if (ubah($_POST) > 0) {
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