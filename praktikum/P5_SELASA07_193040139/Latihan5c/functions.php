<?php 
	function koneksi(){
		$conn = mysql_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
		mysql_select_db($conn, "pw_193040139") or die ("Database salah!");
		return $conn;
	}
function query($sql){
	$conn = koneksi();
	$result = mysql_query($conn, "$sql");

	$rows = [];
	while ($row = mysql_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

 ?>