<?php 
$ip =   "google.com";
$j = 3;
exec("ping -n $j $ip", $output, $status);
//print_r($output);

$jumlah = count($output);
for($i=0; $i < $jumlah; $i++){
      echo $output[$i];
      echo "<br>";
}
?>