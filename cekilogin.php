<?php 
session_start();
include "config.php";
include "controller/get_ip.php";
//include "session_conf.php";
include "controller/waktu_log.php";

function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$user = antiinjection($_POST['username']);
$pass     = antiinjection(md5($_POST['password']));

$login=mysql_query("SELECT * FROM tblkit_user WHERE username='$user' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  
  $_SESSION["sess_id"]    = $r['id_user'];
  $_SESSION["sess_user"]  = $r['username'];
  $_SESSION["sess_nama"]  = $r['nama'];
  $_SESSION["sess_level"] = $r['level'];
  $_SESSION["IP"] = get_real_ip();
  
  $_SESSION["sess_sessionuser"]   = session_id();  
  
  $sql = mysql_query("INSERT INTO tblkit_log set
  							IP='".$_SESSION["IP"]."'
						   ,nama='".$_SESSION["sess_user"]."'
						   ,aksi='Login'
						   ,waktu='$waktu'						   
					");  
	$q		= mysql_query("UPDATE tblkit_user set status = 'on'
                      ,sessionID = '".$_SESSION["sess_sessionuser"]."' 
                      ,lastLogin = '$waktu'
                      where id_user = '".$_SESSION["sess_id"]."' ");
  				
  header("location:./");
}
else{
  
  $sql = mysql_query("INSERT INTO tblkit_log set
  							IP='".get_real_ip()."'
                ,nama='$user'
						   ,aksi='Login - gagal'
						   ,waktu='$waktu'						   
					"); 
  print "<script>location.href='".$base_url."in-failed';</script>";
}
?>
