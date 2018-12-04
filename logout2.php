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
  //$q    = mysql_query("update user set status = 'off' where id = '".$_SESSION["sess_id"]."' ");
  session_destroy();
  
  
  echo "<script>alert('Akun Anda sedang login di tempat lain.'); window.location = './'</script>";
?>
