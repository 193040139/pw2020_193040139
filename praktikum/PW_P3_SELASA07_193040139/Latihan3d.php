<?php 
	function hitungDeterminan($a, $b, $c, $d){
		$hasil = (($a * $d) - ($b * $c));
		
		echo "<table style = 'border-left : 1px solid; border-right : 2px solid;' cellspacing='5'cellpadding='5'>
		<tr>
			<td>$a<td>
			<td>$b<td>
		</tr>
		<tr>
			<td>$c<td>
			<td>$d<td>
		</tr>
		</table>";
		echo "<b> determinan matriks tersebut adalah $hasil";

	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 3d</title>
 </head>
 <body>
 <?php hitungDeterminan(1,2,3,4) ?>
 </body>
 </html>