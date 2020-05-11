<?php 
require '../php/functions.php';
if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('Registrasi Berhasil');
				document.location.href= 'login.php';
			</script>";
	}else{
		echo "<script>
				alert('Registrasi Gagal');
			</script>";
	}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>registrasi</title>
		<style >
		body{
			background-color: skyblue;
			font-family: arial;
			text-align: center;
		}
		table {
			font-family: serif;
			text-align: center;
			box-shadow: 1px;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td><table for ="username">username</table></td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td><label for="password">password</label></td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
		</table>
		<button type="submit" name="register">REGISTER</button>
	</form>

</body>
</html>