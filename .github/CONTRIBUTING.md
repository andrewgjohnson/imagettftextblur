# Contributing Guidelines

## Contribute Code

### Coding Conventions

Please be consistent with what already exists. New code should not produce any new errors/warnings when the commands below are run. New code that produces new errors/warnings may be rejected.

Run the following command to check your changes against our linters and unit tests:

    composer test

#### PHP

The project uses the [PHP_CodeSniffer](https://github.com/squizlabs/php_codesniffer) linter tool to enforce coding standards in the [PHP source](https://imagettftextblur.agjgd.org/source/), [unit tests](https://github.com/andrewgjohnson/imagettftextblur/tree/master/tests) and [examples](https://imagettftextblur.agjgd.org/examples/). The project uses the PHP_CodeSniffer [PSR-12](https://www.php-fig.org/psr/psr-12/) ruleset defined in the [PHP_CodeSniffer configuration file](https://github.com/andrewgjohnson/imagettftextblur/blob/master/phpcs.xml.dist). Run this command to test all code changes:

    composer lint

Alternatively, run this command to use phpcbf to fix rule violations:

    composer lint:fix

### Unit Tests

The project uses [PHPUnit](https://phpunit.de/) framework to run unit tests. The tests are all located in the [`tests` folder](https://github.com/andrewgjohnson/imagettftextblur/tree/master/tests). All tests should continue to pass and all new features should ideally include unit tests. Run this command to execute all unit tests:

    composer phpunit

### Online Documentation

The project’s online documentation is available at [imagettftextblur.agjgd.org](https://imagettftextblur.agjgd.org/). Please ensure the documentation is updated along with any code changes. All of the files used to generate the documentation are in the [`documentation` folder](https://github.com/andrewgjohnson/imagettftextblur/blob/master/documentation/). [The website](https://imagettftextblur.agjgd.org/) is powered by [GitHub Pages](https://pages.github.com/) which uses [Jekyll](https://jekyllrb.com/). Run this command to test the online documentation website locally if you have Jekyll installed:

    jekyll serve

### Submitting Changes

Please send a [GitHub pull request](https://github.com/andrewgjohnson/imagettftextblur/pull/new/master) with a clear list of what you’ve done (read more about [pull requests](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/about-pull-requests)). Please follow our coding conventions (above) and make sure all of your commits are atomic (one feature per commit). Please use our [pull request template](https://github.com/andrewgjohnson/imagettftextblur/blob/master/.github/PULL_REQUEST_TEMPLATE.md) when submitting pull requests.

Always write a clear log message for your commits. One-line messages are fine for small changes, but bigger changes should look like this:

    $ git commit -m "A brief summary of the commit
    >
    > A paragraph describing what changed and its impact."

## Contribute Financially

You can contribute financially by becoming a [patron](https://patreon.com/agjopensource) at [patreon.com/agjopensource](https://patreon.com/agjopensource) to support imagettftextblur and [other agjgd.org projects](https://agjgd.org/projects/).

[![Patreon - Become a Patron](https://raster.shields.io/badge/Patreon%20-become%20a%20Patron-FD334A.png?style=for-the-badge&logo=patreon&logoColor=FD334A)](https://patreon.com/agjopensource)

## Code of Conduct

In order to participate your behaviour must conform to our [code of conduct](https://github.com/andrewgjohnson/imagettftextblur/blob/master/.github/CODE_OF_CONDUCT.md).
