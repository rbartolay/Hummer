<?php
// Set the content-typeasdsad
header('Content-Type: image/png');

// Create the image
$im = imagecreatetruecolor(600, 60);

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 599, 59, $white);

// The text to draw
$text = $_GET['domain'];
// Replace path by your own font path
#$font = "resources/fonts/Oreos.ttf";
#$font = "resources/fonts/deftone.ttf";
#$font = "resources/fonts/dolphins.ttf";
#$font = "resources/fonts/adamn.ttf";
#$font = "resources/fonts/billodream.ttf";
$font = "resources/fonts/nadall.ttf";


// Add some shadow to the text
imagettftext($im, 41, 0, 11, 51, $grey, $font, $text);

// Add the text
imagettftext($im, 40, 0, 15, 50, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>