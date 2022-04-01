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

	// upload gambar
	$gambar = upload();
	if (!$gambar) {
		# code...
		return false;
	}

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
	$gambarlama = htmlspecialchars($data["gambarlama"]);

	// cek apakah user upload gambar baru
	if ($_FILES['gambar']['error'] === 4) {
		# code...
		$gambar = $gambarlama;
	} else {
		$gambar = upload();
	}

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


function cari($keyword){
	$query = "SELECT * FROM smartphone WHERE 
				merk LIKE '%$keyword%' 
				OR tahun LIKE '%$keyword%' 
				OR ram LIKE '%$keyword%' 
				OR processor LIKE '%$keyword%'
				";

	return query($query);
}



function upload(){
	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpname = $_FILES['gambar']['tmp_name'];

	// cek apakah ada gambar yang di upload
	if ($error === 4) {
		# code...
		echo "<script>
				alert('gambar belum diupload!');
				</script>";
		return false;
	}

	// cek apakah yang di upload adalah gambar
	$ekstensivalid = ['jpg','png','jpeg'];
	// explode untuk memecah string
	$ekstensigambar = explode('.', $namafile);
	// strtolower utk memaksa string menjadi huruf kecil
	$ekstensigambar = strtolower(end($ekstensigambar));
	if (!in_array($ekstensigambar, $ekstensivalid)) {
		# code...
		echo "<script>
				alert('file bukan gambar!');
				</script>";
		return false;
	}

	// cek dan batasi ukuran file
	if ($ukuranfile > 1000000) {
		# code...
		echo "<script>
				alert('file terlalu besar!');
				</script>";
		return false;
	}

	// lolos pengecekan, gambar siap di upload
	// generate nama baru (random)
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensigambar;
	move_uploaded_file($tmpname, 'img/' . $namafilebaru);

	return $namafilebaru;
}



function registrasi($data)
{
	# code...
	global $conn;
	$username = strtolower(stripcslashes($data['username']));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);

	// cek konfirmasi password
	if ($password != $password2) {
		# code...
		echo "
		<script>
			alert('Konfirmasi password tidak sesuai!');
		</script>
	"; return false;
	}

	// cek apakah username ada yg sama
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
	 	# code...
	 	echo "
		<script>
			alert('Nama sudah terdaftar!');
		</script>
	"; return false;
	 } 

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// masukkan data ke database 
	mysqli_query($conn, "INSERT INTO users VALUES ('','$username','$password')");
	return mysqli_affected_rows($conn);

}

?>