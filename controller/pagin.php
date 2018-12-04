<?php
/*************************************************************************
php easy :: pagination scripts set - Version Three
==========================================================================
Author:      php easy code, www.phpeasycode.com
Web Site:    http://www.phpeasycode.com
Contact:     webmaster@phpeasycode.com
*************************************************************************/
function paginate_three($reload, $pg, $tpgs, $adjacents) {
	
	$prevlabel = "&lsaquo; Prev";
	$nextlabel = "Next &rsaquo;";
	
	$out = "<ul class=\"pagination\">\n";
	// first
	if($pg>($adjacents+1)) {
		$out.= "<li><a href=\"" . $reload . ".html\">First</a></li>\n";
	}
	
	// previous
	if($pg==1) {
		$out.= "<li><span>" . $prevlabel . "</span></li>\n";
	}
	elseif($pg==2) {
		$out.= "<li><a href=\"" . $reload . ".html\">" . $prevlabel . "</a></li>\n";
	}
	else {
		$out.= "<li><a href=\"" . $reload . "/" . ($pg-1) . ".html\">" . $prevlabel . "</a></li>\n";
	}
	
	
	
	// interval
	if($pg>($adjacents+2)) {
		$out.= "<li><a>...</a></li>\n";
	}
	
	// pgs
	$pmin = ($pg>$adjacents) ? ($pg-$adjacents) : 1;
	$pmax = ($pg<($tpgs-$adjacents)) ? ($pg+$adjacents) : $tpgs;
	for($i=$pmin; $i<=$pmax; $i++) {
		if($i==$pg) {
			$out.= "<li class=\"active\"><a href='#'>" . $i . "</a></li>\n";
		}
		elseif($i==1) {
			$out.= "<li><a href=\"" . $reload . ".html\">" . $i . "</a></li>\n";
		}
		else {
			$out.= "<li><a href=\"" . $reload . "/" . $i . ".html\">" . $i . "</a></li>\n";
		}
	}
	
	// interval
	if($pg<($tpgs-$adjacents-1)) {
		$out.= "<li><a>...</a></li>\n";
	}
	
	
	// next
	if($pg<$tpgs) {
		$out.= "<li><a href=\"" . $reload . "/" . ($pg+1) . ".html\">" . $nextlabel . "</a></li>\n";
	}
	else {
		$out.= "<li><span>" . $nextlabel . "</span></li>\n";
	}

	// last
	if($pg<($tpgs-$adjacents)) {
		$out.= "<li><a href=\"" . $reload . "/" . $tpgs . ".html\">Last</a></li>\n";
	}
	
	$out.= "</ul>";
	
	return $out;
}
?>


