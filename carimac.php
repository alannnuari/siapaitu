<?php
error_reporting(0);
 include "config.php";
 
 $mac=$_POST["mac"];

 $result=mysql_query("SELECT * FROM tblkit_alat where mac = '$mac' ");
 $found=mysql_num_rows($result);
 
 if($found>0){
    while($row=mysql_fetch_array($result)){
    ?>
    <div class="col-md-4">
    	MAC Addr<br>
    	Device<br>
    	Location<br>
    	Information
    </div>
    <div class="col-md-8">    
    	<?=$row['mac']?><br>
    	<?php 
    		$id_nama_alat = $row['id_nama_alat'];
    		$na = mysql_fetch_array(mysql_query("SELECT * FROM tblkit_nama_alat WHERE id_nama_alat='$id_nama_alat'"));
    		echo $na['nama_alat'];
    	?>
    	<br>
    	<?php 
    		$id_lokasi = $row['id_lokasi'];
    		$nl = mysql_fetch_array(mysql_query("SELECT * FROM tblkit_lokasi WHERE id_lokasi='$id_lokasi'"));
    		echo $nl['nama_lokasi'];
    	?>
    	<br>
    	<?=$row['info']?>
    </div>
    <?php
    }   
 }else{
    echo "Device dengan MAC Address ".$mac." tidak ditemukan";
 }
?>