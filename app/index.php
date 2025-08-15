<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php');?>
<?php include('../conf/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php');?>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){
        include('dashboard.php');
      }
      else if($_GET['page']=='data-kriteria'){
        include('data_kriteria.php');
      }
      else if($_GET['page']=='edit-data-kriteria'){
        include('edit/edit_data_kriteria.php');
      }
      else if($_GET['page']=='data-sub-kriteria'){
        include('data_sub_kriteria.php');
      }
      else if($_GET['page']=='edit-data-sub-kriteria'){
        include('edit/edit_data_sub_kriteria.php');
      }
      else if($_GET['page']=='data-alternatif'){
        include('data_alternatif.php');
      }
      else if($_GET['page']=='edit-data-alternatif'){
        include('edit/edit_data_alternatif.php');
      }
      else if($_GET['page']=='data-penilaian'){
        include('data_penilaian.php');
      }
      else if($_GET['page']=='edit-data-penilaian'){
        include('edit/edit_data_penilaian.php');
      }
      else if($_GET['page']=='data-perhitungan'){
        include('data_perhitungan.php');
      }
      else if($_GET['page']=='data-hasil-akhir'){
        include('data_hasil_akhir.php');
      }
      else if($_GET['page']=='data-user'){
        include('data_user.php');
      }
      else if($_GET['page']=='edit-data-user'){
        include('edit/edit_data_user.php');
      }
      else if($_GET['page']=='data-info'){
        include('data_info.php');
      }  
      else if($_GET['page']=='data-cara'){
        include('data_cara.php');
      }  
      else{
        include('not_found.php');
      }
  }
  else{
    include('dashboard.php');
  }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
