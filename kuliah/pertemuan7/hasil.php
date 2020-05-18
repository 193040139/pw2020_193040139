<?php 
echo "ini adalah tampilan hasil";
echo "<hr>";


// echo "Username : " . $_GET['username']."<br>" 
// echo "password : " . $_GET['password'];

	function cekLogin($username, $password)
	{
		if ($username == "aku" && $password == "qwerty") {
			echo "Berhasil login";
		}else{
			echo "gagal login";
		}
	}
//eksekusi
//--------------------
	$username = $_GET['username'];
	$password = $_GET['password'];
	cekLogin($username, $password);

 ?>