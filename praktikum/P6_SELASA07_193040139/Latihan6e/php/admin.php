<?php 
 require '../php/functions.php';

 $alatmusik = query("SELECT * FROM alatmusik");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>document</title>
 	<link rel="stylesheet" type="text/css" href="../css/stay.css">
 	 	 	<style>
 		 	.add {
 			background-color: yellow;
 			width: 100px;
 		}
 		img {
 			width: 150px;
 		}
 	</style>
 </head>
 <body>
 		<div class="add">
		<a href="../php/tambah.php">tambah data</a>
	</div>
	<form action="" method="get">
				<input type="text" name="keyword" autofocus>
				<button type="submit" name="cari"> cari!</button>
			</form>
 	<table border="1" cellpadding="13" cellspacing="0">
 		<tr>
 			<th>#</th>
 			<th>opsi</th>
 			<th>foto</th>
 			<th>Nama</th>
 			<th>Jenis bunyi</th>
			<th>Cara main</th>
			<th>Asal</th>
 		</tr>
 		<?php if (empty($alatmusik)) : ?>
 			<tr>
 				<td colspan="7">
 					<h1>Data Tidak Ditemukan</h1>
 				</td>
 			</tr>
 		<?php else : ?>
 		<?php $i = 1; ?>
 		<?php foreach ($alatmusik as $alt) : ?>
 			<tr>
 				<td><?= $i; ?></td>
 				<td>
 					<a href="../php/ubah.php?id=<?$alt['id']?>"><button class="ubah">ubah</button></a>
 					<a href="../php/hapus.php?id=<?$alt['id']?>" onclick = "return confirm('Hapus Data??')"><button class="hapus">hapus</button></a>
 				</td>
 				<td><img src="../assets/img/<?= $alt['Foto']; ?>" alt=""></td>
 				<td><?= $alt["Nama"]?></td>
				<td><?= $alt["JenisBunyi"] ?></td>
				<td><?= $alt["Cara_main"] ?></td>
				<td><?= $alt["Asal"] ?></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	<?php endif; ?>
 	</table>
 <?php 
	require '../php/functions.php';

	if (isset($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$alatmusik = query("SELECT * FROM alatmusik WHERE 
							Nama LIKE '$$keyword%' OR
							JenisBunyi LIKE '$$keyword%' OR 
							Cara_main LIKE '$$keyword%' OR
							Asal LIKE '$$keyword%' ");
	}else {
		$alatmusik = query("SELECT * FROM alatmusik");
	}

	 ?>
 <button><a href="../php/index.php">kembali</a></button>
 </body>
 </html>