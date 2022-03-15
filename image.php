<?php
$xTopbar = 1920;
$yTopbar = 80;
$image = imagecreatetruecolor($xTopbar, $yTopbar);
$blue = imagecolorallocate($image, 0, 150, 255);
  
// Draw the rectangle of green color
imagefilledrectangle($image, 0, 0, $xTopbar, $yTopbar, $blue);
  
// Output image in png format
header("Content-type: image/png");
imagepng($image);
   
// Free memory
imagedestroy($image);
?>