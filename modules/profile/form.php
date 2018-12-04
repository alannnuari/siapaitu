<?php
$id =  $_SESSION["sess_id"]; 
?>
        
<div class="row">
    <div class="col-lg-12">
        <div class="panel-default">
            <div class="panel-heading">
                <i class="fa fa-edit"></i> Edit Profile
            </div>
            <div class="panel-body">
					<?php
					$sql = mysql_query("SELECT * from tblkit_user where id_user ='$id' ");
					$profile = mysql_fetch_array($sql);																		
					?>
                        <form role="form" method="post"  action="">                            
                            <div>
                                <label>Nama User</label>
                                <input name="nama" type="text" class="form-control" id="nama" value="<?=$profile['nama'];?>" placeholder="Nama User" autofocus required>
                            </div>                            
                            <div>
                                <label>Username</label>
                                <input name="username" type="text" class="form-control" id="username" value="<?=$profile['username'];?>" placeholder="Username" autofocus required>
                            </div>                            
                            <div>
                                <label>Email</label>
                                <input name="email" type="text" class="form-control" id="email" value="<?=$profile['email'];?>" placeholder="Email" autofocus required>
                            </div>
                            <br>
                            <div>
                            <button type="submit" class="btn btn-primary" name="Submit">Simpan</button>
                            <a href="<?=$base_url;?>profile" class="btn btn-default">Batal</a>
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