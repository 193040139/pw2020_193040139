<!DOCTYPE html>
<html>
<head>
	<title>latihan 4d</title>
</head>
<body>
<?php 
$pemain = array(
	array("Cristiano Ronaldo" , "Juventus", 100, 70, 30),
	array("Lionel Messi", "Barcelona", 120, 80, 12),
	array("Luca Modric", "Real Madrid", 87, 12, 48),
	array("Mohammad Salah","Liverpool", 90, 103, 8),
	array("Neymar Jr", "Paris Saint Germain", 109, 56, 15),
	array("Sadio Mane", "Liverpool", 63, 30, 70),
	array("Zlatan Ibrrahimovic", "Ac Milan",100, 10, 12)
);
 ?>
 <table cellspacing="0" cellpadding="3" border="2px solid black">
 	<th>NO</th>
 	<th>NAMA</th>
 	<th>CLUB</th>
 	<th>MAIN</th>
 	<th>GOL</th>
 	<th>ASSIST</th>

<tr>
	<td>1</td>
	<td><?php echo $pemain[0][0]; ?></td>
	<td><?php echo $pemain[0][1]; ?></td>
	<td><?php echo $pemain[0][2]; ?></td>
	<td><?php echo $pemain[0][3]; ?></td>
	<td><?php echo $pemain[0][4]; ?></td>
</tr>
<tr>
	<td>2</td>
	<td><?php echo $pemain[1][0]; ?></td>
	<td><?php echo $pemain[1][1]; ?></td>
	<td><?php echo $pemain[1][2]; ?></td>
	<td><?php echo $pemain[1][3]; ?></td>
	<td><?php echo $pemain[1][4]; ?></td>
</tr>
<tr>
	<td>3</td>
	<td><?php echo $pemain[2][0]; ?></td>
	<td><?php echo $pemain[2][1]; ?></td>
	<td><?php echo $pemain[2][2]; ?></td>
	<td><?php echo $pemain[2][3]; ?></td>
	<td><?php echo $pemain[2][4]; ?></td>
</tr>
<tr>
	<td>4</td>
	<td><?php echo $pemain[3][0]; ?></td>
	<td><?php echo $pemain[3][1]; ?></td>
	<td><?php echo $pemain[3][2]; ?></td>
	<td><?php echo $pemain[3][3]; ?></td>
	<td><?php echo $pemain[3][4]; ?></td>
</tr>
<tr>
	<td>5</td>
	<td><?php echo $pemain[4][0]; ?></td>
	<td><?php echo $pemain[4][1]; ?></td>
	<td><?php echo $pemain[4][2]; ?></td>
	<td><?php echo $pemain[4][3]; ?></td>
	<td><?php echo $pemain[4][4]; ?></td>
</tr>
<tr>
	<td>6</td>
	<td><?php echo $pemain[5][0]; ?></td>
	<td><?php echo $pemain[5][1]; ?></td>
	<td><?php echo $pemain[5][2]; ?></td>
	<td><?php echo $pemain[5][3]; ?></td>
	<td><?php echo $pemain[5][4]; ?></td>
</tr>
<tr>
	<td>7</td>
	<td><?php echo $pemain[6][0]; ?></td>
	<td><?php echo $pemain[6][1]; ?></td>
	<td><?php echo $pemain[6][2]; ?></td>
	<td><?php echo $pemain[6][3]; ?></td>
	<td><?php echo $pemain[6][4]; ?></td>
</tr>
<tr>
	<td>#</td>
	<td colspan="2" align="center">Jumlah</td>
	<td>
		<?php 
			$hasil = 0;
			foreach ($pemain as $nama => $main) {
				$hasil += $main[2];
			}
			echo $hasil;

	 	?>
	 </td>
	<td>
		<?php 
			$hasil = 0;
			foreach ($pemain as $nama => $main) {
				$hasil += $main[3];
			}
			echo $hasil;

	 	?>
	 </td>
	 <td>
		<?php 
			$hasil = 0;
			foreach ($pemain as $nama => $main) {
				$hasil += $main[4];
			}
			echo $hasil;

	 	?>
	 </td>
</tr>

</table>
</body>
</html>