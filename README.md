# imagettftextblur

[![MIT License](https://img.shields.io/github/license/andrewgjohnson/imagettftextblur.png)](https://github.com/andrewgjohnson/imagettftextblur/blob/master/LICENSE)
[![Current Release](https://img.shields.io/github/release/andrewgjohnson/imagettftextblur.png)](https://github.com/andrewgjohnson/imagettftextblur/releases)
[![GitHub Stars](https://img.shields.io/github/stars/andrewgjohnson/imagettftextblur.png)](https://github.com/andrewgjohnson/imagettftextblur/stargazers)
[![Contributors](https://img.shields.io/github/contributors/andrewgjohnson/imagettftextblur.png)](https://github.com/andrewgjohnson/imagettftextblur/graphs/contributors)
[![Packagist Downloads](https://img.shields.io/packagist/dt/andrewgjohnson/imagettftextblur.png)](https://packagist.org/packages/andrewgjohnson/imagettftextblur/stats)
[![Issues](https://img.shields.io/github/issues/andrewgjohnson/imagettftextblur.png)](https://github.com/andrewgjohnson/imagettftextblur/issues)

<p align="center"><a href="https://imagettftextblur.org/" title=""><img src="https://imagettftextblur.org/documentation/imagettftextblur.org/images/avatar.png" alt="" title="" width="400" id="avatar" /></a></p>

## Description

**imagettftextblur** is a drop in replacement for imagettftext with added parameters to add blur, glow and shadow effects to your PHP GD images.

## Usage

### With Composer

This project offers support for the [Composer](https://getcomposer.org/) dependency manager.  You can find the imagettftextblur package online on [packagist.org](https://packagist.org/packages/andrewgjohnson/imagettftextblur).

#### Install using Composer

Either run this command:

    composer require andrewgjohnson/imagettftextblur

or add this to the `require` section of your composer.json file:

    "andrewgjohnson/imagettftextblur": "1.*"

### Without Composer

To use without Composer add an [include](http://php.net/manual/function.include.php) to the [`imagettftextblur.php` source file](https://raw.githubusercontent.com/andrewgjohnson/imagettftextblur/master/source/imagettftextblur.php).

    include_once 'source/imagettftextblur.php';

## Examples

    // standard method to add text to a GD image
    imagettftext($im, 20, 0, 0, 0, $color, $font, $string);

    // this will work the exact same as the line above
    imagettftextblur($im, 20, 0, 0, 0, $color, $font, $string);

    // method to add blurred text to a GD image
    imagettftextblur($im, 20, 0, 0, 0, $color, $font, $string, 1);

There are [other examples](https://github.com/andrewgjohnson/imagettftextblur/tree/master/examples) included in the GitHub repository and on [imagettftextblur.org](http://imagettftextblur.org/examples/).

## Help Requests

Please post any questions on [stackoverflow.com](https://stackoverflow.com/search?q=imagettftextblur) if you need help.

If you discover a bug please [enter an issue](https://github.com/andrewgjohnson/imagettftextblur/issues/new) on GitHub.  When submitting an issue please use our [issue template](https://github.com/andrewgjohnson/imagettftextblur/blob/master/ISSUE_TEMPLATE.md).

## Contributing

Please read our [contributing guidelines](https://github.com/andrewgjohnson/imagettftextblur/blob/master/CONTRIBUTING.md) if you want to contribute.

## Acknowledgements

This project was started by [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson).

Full list of contributors:
 * [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson)
 * [Philip van Heemstra (@vHeemstra)](https://github.com/vHeemstra)

Our [issue template](https://github.com/andrewgjohnson/imagettftextblur/blob/master/ISSUE_TEMPLATE.md) & [pull request template](https://github.com/andrewgjohnson/imagettftextblur/blob/master/PULL_REQUEST_TEMPLATE.md) come via the [stevemao/github-issue-templates](https://github.com/stevemao/github-issue-templates) project. The [mountains photo](https://unsplash.com/photos/qJvpykJ5SKs) comes via [Gabriel Garcia Marengo](https://unsplash.com/@gabrielgm).

## Changelog

You can find all notable changes in the [changelog](https://github.com/andrewgjohnson/imagettftextblur/blob/master/CHANGELOG.md).
