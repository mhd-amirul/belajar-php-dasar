<?php  
$Smartphone = [
	["Merk" => "Oppo", "Tahun" => "2020","RAM" => "8gb","Processor" => "Octa Core","Gambar" => "oppo.jpg"],
	["Merk" => "Asus", "Tahun" => "2018","RAM" => "2gb","Processor" => "Snapdragon","Gambar" => "asus.jpg"],
	["Merk" => "Realme", "Tahun" => "2019","RAM" => "4gb","Processor" => "Octa Core","Gambar" => "realme.jpg"],
	["Merk" => "Iphone", "Tahun" => "2020","RAM" => "8gb","Processor" => "iOS","Gambar" => "iphone.jpg"],
	["Merk" => "Samsung", "Tahun" => "2021","RAM" => "3gb","Processor" => "Snapdragon","Gambar" => "samsung.jpg"],
	["Merk" => "Vivo", "Tahun" => "2020","RAM" => "6gb","Processor" => "Snapdragon","Gambar" => "vivo.jpg"],
	["Merk" => "Huawei", "Tahun" => "2017","RAM" => "8gb","Processor" => "Snapdragon","Gambar" => "huawei.jpg"],
	["Merk" => "LG", "Tahun" => "2017","RAM" => "2gb","Processor" => "Qualcomm","Gambar" => "lg.jpg"],
	["Merk" => "Blackberry", "Tahun" => "2015","RAM" => "6gb","Processor" => "Blackberry OS","Gambar" => "blackberry.jpg"],
	["Merk" => "Advan", "Tahun" => "2020","RAM" => "2gb","Processor" => "Snapdragon","Gambar" => "advan.jpg"],
	["Merk" => "Infinix", "Tahun" => "2019","RAM" => "4gb","Processor" => "Snapdragon","Gambar" => "infinix.jpg"],
]

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Smartphone</title>
</head>
<body>
	<h1>Daftar Smartphone</h1>
<ul>
	<?php foreach ($Smartphone as $sp) : ?>
		<li>
			<a href="latihan3.php?merk=<?php echo $sp["Merk"];?>&tahun=<?php echo $sp["Tahun"];?>&gambar=<?php echo $sp["Gambar"];?>&
			ram=<?php echo $sp["RAM"]?>&processor=<?php echo $sp["Processor"] ?>">
			<?php echo $sp["Merk"]; ?></a>
		</li>
	<?php endforeach; ?>
</ul>
</body>
</html>