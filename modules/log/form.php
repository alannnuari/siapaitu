<?php
$act    = isset($_GET['act']) ?	"Edit" : "Tambah" ;
$id     = isset($_GET['id']) ? $_GET['id'] : '' ;
?>
        
<div class="row">
    <div class="col-lg-12">
        <div class="panel-default">
            <div class="panel-heading">
                <i class="fa fa-edit"></i> <?=$act?>  Device Name
            </div>
            <div class="panel-body">
					<?php
					$sql = mysql_query("SELECT * from tblkit_nama_alat where id_nama_alat ='$id' ");
					$dvc = mysql_fetch_array($sql);																		
					?>
                        <form role="form" method="post"  action="">                            
                            <div>
                                <label>Device Name</label>
                                <input name="nama_alat" type="text" class="form-control" id="nama_alat" value="<?=$dvc['nama_alat'];?>" placeholder="Device Name" autofocus required>
                            </div>
                            <br>
                            <div>
                            <button type="submit" class="btn btn-primary" name="Submit">Simpan</button>
                            <a href="<?=$base_url;?>dvc" class="btn btn-default">Batal</a>
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