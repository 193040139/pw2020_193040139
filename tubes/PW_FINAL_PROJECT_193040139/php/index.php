	<?php 
	require '../php/functions.php';
	$alatmusik = query("SELECT * FROM alatmusik");
	if (isset($_GET['cari'])) {
		$keyword =isset($_GET['keyword']) ? $_GET['keyword'] : null;
		$alatmusik = query("SELECT * FROM alatmusik WHERE 
							Nama LIKE '%$keyword%' OR
							JenisBunyi LIKE '%$keyword%' OR 
							Cara_main LIKE '%$keyword%' OR
							Asal LIKE '%$keyword%' ");
	}else {
		$alatmusik = query("SELECT * FROM alatmusik");
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

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>index</title>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
  <a class="navbar-brand" href="index.php"><img src="../assets/img/b.jpg" width="30" height="30" alt="" loading="lazy"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="../php/login.php"><button type="button" class="btn btn-outline-dark">Login</button></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" action ="" method="get" name="keyword" autofocus>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
    </form>
  </div>
</div>
</nav>
<div class="container">
	<h2>Alat Musik Tradisional Indonesia</h2>
	<?php if (empty($alatmusik)) : ?>
		<h1>Data tidak ditemukan</h1>
		<?php else : ?>
	<?php foreach ($alatmusik as $alt) : ?>
			<div class="kotak">
			<img src="../assets/img/<?= $alt['Foto']; ?>" alt="" title="<?= $alt['Nama']; ?>">
			<h4><?= $alt["Nama"] ?></h4>
			<h5><?= $alt["Nama"] ?> adalah alat musik yang berasal dari <?= $alt["Asal"] ?> dan merupakan salah satu dari alat musik daerah sana </h5>
			<h6>selekapnya...</h6>
			<p>
				<a href="../php/detail.php?id=<?=$alt['id']?>">
					<?= $alt["Nama"] ?>
				</a>
			</p>
		</div>
	<?php endforeach; ?>
<?php endif; ?>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>