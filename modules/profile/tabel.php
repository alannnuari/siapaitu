<?php
$id =  $_SESSION["sess_id"]; 
$data = mysql_fetch_array(mysql_query("SELECT * FROM tblkit_user WHERE id_user='$id'"));
?>
<table class="table table-striped table-bordered table-hover" id="">
    <thead>
        <tr>
            <th width="30%">Nama</th>
            <td><?=$data['nama']?></td>            
        </tr>
        <tr>
            <th width="30%">Username</th>
            <td><?=$data['username']?></td>            
        </tr>
        <tr>
            <th width="30%">Email</th>
            <td><?=$data['email']?></td>            
        </tr>
        <tr>
            <th width="30%">Last Login</th>
            <td><?=$data['lastLogin']?> WIB</td>            
        </tr>
    </thead>
</table>
<div class="pull-right">
    <a href="<?=$base_url?>profile/reset" class="btn btn-primary">Ganti Password</a>
    <a href="<?=$base_url?>profile/edit" class="btn btn-primary">Edit Profile</a>    
</div>
