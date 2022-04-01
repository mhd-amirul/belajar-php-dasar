<?php
require 'functions.php';

if (isset($_POST["register"])) {
	# code...
	if (registrasi($_POST) > 0) {
		# code...
		echo "
		<script>
			alert('User berhasil ditambahkan!');
			document.location.href = 'login.php';
		</script>
	";
	} else {
		echo mysqli_error($conn);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style type="text/css">
		label{
			display: block;
		}
	</style>
</head>
<body>
	<h1>Halaman Registrasi</h1>

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
				<label for="password2">Confirm Password :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button name="register" type="submit">Sign Up</button>
			</li>
		</ul>
	</form>

</body>
</html>