<?php
//$act    = isset($_GET['act']) ?	"Edit" : "Tambah" ;
if ($_GET['act']=='edit') {
    $act = 'Edit';
}else{
    $act = 'Tambah';
}
$id     = isset($_GET['id']) ? $_GET['id'] : '' ;
?>
        
<div class="row">
    <div class="col-lg-12">
        <div class="panel-default">
            <div class="panel-heading">
                <i class="fa fa-edit"></i> <?=$act?>  Device
            </div>
            <div class="panel-body">
					<?php
					$sql = mysql_query("SELECT * FROM tblkit_alat WHERE id_alat ='$id' ");
					$device = mysql_fetch_array($sql);																		
					?>
                        <form role="form" method="post"  action="">
                            <div>
                                <label>MAC Address</label>
                                <input name="mac" type="text" class="form-control" id="mac" value="<?=$device['mac'];?>" placeholder="MAC Address" autofocus required>
                            </div> 
                            <div>
                                <label>Device</label>
                                <select class="form-control" name="id_nama_alat">
                                    <?php 
                                        $sql2 = mysql_query("SELECT * FROM tblkit_nama_alat order by id_nama_alat asc");
                                        while ($dv = mysql_fetch_array($sql2)) {     
                                            $pilih  = $device['id_nama_alat'] == $dv['id_nama_alat'] ? 'selected':'';
                                    ?>
                                        <option value="<?=$dv['id_nama_alat']; ?>" <?=$pilih?>><?=$dv['nama_alat']; ?></option>
                                    <?php } ?>
                                </select>
                            </div> 
                            <div>
                                <label>Location</label>
                                <select class="form-control" name="id_lokasi">
                                    <?php 
                                        $sql2 = mysql_query("SELECT * from tblkit_lokasi order by id_lokasi asc");
                                        while ($lk = mysql_fetch_array($sql2)) {     
                                            $pilih  = $device['id_lokasi'] == $lk['id_lokasi'] ? 'selected':'';
                                    ?>
                                        <option value="<?=$lk['id_lokasi']; ?>" <?=$pilih?>><?=$lk['nama_lokasi']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div>
                                <label>Information</label>
                                <textarea class="form-control" name="info" placeholder="Information" required><?=$device['info'];?></textarea>
                            </div> 
                            <div>
                                <br>
                                <button type="submit" class="btn btn-primary" name="Submit">Simpan</button>
                                <a href="<?=$base_url;?>device" class="btn btn-default">Batal</a>
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