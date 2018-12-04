<?php 
session_start();
include "config.php";
include "secure_log.php";
include "controller/waktu_log.php";
include "controller/pagin2.php";
@$type = addslashes(strip_tags($_GET['type']));
@$mod = addslashes(strip_tags($_GET['mod']));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author"  content="Alan Nuari"/>
  <meta name="description" content="Aplikasi Monitoring Device"/>
  <title>Aplikasi Monitoring Device</title>
  <link rel="shortcut icon" href="<?=$base_url?>assets/img/logopln.png" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=$base_url?>assets/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$base_url?>assets/css/font-awesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$base_url?>assets/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=$base_url?>assets/css/skins/_all-skins.min.css">
  
  <!-- jQuery 2.2.3 -->
  <script src="<?=$base_url?>assets/js/jquery-2.2.3.min.js"></script>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=$base_url?>plugins/datatables/dataTables.bootstrap.css">

  <script type="text/javascript">
      function displayTime(){          
          var time = new Date();          
          var sh = time.getHours() + "";          
          var sm = time.getMinutes() + "";          
          var ss = time.getSeconds() + "";          
          document.getElementById("clock1").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
      }
  </script>
</head>
<body class="hold-transition skin-red sidebar-mini"  onLoad="displayTime(); setInterval('displayTime()', 1000 )">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=$base_url;?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Pencatatan</b> Device</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pencatatan </b>Device</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=$base_url?>assets/img/logopln.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$_SESSION["sess_nama"]?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li class="<?php if ($mod=='') echo 'active ';?>treeview">
          <a href="<?=$base_url?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>            
          </a>          
        </li>

        <li class="<?php if ($mod=='device') echo 'active ';?>treeview">
          <a href="<?=$base_url;?>device">
            <i class="fa fa-file-text-o"></i>
            <span>List Device</span>            
          </a>          
        </li>

        <li class="<?php if ($mod=='peralatan') echo 'active ';?>treeview">
          <a href="<?=$base_url;?>peralatan">
            <i class="fa fa-file-text-o"></i>
            <span>Peralatan</span>            
          </a>          
        </li>

        <li class="<?php if ($mod=='ping') echo 'active ';?>treeview">
          <a href="<?=$base_url;?>ping">
            <i class="fa fa-file-text-o"></i>
            <span>Test Connection</span>            
          </a>          
        </li>

        <?php if(isset($_SESSION['sess_level']) && ($_SESSION['sess_level']=='1')): ?>      
        <li class="<?php if ($mod=='log') echo 'active ';?>treeview">
          <a href="<?=$base_url;?>log">
            <i class="fa fa-eye"></i>
            <span>Log User</span>            
          </a>          
        </li>
        <li class="<?php if (($mod=='users') or ($mod=='dvc') or ($mod=='location') ) echo 'active ';?>treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if ($mod=='users') echo 'active ';?>"><a href="<?=$base_url;?>users"><i class="fa fa-users"></i> User</a></li>
            <li class="<?php if ($mod=='dvc') echo 'active ';?>"><a href="<?=$base_url;?>dvc"><i class="fa fa-desktop"></i> Device</a></li>
            <li class="<?php if ($mod=='location') echo 'active ';?>"><a href="<?=$base_url;?>location"><i class="fa fa-map-marker"></i> Location</a></li>
          </ul>
        </li> 
        <?php endif; ?>

        <li class="header">MENU USER</li>
        <li class="<?php if ($mod=='profile') echo 'active ';?>treeview">
          <a href="<?=$base_url?>profile">
            <i class="fa fa-user"></i> <span>Profile</span>            
          </a>          
        </li>
        <li>
          <a href="<?=$base_url;?>out">
            <i class="fa fa-sign-out text-danger"></i>
            <span>Logout</span>            
          </a>          
        </li>               
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include "act.php"; ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="hidden-xs">
      <i class="fa fa-calendar"></i>       
          <?php echo hariindo(date("w")); echo date(", d "); echo bulanindo(date("m")); echo date(" Y"); ?>      
      <i class="fa fa-clock-o"></i> <span id="clock1">jam</span>    
      |
      <strong>Copyright &copy; 2017 <a href="http://www.pln-kitsbs.co.id">PLN KITSBS</a>.</strong> All rights
      reserved.
    </div>
  </footer>

  
  
</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.6 -->
<script src="<?=$base_url?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=$base_url?>assets/js/app.min.js"></script>
<!-- DataTables -->
<script src="<?=$base_url?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=$base_url?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#tabel1").DataTable({
      "oLanguage": {
        "sEmptyTable":       "Tidak ada data ditemukan.",
        "sInfo":             "Menampilkan _START_ - _END_ dari _TOTAL_ data",
        "sInfoEmpty":        "Menampilkan 0 ke 0 dari 0 data",
        "sInfoFiltered":     "(filtered dari _MAX_ total data)",
        "sInfoPostFix":      "",
        "sLengthMenu":       "Menampilkan _MENU_ data",
        "sLoadingRecords":   "Menampilkan...",
        "sProcessing":       "Memproses...",
        "sSearch":           "Cari:",
        "sZeroRecords":      "Data tidak ditemukan"
      }
    });
    $('#tabel2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
