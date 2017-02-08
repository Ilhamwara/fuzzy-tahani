<?php 
include 'php/control/koneksi.php';
$page = $_GET['page'];

if ($page == 'laptop-tambah') {
        ?>

        <div class="col-md-12">
                <h2>Form Tambah Laptop</h2>
                <hr>
                <form action="php/control/control.php?page=tambah-laptop" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">Nama <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Contoh: ASUS 450LC" name="nama" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">Merk <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Contoh: ASUS" name="merk" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">Harga <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Harga" name="harga" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">HDD <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Contoh: 60" name="hdd" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">RAM <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Contoh: 2" name="ram" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">Tipe Processor <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Contoh: Core i5" name="tipe_pros" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">Kecepatan Processor <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Contoh: 2" name="proccesor" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">Layar <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Contoh: 17" name="layar" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">Berat <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Contoh: 11" name="berat" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-xs-2 col-form-label">Pilih Gambar <sup style="color: red;">*</sup></label>
                                <div class="col-xs-8">
                                        <input class="form-control" type="file" name="foto" style="padding: 0px;" required>
                                </div>
                        </div>
                        <div class="form-group">			
                                <div class="text-center col-md-12">
                                        <a href="index.php?page=laptop" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Kembali</a>
                                        <button class="btn btn-success">Simpan</button>
                                </div>
                        </div>
                </form>
        </div>
        <?php
} 
elseif ($page == 'edit-laptop') { 
        if(isset($_GET['key'])){
                $id = $_GET['key'];
                $query = mysql_query("SELECT * FROM barang WHERE id = $id");
                $cek = mysql_fetch_array($query);
                ?>

                <div class="col-md-12">
                        <h2>Form Edit Laptop</h2>
                        <hr>
                        <form class="form-horizontal" action="php/control/control.php?page=edit-laptop&&key=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Nama <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                        <input class="form-control" type="text" placeholder="Contoh: ASUS 450LC" value="<?php echo $cek['nama_barang']; ?>" name="nama" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Merk <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                                <input class="form-control" type="text" placeholder="Contoh: ASUS" value="<?php echo $cek['merk']; ?>" name="merk" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Harga <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                                <input class="form-control" type="text" placeholder="Harga" value="<?php echo $cek['harga']; ?>" name="harga" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">HDD <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                                <input class="form-control" type="text" placeholder="Contoh: 60" value="<?php echo $cek['hdd']; ?>" name="hdd" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">RAM <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                                <input class="form-control" type="text" placeholder="Contoh: 2" value="<?php echo $cek['ram']; ?>" name="ram" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Tipe Processor <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                                <input class="form-control" type="text" placeholder="Contoh: Core i5" value="<?php echo $cek['tipe_processor']; ?>" name="tipe_pros" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Kecepatan Processor <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                                <input class="form-control" type="text" placeholder="Contoh: 2" value="<?php echo $cek['processor']; ?>" name="proccesor" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Layar <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                                <input class="form-control" type="text" placeholder="Contoh: 17" value="<?php echo $cek['layar']; ?>" name="layar" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Berat <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                                <input class="form-control" type="text" placeholder="Contoh: 11" value="<?php echo $cek['berat']; ?>" name="berat" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-xs-2 col-form-label">Pilih Gambar <sup style="color: red;">*</sup></label>
                                        <div class="col-xs-8">
                                                <input class="form-control" type="file" name="foto" value="<?php echo $cek['foto']; ?>" style="padding: 0px;">
                                        </div>
                                </div>
                                <div class="form-group">                        
                                        <div class="text-center col-md-12">
                                                <a href="index.php?page=laptop" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Kembali</a>
                                                <button class="btn btn-success">Simpan</button>
                                        </div>
                                </div>
                        </form>
                </div>

                <?php
        }
}
?>