<table class="table table-striped table-bordered table-hover" id="tabel1">
    <thead>
        <tr>
            <th>No</th>
            <th>IP Address</th>             
            <th>User</th>
            <th>Action</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
	<?php
		$sql = mysql_query("SELECT * FROM tblkit_log ORDER BY id_log DESC");
		$tcount = mysql_num_rows($sql);
        $i = 0;
        while($row = mysql_fetch_array($sql)) {
        $i++; 
        ?>
        <tr>
          	<td><?=$i;?></td>
            <td><?=$row['ip'];?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$row['aksi'];?></td>
            <td><?php 
                    $wkt = $row['waktu'];
                    echo date("d/m/Y - H:i:s", strtotime($wkt))." WIB";
                ?></td>
        </tr>							
	   <?php } ?>
    </tbody>
</table>