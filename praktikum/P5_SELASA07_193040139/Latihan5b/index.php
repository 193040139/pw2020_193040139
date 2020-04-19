	<?php 
	require 'php/functions.php';
	$alatmusik = query("SELECT * FROM alatmusik")

	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
	<style>
		img {
			width: 150px;
		}
				.container {
			width: 500px;
		}
	</style>
</head>
<body>
<div class="container">
<table border="1px solid" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Foto</th>
		<th>Nama</th>
		<th>Jenis bunyi</th>
		<th>Cara main</th>
		<th>Asal</th>
	</tr>
	<?php $i = 1 ?>
	<?php foreach ($alatmusik as $alt) : ?>
	<tr>
		<td><?= $i ?></td>
		<td><img src="assets/img/<?= $alt["foto"];?>"></td>
		<td><?= $alt["nama"]?></td>
		<td><?= $alt["jenis"] ?></td>
		<td><?= $alt["cara"] ?></td>
		<td><?= $alt["asal"] ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>
</table>
</div>
</body>
</html>