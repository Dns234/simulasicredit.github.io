
<body>	

	<?php

function buatrp($angka){

		$jadi ="Rp. " .number_format($angka,2,',','.');

		return $jadi;

	}

	?>

<hr>

<div class="table zebra-table">
	<?php

	if (isset($_POST['btn-kalkulasi'])) {

		$jumlah_pinjaman = $_POST['jumlah'];

		$lama_pinjaman = $_POST['lama'];



		if($lama_pinjaman==12){

			$bunga_pertahun=10.56;

		}elseif ($lama_pinjaman==24) {

			$bunga_pertahun=12;

		}elseif ($lama_pinjaman==36) {

			$bunga_pertahun=14.40;

		}elseif ($lama_pinjaman==48) {

			$bunga_pertahun=14.40;

		}elseif ($lama_pinjaman==60) {

			$bunga_pertahun=15.36;

		}elseif ($lama_pinjaman==72) {

			$bunga_thn=15.36;

		}elseif ($lama_pinjaman==84) {

			$bunga_pertahun=15.36;

		}



		$bunga_perbulan=$bunga_pertahun/12;

		$bunga_rp = $jumlah_pinjaman/$bunga_pertahun;

		$angsuran_bunga=$jumlah_pinjaman*$bunga_perbulan/100;

		$angsuran_pokok = $jumlah_pinjaman/$lama_pinjaman;

		$jumlah = $angsuran_pokok+$angsuran_bunga;


		?>
		<div class="hasil">
			<?php  
			echo "<pre>";

			echo "Jumlah Pinjaman          = "."<b>".buatrp($jumlah_pinjaman)."</b>"."<br>";

			echo "Lama Pinjaman            = "."<b>".$lama_pinjaman." Bulan"."</b>"."<br>";

			echo "Bunga per tahun          = "."<b>".$bunga_pertahun.' %'."</b>"."<br>";

			echo "Bunga per bulan          = "."<b>".$bunga_perbulan.' %'."</b>".'<br>';

			echo "<br>";

			echo "Angsuran Pokok Per Bulan = "."<b>".buatrp($angsuran_pokok)."</b>"."<br>";

			echo "Angsuran Bunga Per Bulan = "."<b>".buatrp($angsuran_bunga)."</b>"."<br>";

			echo "                           _____________________ ( + )<br>";

			echo "Total Angsuran Per Bulan = "."<b>".buatrp($jumlah)."</b>";

			echo "</pre>";




		$row=$jumlah_pinjaman;

		$no=1;

		?>
		</div>
	<table>

			<tr>

				<th>Angsuran ke -</th>

				<th>Angsuran Pokok</th>

				<th>Angsuran Bunga</th>

				<th>Total Angsuran</th>

				<th>Baki Debet</th>

			</tr>

			<tr>

				<td>0</td>

				<td>0</td>

				<td>0</td>

				<td>0</td>

				<td><b><?php echo buatrp($jumlah_pinjaman);?></b></td>

			</tr>

		

	<?php while ( $row > 1) { $row=$row-$angsuran_pokok; ?>



			<tr>

				<td><?php echo $no++;?></td>

				<td><?php echo buatrp($angsuran_pokok);?></td>

				<td><?php echo buatrp($angsuran_bunga);?></td>

				<td><?php echo buatrp($jumlah);?></td>

				<td><?php echo buatrp($row);?></td>

			</tr>

			

		<?php }

			$tot_ang_pokok=$angsuran_pokok*$lama_pinjaman;

			$tot_ang_bunga=$angsuran_bunga*$lama_pinjaman;

			$tot_jumlah=$jumlah*$lama_pinjaman;

		?>



			<tr>

				<td></td>

				<td><b><?php echo buatrp($tot_ang_pokok);?></b></td>

				<td><b><?php echo buatrp($tot_ang_bunga);?></b></td>

				<td><b><?php echo buatrp($tot_jumlah);?></b></td>

				<td></td>

			</tr>

		</table>

</div>

<div class="container"><br></div>

	<?php } ?>
</body>
</html>