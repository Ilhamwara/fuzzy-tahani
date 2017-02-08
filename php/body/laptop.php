<?php include 'php/control/koneksi.php'; ?>
<div class="col-md-12">
	<div>
		<h2>Daftar Laptop </h2>
	</div>   
	<?php 
	if ($_SESSION['id']) { 
		?>
		<div style="overflow: hidden;">
			<a href="index.php?page=laptop-tambah" class="btn btn-primary pull-right">Tambah Laptop</a>
		</div>
		<?php } ?>
		<hr>
		<?php
		if ($_GET['message'] == 'berhasil-tambah') { ?>
		<div class="col-lg-12 ">
			<div class="alert alert-success">
				<strong>Data berhasil ditambah </strong>
			</div>
		</div>
		<?php
	}
	elseif ($_GET['message'] == 'berhasil-edit') { ?>
	<div class="col-lg-12 ">
		<div class="alert alert-success">
			<strong>Data berhasil diedit </strong>
		</div>
	</div> 
	<?php
}
elseif ($_GET['message'] == 'delete-barang') { ?>
<div class="col-lg-12 ">
	<div class="alert alert-success">
		<strong>Data berhasil dihapus </strong>
	</div>
</div> 
<?php }


$per_page = 6;

$page_query = mysql_query("SELECT COUNT(*) FROM barang");
$pages = ceil(mysql_result($page_query, 0) / $per_page);

$hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
$start = ($hal - 1) * $per_page;
$show = mysql_query("SELECT * FROM barang LIMIT $start, $per_page");

$row = mysql_num_rows($show);
if ($row == 0) {
	?>

	<div class="col-lg-12 ">
		<div class="alert alert-danger">
			<strong>Data saat ini masih kosong </strong>
		</div>
	</div>
	<?php
}
while ($cek = mysql_fetch_array($show)) { 
	?>

	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
		<div class="panel panel-default" style="clear: both;">
			<div class="panel-body">
				<?php 
				if ($_SESSION['id']) { 
					?>
					<div class="dropdown">
						<button class="btn btn-default dropdown-toggle pull-right" type="button" data-toggle="dropdown"><span class="caret"></span></button>
						<ul class="dropdown-menu pull-right" style="margin-top: 35px;">
							<li><a onclick="return confirm('Apa Anda yakin ingin menghapus barang ini ?');" href="php/control/delete.php?page=delete-barang&&key=<?php echo $cek['id']; ?>" >Hapus</a></li>
							<li><a href="index.php?page=edit-laptop&&key=<?php echo $cek['id']; ?>">Edit</a></li>							
						</ul>
					</div> 
					<?php } ?>
					<br>
					<br>
					<a href=""><img src="assets/img/laptop/<?php echo $cek['foto']; ?>" style="width: 100%; height: 200px;" height="150"></a>
					<h4><b><a href="index.php?page=detail-barang&&kode=<?php echo $cek['id']; ?>"><?php echo $cek['nama_barang']; ?></a></b></h4>
				</div>
			</div>
		</div>
		<?php 
	}
	?>

	<nav aria-label="Page navigation" style="text-align:center; clear: both;">
		<ul class="pagination">
			<?php
			if($pages >= 1 && $hal <= $pages)
			{
				for($x=1; $x<=$pages; $x++)
				{
                                          //echo ($x == $page) ? '<b><a href="?page='.$x.'">'.$x.'</a></b> ' : '<a href="?page='.$x.'">'.$x.'</a> ';
					if($x == $hal){
						echo '  <li class="active"><a href="?page=laptop&&hal='.$x.'">'.$x.'</a></li> ';
					}
					else{
						echo ' <li><a href="?page=laptop&&hal='.$x.'">'.$x.'</a></li>';
					}
				}
			}
			?>
		</ul>
	</nav> 
</div>