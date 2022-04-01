<?php  
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil data dari tabel smartphone / query data smartphone
$result = mysqli_query($conn, "SELECT * FROM smartphone");

// cek koneksi
// if ( !$result ) {
// 	# code...
// 	echo mysqli_error($conn);
// }

// ambil data (fetch) dari objek result
// ada 4 cara :
// mysqli_fetch_row() => mengembalikan array numerik
// mysqli_fetch_assoc() => mengembalikan array associative
// mysqli_fetch_array() => mengembalikan array array numerik dan array associative
// mysqli_fetch_object()=>Menggunakan objek cth (%sp->objek)

// while ($sp = mysqli_fetch_assoc($result)) {
// 	# code...
// 	var_dump($sp);
// }

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
	<?php while ($row = mysqli_fetch_assoc($result)) : ?>
		<tr>
			<td><?= $i ?></td>
			<td><a href="">Ubah</a>|<a href="">Hapus</a></td>
			<td><img src="img/<?= $row["gambar"] ?>" width="50"></td>
			<td><?= $row["merk"] ?></td>
			<td><?= $row["tahun"] ?></td>
			<td><?= $row["ram"] ?></td>
			<td><?= $row["processor"] ?></td>
		</tr>
	<?php $i++; endwhile; ?>
	</table>

</body>
</html>