<!DOCTYPE html>
<html>
<head>
	<title>No 2</title>
</head>
<body>
	<?php 
	$mahasiswa = [
		[
			"nama" => "sandika galih",
			"nrp" => "043040023",
			"email"=> "sandikagalih@unpas.ac.id",
			"jurusan"=> "teknik informatika"],
			[
			"nama" => "Doody Ferdiansyah",
			"nrp" => "144040004",
			"email"=> "doddy@gmail.com",
			"jurusan"=> "teknik mesin"]
		];
	
	 ?>
	 <ol>
	 	<li>1</li>
	 	<?php
	 	foreach ($mahasiswa[0] as $nama => $hasil) {
	 	 	echo "$nama : $hasil<br>";
	 	 } 
	 	 ?>
	 </ol>
</body>
</html>