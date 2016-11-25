<?php

if (file_exists('../source/imagettftextblur.php'))
    require_once('../source/imagettftextblur.php');
else
    die('imagettftextblur.php not found');

$height = 300;
$width = 600;
$size = 20;
$font = rtrim(dirname(__FILE__),'/\\') . '/arial.ttf';
$string = 'This is an example that is glowing';

$text_dimensions = imagettfbbox($size,0,$font,$string);
$x_offset = ($width / 2) - ((min($text_dimensions[2],$text_dimensions[4]) - max($text_dimensions[0],$text_dimensions[6])) / 2);
$y_offset = ($height / 2) - ((min($text_dimensions[5],$text_dimensions[7]) - max($text_dimensions[1],$text_dimensions[3])) / 2);

$image = imagecreatetruecolor($width,$height);

$background_color = imagecolorallocate($image,0xEE,0xEE,0xEE);
$text_color = imagecolorallocate($image,0x00,0x00,0x00);
$glow_color = imagecolorallocate($image,0xFF,0xFF,0x00);

imagefill($image,0,0,$background_color);
imagettftextblur($image,$size,0,$x_offset,$y_offset,$glow_color,$font,$string,10);
imagettftextblur($image,$size,0,$x_offset,$y_offset,$text_color,$font,$string);

header('Content-Type:image/png');
imagepng($image);

imagedestroy($image);
