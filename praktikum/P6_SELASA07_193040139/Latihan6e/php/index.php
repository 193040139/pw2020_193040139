	<?php 
	require '../php/functions.php';
	$alatmusik = query("SELECT * FROM alatmusik");

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
		.add {
			background-color: yellow;
			color: white;
		}
	</style>
</head>
<body>


<div class="container">
	<?php foreach ($alatmusik as $alt) : ?>
		<p class="nama">
			<a href="php/detail.php?id=<?=$alt['id']?>">
				<?= $alt["Nama"];?>
			</a>
		</p>
	<?php endforeach; ?>
	</div>
	 <button><a href="../php/admin.php">tampilkan data</a></button>
</body>
</html>