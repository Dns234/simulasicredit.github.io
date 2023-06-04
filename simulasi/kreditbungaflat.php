<!DOCTYPE html>
<html>
<head>
	<title>SIMULASI</title>
	<link rel="stylesheet" type="text/css" href="style_simulasi_3.css">
	<meta name="viewport" content="width = device-width,initial-scale=1.0">
</head>
<nav>
	<input type="checkbox" id="check">
	<label for="check">
		<img src="img/menu.png" class="checkbtn">
	</label>
	<div class="header"><h1>Simulasi Credit</h1></div>
	<ul>
	<li><a href="../web/index.html">HOME</a></li>
		<li><a href="kreditbungaflat.php">SIMULASI</a></li>
		<li><a href="../web/login.php">LOGIN</a></li>
		<li><a href="../web/sign_in.php">SIGN IN</a></li>
		<li><a href="../web/index.html">ABOUT US</a></li>
	</ul>
</nav>
<class class="kredit">
	<p>Kalkulator</p>
	<p class="judul">Simulasi Kredit</p>
</class>
<div class="isi">

	<div class="sidebar">
		<p>Pilih bentuk simulasi</p>
		<ul>
			<li><a href="simulasi.php">Simulasi kredit anuitas</a> </li>
			<li><a href="kreditbungaflat.php">Simulasi kredit Bunga Flat</a></li>
		</ul>
	</div>
	<div class='content'>
		<div class="text">
			<h2>Simulasi Kredit Bunga Flat</h2>
			<p> Bunga flat adalah bunga yang jumlah pembayaran pokok dan bunga kredit yang besarnya sama setiap bulan. <br>
			Bunga flat biasanya diperuntukkan untuk kredit jangka pendek seperti  kredit kendaraan bermotor dan kredit tanpa agunan. </p>
			<br>
			<p>Isi kolom di bawah untuk mulai menghitung.</p>
		</div>
		<div class="wrap">
			<?php

			function rupiah($angka) { 
				$jadi = "Rp ".number_format($angka,2,',','.');
				return $jadi; 
			}


			function hitung_kredit($besar_pinjaman, $jangka, $bunga) { 
				$bunga_bulan = ($bunga/12)/100;
				$pembagi =1-(1/pow(1+$bunga_bulan,$jangka));
				$hasil = $besar_pinjaman/($pembagi/$bunga_bulan);
				return $hasil; 
			}
			?>
			<form action="" method="post">
				<ul>
				<li>Jumlah Pinjaman  </li>
				<li><input type="text" name="jumlah" placeholder="masukan angka tanpa titik"></li>
			<br>

				<li>Lama Peminjaman : </li>

				<li><select name="lama" id="myPinjam" onchange="myFunction()" class="form-control" required>

					<option value="">-Pilih-</option>

					<option value="12">12 Bulan</option>

					<option value="24">24 Bulan</option>

					<option value="36">36 Bulan</option>

					<option value="48">48 Bulan</option>

					<option value="60">60 Bulan</option>

					<option value="72">72 Bulan</option>

					<option value="84">84 Bulan</option>

				</select></li>

				<button type="submit" name="btn-kalkulasi" class="btn btn-ku" value="Kalkulasi">Kalkulasi</button>
				</ul>
			</form>
		</div>
</div>
<div class="simulasi">
	<?php 
	require 'simulasikreditbungaflat.php'
	 ?>
</div>

<footer>
        © Simulasi, Inc. All rights reserved.
</footer>
</body>
</html>