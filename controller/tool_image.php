<?php 
function get_banner_image() {
  global $konten_banner;  
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $konten_banner, $matches ,PREG_SET_ORDER);
  
  if(empty($output)) {
    return $first_img = "";
  }
  $first_img = $matches[0][0]; // $matches[0][0] untuk gambar pertama, $matches[1][0] utk gambar kedua, dst..
 // $first_img = preg_replace('/width="([0-9]*)" height="([0-9]*)"/', '/width="175px" height="auto"/',$first_img);
 
 $patterns = array();
 $patterns[0] = '/source/';
 $patterns[1] = '/alt="([0-9]*)"/';
 $patterns[2] = '/width="([0-9]*)"/';
 $patterns[3] = '/height="([0-9]*)"/';
 
 $replacements = array();
 $replacements[0] = 'source';
 $replacements[1] = 'class="img-responsive"';
 $replacements[2] = 'width=1150px';
 $replacements[3] = 'style="max-height:300px"';
 
 $first_img = preg_replace($patterns, $replacements, $first_img);

  return $first_img;
}
function get_slider_image() {
  global $konten_slider;  
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $konten_slider, $matches ,PREG_SET_ORDER);
  
  if(empty($output)) {
    return $first_img = "<img src='/kitsbs/css/images/def-img.png' alt='image slider' class='img-responsive' />";
  }
  
  $first_img = $matches[0][0]; // $matches[0][0] untuk gambar pertama, $matches[1][0] utk gambar kedua, dst..
 // $first_img = preg_replace('/width="([0-9]*)" height="([0-9]*)"/', '/width="175px" height="auto"/',$first_img);
 
 $patterns = array();
 $patterns[0] = '/source/';
 $patterns[1] = '/style="([0-9]*)"/';
 $patterns[2] = '/width="([0-9]*)"/';
 $patterns[3] = '/height="([0-9]*)"/';
 $patterns[4] = '/alt="([0-9]*)"/';
 
 $replacements = array();
 $replacements[0] = 'source';
 $replacements[1] = 'class="img-responsive"';
 $replacements[2] = 'class="img-responsive"';
 $replacements[3] = 'class="img-responsive"';
 $replacements[4] = 'class="img-responsive"';
 
 $first_img = preg_replace($patterns, $replacements, $first_img);
  
  return $first_img;
}

function get_home_image() {
  global $konten_thumb;  
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $konten_thumb, $matches ,PREG_SET_ORDER);
  
  if(empty($output)) {
    return $first_img = "";
  }
  
  $first_img = $matches[0][0]; // $matches[0][0] untuk gambar pertama, $matches[1][0] utk gambar kedua, dst..
 // $first_img = preg_replace('/width="([0-9]*)" height="([0-9]*)"/', '/width="175px" height="auto"/',$first_img);
 
 $patterns = array();
 $patterns[0] = '/source/';
 $patterns[1] = '/alt="([0-9]*)"/';
 $patterns[2] = '/width="([0-9]*)"/';
 $patterns[3] = '/height="([0-9]*)"/';
 
 $replacements = array();
 $replacements[0] = 'thumbs';
 $replacements[1] = 'class="thumb-posting img-responsive"';
 $replacements[2] = 'class="thumb-posting img-responsive"';
 $replacements[3] = 'class="thumb-posting img-responsive"';
 
 $first_img = preg_replace($patterns, $replacements, $first_img);
  
  return $first_img;
}

function get_gallery_image() {
  global $konten_thumb;  
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $konten_thumb, $matches ,PREG_SET_ORDER);
  
  if(empty($output)) {
    return $first_img = "";
  }
  
  $first_img = $matches[0][0]; // $matches[0][0] untuk gambar pertama, $matches[1][0] utk gambar kedua, dst..
 // $first_img = preg_replace('/width="([0-9]*)" height="([0-9]*)"/', '/width="175px" height="auto"/',$first_img);
 
 $patterns = array();
 $patterns[0] = '/source/';
 $patterns[1] = '/alt="([0-9]*)"/';
 $patterns[2] = '/width="([0-9]*)"/';
 $patterns[3] = '/height="([0-9]*)"/';
 
 $replacements = array();
 $replacements[0] = 'thumbs';
 $replacements[1] = 'class="img-responsive thumb-gallery"';
 $replacements[2] = '';
 $replacements[3] = '';
 
 $first_img = preg_replace($patterns, $replacements, $first_img);
  
  return $first_img;
}

function get_album_image() {
  global $konten_album;  
  $first_img ;
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $konten_album, $matches ,PREG_SET_ORDER);
  
  if(empty($output)) {
    return $first_img = "";
  }
  
  for($i=0;$i<$output;$i++){
  $first_img = $matches[$i][0]; // $matches[0][0] untuk gambar pertama, $matches[1][0] utk gambar kedua, dst..
  // $first_img = preg_replace('/width="([0-9]*)" height="([0-9]*)"/', '/width="175px" height="auto"/',$first_img);
 
 $patterns = array();
 $patterns[0] = '/source/';
 $patterns[1] = '/alt="([0-9]*)"/';
 $patterns[2] = '/width="([0-9]*)"/';
 $patterns[3] = '/height="([0-9]*)"/';
 
 $replacements = array();
 $replacements[0] = 'thumbs';
 $replacements[1] = 'class="img-responsive thumb-album"';
 $replacements[2] = '';
 $replacements[3] = '';
 
 $first_img = preg_replace($patterns, $replacements, $first_img);

 $first_href = $matches[$i][0];
 $p = array();
 $p[0] = '/img/';
 $p[1] = '/src/';
 $p[2] = '/source/';
 $p[3] = '/alt="([0-9]*)"/';
 $p[4] = '/width="([0-9]*)"/';
 $p[5] = '/height="([0-9]*)"/';
 
 $r = array();
 $r[0] = 'a';
 $r[1] = 'href';
 $r[2] = 'source';
 $r[3] = 'class="bwGal"';
 $r[4] = 'title="Album"';
 $r[5] = '';
 
 $first_href = preg_replace($p, $r, $first_href);
 
  echo $first_href.$first_img."</a>";
  //echo "<br>";
  }
}
?>