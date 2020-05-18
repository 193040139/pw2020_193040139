<?php 
function hitungluaslingkaran($r){
	$luas = 3.14 * $r *$r;
	return $luas;
}
function tambahluas2lingkaran($luas1, $luas2){
	$total_luas = $luas1 + $luas2;
	return $total_luas;
}

$r1 = 10;
$r2 = 5;


$luas1 = hitungluaslingkaran($r1);
$luas2 = hitungluaslingkaran($r2);

echo "total luas = ".tambahluas2lingkaran($luas1, $luas2);












 ?>