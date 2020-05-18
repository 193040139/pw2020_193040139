<!DOCTYPE html>
<html>
<head>
	<title>tugas1 modul 2</title>
	<style>
		.box {
			width: 20px;
			height: 20px;
			float: left;
			background-color: black;
			border: 1px solid;
			margin: 2px;
		}
		.box1 {
			width: 20px;
			height: 20px;
			float: left;
			background-color: white;
			border: 1px solid;
			margin: 2px;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
<?php 
for ($a=1; $a <=5 ; $a++) { 
	if ($a%2) {
		$b=1;
		while ($b<=5) {
			if ($b%2) {
				echo "<div class='box'></div>";
			}else{
				echo "<div class='box1'></div>";
			}
			$b++;
		}
		echo "<div class= 'clear'></div>";

	}
	else{
		$b=1;
		while ($b<=5) {
			if ($b%2) {
				echo "<div class='box1'></div>";
			}else{
				echo "<div class='box'></div>";
			}
			$b++;
		}
		echo "<div class= 'clear'></div>";
	}
}
 ?>
</body>
</html>