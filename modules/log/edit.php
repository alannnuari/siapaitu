<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Device Name       
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
$id = abs((int) $_GET['id']);
$query = mysql_query("SELECT * from tblkit_nama_alat where id_nama_alat ='$id' ");
$row = mysql_fetch_assoc($query);

if(isset($_POST['Submit']))
{
    $nama_alat       = $_POST["nama_alat"];

	  			
	$sql = mysql_query("UPDATE tblkit_nama_alat set nama_alat = '$nama_alat'
						   where id_nama_alat='$id'						   					   						   						   						  
					",$k1);
	
	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Edit ".$nama_alat."'
						   ,waktu='$waktu'						   
					");
												   
	if($sql) $pesan = 3;
	else $pesan = 4;
	
	print "<script>location.href='".$base_url."dvc/alert/$pesan';</script>";
	
}	

include ("form.php");
?>

        </div>
    </div>
  </div>
</section>
<!-- /.content -->
