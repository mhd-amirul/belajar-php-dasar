<?php 
// pengulangan -> for, while, do.. while, foreach(pengulangan khusus array)

// 1. for
// for ($i=0; $i < 5; $i++) { 
// 	# code...
// 	echo "Hello World <br>";
// }

// 2. while
// $i = 0;
// while ($i < 5) {
// 	# code...
// 	echo "Hello World <br>";
// $i++;
// }

// 3. do.. while
// $i = 0;
// do {
// 	# code...
// 	echo "Hello World<br>";
// $i++;
// } while ($i < 5);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Pertemuan 3
	</title>
	<style type="text/css">
		.warna-ganjil{
			background-color: red;
		}
		.warna-genap{
			background-color: green;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<!-- <tr>
			<td>1,1</td>
			<td>1,2</td>
			<td>1,3</td>
			<td>1,4</td>
			<td>1,5</td>
		</tr> -->
		<!-- <?php
			/*for ($i=1; $i <= 3; $i++) { 
				# code...
				echo "<tr>";
				for ($j=1; $j <= 5; $j++) { 
					# code...
					echo "<td>$i,$j</td>";
				}
				echo "</tr>";
			}*/

		?> -->

		<?php for ($i=1; $i <= 5; $i++) : ?>
			<?php if( $i % 2 == 0) : ?>
				<tr class="warna-genap">
			<?php elseif($i % 2 == 1) : ?>
				<tr class="warna-ganjil">
			<?php else : ?>
				<tr>
			<?php endif; ?>
				<?php for ($j=1; $j <= 5; $j++) : ?>
					<td><?php echo "$i,$j"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>

	</table>

</body>
</html>