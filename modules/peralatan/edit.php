<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Location      
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
$query = mysql_query("SELECT * from tblkit_lokasi where id_lokasi ='$id' ");
$row = mysql_fetch_assoc($query);

if(isset($_POST['Submit']))
{
    $nama_lokasi       = $_POST["nama_lokasi"];

	  			
	$sql = mysql_query("UPDATE tblkit_lokasi set nama_lokasi = '$nama_lokasi'
						   where id_lokasi='$id'						   					   						   						   						  
					",$k1);
	
	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Edit ".$nama_lokasi."'
						   ,waktu='$waktu'						   
					");
												   
	if($sql) $pesan = 3;
	else $pesan = 4;
	
	print "<script>location.href='".$base_url."location/alert/$pesan';</script>";
	
}	

include ("form.php");
?>

        </div>
    </div>
  </div>
</section>
<!-- /.content -->
