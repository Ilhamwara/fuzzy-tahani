<?php 
error_reporting(0);
?>
<nav class="navbar-default navbar-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
      <?php $page = $_GET['page']; ?>
      <li <?php if(!$page){   ?> class="active-link" <?php }  ?> >
        <a href="index.php?page=dashboard" ><i class="fa fa-desktop "></i>Dashboard</a>
      </li>
      <li <?php if($page == 'laptop'){   ?> class="active-link" <?php } else{}?> >
        <a href="index.php?page=laptop" ><i class="fa fa-laptop "></i>Laptop</a>
      </li>       
      <li <?php if($page == 'fuzzy'){   ?> class="active-link" <?php } else{}?> >
        <a href="index.php?page=fuzzy" ><i class="fa fa-rocket "></i>Metode Fuzzy Tahani</a>
      </li>
      <?php 
      if ($_SESSION['id']) { 
        ?>
        <li <?php if($page == 'admin'){   ?> class="active-link" <?php } else{}?> >
          <a href="index.php?page=admin" ><i class="fa fa-user "></i>Admin</a>
        </li>
        <li>
          <a href="php/control/logout.php" ><i class="fa fa-sign-out "></i>Logout</a>
        </li>    
        <?php  
      }
      else{
        ?>
        <li <?php if($page == 'login'){   ?> class="active-link" <?php } else{}?> >
          <a href="index.php?page=login" ><i class="fa fa-sign-in "></i>Login</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </nav>