<?php  
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
	# code...
	// cek username dan password
	if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
	 	# code...
	// jika benar redirect ke halamam Admin
	 	header("Location: hlmadmin.php");
	 	exit;
	 } 
	// jika salah tampilkan pesan kesalahan
	 else{
	 	$error = true;
	 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login Admin</h1>

<?php if (isset($error)) : ?>
<p style="color: red; font-style: italic; ">username / password salah</p>
<?php endif; ?>

<ul>
	<form action="" method="post">
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="submit">Login</button>
		</li>
	</form>
</ul>
</body>
</html>