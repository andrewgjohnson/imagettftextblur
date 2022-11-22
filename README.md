# imagettftextblur

[![MIT License](https://raster.shields.io/badge/license-MIT-0366d6.png?colorB=0366d6&style=flat-square)](https://github.com/andrewgjohnson/imagettftextblur/blob/master/LICENSE)
[![Current Release](https://img.shields.io/github/release/andrewgjohnson/imagettftextblur.png?colorB=0366d6&style=flat-square&logoColor=white&logo=github)](https://github.com/andrewgjohnson/imagettftextblur/releases)
[![GitHub Stars](https://img.shields.io/github/stars/andrewgjohnson/imagettftextblur.png?colorB=0366d6&style=flat-square&logoColor=white&logo=github)](https://github.com/andrewgjohnson/imagettftextblur/stargazers)
[![Contributors](https://img.shields.io/github/contributors/andrewgjohnson/imagettftextblur.png?colorB=0366d6&style=flat-square&logoColor=white&logo=github)](https://github.com/andrewgjohnson/imagettftextblur/graphs/contributors)
[![Packagist Downloads](https://img.shields.io/packagist/dt/andrewgjohnson/imagettftextblur.png?colorB=0366d6&style=flat-square&logoColor=white&logo=packagist)](https://packagist.org/packages/andrewgjohnson/imagettftextblur/stats)
[![Issues](https://img.shields.io/github/issues/andrewgjohnson/imagettftextblur.png?colorB=0366d6&style=flat-square&logoColor=white&logo=github)](https://github.com/andrewgjohnson/imagettftextblur/issues)
[![Patreon](https://img.shields.io/endpoint.png?url=https%3A%2F%2Fshieldsio-patreon.vercel.app%2Fapi%3Fusername%3Dagjgd%26type%3Dpatrons&colorB=0366d6&style=flat-square&logoColor=white&logo=patreon)](https://patreon.com/agjgd)

<p align="center"><a href="https://imagettftextblur.agjgd.org/" title=""><img src="https://imagettftextblur.agjgd.org/documentation/imagettftextblur.agjgd.org/images/avatar.png" alt="" title="" width="400" id="avatar" /></a></p>

## Description

**imagettftextblur** is a drop in replacement for imagettftext with added parameters to add blur, glow and shadow effects to your PHP GD images.

[![Patreon - Become a Patron](https://raster.shields.io/badge/Patreon%20-become%20a%20Patron-FD334A.png?style=for-the-badge&logo=patreon&logoColor=FD334A)](https://patreon.com/agjgd)

**imagettftextblur** is an [agjgd.org](https://agjgd.org) project.

## Usage

### With Composer

This project offers support for the [Composer](https://getcomposer.org/) dependency manager. You can find the imagettftextblur package online on [packagist.org](https://packagist.org/packages/andrewgjohnson/imagettftextblur).

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

There are [other examples](https://github.com/andrewgjohnson/imagettftextblur/tree/master/examples) included in the GitHub repository and on [imagettftextblur.agjgd.org](https://imagettftextblur.agjgd.org/examples/).

## Help Requests

Please post any questions in the [discussions area](https://github.com/andrewgjohnson/imagettftextblur/discussions) on GitHub if you need help.

If you discover a bug please [enter an issue](https://github.com/andrewgjohnson/imagettftextblur/issues/new) on GitHub. When submitting an issue please use our [issue template](https://github.com/andrewgjohnson/imagettftextblur/blob/master/ISSUE_TEMPLATE.md).

## Contributing

Please read our [contributing guidelines](https://github.com/andrewgjohnson/imagettftextblur/blob/master/CONTRIBUTING.md) if you want to contribute.

You can contribute financially by becoming a [patron](https://patreon.com/agjgd) at [patreon.com/agjgd](https://patreon.com/agjgd) to support imagettftextblur and [other agjgd.org projects](https://agjgd.org/projects/).

[![Patreon - Become a Patron](https://raster.shields.io/badge/Patreon%20-become%20a%20Patron-FD334A.png?style=for-the-badge&logo=patreon&logoColor=FD334A)](https://patreon.com/agjgd)

## Acknowledgements

This project was started by [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson).

Full list of contributors:
 * [Andrew G. Johnson (@andrewgjohnson)](https://github.com/andrewgjohnson)
 * [Philip van Heemstra (@vHeemstra)](https://github.com/vHeemstra)

Our [security policies and procedures](https://github.com/andrewgjohnson/imagettftextblur/blob/master/.github/SECURITY.md) comes via the [atomist/samples](https://github.com/atomist/samples/blob/master/SECURITY.md) project. Our [issue templates](https://github.com/andrewgjohnson/imagettftextblur/tree/master/.github/ISSUE_TEMPLATE) comes via the [tensorflow/tensorflow](https://github.com/tensorflow/tensorflow/blob/master/SECURITY.md) project. Our [pull request template](https://github.com/andrewgjohnson/imagettftextblur/blob/master/.github/PULL_REQUEST_TEMPLATE.md) comes via the [stevemao/github-issue-templates](https://github.com/stevemao/github-issue-templates) project. The [mountains photo](https://unsplash.com/photos/qJvpykJ5SKs) comes via [Gabriel Garcia Marengo](https://unsplash.com/@gabrielgm).

## Changelog

You can find all notable changes in the [changelog](https://github.com/andrewgjohnson/imagettftextblur/blob/master/CHANGELOG.md).
