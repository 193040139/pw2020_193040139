<?php 
	function koneksi(){
		$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
		mysqli_select_db($conn, "pw_193040139") or die ("Database salah!");
		return $conn;
	}
function query($sql){
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}
function tambah($data)
{
	$conn = koneksi();
	$nama = htmlspecialchars($data['Nama']);
	$jenismusik = htmlspecialchars($data['JenisMusik']);
	$caramain = htmlspecialchars($data['Cara_main']);
	$asal = htmlspecialchars($data['Asal']);
	$foto = htmlspecialchars($data['Foto']);

	$query = "INSERT INTO alatmusik
					VALUES ('', '$Foto', '$Nama', '$JenisMusik', '$Cara_main', '$Asal')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

 ?>