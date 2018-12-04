<?php 
if(isset($_POST['Submit'])) {
	  
    $nama_alat       = $_POST["nama_alat"];
	
  //cari nilai max
  $id_max = mysql_query("SELECT id_nama_alat FROM tblkit_nama_alat WHERE id_nama_alat = (SELECT max( id_nama_alat ) FROM tblkit_nama_alat)");
  $id_hasil = mysql_fetch_assoc($id_max);
  $new_id = $id_hasil['id_nama_alat'] + 1;
  
  $sql = mysql_query("INSERT INTO tblkit_nama_alat set
  							id_nama_alat='$new_id'
						   ,nama_alat = '$nama_alat'					   						   						   						  
					",$k1);
	
	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Tambah nama alat ".$nama_alat."'
						   ,waktu='$waktu'						   
					");
									    
  if($sql) $pesan = 1;
  else $pesan = 2;
    
  echo "<script>window.location = '".$base_url."dvc/alert/$pesan'</script>";
  
}

//-------------[ halaman form add dan edit ]
include 'form.php'; // 
?>