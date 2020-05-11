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
	if ($result) {
			while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	}
	return $rows;
}
function tambah($data)
{
	$conn = koneksi();
	$nama = htmlspecialchars($data['nama']);
	$jenismusik = htmlspecialchars($data['jenismusik']);
	$caramain = htmlspecialchars($data['caramain']);
	$asal = htmlspecialchars($data['asal']);
	$foto = htmlspecialchars($data['foto']);

	$query = "INSERT INTO alatmusik
					VALUES ('', '$foto', '$nama', '$jenismusik', '$caramain', '$asal')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM alatmusik WHERE id = $id");

	return mysqli_affected_rows($conn);
}
function ubah($data)
{
	$conn = koneksi();
	$id = htmlspecialchars($data['id']);
	$foto = htmlspecialchars($data['Foto']);
	$nama = htmlspecialchars($data['Nama']);
	$jenismusik = htmlspecialchars($data['JenisMusik']);
	$caramain = htmlspecialchars($data['Cara_main']);
	$asal = htmlspecialchars($data['Asal']);
	

	$query = "UPDATE alatmusik
			SET
			Foto = '$foto',
			Nama = '$nama',
			JenisMusik = '$jenismusik',
			Cara_main = '$caramain',
			Asal = '$asal',
			WHERE id = '$id';
			";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
function registrasi($data)
{
	$conn = koneksi();
	$username = strtolower(stripcslashes($data['username']));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	$result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");
	if ($result) {
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah digunakan');
			</script>";
			return false;
	}
}
	$password = password_hash($password, PASSWORD_DEFAULT);
	$query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
	mysqli_query($conn, $query_tambah);

	return mysqli_affected_rows($conn);
}



 ?>