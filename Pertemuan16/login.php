<?php
session_start();

if (isset($_SESSION['login'])) {
	# code...
	header("Location:index.php");
	exit;
}

require 'functions.php';

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
				<button type="submit" name="login">Log In</button>
			</li>
			<li>
				<a href="registrasi.php">Create Account!</a>
			</li>
		</ul>
	</form>

</body>
</html>