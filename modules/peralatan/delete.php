<?php 
if($_GET['id']!='')
{ 
	$id = abs((int) $_GET['id']);
		
	$sql = mysql_query("SELECT * from tblkit_lokasi where id_lokasi ='$id' ");
	$row = mysql_fetch_array($sql);
	$data = $row['nama_lokasi'];
	
	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Hapus ".$data."'
						   ,waktu='$waktu'						   
					");
					
	$query = mysql_query("DELETE from tblkit_lokasi where id_lokasi ='$id' ");
	if($query) $pesan = 5;
	else $pesan = 6;
	
	print "<script>location.href='".$base_url."location/alert/$pesan';</script>";
}
 ?>
 