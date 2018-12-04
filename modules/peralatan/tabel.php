<table class="table table-striped table-bordered table-hover" id="tabel1">
    <thead>
        <tr>
            <th>No</th>
            <th>Location</th>             
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
	<?php
			
		$sql = mysql_query("SELECT * from tblkit_lokasi order by id_lokasi desc");
		$tcount = mysql_num_rows($sql);
        $i = 0;
        while($row = mysql_fetch_array($sql)) {
        $i++; 
        ?>
        <tr>
          	<td><?=$i;?></td>
            <td><?=$row['nama_lokasi'];?></td>
            <td class="text-center">
            <?php 

            if ($row['status']=='1') {
                ?>
                <a href="<?=$base_url;?>location/edit/<?=$row['id_lokasi'];?>">
            <i class="fa fa-edit"></i> Edit</a>     
            | <a onClick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" href="<?=$base_url;?>location/delete/<?=$row['id_lokasi'];?>">
             <i class="fa fa-trash-o"></i> Hapus</a>
                <?php
            }
            ?>

			
            </td>
        </tr>							
        <?php } ?>
    </tbody>
</table>