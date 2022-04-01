<?php  
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// pemanggilan data
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


// menambahkan data
function tambah($data)
{
	# code...
	global $conn;
	// ambil data dari tiap elemen dalam form
	// berguna untuk mengatasi hacking style
	$merk = htmlspecialchars($data["merk"]);
	$tahun = htmlspecialchars($data["tahun"]);
	$ram = htmlspecialchars($data["ram"]);
	$processor = htmlspecialchars($data["processor"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "INSERT INTO smartphone 
				VALUES 
		('','$merk','$tahun','$ram','$processor','$gambar')";

	// gunakan query 
	mysqli_query($conn, $query);

	// cek row yang berubah
	return mysqli_affected_rows($conn);
}



// function cekhasil()
// {
// 	# code...
//	cek apakah data berhasil ditambahkan atau tidak
// 	global $conn;
// 	if (mysqli_affected_rows($conn)) {
// 		# code...
// 		echo "berhasil";
// 	} else{
// 		echo "gagal";
// 		echo "<br>";
// 		echo mysqli_error($conn);
// 	}
// }




function hapus($id)
{
	# code...
	global $conn;
	$query = "DELETE FROM smartphone WHERE id = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function ubah($data)
{
	global $conn;
	// ambil data dari tiap elemen dalam form
	// berguna untuk mengatasi hacking style
	$id = ($data["id"]);
	$merk = htmlspecialchars($data["merk"]);
	$tahun = htmlspecialchars($data["tahun"]);
	$ram = htmlspecialchars($data["ram"]);
	$processor = htmlspecialchars($data["processor"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "UPDATE smartphone 
				SET merk = '$merk', 
				tahun = '$tahun', 
				ram = '$ram', 
				processor = '$processor', 
				gambar = '$gambar' 
				WHERE id = $id";

	// gunakan query 
	mysqli_query($conn, $query);

	// cek row yang berubah
	return mysqli_affected_rows($conn);
}
?>