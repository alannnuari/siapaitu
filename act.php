<?php
//error_reporting(0);
if(isset($_GET['mod'])) $md = addslashes(strip_tags($_GET['mod']));
if(isset($_GET['act'])) $act = addslashes(strip_tags($_GET['act']));

if (isset($md) ?  $md : ''){
	$fdname = 'modules/'.$md;
	if (file_exists($fdname)){
		$mod = "modules/".$md;		
		
		switch ((isset($act) ?  $act : ''))
		{		
			//act umum
			case 'add':	include("$mod/add.php"); break;
			case 'edit': include("$mod/edit.php"); break;
			case 'reset': include("$mod/reset.php"); break;
			case 'delete': include("$mod/delete.php"); break;				
			//default halaman
			default: include ("$mod/index.php");		
		}	
	}
	else{
		include ("modules/404/index.php");
	}
}
else{
	include ("modules/index.php");
}
?>