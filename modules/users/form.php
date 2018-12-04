<?php
$act    = isset($_GET['act']) ?	"Edit" : "Tambah" ;
$id     = isset($_GET['id']) ? $_GET['id'] : '' ;
?>
        
<div class="row">
    <div class="col-lg-12">
        <div class="panel-default">
            <div class="panel-heading">
                <i class="fa fa-edit"></i> <?=$act?>  Users
            </div>
            <div class="panel-body">
					<?php
					$sql = mysql_query("SELECT * from tblkit_user where id_user ='$id' ");
					$users = mysql_fetch_array($sql);																		
					?>
                        <form role="form" method="post"  action="">                            
                            <div>
                                <label>Username</label>
                                <input name="username" type="text" class="form-control" id="judul" value="<?=$users['username'];?>" placeholder="Username" autofocus required>
                            </div> 
                            <div>
                                <label>Nama</label>
                                <input name="nama" type="text" class="form-control" id="judul" value="<?=$users['nama'];?>" placeholder="Nama" required>
                            </div>                            
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                <option value="2">User</option>
                                <option value="1">Admin</option>
                                </select>
                            </div>
                            <div>
                            <button type="submit" class="btn btn-primary" name="Submit">Simpan</button>
                            <a href="<?=$base_url;?>users" class="btn btn-default">Batal</a>
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