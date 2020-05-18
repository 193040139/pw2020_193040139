<?php 


$bulan = array("januari", "februari", "maret", "april", "mei", "juni", " juli", "agustus", "september" , "oktober" ,"november", "desember");


echo "jumlah bulan dalam setahun = ".count($bulan);
echo "<br>";
print_r($bulan);

echo $bulan[6];

echo "<hr>";
 
$hasil1 = array_pop($bulan);

//array_pop digunakan untuk mengambil  data terakhir pada array dan mengapus data lainnya

//array_push digunakan untuk membahkan data pada array
print_r($bulan);



 ?>