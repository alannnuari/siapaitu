<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    User       
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
$query = mysql_query("SELECT * from tblkit_user where id_user ='$id' ");
$row = mysql_fetch_assoc($query);

if(isset($_POST['Submit']))
{
    $user		= trim(addslashes(strip_tags($_POST['username'])));
  	$nama       = $_POST["nama"];
    $level       = $_POST["level"];

	  			
	$sql = mysql_query("UPDATE tblkit_user set
  							username='$user'
               ,nama='$nama'
						   ,level = '$level'
						   where id_user='$id'						   					   						   						   						  
					",$k1);
	
	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Edit'
						   ,waktu='$waktu'						   
					");
												   
	if($sql) $pesan = 3;
	else $pesan = 4;
	
	print "<script>location.href='".$base_url."users/alert/$pesan';</script>";
	
}	

include ("form.php");
?>

        </div>
    </div>
  </div>
</section>
<!-- /.content -->
