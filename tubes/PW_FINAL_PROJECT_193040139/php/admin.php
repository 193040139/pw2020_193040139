<?php 
session_start();
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}
 require '../php/functions.php';
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

 $alatmusik = query("SELECT * FROM alatmusik");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>document</title>
 	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 	<link rel="stylesheet" type="text/css" href="../css/style.css">
 	<link rel="stylesheet" type="text/css" href="../css/stay.css">
 	
 </head>
 <body>
 		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="../php/tambah.php"><button type="button" class="btn btn-outline-primary">Tambah data</button></a>
        <a href="../php/logout.php"><button type="button" class="btn btn-outline-dark">LogOut</button></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" action ="" method="get" name="keyword" autofocus>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
    </form>
  </div>
</div>
</nav>
<h2 style="text-align: center; margin: 20px;">Data Alat musik berbagai daerah di Indonesia</h1>
	<div class="container">
 	<table border="1" cellpadding="13" cellspacing="0" class="table table-striped table-light">
 		<thead class="thead-dark">
 		<tr>
 			<th>#</th>
 			<th>opsi</th>
 			<th>foto</th>
 			<th>Nama</th>
 			<th>Jenis bunyi</th>
			<th>Cara main</th>
			<th>Asal</th>
 		</tr>
 		</thead>
 		<?php if (empty($alatmusik)) : ?>
 			<tr>
 				<td>
 					<h1>Data tidak ditemukan</h1>
 				</td>
 			</tr>
 		<?php else : ?>
 		<?php $i = 1; ?>
 		<?php foreach ($alatmusik as $alt) : ?>
 			<tr>
 				<td><?= $i; ?></td>
 				<td>
 					<a href="../php/ubah.php?id=<?$alt['id'];?>"><button type="button" class="btn btn-outline-primary btn-sm">Ubah</button></a>
 					<a href="../php/hapus.php?id=<?$alt['id'];?>" onclick = "return confirm('Hapus Data??')"><button type="button" class="btn btn-outline-danger btn-sm">Hapus</button></a>
 				</td>
 				<td><img src="../assets/img/<?= $alt['Foto']; ?>" alt=""></td>
 				<td><?= $alt["Nama"]?></td>
				<td><?= $alt["JenisBunyi"] ?></td>
				<td><?= $alt["Cara_main"] ?></td>
				<td><?= $alt["Asal"] ?></td>
 			</tr>
 			<?php $i++; ?>
 		<?php endforeach; ?>
 	<?php endif; ?>
 	</table>
 	</div>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
 </body>
 </html>