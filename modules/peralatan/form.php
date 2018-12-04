<?php
$act    = isset($_GET['act']) ?	"Edit" : "Tambah" ;
$id     = isset($_GET['id']) ? $_GET['id'] : '' ;
?>
        
<div class="row">
    <div class="col-lg-12">
        <div class="panel-default">
            <div class="panel-heading">
                <i class="fa fa-edit"></i> <?=$act?>  Location
            </div>
            <div class="panel-body">
					<?php
					$sql = mysql_query("SELECT * from tblkit_lokasi where id_lokasi ='$id' ");
					$location = mysql_fetch_array($sql);																		
					?>
                        <form role="form" method="post"  action="">                            
                            <div>
                                <label>Location</label>
                                <input name="nama_lokasi" type="text" class="form-control" id="nama_lokasi" value="<?=$location['nama_lokasi'];?>" placeholder="Location" required autofocus>
                            </div>
                            <br>
                            <div>
                            <button type="submit" class="btn btn-primary" name="Submit">Simpan</button>
                            <a href="<?=$base_url;?>location" class="btn btn-default">Batal</a>
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