<?php
session_start();
if (!isset($_SESSION['login'])) {
	# code...
	header("Location:login.php");
	exit;
}

require 'functions.php';
// ambil data dari tabel smartphone / query data smartphone

// query pemanggilan data
$smartphone = query("SELECT * FROM smartphone"); 



// tombol cari ditekan
if (isset($_POST["cari"])) {
	# code...
	$smartphone = cari($_POST["keyword"]);
}
?>







<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		
		.loader {
			width: 150px;
			position: absolute;
			top: 125px;
			left: 470px;
			z-index: -1;
			display: none;
		}
	</style>

	<script type="" src="js/jquery-3.6.0.min.js"></script>
	<script type="" src="js/script.js"></script>
</head>
<body>
	<a href="logout.php">Log Out</a>

	<h1>DAFTAR SMARTPHONE</h1>

	<a href="tambah.php">Tambah Data Smartphone!</a><br><br>

	<form action="" method="post">
		<input type="text" name="keyword" autofocus placeholder="Masukkan pencarian ...." size="65" autocomplete="off" id="keyword">
		<button name="cari" id="tombol-cari" type="submit" >Cari !</button>

		<img src="img/loader.gif" class="loader">
	</form>

	<br>
	<div id="container">

	<table border="1" cellpadding="10", cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Merk</th>
			<th>Tahun</th>
			<th>RAM</th>
			<th>Processor</th>
		</tr>
	<?php $i = 1 ?>
	<?php foreach ($smartphone as $row) : ?>
		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]?>">Ubah</a>
				|
				<a href="hapus.php?id=<?= $row["id"]?>" onclick="return confirm('Yakin ingin menghapus file ini?');">Hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"] ?>" width="50"></td>
			<td><?= $row["merk"] ?></td>
			<td><?= $row["tahun"] ?></td>
			<td><?= $row["ram"] ?></td>
			<td><?= $row["processor"] ?></td>
		</tr>
	<?php $i++; endforeach; ?>
	</table>
	</div>
</body>
</html>