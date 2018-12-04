<?php 
if($_GET['id']!='')
{ 
	$id = abs((int) $_GET['id']);
		
	$sql = mysql_query("SELECT * FROM tblkit_alat WHERE id_alat ='$id' ");
	$row = mysql_fetch_array($sql);
	$data = $row['nama_unit'];
	
	$query = mysql_query("INSERT INTO tblkit_log SET
                ip='".$_SESSION["IP"]."'
               ,nama='".$_SESSION["sess_user"]."'
               ,aksi='Hapus Device'
               ,waktu='$waktu'               
          ");
					
	$query = mysql_query("DELETE FROM tblkit_alat WHERE id_alat ='$id' ");
	if($query) $pesan = 5;
	else $pesan = 6;
	
	print "<script>location.href='".$base_url."device/alert/$pesan';</script>";
}
 ?>
 