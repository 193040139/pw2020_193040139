<?php 
echo "hasil penjumlahan";
echo "<hr>";

function hasil($penjumlahan1 , $penjumlahan2)
{
	$hasil = $penjumlahan1 + $penjumlahan2;
	echo "$hasil";
}

$penjumlahan1 = $_GET['angka1'];
$penjumlahan2 = $_GET['angka2'];
hasil($penjumlahan1, $penjumlahan2);



 ?>