  <div class="row">
    <div class="col-lg-12">
     <h2><?php if($_SESSION['id']){echo 'ADMIN';} ?> DASHBOARD</h2>   
   </div>
 </div>              
 <!-- /. ROW  -->
 <hr />
 <div class="row">
  <div class="col-lg-12 ">
    <div class="alert alert-info">
     <strong>Welcome <?php if($_SESSION['id']){echo 'ADMIN';} ?> ! </strong>
   </div>
 </div>
</div>

<p class="text-center">
  Selamat datang di aplikasi pendukung keputusan untuk memilih laptop menggunakan metode fuzzy tahani.
</p>
<img src="assets/img/graph.gif" style="width: 100%;">