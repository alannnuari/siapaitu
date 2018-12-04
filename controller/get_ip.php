<?php
 /**
 * Get real IP that maybe user / visitor uses Proxy or behind the network protection
 * @return string real IP 
 */
function get_real_ip() {
	$clientip      = isset( $_SERVER['HTTP_CLIENT_IP'] )       && $_SERVER['HTTP_CLIENT_IP']       ?
					 $_SERVER['HTTP_CLIENT_IP']         : false;
	$xforwarderfor = isset( $_SERVER['HTTP_X_FORWARDED_FOR'] ) && $_SERVER['HTTP_X_FORWARDED_FOR'] ?
					 $_SERVER['HTTP_X_FORWARDED_FOR']   : false;
	$xforwarded    = isset( $_SERVER['HTTP_X_FORWARDED'] )     && $_SERVER['HTTP_X_FORWARDED']     ?
					 $_SERVER['HTTP_X_FORWARDED']       : false;
	$forwardedfor  = isset( $_SERVER['HTTP_FORWARDED_FOR'] )   && $_SERVER['HTTP_FORWARDED_FOR']   ?
					 $_SERVER['HTTP_FORWARDED_FOR']     : false;
	$forwarded     = isset( $_SERVER['HTTP_FORWARDED'] )       && $_SERVER['HTTP_FORWARDED']       ?
					 $_SERVER['HTTP_FORWARDED']         : false;
	$remoteadd     = isset( $_SERVER['REMOTE_ADDR'] )          && $_SERVER['REMOTE_ADDR']          ?
					 $_SERVER['REMOTE_ADDR']            : false;
	
	// Function to get the client ip address
	if ( $clientip          !== false ) {
		$ipaddress = $clientip;
	}
	elseif( $xforwarderfor  !== false ) {
		$ipaddress = $xforwarderfor;
	}
	elseif( $xforwarded     !== false ) {
		$ipaddress = $xforwarded;
	}
	elseif( $forwardedfor   !== false ) {
		$ipaddress = $forwardedfor;
	}
	elseif( $forwarded      !== false ) {
		$ipaddress = $forwarded;
	}
	elseif( $remoteadd      !== false ) {
		$ipaddress = $remoteadd;
	}
	else{
		$ipaddress = false; # unknown
	}
//$ipaddress= $_SERVER['REMOTE_ADDR'];
	return $ipaddress;
}
?>
