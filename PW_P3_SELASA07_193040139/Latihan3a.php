
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan3a</title>
 	<style>
 		.tulisan {
 			font-size: 28px;
 			font-family: arial;
 			color :#8c782d;
 			line-height: 5px;
 			font-style: italic;
 			text-align: center;
 		}
 		.bungkus {
 		border:1px solid black ;
    	box-shadow: 5px 5px 5px black;
    	width: 500px;
    	height: 60px;
    	border-radius: 5px;
 		}
 	</style>
 </head>
 <body>
 	<?php 
	function gantiStyle($tulisan, $style1, $style2){
		echo "<div class = '$style1'><p class = '$style2'>$tulisan</p></div>";
	}
	gantiStyle("selamat datang di praktikum PW 2020","bungkus", "tulisan");
	
 ?>
 </body>
 </html>