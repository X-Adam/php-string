# String

<p align="center">
<a href="https://packagist.org/packages/X-Adam/string" rel="nofollow"><img src="https://img.shields.io/packagist/v/X-Adam/string" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/X-Adam/string" rel="nofollow"><img src="https://img.shields.io/packagist/dt/X-Adam/string" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/X-Adam/string" rel="nofollow"><img src="https://poser.pugx.org/X-Adam/string/dependents.svg" alt="Dependents"></a>
<a href="https://packagist.org/packages/X-Adam/string" rel="nofollow"><img src="https://img.shields.io/packagist/l/X-Adam/string" alt="License"></a>
</p>

<p align="center">
<a href="https://scrutinizer-ci.com/g/X-Adam/php-string/build-status/master" rel="nofollow"><img src="https://scrutinizer-ci.com/g/X-Adam/string/badges/quality-score.png?b=master" title="Scrutinizer Code Quality"></a>
<a href="https://styleci.io/repos/322870263" rel="nofollow"><img src="https://styleci.io/repos/322870263/shield?branch=master" alt="StyleCI"></a>
</p>

## Introduction

PHP string helper package.

## Requirements

PHP >=7.0. Other than that, this library has no requirements.

## Install

```bash
$ composer require x-adam/string:"~2.0"
```

## Example Usage

```php
include "./vendor/autoload.php";

# Make a string's multiple space characters clear.
echo strMultipleSpaceClear('a b  c   d     e');
# Result: 'a b c d e'.
```

## License

This package is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
