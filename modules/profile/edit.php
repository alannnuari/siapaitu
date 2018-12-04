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
    $username       = $_POST["username"];
    $nama       = $_POST["nama"];
    $email       = $_POST["email"];

	  			
	$sql = mysql_query("UPDATE tblkit_user set 
              username = '$username'
              ,nama = '$nama'
              ,email = '$email'
						   where id_user='$id'						   					   						   						   						  
					",$k1);
	
	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Edit ".$username." - ID ".$id."'
						   ,waktu='$waktu'						   
					");
												   
	if($sql) $pesan = 3;
	else $pesan = 4;
	
	print "<script>location.href='".$base_url."profile/alert/$pesan';</script>";
	
}	

include ("form.php");
?>

        </div>
    </div>
  </div>
</section>
<!-- /.content -->
