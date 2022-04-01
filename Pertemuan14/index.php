<?php  
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
</head>
<body>

	<h1>DAFTAR SMARTPHONE</h1>

	<a href="tambah.php">Tambah Data Smartphone!</a><br><br>

	<form action="" method="post">
		<input type="text" name="keyword" autofocus placeholder="Masukkan pencarian ...." size="50" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>

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