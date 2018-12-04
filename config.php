<?php

$hostname	="localhost"; //hostname
$username	="root"; //username
$password	=""; //password
$db_1		="kitsbs_siapaitu"; // database name
$base_url 	="/siapaitu/";

$k1 = mysql_connect($hostname,$username,$password) or die; //untuk koneksi ke database
mysql_select_db($db_1,$k1) or die; // untuk seleksi database



?>