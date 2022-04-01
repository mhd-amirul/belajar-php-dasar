<?php  
// koneksi ke dbms
require 'functions.php';

// ambil data id 
$id = $_GET["id"];

// query data id
$sp = query("SELECT * FROM smartphone WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	# code...
	// cek apakah data berhasil diubah
	if (ubah($_POST) > 0) {
		# code...
		echo "
		<script>
			alert('data berhasil diubah!');
			document.location.href = 'index.php';
		</script>
	";
	} else {
	echo "
	<script>
		alert('data gagal diubah!');
		document.location.href = 'index.php';
	</script>
	";
	}
}
?>










<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data Smartphone</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $sp["id"]; ?>">
	<ul>
		<li>
			<label for="merk">Merk : </label>
			<input type="text" name="merk" id="merk" required value="<?= $sp["merk"]; ?>">
		</li>
		<li>
			<label for="tahun">Tahun : </label>
			<input type="text" name="tahun" id="tahun" required value="<?= $sp["tahun"]; ?>">
		</li>
		<li>
			<label for="ram">RAM : </label>
			<input type="text" name="ram" id="ram" required value="<?= $sp["ram"]; ?>">
		</li>
		<li>
			<label for="processor">Processor : </label>
			<input type="text" name="processor" id="processor" value="<?= $sp["processor"]; ?>">
		</li>
		<li>
			<label for="gambar">Gambar : </label>
			<input type="text" name="gambar" id="gambar" value="<?= $sp["gambar"]; ?>">
		</li>
		<li>
			<button type="submit" name="submit">Ubah data!</button>
		</li>
	</ul>
	</form>

</body>
</html>