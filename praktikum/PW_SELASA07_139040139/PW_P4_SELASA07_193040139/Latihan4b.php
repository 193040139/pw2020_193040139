<!DOCTYPE html>
<html>
<head>
	<title>lartihan 4b</title>
</head>
<body>
<?php 
$pemain = array();

$pemain[] = "Mohammad Salah";
$pemain[] = "Cristiano Ronaldo";
$pemain[] = "Lionel Messi";
$pemain[] = "Ziatan Ibrahimovic";
$pemain[] = "Neyman Jr";

?>
<h3><b>Daftar pemain bola terkenal</b></h3>
<ol>
	<?php
		for ($i=0; $i < count($pemain) ; $i++) { 
		 	echo "<li>$pemain[$i]</li>";
		 } 
	 ?>
</ol>
<?php 
	$hasil = array_push($pemain, "Luca Modric", "Sadio Mane");
 ?>
 <h3>Daftar pemain bola yang baru</h3>
 <ol>
 	<?php
 		for ($i=0; $i <count($pemain); $i++) { 
 		 	echo "<li>$pemain[$i]</li>";
 		 	sort($pemain);
 		 } 

 	 ?>
 </ol>
</body>
</html>