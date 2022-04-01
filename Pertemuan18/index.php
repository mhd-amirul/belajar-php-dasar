<?php
session_start();
if (!isset($_SESSION['login'])) {
	# code...
	header("Location:login.php");
	exit;
}

require 'functions.php';

// konfigurasi pagination
$JumlahDataPerHalaman = 4;

// tentukan jumlah halaman 
// count untuk menhitung jumlah array 
$JumlahData = count(query("SELECT * FROM smartphone"));
$JumlahHalaman = ceil($JumlahData / $JumlahDataPerHalaman);

// cek halaman aktif 
// perkondisian ternary 
$HalamanAktif = (isset($_GET['page'])) ? $_GET['page'] : 1;

// formula perhitungan tampilan pagination
$AwalData = ($JumlahDataPerHalaman * $HalamanAktif) - $JumlahDataPerHalaman;

// query pemanggilan data
// ambil data dari tabel smartphone / query data smartphone
$smartphone = query("SELECT * FROM smartphone LIMIT $AwalData,$JumlahDataPerHalaman"); 



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
</head>
<body>
	<a href="logout.php">Log Out</a>

	<h1>DAFTAR SMARTPHONE</h1>

	<a href="tambah.php">Tambah Data Smartphone!</a><br><br>

	<form action="" method="post">
		<input type="text" name="keyword" autofocus placeholder="Masukkan pencarian ...." size="50" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>

	<!-- Navigasi -->
	<br><br>
	<?php if ($HalamanAktif > 1) : ?>
		<a href="?page=<?= $HalamanAktif - 1; ?>">&laquo</a>
	<?php endif; ?>

	<?php for ($i=1; $i <= $JumlahHalaman; $i++) : ?>
		<?php if ($i == $HalamanAktif) : ?>
			<a href="?page=<?= $i; ?>" style="color: red; font-weight: bold;"><?= $i; ?></a>
		<?php else : ?>
			<a href="?page=<?= $i; ?>"><?= $i; ?></a>
		<?php endif; ?>
	<?php endfor; ?>

	<?php if ($HalamanAktif < $JumlahHalaman) : ?>
		<a href="?page=<?= $HalamanAktif + 1; ?>">&raquo</a>
	<?php endif; ?>
	<!-- Navigasi -->
	
	<br>
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

</body>
</html>