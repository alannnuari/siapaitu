<?php
	date_default_timezone_set('Asia/Jakarta');
	$tgl	= date("Y-m-d");
	$jam 	= date("H:i:s");
	$online	= time();
	$waktu = $tgl." ".$jam;

	function bulanindo($bulan){
		switch ($bulan)
		{
			case 1:$bulan = 'Januari';
			break;
			case 2:$bulan = 'Februari';
			break;
			case 3:$bulan = 'Maret';
			break;
			case 4:$bulan = 'April';
			break;
			case 5:$bulan = 'Mei';
			break;
			case 6:$bulan = 'Juni';
			break;
			case 7:$bulan = 'Juli';
			break;
			case 8:$bulan = 'Agustus';
			break;
			case 9:$bulan = 'September';
			break;
			case 10:$bulan = 'Oktober';
			break;
			case 11:$bulan = 'November';
			break;
			case 12:$bulan = 'Desember';
			break;
		}
		return "$bulan";
	}

	function hariindo($hari){
		switch ($hari)
		{
			case 0:$hari = 'Minggu';
			break;
			case 1:$hari = 'Senin';
			break;
			case 2:$hari = 'Selasa';
			break;
			case 3:$hari = 'Rabu';
			break;
			case 4:$hari = 'Kamis';
			break;
			case 5:$hari = 'Jumat';
			break;
			case 6:$hari = 'Sabtu';
			break;
		}
		return "$hari";
	}
	/*
	Pagi 	= 7.31-15.30
	Siang 	= 15.31-22.30
	Malam 	= 22.31-7.30
	*/

	$shift = date("G.i");
	if ($shift >= 7.31 && $shift <=15.30) {
		$jampatrol = "08.00";
		$shift = "Pagi";

	}elseif ($shift >= 15.31 && $shift <=22.30) {
		$jampatrol = "16.00";
		$shift = "Siang";
	}elseif ($shift >= 22.31 && $shift <=7.30) {
		$jampatrol = "24.00";
		$shift = "Malam";
	}

	$jam = date("H");
	if ($jam % 2 == 1) {
		$jam = $jam - 1 ;
	}
	$jaminput = $jam;
	if (strlen($jaminput)==1) {
	$jaminput = "0".$jaminput.".00";
	}else{
	$jaminput= $jaminput.".00";
	}

	$jaminput1 = $jam - 1;
	if ($jaminput1 < 0) {
	$jaminput1 = $jaminput1 + 24;
	}
	if (strlen($jaminput1)==1) {
	$jaminput1 = "0".$jaminput1.".00";
	}else{
	$jaminput1= $jaminput1.".00";
	}

	$jaminput2 = $jam - 2;
	if ($jaminput2 < 0) {
	$jaminput2 = $jaminput2 + 24;
	}
	if (strlen($jaminput2)==1) {
	$jaminput2 = "0".$jaminput2.".00";
	}else{
	$jaminput2 = $jaminput2.".00";
	}

	$jams = date("H");
	$menit = date("i");
	if ($menit >= 0 and $menit < 30) {
		$menit = "00";
		$jams = $jams.".".$menit;
	}else{
		$menit = "30";
		$tempjam0 = $jams;
		$jams = $tempjam0.".".$menit;
	}

	//jam 2
	if ($menit=="30") {
		$menit = "00";
		$jams2 = $tempjam0.".".$menit;
	}else{
		$menit = "30";
		$tempjam = $jams - 1 ;
		$jams2 = $tempjam.".".$menit;
	}

	//jam 3
	if ($menit=="30") {
		$menit = "00";
		if (strlen($tempjam)==1) {
			$tempjam = "0".$tempjam;
		}else{
			$tempjam = $tempjam;
		}
		$jams3 = $tempjam.".".$menit;
	}else{
		$menit = "30";
		$tempjam1 = $tempjam0 - 1 ;
		if (strlen($tempjam1)==1) {
			$tempjam1 = "0".$tempjam1;
		}else{
			$tempjam1 = $tempjam1;
		}
		$jams3 = $tempjam1.".".$menit;
	}

	//jam 4
	if ($menit=="30") {
		$menit = "00";
		if (strlen($tempjam1)==1) {
			$tempjam1 = "0".$tempjam1;
		}else{
			$tempjam1 = $tempjam1;
		}
		$jams4 = $tempjam1.".".$menit;
	}else{
		$menit = "30";
		$tempjam2 = $tempjam - 1 ;
		if (strlen($tempjam2)==1) {
			$tempjam2 = "0".$tempjam2;
		}else{
			$tempjam2 = $tempjam2;
		}
		$jams4 = $tempjam2.".".$menit;
	}

	//jam 5
	if ($menit=="30") {
		$menit = "00";
		if (strlen($tempjam2)==1) {
			$tempjam2 = "0".$tempjam2;
		}else{
			$tempjam2 = $tempjam2;
		}
		$jams5 = $tempjam2.".".$menit;
	}else{
		$menit = "30";
		$tempjam3 = $tempjam1 - 1 ;
		if (strlen($tempjam3)==1) {
			$tempjam3 = "0".$tempjam3;
		}else{
			$tempjam3 = $tempjam3;
		}
		$jams5 = $tempjam3.".".$menit;
	}
?>