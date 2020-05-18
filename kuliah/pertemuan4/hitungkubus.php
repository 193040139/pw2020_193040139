<?php 
// kubus 1
$sisi1 = 9;

//kubus2
$sisi2 = 4;

//luas1
$luas_kb1 = hitungluaskubus($sisi1);
// $luas_kb1 = $sisi1*$sisi1*6;

//luas2
$luas_kb2 = hitungluaskubus($sisi2);
//$luas_kb2 = $sisi2*$sisi2*6;

 
 //fungsi tambah 2 kubus
// $total = $luas_kb1 + $luas_kb2;
// echo "total luas = ".$total;

// function HitungLuasKubus($sisi1, $sisi2)
//  {
//  	$luas_kb1 = $sisi1 * $sisi1 * 6;
//  	$luas_kb2 = $sisi2 * $sisi2 * 6;
//  	$total = $luas_kb1 + $luas_kb2;
//  	return $total;
//  }
// echo "total luas = ".HitungLuasKubus($sisi1, $sisi2);

function hitungluaskubus ($sisi){
	$luas = $sisi * $sisi *6;
	return $luas;
}
function tambahluas2kubus ($luas_kb1, $luas_kb2){
	$total = $luas_kb1 + $luas_kb2;
	return $total;
}

echo "total luas = ".tambah2luaskubus($luas_kb1, $luas_kb2);


 ?>
