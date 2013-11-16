# imagettftextblur

## Description

imagettftextblur is a drop in replacement for imagettftext with an added parameter to add blur, glow and shadow effects to your PHP GD images.

## Usage

To get started simply add a reference in your code to imagettftextblur.php and change all calls from imagettftext to imagettftextblur.  To add blur simply pass an integer greater than zero as the final parameter.

## Example

    imagettftext($image,20,0,0,0,$color,$font,$string);       // standard method to add text to a GD image
    imagettftextblur($image,20,0,0,0,$color,$font,$string);   // this will work the same as the line above
    imagettftextblur($image,20,0,0,0,$color,$font,$string,5); // method to add blurred text to a GD image

There are a number of other examples included in the repository.

## Acknowledgements

This project was started by [Andrew G. Johnson](https://github.com/andrewgjohnson), contact via [Twitter](http://twitter.com/andrewgjohnson), [Email](mailto:andrew@andrewgjohnson.com), [GitHub](https://github.com/andrewgjohnson) or [Online](http://www.andrewgjohnson.com/)

## Changelog

######v1.0.0 (March 19, 2013)
 * Intial release of imagettftextblur