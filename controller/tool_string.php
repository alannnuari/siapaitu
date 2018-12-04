<?php // ver 0.0
/**-- string / teks / kalimat ------------------------------------/
  * Index all function
  * /-- shorter --------------------------------/
  * - putus_kalimat // fungsi untuk memutus kalimat setelah di strip tag
/*-----------------------------------------------------*/

function putus_kalimat($str_input_text,$int_size_cut) {
    $str_final = strip_tags ($str_input_text); // clean tag
    echo substr($str_final,0,$int_size_cut); // cut!
}


function limitWord($string, $word_limit) {
		$string = strip_tags ($string); // clean tag
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
}

function br2nl($text) {
    return preg_replace('/<br\\s*?\/??>/i', '', $text);
}

function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}

/* Log ------------------------------------------------*/

?>
