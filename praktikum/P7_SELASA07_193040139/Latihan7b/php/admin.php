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
 		img{
 			width: 150px;
 		}
 		.logout {
 			position: left;
 		}
 	</style>
 </head>
 <body>
 	<div class="logout">
 		<a href="../php/logout.php">logout</a>
 	</div>
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
 		<?php $i = 1; ?>
 		<?php foreach ($alatmusik as $alt) : ?>
 			<tr>
 				<td><?= $i; ?></td>
 				<td>
 					<a href="../php/ubah.php? id=<?$alt['id'];?>"><button class="ubah">ubah</button></a>
 					<a href="../php/hapus.php? id=<?$alt['id'];?>" onclick = "return confirm('Hapus Data??')"><button class="hapus">hapus</button></a>
 				</td>
 				<td><img src="../assets/img/<?= $alt['Foto']; ?>" alt=""></td>
 				<td><?= $alt["Nama"]?></td>
				<td><?= $alt["JenisBunyi"] ?></td>
				<td><?= $alt["Cara_main"] ?></td>
				<td><?= $alt["Asal"] ?></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	</table>
 
 </body>
 </html>