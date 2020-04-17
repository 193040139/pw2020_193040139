<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
	<style>
		img {
			width: 150px;
		}
	</style>
</head>
<body>
	<?php 
		$field1 = array(
			"foto1"=>"<img src = img/Accordion.jpg>",
			"nama1" => "Accordion",
			"jenis1" => "Aerofom (bunyi dari hembusan nafas)",
			"cara1" => "Ditiup dan menggunakan tangan untuk mengatur nada",
			"asal1"=> "Sumatra Selatan"
		);
		$field2 = array(
			"foto2"=>"<img src = img/Angklung.jpg>",
			"nama2" => "Angklung",
			"jenis2" => "Ideofom (bunyi dari bahan dasar alat)",
			"cara2" => "Menggerakan bambu untuk menghasilkan nada",
			"asal2"=> "Jawa Barat"
		);
		$field3 = array(
			"foto3"=>"<img src = img/Aramba.jpg>",
			"nama3" => "Aramba",
			"jenis3" => "Aideofom (bunyi dari bahan dasar alat)",
			"cara3" => "Dipukul denga alat berbentuk stik",
			"asal3"=> " Nias, Sumatra Utara"
		);
		$field4 = array(
			"foto4"=>"<img src = img/Bende.jpg>",
			"nama4" => "Bende",
			"jenis4" => "Ideofon(bunyi dari bahan dasal alat)",
			"cara4" => "Dipukul dengan alat khusus",
			"asal4"=> "Lampung"
		);
		$field5 = array(
			"foto5"=>"<img src = img/Ceng-ceng.jpg>",
			"nama5" => "Ceng-ceng",
			"jenis5" => "Ideofom (bunyi dari bahan dasarnya)",
			"cara5" => "Saling dibenturkan dengan tangan",
			"asal5"=> "Bali"
		);
		$field6 = array(
			"foto6"=>"<img src = img/Doll.jpg>",
			"nama6" => "Doll",
			"jenis6" => "Membranofom(bunyi yang dihasilkan dengan cara dipukul)",
			"cara6" => "Dipukul dengan alat pukul yang terbuat dari sebuah karet khusus",
			"asal6"=> "Bengkulu"
		);
		$field7 = array(
			"foto7"=>"<img src = img/Gambus.jpg>",
			"nama7" => "Gambus",
			"jenis7" => "Kordofon (bunyi yang berasal dari senar ataupun dawai)",
			"cara7" => "Dipetik",
			"asal7"=>"Riau"

		);
		$field8 = array(
			"foto8"=>"<img src = img/Kecapi.jpg>",
			"nama8" => "Kecapi",
			"jenis8" => "Kordofon(bunyi dari senar atau dawai)",
			"cara8" => "Dipetik",
			"asal8"=> "Sulawesi Barat"
		);
		$field9 = array(
			"foto9"=>"<img src = img/Serunekale.jpg>",
			"nama9" => "Serune Kale",
			"jenis9" => "Aerofom (bunyi dari hembusan nafas)",
			"cara9" => "ditiup dan menggunakan tangan untuk mengatur nada",
			"asal9"=> "Nanggroe Aceh Darussalam (NAD)"
		);
		$field10 = array(
			"foto10"=>"<img src = img/Tehyan.jpg>",
			"nama10" => "Tehyan",
			"jenis10" => "Kordofon(bunyi dari senar atau dawai)",
			"cara10" => "dipetik",
			"asal10"=> "DKI Jakarta"
		);


	 ?>
<table border="2px solid" cellpadding="4" cellspacing="0">
	<tr bgcolor="skyblue">
		<th>No</th>
		<th>Foto</th>
		<th>Nama</th>
		<th>Jenis bunyi</th>
		<th>Cara main</th>
		<th>Asal</th>
	</tr>
	<tr>
		<td>1</td>
		<?php 
			foreach ($field1 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>
	<tr>
		<td>2</td>
		<?php 
			foreach ($field2 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>
	<tr>
		<td>3</td>
		<?php 
			foreach ($field3 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>
	<tr>
		<td>4</td>
		<?php 
			foreach ($field4 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>
	<tr>
		<td>5</td>
		<?php 
			foreach ($field5 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>
	<tr>
		<td>6</td>
		<?php 
			foreach ($field6 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>
	<tr>
		<td>7</td>
		<?php 
			foreach ($field7 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>
	<tr>
		<td>8</td>
		<?php 
			foreach ($field8 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>
	<tr>
		<td>9</td>
		<?php 
			foreach ($field9 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>
	<tr>
		<td>10</td>
		<?php 
			foreach ($field10 as $objek => $apa) {
				echo "<td>$apa</td>";
			}
		 ?>
	</tr>




</table>
</body>
</html>