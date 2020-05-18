<?php  
if (!isset($_GET['id'])) {
	header("location: ../php/index.php");
	exit;
}
require '../php/functions.php';

$id = $_GET['id'];

$alatmusik = query("SELECT * FROM alatmusik WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
	<style type="text/css">
	.line {
	background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%
	}
	.gambar{
	background: #fbfbfb;
	border-radius: 10px;
	box-shadow: 1px, 2px, 9px, rgba(0,0,0,0.5);
	margin: 2rem auto 8.1rem auto;
	width: 500px;
	height: 500px;
	border-radius: 100%;

}
.gambar img {
	width: 200px;
	height: 200px; 
	border-radius: 100%;
	border: 1px solid;
	margin: 20px;
}
.gambar p{
	font-family: sans-serif;
	font-size: 17px;


}
.tombol_kembali a{
	color: black;
}
.tombol_kembali{
	width: 100px;
	border-radius: 100%;
	height: 50px;
	background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    margin: 0 auto;
    transition: 0.25s;
}
	</style>

</head>
<body>
	<div class="container">
		<div class="gambar">
			<img src="../assets/img/<?=$alatmusik["Foto"]; ?>" alt="">
		<div class="line"></div>
		<p><?= $alatmusik["Nama"];?></p>
		<p><?= $alatmusik["JenisBunyi"]; ?></p>
		<p><?= $alatmusik["Cara_main"]; ?></p>
		<p><?= $alatmusik["Asal"] ;?></p>

		<button class="tombol_kembali"><a href="../php/index.php">kembali</a></button>
	</div>
</div>
</body>
</html>