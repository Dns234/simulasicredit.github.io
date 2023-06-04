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
		<li><a href="simulasi.php">SIMULASI</a></li>
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
			<h2>Simulasi Kredit Bunga Anuitas</h2>
			<p>Kredit bunga anuitas adalah modifikasi dari perhitungan kredit bunga efektif. Modifikasi ini dilakukan untuk mempermudah nasabah dalam membayar per bulannya, karena angsuran tiap bulannya sama.
			</p>
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
				    <li><label>Besar Pinjaman</label></li>  
				    <li><input type="text" name="besar_pinjaman" placeholder="masukan angka tanpa titik"></li>	
				    <li><label>Bunga (%)</label></li>
				    <li><input type="text" name="bunga" placeholder="misal 6.2 ">
					</li>
				    <li><label>Lama Pinjaman (bulan)</label></li>  
				    <li><input type="text" name="jangka" placeholder="masukan jangka waktu peminjaman">
					</li>
				</ul>
			    <button type="submit" name="submit">Simulasikan</button>
			</form>	

		</div>

</div>
<div class="simulasi">
	<?php 
	require 'anuitas.php'
	 ?>
</div>

<footer>
        © Simulasi, Inc. All rights reserved.
</footer>
</body>
</html>