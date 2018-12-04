<?php 
if(isset($_POST['Submit'])) {
	  
    $user		= trim(addslashes(strip_tags($_POST['username'])));
  	$password   = md5("asdfg"); 
    $nama       = $_POST["nama"];
    $level       = $_POST["level"];
	
  //cari nilai max
  $id_max = mysql_query("SELECT id_user FROM tblkit_user WHERE id_user = (SELECT max( id_user ) FROM tblkit_user)");
  $id_hasil = mysql_fetch_assoc($id_max);
  $new_id = $id_hasil['id_user'] + 1;
  
  $sql = mysql_query("INSERT INTO tblkit_user set
  							id_user='$new_id'
						   ,username='$user'
						   ,password='$password'
						   ,nama='$nama'
						   ,level = '$level'					   						   						   						  
					",$k1);
	
	$query = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Tambah User ".$nama."'
						   ,waktu='$waktu'						   
					");
									    
  if($sql) $pesan = 1;
  else $pesan = 2;
    
  echo "<script>window.location = '".$base_url."users/alert/$pesan'</script>";
  
}

//-------------[ halaman form add dan edit ]
include 'form.php'; // 
?>