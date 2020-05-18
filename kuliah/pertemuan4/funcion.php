<?php 
$pelangi= "Balonku ada lima <br>
 rupa rupa warnanya <br>
 hijau,kuning, kelabu, <br>
 merah muda dan biru <br>
 meletus balon hijau dorr!! <br>
 hatiku sangat <br>
 kacau balonku tiggal empat<br>
 ku pegang erat erat"; 

$lirik1 = str_replace("a", "o", $pelangi);
$lirik2 = str_replace("i", "o", $lirik1);
$lirik3 = str_replace("u", "o", $lirik2);
$lirik4 = str_replace("e", "o", $lirik3);


echo "$lirik4";




 ?>