<html>
<body>
<div class="table zebra-table">
	<?php

	if (isset($_POST['submit'])) {

		$besar_pinjaman = $_POST["besar_pinjaman"];
		$bunga = $_POST["bunga"];
		$jangka = $_POST["jangka"];
		$perbulan = $bunga/12;
	?>
	<div class="hasil">
	<?php  
		echo "<pre>";

		echo "Jumlah Pinjaman          = "."<b>".rupiah($besar_pinjaman)."</b>"."<br>";

		echo "Jangka waktu             = "."<b>".$jangka." Bulan"."</b>"."<br>";

		echo "Suku Bunga               = "."<b>".$bunga.' %'."</b>"."<br>";
 
		echo "</pre>";



		$hutang = $besar_pinjaman;

		$no = 0;

	?>
	</div>
	<table>

			<tr>
				<th>Angsuran ke -</th>

				<th>Angsuran Pokok</th>

				<th>Angsuran Bunga</th>

				<th>Total Angsuran</th>

				<th>Sisa Hutang</th>

			</tr>

			<tr>

				<td>0</td>

				<td>0</td>

				<td>0</td>

				<td>0</td>

				<td><b><?php echo rupiah($besar_pinjaman);?></b></td>

			</tr>

		

			<?php 
				do {
				    $no++;
					$anuitas = hitung_kredit($besar_pinjaman, $jangka, $bunga);
					$ang_bunga = $hutang*(($bunga/12)/100);
					$ang_pokok = $anuitas-$ang_bunga;
					$hutang = $hutang - $ang_pokok;
					$cicilan = $ang_bunga+$ang_pokok;
					?>

			<tr>

				<td><?php echo $no;?></td>

				<td><?php echo rupiah($ang_pokok);?></td>

				<td><?php echo rupiah($ang_bunga);?></td>

				<td><?php echo rupiah($cicilan);?></td>

				<td><?php echo rupiah($hutang);?></td>

			</tr>
		<?php } while ($no < $jangka); ?>

		</table>
	<?php } ?>
</div>

	
</body>
</html>