<!DOCTYPE html>
<html>
<head>
	<title>latihan</title>
</head>
<body>
<?php 
$pemain = array(
	"Cristiano Ronaldo" => "Juventus",
	"Lionel Messi" => "Barcelona",
	"Luca Modric" => "Real Madrid",
	"Mohammad Salah" => "Liverpool",
	"Neymar Jr" => "Paris Saint Germain",
	"Sadio Mane" => "Liverpool",
	"Zlatan Ibrahimovic" => "Ac Milan" 
);
 ?>
 <table>
 	<tr><td><b>Daftar pemain bola terkenal dan clubnya</tr></th>
 		<?php
 		foreach ($pemain as $nama => $club) {
 		 	echo "<tr><td><b>$nama</b></td>
 		 			<td>: </td>
 		 			<td>$club</td></tr>";
 		 } 
 		 ?>
 	</tr>
 </table>
</body>
</html>