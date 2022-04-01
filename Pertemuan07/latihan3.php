<?php 
// cek apakah tidak ada data di $_GET
if (!isset($_GET["merk"]) || 
	!isset($_GET["tahun"]) ||
	!isset($_GET["ram"]) ||
	!isset($_GET["processor"]) ||
	!isset($_GET["gambar"])) {
	# code...
	header("Location: latihan2.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Smartphone</title>
</head>
<body>
	<h1>Detail Smartphone</h1>

<ul>
	<li><img src="img/<?php echo $_GET["gambar"]; ?>"></li>
	<li><?php echo $_GET["merk"]; ?></li>
	<li><?php echo $_GET["tahun"]; ?></li>
	<li><?php echo $_GET["ram"]; ?></li>
	<li><?php echo $_GET["processor"]; ?></li>
</ul>

<a href="latihan2.php">Kembali ke daftar smartphone</a>
</body>
</html>