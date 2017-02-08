<?php 

include 'koneksi.php';

$page = $_GET['page'];


$nama = $_POST['nama'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe_pros'];
$layar = $_POST['layar'];
$harga = $_POST['harga'];
$berat = $_POST['berat'];
$pros = $_POST['proccesor'];
$ram = $_POST['ram'];
$hdd = $_POST['hdd'];

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

$folder = "../../assets/img/laptop/";

$simpan_gambar1 = $folder.basename($_FILES['foto']['name']);

//---------------------------------------- TAMBAH PRODUK ----------------------------------//

if ($page == 'tambah-laptop') {


	if((!empty($_FILES['foto']['name']))){


		$foto		= $_FILES['foto']['name'];
		$type_gambar1	= $_FILES['foto']['type'];	

		if (($type_gambar1 == "image/jpeg" || $type_gambar1 == "image/jpg" || $type_gambar1 == "image/png" || $type_gambar1 == "")) {

			$sql = mysql_query("INSERT INTO barang VALUES('','$nama','$foto','$merk','$ram',NOW(),'$harga','$pros','$berat','$hdd','$tipe','$layar','$nilai')");

			if ($sql){

				move_uploaded_file($_FILES['foto']['tmp_name'],$simpan_gambar1);		

				header('location:../../index.php?page=laptop&&message=berhasil-tambah');
			}
		}

		else{
			echo "invalid Format Image ".$type_gambar.", Back <a href='#'> input</a>";
		}

	}
}
//----------------------------------------TUTUP TAMBAH PRODUK ----------------------------------//

























//---------------------------------------- EDIT PRODUK ----------------------------------//

if ($page == 'edit-laptop') {

	if (isset($_GET['key'])) {

		$id = $_GET['key'];

		if((empty($_FILES['foto']['name']))){

			$sql = mysql_query("UPDATE barang SET nama_barang='$nama',merk='$merk',layar='$layar',harga='$harga',hdd='$hdd',ram='$ram',processor='$pros',berat='$berat',tipe_processor='$tipe',nilai='$nilai' WHERE id='$id'");

			if ($sql){
				header("location:../../index.php?page=laptop&&message=berhasil-edit");
			}
			else{
				echo "string";
			}
		}

		elseif((!empty($_FILES['foto']['name']))){


			$gambar1		= $_FILES['foto']['name'];
			$type_gambar1	= $_FILES['foto']['type'];


			if (($type_gambar1 == "image/jpeg" || $type_gambar1 == "image/jpg" || $type_gambar1 == "image/png" || $type_gambar1 == "")) {

				$sql = mysql_query("UPDATE barang SET nama_barang='$nama',merk='$merk',layar='$layar',harga='$harga',hdd='$hdd',ram='$ram',proccesor='$pros',berat='$berat',tipe_processor='$tipe',foto='$gambar1',nilai='$nilai' WHERE id='$id'");

				if ($sql){

					move_uploaded_file($_FILES['foto']['tmp_name'],$simpan_gambar1);

					header('location:../../index.php?page=laptop&&message=berhasil-edit');
				}
			}

			else{
				echo "invalid Format Image ".$type_gambar.", Back <a href='#'> input</a>";
			}

		}
	}
}
//----------------------------------------TUTUP EDIT PRODUK ----------------------------------//

?>