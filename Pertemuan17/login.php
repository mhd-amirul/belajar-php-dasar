<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['nomor']) && isset($_COOKIE['key'])) {
	# code...
	$id = $_COOKIE['nomor'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id 
	$result = mysqli_query($conn, "SELECT username FROM users WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		# code...
		$_SESSION['login'] = true;

	}
}

if (isset($_SESSION['login'])) {
	# code...
	header("Location:index.php");
	exit;
}


// cek tombol submit
if (isset($_POST['login'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	// cek username
	if (mysqli_num_rows($result)) {
		# code...
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row['password'])) {
			# code...
			$_SESSION['login'] = true;

			// cek remember me 
			if (isset($_POST['remember'])) {
				# code...
				// buat cookie 
				setcookie('nomor', $row['id'], time()+1800);
				setcookie('key', hash('sha256', $row['username']), time()+1800);

			}

			header("Location:index.php");
			exit;
		}
	}

	$error = true;

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<h1>Halaman Login</h1>

<?php if (isset($error)) : ?>
	<p style="color: red; font-style: italic;">Username / Password Salah</p>
<?php endif; ?>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<input type="checkbox" name="remember" id="remember">
				<label for="remember">Remember Me</label>
			</li>
			<li>
				<button type="submit" name="login">Log In</button>
			</li>
			<li>
				<a href="registrasi.php">Create Account!</a>
			</li>
		</ul>
	</form>

</body>
</html>