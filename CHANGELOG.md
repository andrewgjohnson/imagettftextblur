# Changelog

All notable changes to the [imagettftextblur project](https://github.com/andrewgjohnson/imagettftextblur) will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## v1.2.18 (November 22, 2022)
 * Signed up for [Patreon](https://patreon.com/agjgd) and added links to README.md
 * Added `.github` folder to unclutter the root directory
 * Added `CODEOWNERS` file
 * Added `FUNDING.yml` file
 * Added `SECURITY.md` file
 * Added `SUPPORT.md` file
 * Updated shields.io badge aesthetics on README.md
 * Added Patrons shields.io badge to README.md
 * Enabled GitHub [discussions area](https://github.com/andrewgjohnson/imagettftextblur/discussions) and now recommending it over StackOverflow
 * Removed `ISSUE_TEMPLATE.md` file for our single issue template and replaced with `ISSUE_TEMPLATE` folder to separate bug reports & feature requests within GitHub [issues](https://github.com/andrewgjohnson/imagettftextblur/issues)
 * Updated [avatar image](https://imagettftextblur.agjgd.org/documentation/imagettftextblur.agjgd.org/images/avatar.png)
 * Moved all Twitter activity for all [agjgd projects](https://agjgd.org/projects/) (including imagettftextblur) to the [@agjgdphp Twitter account](https://twitter.com/agjgdphp) as there were issues with the individual accounts being frozen

## v1.2.17 (November 17, 2022)
 * Changed documentation website to [imagettftextblur.agjgd.org](https://imagettftextblur.agjgd.org)
 * Updated copyright years to 2022

## v1.2.16 (December 1, 2018)
 * Added avatar to README.md
 * Integrated mountains photo & credited the photographer in README.md
 * Added cover photo to the documentation website
 * Improved design of menu toggle on the documentation website
 * Changed menu toggle to a link to a new page called /menu/ for JavaScript-disabled users
 * Added return type

## v1.2.15 (June 4, 2018)
 * Enabled HTTPS on https://imagettftextblur.agjgd.org/
 * Switched YUI reset CSS from Yahoo hosted to inline
 * Added examples/README.md to help browsers on the GitHub repository
 * Switched to `__DIR__` constant in examples to get current directory
 * Fixed labeling issue with $text_left, $text_right, $text_top & $text_bottom in examples
 * Updated parameter descriptions to be more in line with php.net's descriptions of imagettftext()

## v1.2.14 (April 9, 2018)
 * Fixed incorrect default value of the $return_array array
 * Refactored PHP code in examples for readability
 * Added comments to PHP code in examples
 * Changed shields.io badges to PNG
 * Various text changes to documentation
 * Various style changes to [imagettftextblur.agjgd.org](https://imagettftextblur.agjgd.org)
 * Added "Source" and "Examples" pages to documentation
 * Removed "Changelog", "Code of Conduct" & "Contributing" pages from documentation

## v1.2.13 (March 11, 2018)
 * Added support for [Jekyll](https://jekyllrb.com/)
 * Added support for [GitHub Pages](https://pages.github.com)
 * Turned on live traffic to [imagettftextblur.agjgd.org](https://imagettftextblur.agjgd.org)
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
