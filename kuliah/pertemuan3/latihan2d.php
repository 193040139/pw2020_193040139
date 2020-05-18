<!DOCTYPE html>
<html>
<head>
	<title>modul 2 latihan 2d</title>
	<style>
		.kotak{
			background-color: white;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color:black;


		}
		.kotak1{
			background-color: #57e65a;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color:black;

		}
		.clear {
			clear: both;
		}
		.ganjil {
			background-color: #003;
			color: #fff;
		}
		.genap {
			background-color: #57e65a;
		}
	</style>
</head>
<body>
<?php 
$a = 1;
while ($a <= 5) {
	for ($b=$a; $b>=1 ; $b--) { 
		if ($a %2) {
		echo "<div class='kotak'>#$a</div>";
		echo "<div class='kotak1 ganjil'>$a</div>";
	}else { 
		echo "<div class='kotak'>#$a</div>";
		echo "<div class='kotak1 genap'>$a</div>";
	}
	}
echo "<div class= 'clear'></div>";
$a++;
}

 ?>
</body>
</html>