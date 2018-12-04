<div class="box">
    <div class="box-header">
        <!--
        <a href="#" target="_blank"><button class="btn btn-primary" style="margin-bottom: 10px;">
            <i class="fa fa-file-excel-o"></i> EXPORT</button>
        </a>
        -->
        <a href="<?=$base_url?>device/add"><button class="btn btn-primary" style="margin-bottom: 10px;">
            <i class="fa fa-plus"></i> TAMBAH DEVICE</button>
        </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <table id="tabel1" class="table table-bordered table-striped table-responsive">
        <thead>
            <tr>
                <th width="3%">No</th>
                <th>MAC Address</th> 
                <th>Device</th> 
                <th>Location</th>
                <th>Information</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
    	<?php
    			
    		$sql = mysql_query("SELECT * FROM tblkit_alat order by id_alat desc");
            $tcount = mysql_num_rows($sql);
            $i = 0;
            while($row = mysql_fetch_array($sql)) {
            $i++; 
            ?>
            <tr>
              	<td><?=$i;?></td>
                <td><?=strtoupper($row['mac']);?></td>
                <td>
                <?php 
                    $id_nama_alat = $row['id_nama_alat'];
                    $q_a = mysql_fetch_array(mysql_query("SELECT * FROM tblkit_nama_alat WHERE id_nama_alat='$id_nama_alat'"));
                    echo $q_a['nama_alat'];
                ?>
                </td>
                <td>
                <?php 
                    $id_lokasi = $row['id_lokasi'];
                    $q_b = mysql_fetch_array(mysql_query("SELECT * FROM tblkit_lokasi WHERE id_lokasi='$id_lokasi'"));
                    echo $q_b['nama_lokasi'];
                ?>
                </td>                                            
                <td><?=$row['info'];?></td>
                <td class="text-center">
    			<a href="<?=$base_url;?>device/edit/<?=$row['id_alat'];?>">
    			<i class="fa fa-edit"></i> Edit</a>
                | <a onClick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" href="<?=$base_url;?>device/delete/<?=$row['id_alat'];?>">
                 <i class="fa fa-trash-o"></i> Hapus</a>
                </td>
            </tr>							
    	<?php }
        ?>
        </tbody>
    </table>
    </div>
</div>