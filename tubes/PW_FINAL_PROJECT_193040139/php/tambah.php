<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
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
	padding: 5px;

}
.form h2{
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
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="form">
	<h2>Form Tambah Data Alat Musik</h2>
	<form action="" method="post">
		
			
				<label for="Foto">Foto : </label>
				<input type="file" name="Foto" id="Foto" required values="<?=$alt['Foto'];?>" accept="image/*"/><br><br>
				<div class="form-border"></div>

			
				<label for ="nama"> Nama : </label><br>
				<input type="text" name="nama" id="nama" required class="form-content"><br><br>
				<div class="form-border"></div>

			
				<label for="Jenis bunyi">jenis bunyi : </label><br>
				<input type="text" name="jenis bunyi" id="jenisbunyi" required class="form-content"><br><br>
				<div class="form-border"></div>
			
				<label for="cara main">Cara main : </label><br>
				<input type="text" name="caramain" id="caramain" required class="form-content"><br>
				<div class="form-border"></div>
			
				<label for="asal">Asal : </label><br>
				<input type="text" name="asal" id="asal" required class="form-content">
				<div class="form-border"></div>

			<button type="submit" name="tambah" class="tombol_kembali">tambah data</button>
			<button type="submit" class="tombol_kembali">
				<a href="admin.php">kembali</a>
			</button>

	</form>
</div>
</body>
</html>