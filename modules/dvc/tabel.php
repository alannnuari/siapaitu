<table class="table table-striped table-bordered table-hover" id="tabel1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Device </th>             
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
	<?php
		$sql = mysql_query("SELECT * FROM tblkit_nama_alat ORDER BY id_nama_alat DESC");
		$tcount = mysql_num_rows($sql);
        $i = 0;
        while($row = mysql_fetch_array($sql)) {
        $i++; 
        ?>
        <tr>
          	<td><?=$i;?></td>
            <td><?=$row['nama_alat'];?></td>
            <td class="text-center">
			<a href="<?=$base_url;?>dvc/edit/<?=$row['id_nama_alat'];?>">
			<i class="fa fa-edit"></i> Edit</a>		
            | <a onClick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" href="<?=$base_url;?>dvc/delete/<?=$row['id_nama_alat'];?>">
             <i class="fa fa-trash-o"></i> Hapus</a>
            </td>
        </tr>							
	   <?php } ?>
    </tbody>
</table>