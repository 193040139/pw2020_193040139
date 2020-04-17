<?php 
	function tumpukanBola($tumpukan) {
		for ($a=0; $a <= $tumpukan ; $a++) { 
			for ($b=1; $b<=$a ; $b++) { 
				echo "<div class = 'bola'>$a</div>";
			}
			echo "<div class= 'clear'></div>";
		}
		}
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan3c</title>
 	<style>
 		.bola {
 			border-radius: 100%;
 			border: 2px solid;
 			background-color: salmon;
 			width: 40px;
 			height: 40px;
 			line-height: 40px;
 			float: left;
 			font-size: 20px;
 			text-align: center;
 			margin: 3px;

 		}
 		.clear {
 			clear: both;
 		}
 	</style>
 </head>
 <body>
 <?php tumpukanBola(5) ?>
 </body>
 </html>