<div class="col-md-12">
	<h2>METODE FUZZY TAHANI</h2>
	<hr>
	<div class="col-md-12">

		<style type="text/css">
			.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td{
				border-top: 1px solid #fff ;
			}
		</style>
		<!-- <h3>Bobot Nilai</h3>
		<hr>
		<table class="table text-center">
			<tr>
				<td>
					<b>Harga Murah</b> <br>
					<input type="text" value="Rp 4.000.000" disabled class="form-control">
				</td>
				<td>
					<b>Harga Sedang</b> <br>
					<input type="text" value="Rp 7.000.000" disabled class="form-control">
				</td>
				<td>
					<b>Harga Mahal</b> <br>
					<input type="text" value="Rp 10.000.000" disabled class="form-control">
				</td>				
			</tr>
			<tr>
				<td>
					<b>Processor Pelan</b> <br>
					<input type="text" value="1.8 GHz" disabled class="form-control">
				</td>
				<td>
					<b>Processor Sedang</b> <br>
					<input type="text" value="2.2 GHz" disabled class="form-control">
				</td>
				<td>
					<b>Processor Cepat</b> <br>
					<input type="text" value="2.6 GHz" disabled class="form-control">
				</td>				
			</tr>
			<tr>
				<td>
					<b>HDD Kecil</b> <br>
					<input type="text" value="50 GB" disabled class="form-control">
				</td>
				<td>
					<b>HDD Sedang</b> <br>
					<input type="text" value="500 GB" disabled class="form-control">
				</td>
				<td>
					<b>HDD Besar</b> <br>
					<input type="text" value="1000 GB" disabled class="form-control">
				</td>				
			</tr>
			<tr>
				<td>
					<b>RAM Kecil</b> <br>
					<input type="text" value="1 GB" disabled class="form-control">
				</td>
				<td>
					<b>RAM Sedang</b> <br>
					<input type="text" value="2 GB" disabled class="form-control">
				</td>
				<td>
					<b>RAM Besar</b> <br>
					<input type="text" value="4 GB" disabled class="form-control">
				</td>				
			</tr>
			<tr>
				<td>
					<b>Layar Kecil</b> <br>
					<input type="text" value="11 Inch" disabled class="form-control">
				</td>
				<td>
					<b>Layar Sedang</b> <br>
					<input type="text" value="14 Inch" disabled class="form-control">
				</td>
				<td>
					<b>Layar Besar</b> <br>
					<input type="text" value="17 Inch" disabled class="form-control">
				</td>				
			</tr>
			<tr>
				<td>
					<b>Berat Kecil</b> <br>
					<input type="text" value="1.8 Kg" disabled class="form-control">
				</td>
				<td>
					<b>Berat Sedang</b> <br>
					<input type="text" value="2.2 Kg" disabled class="form-control">
				</td>
				<td>
					<b>Berat Besar</b> <br>
					<input type="text" value="2.6 Kg" disabled class="form-control">
				</td>				
			</tr>
		</table> -->
		<br>

		<h4>
			Lakukan pencarian laptop dengan kriteria yang sudah kami siap kan untuk mendapatkan hasil yang sesuai.	
		</h4>
		<br>
		<form action="#" method="POST">
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Harga</label>
				<div class="col-xs-10">
					<select class="form-control" name="harga" required>
						<option value="0">-- Pilih Range Harga --</option>
						<option value="4000000">Murah</option>
						<option value="7000000">Sedang</option>
						<option value="10000000">Mahal</option>	
					</select>					
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Processor</label>
				<div class="col-xs-10">
					<select class="form-control" name="processor" required>
						<option value="0">-- Pilih Kecepatan Processor --</option>
						<option value="1.8">Pelan</option>
						<option value="2.2">Sedang</option>
						<option value="2.6">Cepat</option>	
					</select>					
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Kapasitas HDD</label>
				<div class="col-xs-10">
					<select class="form-control" name="hdd" required>
						<option value="0">-- Pilih Kapasitas HDD --</option>
						<option value="50">Kecil</option>
						<option value="500">Sedang</option>
						<option value="1000">Besar</option>
					</select>					
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Kapasitas RAM</label>
				<div class="col-xs-10">
					<select class="form-control" name="ram" required>
						<option value="0">-- Pilih Kapasitas RAM --</option>
						<option value="1000">Kecil</option>
						<option value="2000">Sedang</option>
						<option value="4000">Besar</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Layar</label>
				<div class="col-xs-10">
					<select class="form-control" name="layar" required>
						<option value="0">-- Pilih Ukuran Layar --</option>
						<option value="11">Kecil</option>
						<option value="14">Sedang</option>
						<option value="17">Besar</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-xs-2 col-form-label">Berat Barang</label>
				<div class="col-xs-10">
					<select class="form-control" name="berat" required>
						<option value="0">-- Pilih Berat --</option>
						<option value="1.8">Kecil</option>
						<option value="2.2">Sedang</option>
						<option value="2.6">Besar</option>
					</select>
				</div>
			</div>
			<div class="form-group row text-center">				
				<div class="col-xs-12">
					<button class="btn btn-primary" name="src">Proses</button>
				</div>
			</div>
		</form>
		<?php 
		if (isset($_POST['src'])) {
			include 'php/control/koneksi.php';
			$layar = $_POST['layar'];
			$harga = $_POST['harga'];
			$berat = $_POST['berat'];
			$pros = $_POST['processor'];
			$ram = $_POST['ram'];
			$hdd = $_POST['hdd'];

			?>
			<br><br>
			<h3>Bobot Nilai</h3>
			<hr>
			<table class="table table-striped text-center">
				<tr>
					<th class="text-center"><b>Nama</b></th>
					<th class="text-center"><b>Min</b></th>
					<th class="text-center"><b>Mid</b></th>
					<th class="text-center"><b>Max</b></th>
				</tr>
				<tr>
					<td>Harga</td>
					<td>4.000.000</td>
					<td>7.000.000</td>
					<td>10.000.000</td>
				</tr>
				<tr>
					<td>Processor</td>
					<td>1.8</td>
					<td>2.2</td>
					<td>2.6</td>
				</tr>
				<tr>
					<td>HDD</td>
					<td>50</td>
					<td>500</td>
					<td>1000</td>
				</tr>
				<tr>
					<td>RAM</td>
					<td>1</td>
					<td>2</td>
					<td>4</td>
				</tr>
				<tr>
					<td>Layar</td>
					<td>11</td>
					<td>14</td>
					<td>17</td>
				</tr>
				<tr>
					<td>Berat</td>
					<td>1.8</td>
					<td>2.2</td>
					<td>2.6</td>
				</tr>
				<tr>
					<td colspan="4" style="background:#3498db; color: #fff;"><b>Estimasi Saya</b></td>
				</tr>
				<tr>
					<td><b>Harga Perkiraan</b></td>
					<td colspan="3"><b><?php echo $harga; ?></b></td>					
				</tr>
				<tr>
					<td><b>Processor Perkiraan</b></td>
					<td colspan="3"><b><?php echo $pros; ?></b></td>					
				</tr>
				<tr>
					<td><b>HDD Perkiraan</b></td>
					<td colspan="3"><b><?php echo $hdd; ?></b></td>					
				</tr>
				<tr>
					<td><b>RAM Perkiraan</b></td>
					<td colspan="3"><b><?php echo $ram; ?></b></td>					
				</tr>
				<tr>
					<td><b>Layar Perkiraan</b></td>
					<td colspan="3"><b><?php echo $layar; ?></b></td>					
				</tr>
				<tr>
					<td><b>Berat Perkiraan</b></td>
					<td colspan="3"><b><?php echo $berat; ?></b></td>					
				</tr>
			</table>
			<br>
			<h3>Rumus Perhitungan :</h3>
			<br>
			<img src="bagian.PNG"><br><br>
			<img src="nilai1.PNG"><br>
			<img src="nilai2.PNG"><br><br>
			<img src="total.PNG"><br>

			<hr>

			<?php 


			// BOBOT DEFAULT //
			$min_harga = 4000000;
			$mid_harga = 7000000;
			$max_harga = 10000000;
			$nilai_harga1 = round(($mid_harga - $harga) / ($mid_harga - $min_harga));
			$nilai_harga2 = round(($harga - $min_harga) / ($min_harga - $mid_harga));
			$nilai_harga3 = round(($harga - $mid_harga) / ($max_harga - $mid_harga));

			$min_processor = 1.8;
			$mid_processor = 2.2;
			$max_processor = 2.6;
			$nilai_processor1 = round(($min_processor - $pros) / ($mid_processor - $min_processor));
			$nilai_processor2 = round(($pros - $min_processor) / ($min_processor - $mid_processor));
			$nilai_processor3 = round(($pros - $mid_processor) / ($max_processor - $mid_processor));

			$min_hdd = 50;
			$mid_hdd = 500;
			$max_hdd = 1000;
			$nilai_hdd1 = round(($min_hdd - $hdd) / ($mid_hdd - $min_hdd));
			$nilai_hdd2 = round(($hdd - $min_hdd) / ($min_hdd - $mid_hdd));
			$nilai_hdd3 = round(($hdd - $mid_hdd) / ($max_hdd - $mid_hdd));

			$min_ram = 1;
			$mid_ram = 2;
			$max_ram = 4;
			$nilai_ram1 = round(($min_ram - $ram) / ($mid_ram - $min_ram));
			$nilai_ram2 = round(($ram - $min_ram) / ($min_ram - $mid_ram));
			$nilai_ram3 = round(($ram - $mid_ram) / ($max_ram - $mid_ram));

			$min_layar = 11;
			$mid_layar = 14;
			$max_layar = 17;
			$nilai_layar1 = round(($min_layar - $layar) / ($mid_layar - $min_layar));
			$nilai_layar2 = round(($layar - $min_layar) / ($min_layar - $mid_layar));
			$nilai_layar3 = round(($layar - $mid_layar) / ($max_layar - $mid_layar));

			$min_berat = 1.8;
			$mid_berat = 2.2;
			$max_berat = 2.6;
			$nilai_berat1 = round(($min_berat - $berat) / ($mid_berat - $min_berat));
			$nilai_berat2 = round(($berat - $min_berat) / ($min_berat - $mid_berat));
			$nilai_berat3 = round(($berat - $mid_berat) / ($max_berat - $mid_berat));

			$harga_terendah = min($nilai_harga1,$nilai_harga2,$nilai_harga3);
			$processor_terendah = min($nilai_processor1,$nilai_processor2,$nilai_processor3);
			$hdd_terendah = min($nilai_hdd1,$nilai_hdd2,$nilai_hdd3);
			$ram_terendah = min($nilai_ram1,$nilai_ram2,$nilai_ram3);
			$layar_terendah = min($nilai_terendah1,$nilai_terendah2,$nilai_terendah3);
			$berat_terendah = min($nilai_berat1,$nilai_berat2,$nilai_berat3);

			$Z1 = ((($harga*$harga_terendah)+($pros*$processor_terendah)+($hdd*$hdd_terendah)+($ram*$ram_terendah)+($layar*$layar_terendah)+($berat*$berat_terendah)));
			$Z2	= (($harga_terendah+$processor_terendah+$hdd_terendah+$ram_terendah+$layar_terendah+$berat_terendah));
			$nilai = ($Z1 / $Z2);
			?>
			<b>TOTAL HASIL FUZZY TAHANI = <?php echo $nilai; ?> = <?php echo round($nilai); ?></b><br><br>
			Berdasarkan data keriteria yang anda input dan sesuai perhitungan <b>Metode Logic Fuzzy Tahani</b> bahwa laptop yang cocok untuk diambil untuk anda :<br>

			<?php
			$query = mysql_query("SELECT * FROM barang WHERE nilai BETWEEN 0 AND '$nilai'");
			while ($cek = mysql_fetch_array($query)) {
				?>
				<br>
				<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
					<div class="panel panel-default" style="clear: both;">
						<div class="panel-body">
							<a href=""><img src="assets/img/laptop/<?php echo $cek['foto']; ?>" style="width: 100%; height: 200px;" height="150"></a>
							<h4><b><a href="index.php?page=detail-barang&&kode=<?php echo $cek['id']; ?>"><?php echo $cek['nama_barang']; ?></a></b></h4>
						</div>
					</div>
				</div>			
				<?php 
			}
		}
		?>
	</div>
</div>