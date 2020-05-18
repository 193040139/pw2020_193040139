<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 Latihan 2c</title>
	<style>
		.kotak {
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
	</style>
</head>
<body>
<?php 
$a = 1;
while ($a <6) {
	for ($a=1; $a <6 ; $a++) { 
	
	for ($b=$a; $b>0 ; $b--) { 
		echo "<div class='kotak'>#$a</div>";
		echo "<div class = 'kotak1'>$a</div>";
	}
	echo "<div class = 'clear'></div>";
	}
$a++;
}
 ?>
</body>
</html>