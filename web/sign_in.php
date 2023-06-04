<?php 

//koneksi ke database

require 'functions.php';

if (isset($_POST["register"])) {
	if (registrasi($_POST) > 0 ) {
		echo "<script> 
				alert('Berhasil Sign in');
				document.location.href='login.php';
			</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN</title>
	<link rel="stylesheet" type="text/css" href="style_login_2.css">
</head>
<nav>
	<div class="header"><h1>Simulasi Credit</h1></div>
	<ul>
	<li><a href="../simulasi/simulasi.php">SIMULASI</a></li>
		<li><a href="login.php">LOGIN</a></li>
		<li><a href="sign_in.php">SIGN IN</a></li>
		<li><a href="index.html">ABOUT US</a></li>
	</ul>
</nav>
<div class="isi">
	<div class="wrap">
		<div class="text">
			<p>sign in</p>
		</div>
		<div class="login">
			<form action="" method="POST">
				<ul>
					<li><input type="text" name="username" id="username" placeholder="Username"></li>
					<li><input type="password" name="password" id="password" placeholder="Password"></li>
					<li><input type="password" name="password2" id="password2" placeholder="Confirm Password"></li>
					<li><button type="submit" name="register">Masuk</button></li>
				</ul>
			</form>
		</div>
	</div>
</div>	
<footer>
        © Simulasi, Inc. All rights reserved.
</footer>
</body>
</html>