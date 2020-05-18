<?php 
session_start();
require '../php/functions.php';
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
	$username = $_COOKIE['username'];
	$hash = $_COOKIE['hash'];

	$result= mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	$row = mysqli_fetch_assoc($result);

	if ($hash === hash('sha256', $row['id'], false)) {
		$_SESSION['username'] = $row['username'];
		header("Location : admin.php");
		exit;
	}
}

if (isset($_SESSION['username'])) {
	header("Location: admin.php");
	exit;
}
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
	if (mysqli_num_rows($cek_user) > 0) {
		$row = mysqli_fetch_assoc($cek_user);
		if (password_verify($password,$row['password'])) {
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['hash'] = hash('sha256',$row['id'], false);
			if (isset($_POST['remember'])) {
				setcookie('username', $row['username'], time() + 60 * 60 * 24);
				$hash = hash('sha256', $row['id']);
				setcookie('hash', $hash,  time() + 60 * 60 * 24 );
			}
		}
		if (hash('sha256', $row['id']) == $_SESSION['hash']) {
			header("Location: admin.php");
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
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>login</title>
</head>
<body>
	<form action="" method="post">

		<div id="card">
			<div id="card-content">
  				<div id="card-title">
  					<?php if (isset($error)) : ?>
			<p style="color: red; font-style: italic; font-size: 10px;">Username atau password salah</p>

		<?php endif; ?>
    				<h2>LOGIN</h2>
    					<div class="underline"></div>
  				</div>
  				<form action="" method="post">
  					<label for="usernamel" style="padding-top:13px">&nbsp;Username</label>
  					<input type="text" name="username" class="form-content">

					  <div class="form-border"></div>
					<label for="password" style="padding-top:13px">&nbsp;Password</label>
					<input type="password" name="password" class="form-content">
					  <div class="form-border"></div>
					<input id="submit-btn" type="submit" name="submit" value="LOGIN" href="admin.php"><a href="registrasi.php" id="signup">Don't have account yet?</a>
  				</form>
  			<p style="text-align: center; font-style: italic; font-size: 10px;">user :193040139 & pass:193040139</p>
		</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
</html>