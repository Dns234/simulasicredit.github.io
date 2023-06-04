<?php 
require 'functions.php';


if (isset($_POST["masuk"])){

	$username = $_POST ['username'];
	$password = $_POST ['password'];

	if ($username=="" && $password =="") {
		echo "<script>
			alert('Silahkan diisi terlebih dahulu')
		 </script>";
	}else{
		$result = mysqli_query($conn, "SELECT  *  FROM pengguna WHERE username = '$username'");

		//Ce username apakah sudah ada atau belum

		if (mysqli_num_rows($result) === 1) {

			//Cek password dari user
			$row = mysqli_fetch_assoc($result);
			if ($password == $row["password"]) {
				echo "<script> 
					alert ('Berhasil login')
					document.location.href='../simulasi/simulasi.php';
					</script>";
					exit;
			}else{
				echo "<sciprt>
						alert('Username/ password salah');
					</script>";
				return false;
			}
		}
	}
	
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
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
			<p>Login</p>
		</div>
		<div class="login">
			<form action="" method="POST">
				<ul>
					<li><input type="text" name="username" id="username" placeholder="Username"></li>
					<li><input type="password" name="password" id="password" placeholder="Password"></li>
					<li><button type="submit" name="masuk">Masuk</button></li>
				</ul>
			</form>
			<p>Belum punya akun? <a href="sign_in.html">Sign in</a></p>
		</div>
	</div>
</div>	
<footer>
        © Simulasi, Inc. All rights reserved.
</footer>
</body>
</html>