<?php 	
function ceklogin($username, $password)
{
	if ($username == "admin" && $password == "12345") {
		echo "Selamat datang admin";
	}else {
		echo "username/password salah";
	}
}
	$username = $_POST['username'];
	$password = $_POST['password'];
	cekLogin($username, $password);

 ?>