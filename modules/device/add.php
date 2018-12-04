<?php 
if(isset($_POST['Submit'])) {
	    
    $mac       = trim($_POST["mac"]);
    $id_nama_alat       = $_POST["id_nama_alat"];
    $id_lokasi  = $_POST["id_lokasi"];
    $info  = $_POST["info"];
    $status      = 1;
	
  //cari nilai max
  $id_max = mysql_query("SELECT id_alat FROM tblkit_alat WHERE id_alat = (SELECT max( id_alat ) FROM tblkit_alat)");
  $id_hasil = mysql_fetch_assoc($id_max);
  $new_id = $id_hasil['id_alat'] + 1;

  $cekmac = mysql_num_rows(mysql_query("SELECT * from tblkit_alat WHERE mac='$mac'"));
  if ($cekmac > 0) {
    $pesan = 0;
    ?>
    <script type="text/javascript">
      window.alert('MAC Address sudah ada !');
    </script>
    <?php
    echo "<script>window.history.back();</script>";
  }else{
    $sql = mysql_query("INSERT INTO tblkit_alat set
                id_alat='$new_id'
                ,mac='$mac'
               ,id_nama_alat='$id_nama_alat'
               ,id_lokasi='$id_lokasi'
               ,info='$info'
               ,status = '$status'                                                      
          ",$k1);
  
    $query = mysql_query("INSERT INTO tblkit_log set
                  ip='".$_SESSION["IP"]."'
                 ,nama='".$_SESSION["sess_user"]."'
                 ,aksi='Tambah device dengan MAC ".$mac."'
                 ,waktu='$waktu'               
            ");
    
    if($sql) $pesan = 1;
    else $pesan = 2;
    
    echo "<script>window.location = '".$base_url."device/alert/$pesan'</script>";
  }
  
  
  
}

//-------------[ halaman form add dan edit ]

//include 'form.php'; // 
?>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="table">
                <?php include 'form.php'; ?>
            </div>
            <!-- /.table-responsive -->
        </div>
      <!-- /.box -->
    </div>
  </div>
</section>