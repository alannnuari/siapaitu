<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Profile    
  </h1>      
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- left column -->
    <div class="col-md-7">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="panel-body">
                <?php include 'tabel.php'; ?>
            </div>
        </div>
      <!-- /.box -->
    </div>
    <!-- right column -->
    <div class="col-md-5">
        <div class="box box-primary">

<?php 
$id =  $_SESSION["sess_id"]; 
$query = mysql_query("SELECT * from tblkit_user where id_user ='$id' ");
$row = mysql_fetch_assoc($query);

if(isset($_POST['Submit']))
{
    $password       = md5($_POST["password"]);

	  			
	$sql = mysql_query("UPDATE tblkit_user set 
              password = '$password'
						   where id_user='$id'						   					   						   						   						  
					",$k1);
	
	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Reset ".$username." - ID ".$id."'
						   ,waktu='$waktu'						   
					");
												   
	if($sql) $pesan = 3;
	else $pesan = 4;
	
	print "<script>location.href='".$base_url."profile/alert/$pesan';</script>";
	
}	
?>
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-edit"></i> Ganti Password
                      </div>
                      <div class="panel-body">
                    <?php
                    $sql = mysql_query("SELECT * from tblkit_user where id_user ='$id' ");
                    $profile = mysql_fetch_array($sql);                                   
                    ?>
                        <form role="form" method="post"  action="">                            
                            <div>
                                <label>Nama User</label>
                                <input name="nama" type="text" class="form-control" id="nama" value="<?=$profile['nama'];?>" placeholder="Nama User" readonly>
                            </div>                          
                            <div>
                                <label>Password</label>
                                <input name="password" type="text" class="form-control" id="password" value="" placeholder="Password Baru">
                            </div>
                            <br>
                            <div>
                            <button type="submit" class="btn btn-primary" name="Submit">Simpan</button>
                            <a href="<?=$base_url;?>profile" class="btn btn-default">Batal</a>
                            </div>
                        </form>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
        </div>
    </div>
  </div>
</section>
<!-- /.content -->
