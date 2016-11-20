<?php
// Load the stamp and the photo to apply the watermark to
$colors=array('red','yellow','green','blue');
if(isset($_GET['c'])){
    $c=$_GET['c'];
}else{
    $c='blue';  
}
if(!in_array($c,$colors)){
    $c='blue';
}

$i=$_GET['i'];

$color = imagecreatefrompng($c.".png");
$icon = imagecreatefrompng($i.".png");

// Get the height/width of the logo image
$logo_x = imagesx($color); 
$logo_y = imagesy($color);


$dest_image = imagecreatetruecolor($logo_x, $logo_y);
imagesavealpha($dest_image, true);
$trans_background = imagecolorallocatealpha($dest_image, 0, 0, 0, 127);
imagefill($dest_image, 0, 0, $trans_background);
imagecopy($dest_image, $color, 0, 0, 0, 0, $logo_x, $logo_y);
imagecopy($dest_image, $icon, 0, 0, 0, 0, $logo_x, $logo_y);

// Copy the logo to our shirt
// If you want to position it more accurately, check the imagecopy documentation
imagecopy($color, $icon, 0, 0, 0, 0, $logo_x, $logo_y);
//to print the image on browser
header('Content-Type: image/png');
imagepng($dest_image);
?>