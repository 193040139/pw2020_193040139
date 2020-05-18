<?php 
$hardware = array(
	"motherboard" 	=> 	"Papan Srkuit komponen komputer",
	"Processor" 	=> 	"sebuah IC yang mengontrol seluruh jalannya sistem komputer",
	"Hard Disk" 	=> 	"Media penyimpanan sekunder",
	"PC Coller" 	=> 	"mengurangi panas yang dihasilkan oleh komputer",
	"VGA Card"		=> 	"mengubah data grafik yang akan ditampilkan oleh monitor",
	"optical drive" => 	"membaca, maupun menulis data dari kepingan CD",
	"Card Reader" 	=> 	"untuk membaca data-data yang tersimpan dalam memory card",
	"modem" 		=> 	"mengubah sinyal digital menjadi sinyal analog");
 
 echo "<h4>Macam macam perangkat keras komputer dan fungsinya</h4>";
 echo "<table>";
 echo "<tr>";
 foreach ($hardware as $perangkat=> $fungsi) {
 	echo "<table>
 	<tr>
 	<td><b>$perangkat</b></td>
 	<td>:</td> 
 	<td>$fungsi<br></td></tr></table>";
 }

 ?>