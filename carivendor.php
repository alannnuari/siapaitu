<?php
	$mac=$_POST["mac"];
	//$mac = "A0:F3:C1:2A:1B:FA";
	//$mac = "9C:AE:D3:2F:CC:FF";
    $url = "http://api.macvendors.com/".$mac;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $vendor = curl_exec($ch);

    if($vendor) {
    	?>
    	<div class="col-md-4">
    	MAC Vendor
    	</div>
    	<div class="col-md-8">
    	<?php echo $vendor;	?>
    	</div>
    	<?php
        
    } else {
        ?>
    	<div class="col-md-4">
    	MAC Vendor
    	</div>
    	<div class="col-md-8">
    	<?php echo "Tidak Ditemukan";	?>
    	</div>
    	<?php
    }