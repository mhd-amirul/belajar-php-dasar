<?php  
require 'functions.php';
// ambil data dari tabel smartphone / query data smartphone

$smartphone = query("SELECT * FROM smartphone"); 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>DAFTAR SMARTPHONE</h1>

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
			<td><a href="">Ubah</a>|<a href="">Hapus</a></td>
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