<?php 
	
	// //array 1 dimensi
	$arah = array("kanan", "kiri");

	 $arah [2] = "atas";
	// echo $arah;


	 $arah[] = "bawah";


	 $arah[1] = "kanan";
	 $arah [0] = "kiri";

	 echo "panjang array = ". count($arah);
	 echo "<br>";
	// //menghitung jumlah value pada array
	print_r($arah);
	echo "<br>";

	for ($i=0; $i <count($arah) ; $i++) { 
		echo "arah = ".$arah[$i];
		echo "<br>";
	}

	echo "<br>";
	$i = 0;
	foreach ($arah as $namaarah) {
		echo $namaarah;
	}
	//array multidimensi

	$mahasiswa = array();
	$mahasiswa [0][0] = "193040139";
	$mahasiswa [0][1] = "Iis Khaeruunisa";
	$mahasiswa [1][0] = "Bandung";
	$mahasiswa [1][1] = "081355186706";

	print("<pre>" .print_r($mahasiswa, true). "</pre>");

	//vardump() = semua yang ada di array akan ditampilkan semua termasuk tipe data panjang karakter

	for ($i=0; $i < count($mahasiswa) ; $i++) { 
		 for ($j=0; $j <2 ; $j++) { 
		 	echo $mahasiswa[$i][$j];
		 	echo "<br>";
		 }
	}

  ?>