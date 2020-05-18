<?php 
function cetak_bintang($baris)
{
	for ($a=0; $a< $baris ; $a++){ 
		for ($b=1;$b<=$a; $b++) { 
			echo "*";
		}
		echo "<br>";
	}
}
cetak_bintang(5);
cetak_bintang(7);



 ?>