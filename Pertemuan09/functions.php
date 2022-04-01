<?php  
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");


function query($query)
{
	# code...
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		# code...
		$rows[] = $row;
	}
	return $rows;
}

?>