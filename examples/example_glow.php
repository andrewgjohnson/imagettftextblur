<?php

/**
 * Imagettftextblur Example (Glow)
 *
 * Copyright (c) 2013-2018 Andrew G. Johnson <andrew@andrewgjohnson.com>
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in the
 * Software without restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the
 * Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
 * AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * PHP version 5
 *
 * @category  Andrewgjohnson
 * @package   Imagettftextblur
 * @author    Andrew G. Johnson <andrew@andrewgjohnson.com>
 * @copyright 2013-2018 Andrew G. Johnson <andrew@andrewgjohnson.com>
 * @license   https://opensource.org/licenses/mit/ The MIT License
 * @link      https://github.com/andrewgjohnson/imagettftextblur
 */

if (file_exists('../source/imagettftextblur.php')) {
    include_once '../source/imagettftextblur.php';
} else {
    die('imagettftextblur.php not found');
}

$width = 600;
$height = 300;
$size = 20;
$font = rtrim(dirname(__FILE__), '/\\') . '/arial.ttf';
$string = 'This is an example that is glowing';

$text_dimensions = imagettfbbox($size, 0, $font, $string);
$text_left = min($text_dimensions[2], $text_dimensions[4]);
$text_right = max($text_dimensions[0], $text_dimensions[6]);
$text_top = min($text_dimensions[5], $text_dimensions[7]);
$text_bottom = max($text_dimensions[1], $text_dimensions[3]);

$x_offset = ($width / 2) - (($text_left - $text_right) / 2);
$y_offset = ($height / 2) - (($text_top - $text_bottom) / 2);

$image = imagecreatetruecolor($width, $height);

$background_color = imagecolorallocate($image, 0xEE, 0xEE, 0xEE);
$text_color = imagecolorallocate($image, 0x00, 0x00, 0x00);
$glow_color = imagecolorallocate($image, 0xFF, 0xFF, 0x00);

imagefill($image, 0, 0, $background_color);
imagettftextblur(
    $image,
    $size,
    0,
    $x_offset,
    $y_offset,
    $glow_color,
    $font,
    $string,
    10
);
imagettftextblur(
    $image,
    $size,
    0,
    $x_offset,
    $y_offset,
    $text_color,
    $font,
    $string
);

header('Content-Type:image/png');
imagepng($image);

imagedestroy($image);
