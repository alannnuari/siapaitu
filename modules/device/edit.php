<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Device       
  </h1>      
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- right column -->
    <div class="col-md-12">
        <div class="box box-primary">

<?php 
$id = abs((int) $_GET['id']);
$query = mysql_query("SELECT * from tblkit_alat where id_alat ='$id' ");
$row = mysql_fetch_assoc($query);

if(isset($_POST['Submit']))
{

    $mac       = $_POST["mac"];
    $id_nama_alat       = $_POST["id_nama_alat"];
    $id_lokasi  = $_POST["id_lokasi"];
    $info  = $_POST["info"];
    $status      = 1;
	  			
	$sql = mysql_query("UPDATE tblkit_alat SET
                mac='$mac'
               ,id_nama_alat='$id_nama_alat'
               ,id_lokasi='$id_lokasi'
               ,info='$info'
               ,status = '$status'
						   where id_alat='$id'						   					   						   						   						  
					",$k1);
	
	$query = mysql_query("INSERT INTO tblkit_log set
                ip='".$_SESSION["IP"]."'
               ,nama='".$_SESSION["sess_user"]."'
               ,aksi='Edit Device dengan MAC ".$mac." dan ID ".$id."'
               ,waktu='$waktu'               
          ");
												   
	if($sql) $pesan = 3;
	else $pesan = 4;
	
	print "<script>location.href='".$base_url."device/alert/$pesan';</script>";
	
}	

include ("form.php");
?>

        </div>
    </div>
  </div>
</section>
<!-- /.content -->
