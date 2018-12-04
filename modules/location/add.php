<?php 
if(isset($_POST['Submit'])) {
	  
    $nama_lokasi       = $_POST["nama_lokasi"];
	
  //cari nilai max
  $id_max = mysql_query("SELECT id_lokasi FROM tblkit_lokasi WHERE id_lokasi = (SELECT max( id_lokasi ) FROM tblkit_lokasi)");
  $id_hasil = mysql_fetch_assoc($id_max);
  $new_id = $id_hasil['id_lokasi'] + 1;
  
  $sql = mysql_query("INSERT INTO tblkit_lokasi set
  							id_lokasi=''
						   ,nama_lokasi = '$nama_lokasi'					   						   						   						  
					",$k1);
	
	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Tambah nama alat ".$nama_lokasi."'
						   ,waktu='$waktu'						   
					");
									    
  if($sql) $pesan = 1;
  else $pesan = 2;
    
  echo "<script>window.location = '".$base_url."location/alert/$pesan'</script>";
  
}

//-------------[ halaman form add dan edit ]
include 'form.php'; // 
?>