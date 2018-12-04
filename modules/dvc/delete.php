<?php 
if($_GET['id']!='')
{ 
	$id = abs((int) $_GET['id']);
		
	$sql = mysql_query("SELECT * from tblkit_nama_alat where id_nama_alat ='$id' ");
	$row = mysql_fetch_array($sql);
	$data = $row['nama_alat'];
	
	$query = mysql_query("INSERT INTO log_admin set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Hapus ".$data."'
						   ,waktu='$waktu'						   
					");
					
	$query = mysql_query("DELETE from tblkit_nama_alat where id_nama_alat ='$id' ");
	if($query) $pesan = 5;
	else $pesan = 6;
	
	print "<script>location.href='".$base_url."dvc/alert/$pesan';</script>";
}
 ?>
 