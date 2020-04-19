	<?php 
		$conn = mysql_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
		mysql_select_db($conn, "pw_193040139") or die ("Database salah!");
		$result = mysql_query($conn, "SELECT * FROM alatmusik");
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
	<?php $i = 1; ?>
	<?php while($row = mysql_fetch_assoc($result)) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td><img src="assets/img/<?= $row["foto"];?>"></td>
		<td><?= $row["nama"]?></td>
		<td><?= $row["jenis"] ?></td>
		<td><?= $row["cara"] ?></td>
		<td><?= $row["asal"] ?></td>
	</tr>
	<?php $i++; ?>
<?php endwhile; ?>
</table>
</div>
</body>
</html>