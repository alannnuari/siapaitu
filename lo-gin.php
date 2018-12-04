<?php include "config.php";?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author"  content="Alan Nuari"/>
  <meta name="description" content="Aplikasi Monitoring Device"/>
  <title>Aplikasi Pencatatan Device</title>
  <link rel="shortcut icon" href="<?=$base_url?>assets/img/logopln.png" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=$base_url?>assets/bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$base_url?>assets/css/font-awesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$base_url?>assets/css/AdminLTE.css">
  <script src="<?=$base_url?>assets/js/jquery-2.2.3.min.js"></script>
</head>
<body class="hold-transition login-page" style="background-image: url(assets/img/back.png);background-size: cover;">
<script type="text/javascript">
  $(document).ready(function(){
                 
      function search(){

         var mac=$("#mac").val();

          if(mac!=""){
                $("#info").html("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mencari Data..");
                $.ajax({
                    type:"post",
                    url:"carimac.php",
                    data:"mac="+mac,
                    success:function(data){
                      $("#info").html(data);
                      
                    }
                });
                $("#infomac").html("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mencari Data Vendor MAC Address..");
                $.ajax({
                    type:"post",
                    url:"carivendor.php",
                    data:"mac="+mac,
                    success:function(data){
                      $("#infomac").html(data);
                      
                    }
                });
          }                                    
      }

      $("#button").click(function(){
          search();
      });

      $('#mac').keyup(function(e) {
          if(e.keyCode == 13) {
             search();
          }
      });
  });
</script>
<div class="row">
  <div class="col-md-12">
    <div class="login-box" style="margin-top: 2%">
      <div class="login-logo" style="font-size: 30px;margin-bottom: 10px;">
        <a href="#">
        APLIKASI PENCATATAN DEVICE
        SIAPA ITU</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
      <?php 
      if (isset($_GET['status'])) {
        ?>
        <div class="alert alert-info alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <center><h4><i class="icon fa fa-info"></i> Login Gagal</h4>
          Username atau password tidak benar.<br>
          Silahkan coba lagi atau hubungi administrator.</center>
        </div>
        <?php
      }
      ?>
        <p class="login-box-msg">Silahkan Masuk </p>

        <form action="<?=$base_url?>authentication" method="post">
          <div class="form-group has-feedback">
            <input type="username" name="username" class="form-control" placeholder="Username" autofocus required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-block btn-flat" value="LOG IN">
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-box-body -->
    </div>
    <div class="login-box" style="margin-top: -6%">
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Masukkan MAC Address</p>
          <div class="form-group">
            <div class="input-group">
              
              <input type="mac" name="mac" id="mac" class="form-control" placeholder="MAC Address" onsubmit="search()" title="Tekan Enter atau Klik Icon" autocomplete="off">
              <div class="input-group-addon">
                <i class="fa fa-question-circle" id="button" style="font-size: 20px;"></i>
              </div>
            </div>
            <!-- /.input group -->
          </div>

          <div class="form-group has-feedback">
            <div id="info">
            </div>
            <div id="infomac">
            </div>
            <br><br><br><br><br>
          </div>

      </div>
      <!-- /.login-box-body -->
    </div>
  </div>
  <div class="col-md-6">
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?=$base_url?>assets/js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=$base_url?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
