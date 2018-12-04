<?php 
	date_default_timezone_set('Asia/Jakarta');
	
	$jam	= date("H");
	$jam1	= $jam-1;
	$jam2	= $jam-2;

	$jam1 	= $jam1 < 0 ? $jam1+24 : $jam1;
	$jam2 	= $jam2 < 0 ? $jam2+24 : $jam2;

	$jam 	= $jam.":00";
	$jam1 	= strlen($jam1) == 1 ? "0".$jam1.":00" : $jam1.":00";
	$jam2 	= strlen($jam2) == 1 ? "0".$jam2.":00" : $jam2.":00";
?>	