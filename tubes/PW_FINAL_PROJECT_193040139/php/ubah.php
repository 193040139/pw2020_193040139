<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
require '../php/functions.php';

$id = $_GET['id'];
$alt = query("SELECT * FROM alatmusik WHERE id = $id");

if (isset($_POST['ubah'])) {
 	if (ubah($_POST) > 0) {
 		echo "<script>
 					alert('Data berhasil diubah!');
 					document.location.href = '../php/admin.php';
 				</script>";
 	}else {
 		echo "<script>
 					alert('Data gagal diubah!');
 					document.location.href = '../php/admin.php';
 				</script>";
 	}
 } 

 ?>
<!DOCTYPE html>
<html>
<head>	
	<style>
		.form{
	background: #fbfbfb;
	border-radius: 10px;
	box-shadow: 1px, 2px, 9px, rgba(0,0,0,0.5);
	margin: 2rem auto 8.1rem auto;
	width: 500px;
	height: 500px;
	padding: 10px;

}
.form h3{
	text-align: center;
	font-family: "Raleway SemiBold", sans-serif;
}
.tombol_kembali a{
	color: white;
}
.tombol_kembali{
	width: 100px;
	height: 50px;
	background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    margin: 10px;
    transition: 0.25s;

}
	</style>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>ubah data alat musik</title>
</head>
<body>
	<div class="form">
	<h3>Form Ubah Data Alat Musik</h3>
	<form action="" method="post">
		<input type="hidden" name="id" id="id" values="<?= $alt['id'];?>">
	
			
				<label for="Foto">Foto : </label>
				<input type="file" name="Foto" id="Foto" required values="<?=$alt['Foto'];?>" accept="image/*"/><br>
				<div class="form-border"></div><br>
		
			
				<label for ="nama"> Nama : </label><br>
				<input type="text" name="Nama" id="Nama" required values="<?= $alt['Nama'];?>"class="form-content"><br><br>
				<div class="form-border"></div><br>
		
			
				<label for="Jenis bunyi">jenis bunyi : </label><br>
				<input type="text" name="JenisBunyi" id="JenisBunyi" required values="<?= $alt['JenisBunyi'];?>" class="form-content"><br><br>
				<div class="form-border"></div><br>
		
			
				<label for="cara main">Cara main : </label><br>
				<input type="text" name="Cara_main" id="Cara_main" required values="<?= $alt['Cara_main'];?>" class="form-content"><br><br>
				<div class="form-border"></div><br>
		
			
				<label for="asal">Asal : </label><br>
				<input type="text" name="Asal" id="Asal" required values="<?= $alt['Asal'];?>" class="form-content">
				<div class="form-border"></div><br>
		
			<br>
			<button type="submit" name="ubah" class="tombol_kembali">ubah data</button>
			<button type="submit" class="tombol_kembali">
				<a href="../php/admin.php">kembali</a>
			</button>

	</form>
</div>
</body>
</html>