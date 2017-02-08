<?php 
session_start();
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include 'php/include/head.php'; ?>
</head>
<body>
  <div id="wrapper">
    <!-- /. NAV TOP  -->
    <?php include 'php/include/topbar.php'; ?>
    <!-- /. NAV TOP  -->
    <!-- /. NAV SIDE  -->
    <?php include 'php/include/sidebar.php'; ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <!-- /. PAGE INNER  -->
      <div id="page-inner" style="overflow: hidden;">
        <?php 
        error_reporting(0);
        $page = $_GET['page'];
        if($page == 'admin') {
          include 'php/body/admin.php';
        }
        elseif($page == 'laptop'){
         include 'php/body/laptop.php'; 
       }
       elseif(($page == 'laptop-tambah') || ($page == 'edit-laptop')){
         include 'php/body/tambah-laptop.php'; 
       }
       elseif($page == 'fuzzy'){
         include 'php/body/fuzzy.php'; 
       }
       elseif($page == 'login'){
         include 'php/body/login.php'; 
       }
       elseif($page == 'detail-barang'){
         include 'php/body/detail.php'; 
       }
       else{
         include 'php/body/dashboard.php'; 
       }
       ?>
     </div>
     <!-- /. PAGE INNER  -->
   </div>
   <!-- /. PAGE WRAPPER  -->
 </div>
 <?php include 'php/include/footer.php'; ?>
</body>
</html>
