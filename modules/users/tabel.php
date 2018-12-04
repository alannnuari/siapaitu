<table class="table table-striped table-bordered table-hover" id="tabel1">
    <thead>
        <tr>
          <th>No</th>
            <th>Username</th> 
            <th>Name</th>                                          
            <th>Last Login</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
	<?php
			
		$sql = mysql_query("SELECT * from tblkit_user order by id_user asc");
		$tcount = mysql_num_rows($sql);
        $i = 0;
        if ($tcount > 0) {
        while($row = mysql_fetch_array($sql)) {
        $i++; 
        ?>
        <tr>
          	<td><?=$i;?></td>
            <td><?=$row['username'];?></td>
            <td><?=$row['nama'];?></td>                                             
            <td><?=$row['lastLogin'];?></td>
            <td class="text-center">
			<a href="<?=$base_url;?>users/edit/<?=$row['id_user'];?>">
			<i class="fa fa-edit"></i> Edit</a>
			| <a onClick="return confirm ('Apakah Anda Yakin Akan Me-reset password user Ini?')" href="<?=$base_url;?>users/reset/<?=$row['id_user'];?>">
			 <i class="fa fa-lock"></i> Reset</a>
            | <a onClick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" href="<?=$base_url;?>users/delete/<?=$row['id_user'];?>">
             <i class="fa fa-trash-o"></i> Hapus</a>
            </td>
        </tr>							
	<?php 
            } 
        }
        else {
        echo "<tr><td colspan='6'>Tidak ada data yang ditemukan.</td></tr>";
        }
    ?>
    </tbody>
</table>