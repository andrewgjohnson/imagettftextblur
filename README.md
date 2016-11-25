# imagettftextblur

## Description

imagettftextblur is a drop in replacement for imagettftext with an added parameter to add blur, glow and shadow effects to your PHP GD images.

## Usage

To get started simply add a reference in your code to imagettftextblur.php and change all calls from imagettftext to imagettftextblur.  To add blur simply pass an integer greater than zero as the $blur_intensity parameter.

## Example

    imagettftext($image, 20, 0, 0, 0, $color, $font, $string);        // standard method to add text to a GD image
    imagettftextblur($image, 20, 0, 0, 0, $color, $font, $string);    // this will work the same as the line above
    imagettftextblur($image, 20, 0, 0, 0, $color, $font, $string, 5); // method to add blurred text to a GD image

There are a number of other examples included in the repository.

## Help Requests

Please post any questions or problems using [the imagettftextblur tag on stackoverflow.com](https://stackoverflow.com/tags/imagettftextblur) if you need help.

## Acknowledgements

This project was started by [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson)

Full list of contributors:
 * [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson)
 * [Philip van Heemstra (@vHeemstra)](https://github.com/vHeemstra)

## Changelog

######v1.2.1 (November 24, 2016)
 * Added [PSR-1](http://www.php-fig.org/psr/psr-1/) & [PSR-2](http://www.php-fig.org/psr/psr-2/) support

######v1.2.0 (November 8, 2016)
 * Added new optional parameter called $blur_filter to allow different filters to be used
 * Calls to imagettftextblur() with a valid $blur_intensity value now return an array of coordinates based on [imagettftext()](http://php.net/imagettftext)'s return values

######v1.1.0 (April 7, 2016)
 * Fixed issue that caused the alpha of colors to be ignored (fixed by [@vHeemstra](https://github.com/vHeemstra))
 * Added PNG images for each example of expected output

######v1.0.0 (March 19, 2013)
 * Intial release of imagettftextblur
