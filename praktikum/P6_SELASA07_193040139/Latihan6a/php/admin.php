<?php 
 require '../php/functions.php';

 $alatmusik = query("SELECT * FROM alatmusik");

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>document</title>
 	<link rel="stylesheet" type="text/css" href="../css/stay.css">
 </head>
 <body>
 	<table border="1" cellpadding="13" cellspacing="0">
 		<tr>
 			<th>#</th>
 			<th>Opsi</th>
 			<th>Foto</th>
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
 					<a href=""><button class="ubah">Ubah</button></a>
 					<a href=""><button class="hapus">hapus</button></a>
 				</td>
 				<td><img src="../assets/img/<?= $alt['Foto']; ?>" alt="" style = "width: 150px;"></td>
 				<td><?= $alt["Nama"];?></td>
				<td><?= $alt["JenisBunyi"]; ?></td>
				<td><?= $alt["Cara_main"]; ?></td>
				<td><?= $alt["Asal"]; ?></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	</table>
 <button><a href="../php/index.php">kembali</a></button>
 </body>
 </html>