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
		.nama {
			text-align: center;
		}
	</style>
</head>
<body>
<div class="container">
	<?php foreach ($alatmusik as $alt) : ?>
		<p class="nama">
			<a href="php/detail.php?id=<?=$alt['id']?>">
				<?= $alt["nama"]?>
			</a>
		</p>
	<?php endforeach; ?>
	</div>
</body>
</html>