<!DOCTYPE html>
<html>
<head>
	<title>latihan 1c</title>
	<style>
		.kotak1 {
			border: 2px solid black;
			padding: 10px 10px 13px 10px;
			width: 190px;
			height: 170px;
		}
		.kotak2 {
			border: 1px solid black;
			width: 50px;
			height: 50px;
			text-align: center;
			margin: 0 0 10px 10px;
			line-height: 50px;
			float: left;
		}
		#clear {
			clear: both;
		}
	</style>
</head>
<body>

	<?php 
	$a = "A";
	$b = "B";
	$c = "C";
	?>
<div class="kotak1">
	<div class="kotak2">
		<?php echo $a; ?>
	</div>

	<div class="kotak2">
		<?php echo $a; ?>		
	</div>

	<div class="kotak2">
		<?php echo $a; ?>
	</div>

	<div class="kotak2">
		<?php echo $b; ?>
		</div>
	<div class="kotak2">
		<?php echo $b; ?></div>

	<div  class="kotak2" id="clear">
		<?php echo $c; ?>
	</div>
</div>
</body>
</html>