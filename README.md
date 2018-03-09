# imagettftextblur

[![MIT License](https://img.shields.io/github/license/andrewgjohnson/imagettftextblur.svg)](https://github.com/andrewgjohnson/imagettftextblur/blob/master/LICENSE)
[![Current Release](https://img.shields.io/github/release/andrewgjohnson/imagettftextblur.svg)](https://github.com/andrewgjohnson/imagettftextblur/releases)
[![GitHub Stars](https://img.shields.io/github/stars/andrewgjohnson/imagettftextblur.svg)](https://github.com/andrewgjohnson/imagettftextblur/stargazers)
[![Contributors](https://img.shields.io/github/contributors/andrewgjohnson/imagettftextblur.svg)](https://github.com/andrewgjohnson/imagettftextblur/graphs/contributors)
[![Packagist Downloads](https://img.shields.io/packagist/dm/andrewgjohnson/imagettftextblur.svg)](https://packagist.org/packages/andrewgjohnson/imagettftextblur/stats)
[![Issues](https://img.shields.io/github/issues/andrewgjohnson/imagettftextblur.svg)](https://github.com/andrewgjohnson/imagettftextblur/issues)

## Description

imagettftextblur is a drop in replacement for imagettftext with added parameters to add blur, glow and shadow effects to your PHP GD images.

## Usage

To get started simply add a reference in your code to imagettftextblur.php and change all calls from imagettftext to imagettftextblur.  To add blur simply pass an integer greater than zero as the $blur_intensity parameter.

## Example

    imagettftext($image, 20, 0, 0, 0, $color, $font, $string);        // standard method to add text to a GD image
    imagettftextblur($image, 20, 0, 0, 0, $color, $font, $string);    // this will work the same as the line above
    imagettftextblur($image, 20, 0, 0, 0, $color, $font, $string, 5); // method to add blurred text to a GD image

There are a number of other examples included in the repository.

## Composer

This project offers support for the [Composer](https://getcomposer.org/) dependency manager.  You can find the imagettftextblur package online at [https://packagist.org/packages/andrewgjohnson/imagettftextblur](https://packagist.org/packages/andrewgjohnson/imagettftextblur).

### Install using Composer

Either run this command

    composer require andrewgjohnson/imagettftextblur

or add this to the `require` section of your composer.json

    "andrewgjohnson/imagettftextblur":"1.*"

## Help Requests

Please post any questions or problems on [stackoverflow.com](https://stackoverflow.com/search?q=imagettftextblur) if you need help.

## Acknowledgements

This project was started by [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson)

Full list of contributors:
 * [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson)
 * [Philip van Heemstra (@vHeemstra)](https://github.com/vHeemstra)

## Changelog

You can find all notable changes in [CHANGELOG.md](https://github.com/andrewgjohnson/imagettftextblur/blob/master/CHANGELOG.md).
