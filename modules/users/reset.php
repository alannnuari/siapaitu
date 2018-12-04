<?php 
if($_GET['id']!='')
{ 
	$id = abs((int) $_GET['id']);
	$password   = md5("asdfg");

	$sql = mysql_query("UPDATE tblkit_user set
  							password='$password'						   
						   where id_user='$id'						   					   						   						   						  
					",$k1);

	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Reset ".$id."'
						   ,waktu='$waktu'						   
					");

	if($query) $pesan = "Data Telah Disimpan";
	else $pesan = "Data Gagal Disimpan";
	
	print "<script>location.href='".$base_url."users';</script>";
}
 ?>
 