	<?php
require '../php/functions.php';

$id = $_GET['id'];
$alt = query("SELECT * FROM alatmusik WHERE id = $id");

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
				<input type="text" name="Nama" id="Nama" required value="<?= $alt['Nama'];?>"><br><br>
			</li>
			<li>
				<label for="Jenis bunyi">jenis bunyi : </label><br>
				<input type="text" name="JenisBunyi" id="JenisBunyi" required value="<?= $alt['JenisBunyi'];?>"><br><br>
			</li>
			<li>
				<label for="cara main">Cara main : </label><br>
				<input type="text" name="Cara_main" id="Cara_main" required value="<?= $alt['Cara_main'];?>"><br><br>
			</li>
			<li>
				<label for="asal">Asal : </label><br>
				<input type="text" name="Asal" id="Asal" required value="<?= $alt['Asal'];?>">
			</li>
			<br>
			<button type="submit" name="ubah">ubah data</button>
			<button type="submit">
				<a href="../php/index.php" style="text-decoration: none; color: black;">kembali</a>
			</button>

		</ul>
	</form>

</body>
</html>