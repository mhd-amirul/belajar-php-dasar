<?php 
Function salam($waktu = "pagi", $nama = "Administrator"){
	return "Selamat $waktu, $nama";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?php echo salam("Siang","Amirul"); ?></h1>
</body>
</html>