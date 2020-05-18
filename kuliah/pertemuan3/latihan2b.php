<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Modul 2 - latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>kolom 1</th>
			<th>kolom 2</th>
			<th>kolom 3</th>
			<th>kolom 4</th>
			<th>kolom 5</th>
		</tr>

	<?php 
	$k = 1;
	while ( $k<= 5) {
	echo "<tr>";
	for ($g=1; $g <=5 ; $g++) { 
		if ($k % 2) {
			echo "<td>baris $k, kolom $g";
		}else {
			echo "<td></td>";
		}
			}

	echo "</tr>";
	$k++;
}
	?>
	</table>
</body>
</html>