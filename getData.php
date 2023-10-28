<?php

// configuration
include 'base/koneksi.php';

$row = $_POST['row']; 
$rowperpage = 4;

// selecting posts
$query = 'SELECT * FROM work_photo WHERE depan_wp=1 ORDER BY id_wp asc limit '.$row.','.$rowperpage;
$result = mysqli_query($l,$query);

$html = '';

while($row = mysqli_fetch_array($result)){
    $id = $row['id_wp'];
    $title = $row['title_wp'];
    $full = $row['full_wp'];
    $tmb = $row['tmb_wp'];
    $caption = $row['caption_wp'];

    // Creating HTML structure
    $html .= '<li class="item-thumbs span3 design" id="wp-'.$id.'" data-id="id-'.$id.'" data-type="web">';
    $html .= '<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="'.$title.'" href="'.$full.'">';
    $html .= '<span class="overlay-img"></span>';
    $html .= '<span class="overlay-img-thumb font-icon-plus"></span>';
    $html .= '</a>';
    $html .= '<img src="'.$tmb.'" alt="'.$caption.'">';
    $html .= '</li>';

}

echo $html;
?>

  
