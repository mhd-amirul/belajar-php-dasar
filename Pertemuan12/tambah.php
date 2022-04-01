<?php  
// koneksi ke dbms
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	# code...
	if (tambah($_POST) > 0) {
		# code...
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'index.php';
		</script>
	";
	} else {
	echo "
	<script>
		alert('data gagal ditambahkan!');
		document.location.href = 'index.php';
	</script>
	";
	}
}
?>










<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Data Smartphone</h1>
	<form action="" method="post">
	<ul>
		<li>
			<label for="merk">Merk : </label>
			<input type="text" name="merk" id="merk" required>
		</li>
		<li>
			<label for="tahun">Tahun : </label>
			<input type="text" name="tahun" id="tahun" required>
		</li>
		<li>
			<label for="ram">RAM : </label>
			<input type="text" name="ram" id="ram" required>
		</li>
		<li>
			<label for="processor">Processor : </label>
			<input type="text" name="processor" id="processor">
		</li>
		<li>
			<label for="gambar">Gambar : </label>
			<input type="text" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">Tambah data!</button>
		</li>
	</ul>
	</form>

</body>
</html>