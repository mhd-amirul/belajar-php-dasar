<?php  
require '../functions.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM smartphone WHERE 
				merk LIKE '%$keyword%' 
				OR tahun LIKE '%$keyword%' 
				OR ram LIKE '%$keyword%' 
				OR processor LIKE '%$keyword%'
				";
$smartphone = query($query);

?>

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