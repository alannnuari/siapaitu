<?php 
if(empty($_SESSION["sess_id"]) || empty($_SESSION["sess_level"])) {
	header("Location:".$base_url."in");
}

$login=mysql_query("SELECT * FROM tblkit_user WHERE id_user='".$_SESSION["sess_id"]."' ");
$q=mysql_fetch_array($login);
if ($q['sessionID'] != $_SESSION["sess_sessionuser"]){
	header("Location:".$base_url."logout");
}
?>