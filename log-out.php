<?php  
  session_start();
  
  include "config.php";
  include "controller/waktu_log.php";
    
  $sql = mysql_query("INSERT INTO tblkit_log SET
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Logout'
						   ,waktu='$waktu'						   
					");
	$q		= mysql_query("UPDATE tblkit_user SET status = 'off' WHERE id_user = '".$_SESSION["sess_id"]."' ");
  session_destroy();
  
  echo "<script>alert('Anda berhasil logout'); window.location = './'</script>";
?>
