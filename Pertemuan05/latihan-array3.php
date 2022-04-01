<?php  
$mahasiswa = [
	["Muhammad Amirul","1857301023","Teknik Informatika","amirul@pnl.ac.id"],
	["Muhammad Rifal","1857301093","Teknik Kimia","rifal@pnl.ac.id"],
	["Muhammad Zaki","1857301028","Teknik Sipil","Zaki@pnl.ac.id"],
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>
	<ul>
		<li>Nama : <?php echo $mhs[0]; ?></li>
		<li>NIM : <?php echo $mhs[1]; ?></li>
		<li>Jurusan : <?php echo $mhs[2]; ?></li>
		<li>Email : <?php echo $mhs[3]; ?></li>
	</ul>
<?php endforeach; ?>

</body>
</html>