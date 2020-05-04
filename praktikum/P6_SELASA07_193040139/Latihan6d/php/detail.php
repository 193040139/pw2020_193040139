<?php  
if (!iseet($_GET['id'])) {
	header("location: ../php/index.php");
	exit;
}
require '../php/functions.php';

$id = $_GET['id'];

$alatmusik = query("SELECT * FROM alatmusik WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="gambar">
			<img src="../assets/img/<?=$alatmusik["Foto"]; ?>" alt="">
		</div>
		<div class="keterangan">
		<p><?= $alatmusik["Nama"]?></p>
		<p><?= $alatmusik["JenisBunyi"] ?></p>
		<p><?= $alatmusik["Cara_main"] ?></p>
		<p><?= $alatmusik["Asal"] ?></p>
		</div>
		<button class="tombol_kembali"><a href="../index.php"></a></button>
	</div>
</body>
</html>