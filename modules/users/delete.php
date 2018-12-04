<?php 
if($_GET['id']!='')
{ 
	$id = abs((int) $_GET['id']);
		
	$sql = mysql_query("SELECT * from tblkit_user where id_user ='$id' ");
	$row = mysql_fetch_array($sql);
	$data = $row['username'];
	
	$query = mysql_query("INSERT INTO log_admin set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Hapus'
						   ,waktu='$waktu'						   
						");
					
	$query = mysql_query("DELETE from tblkit_user where id_user ='$id' ");
	if($query) $pesan = 5;
	else $pesan = 6;
	
	print "<script>location.href='".$base_url."users/alert/$pesan';</script>";
}
 ?>
 