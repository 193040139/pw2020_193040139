<?php 
session_start();
require '../php/functions.php';

if (isset($_SESSION['username'])) {
	header("Location: ../php/admin.php");
	exit;
}
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	if (mysqli_num_rows($cek_user) == 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if ($password == $row['password']) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = $_POST['id'];
		}
		if ($row['id'] == $_SESSION['hash']) {
			header("Location: ../php/admin.php");
			die;
		}
		header("Location: ../php/index.php");
		die;
	}
	$error = true;
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="" method="post">
		<?php if (isset($error)) : ?>
			<p style="color: red; font-style: italic;">Username atau password salah</p>
		<?php endif; ?>
		<table>
			<tr>
				<td><label for="username">Username</label></td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td><label for="password">password</label></td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
		</table>
		<div class="remember">
			<input type="checkbox" name="remember">
			<label for="remember">Remember me</label>
		</div>
		<button type="submit" name="submit">Login</button>
	</form>

</body>
</html>