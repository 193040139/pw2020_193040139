<!DOCTYPE html>
<html>
<head>
	<title>laihan3b</title>
	<style>
		.style {
			width: 600px;
			border: 1px solid;
			text-align: left;
			padding: 5px;

		}
	</style>
</head>
<body>
<?php 
$jawabanIsset 	= "Isset adalah = salah satu perintah php yang berfungsi untuk memeriksa sebuah objek dari form, apakah ada atau tidak nilai yang di lempar dari suatu form. Fungsi isset() akan tetap bernilai true meskipun nilai dari suatu form tidak terisi atau kosong<br><br>";
$jawabanEmpty 	= "Empty adalah =merupakan fungsi yang digunakan untuk untuk mengecek data atau variabel yang kosong. Fungsi ini sangat bermanfaat untuk mengecek dan mencegah inputan kosong";

$GLOBALS['Isset'] = $jawabanIsset;
$GLOBALS['Empty'] = $jawabanEmpty;

function soal($style){ 
	echo "<div class  = '$style'>".
	$GLOBALS['Isset']."".
	$GLOBALS['Empty'].
	"</div>";
}
	soal("style");

 ?>
</body>
</html>