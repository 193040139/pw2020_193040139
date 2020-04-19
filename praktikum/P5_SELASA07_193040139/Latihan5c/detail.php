<?php  
if (!iseet($_GET['id'])) {
	header("location: ../index.php");
	exit;
}
require 'function.php';

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
			<img src="../assets/img/<?=$alt["foto"]; ?>" alt="">
		</div>
		<div class="keterangan">
		<p><?= $alt["nama"]?></p>
		<p><?= $alt["jenis"] ?></p>
		<p><?= $alt["cara"] ?></p>
		<p><?= $alt["asal"] ?></p>
		</div>
		<button class="tombol_kembali"><a href="../index.php"></a></button>
	</div>
</body>
</html>