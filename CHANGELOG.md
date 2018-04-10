# Changelog

All notable changes to the [imagettftextblur project](https://github.com/andrewgjohnson/imagettftextblur) will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## v1.2.14 (April 9, 2018)
 * Fixed incorrect default value of the $return_array array
 * Refactored PHP code in examples for readability
 * Added comments to PHP code in examples
 * Changed shields.io badges to PNG
 * Various text changes to documentation
 * Various style changes to [imagettftextblur.org](http://imagettftextblur.org)
 * Added "Source" and "Examples" pages to documentation
 * Removed "Changelog", "Code of Conduct" & "Contributing" pages from documentation

## v1.2.13 (March 11, 2018)
 * Added support for [Jekyll](https://jekyllrb.com/)
 * Added support for [GitHub Pages](https://pages.github.com)
 * Turned on live traffic to [imagettftextblur.org](http://imagettftextblur.org)
 * Minor changes to links in documentation

## v1.2.12 (March 9, 2018)
 * Updated GitHub URL's to HTTPS
 * Moved Changelog to its own file
 * Added a code of conduct
 * Added contributing guidelines
 * Added an issue template
 * Added a pull request template
 * Updated README.md with more detail & links

## v1.2.11 (March 8, 2018)
 * Added [shields.io badges](http://shields.io/) to README.md
 * Updated link to MIT license on opensource.org
 * Updated the "2017" copyright references to "2018"

## v1.2.10 (June 23, 2017)
 * Updated StackOverflow link in README.md

## v1.2.9 (March 17, 2017)
 * Updated documentation text

## v1.2.8 (March 16, 2017)
 * Updated README.md to conform to GitHub styles

## v1.2.7 (March 16, 2017)
 * Fixed some issues with text placement in the examples
 * Fixed the default value of the $return_array array
 * Updated the "2016" copyright references to "2017"

## v1.2.6 (November 29, 2016)
 * Documentation updates

## v1.2.5 (November 29, 2016)
 * Added [PHPDoc](https://en.wikipedia.org/wiki/PHPDoc) support throughout
 * Added descriptive comments throughout library source code
 * Fixed a lot of minor PSR-1/PSR-2 errors & warnings

## v1.2.4 (November 24, 2016)
 * No new features; we had to do a version bump to fix an issue with our Composer package

## v1.2.3 (November 24, 2016)
 * Fixed autoload issue when installed via Composer

## v1.2.2 (November 24, 2016)
 * Added Composer support

## v1.2.1 (November 24, 2016)
 * Added [PSR-1](http://www.php-fig.org/psr/psr-1/) & [PSR-2](http://www.php-fig.org/psr/psr-2/) support

## v1.2.0 (November 8, 2016)
 * Added new optional parameter called $blur_filter to allow different filters to be used
 * Calls to imagettftextblur() with a valid $blur_intensity value now return an array of coordinates based on [imagettftext()](http://php.net/imagettftext)'s return values

## v1.1.0 (April 7, 2016)
 * Fixed issue that caused the alpha of colors to be ignored (fixed by [@vHeemstra](https://github.com/vHeemstra))
 * Added PNG images for each example of expected output

## v1.0.0 (March 19, 2013)
 * Intial release of imagettftextblur
