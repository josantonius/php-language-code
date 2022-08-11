# PHP LanguageCode library

[![Latest Stable Version](https://poser.pugx.org/josantonius/language-code/v/stable)](https://packagist.org/packages/josantonius/language-code)
[![License](https://poser.pugx.org/josantonius/language-code/license)](LICENSE)
[![Total Downloads](https://poser.pugx.org/josantonius/language-code/downloads)](https://packagist.org/packages/josantonius/language-code)
[![CI](https://github.com/josantonius/php-language-code/actions/workflows/ci.yml/badge.svg?branch=main)](https://github.com/josantonius/php-language-code/actions/workflows/ci.yml)
[![CodeCov](https://codecov.io/gh/josantonius/php-language-code/branch/main/graph/badge.svg)](https://codecov.io/gh/josantonius/php-language-code)
[![PSR1](https://img.shields.io/badge/PSR-1-f57046.svg)](https://www.php-fig.org/psr/psr-1/)
[![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](https://www.php-fig.org/psr/psr-4/)
[![PSR12](https://img.shields.io/badge/PSR-12-1abc9c.svg)](https://www.php-fig.org/psr/psr-12/)

**Translations**: [Español](.github/lang/es-ES/README.md)

PHP library to get language name from code.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Classes](#available-classes)
  - [LanguageCode Class](#languagecode-class)
  - [LanguageCodeCollection Class](#languagecodecollection-class)
- [Usage](#usage)
- [List in JSON format](#list-in-json-format)
- [Tests](#tests)
- [TODO](#todo)
- [Changelog](#changelog)
- [Contribution](#contribution)
- [Sponsor](#Sponsor)
- [License](#license)

---

## Requirements

This library is compatible with the PHP versions: 8.0 | 8.1.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP LanguageCode library**, simply:

```console
composer require josantonius/language-code
```

The previous command will only install the necessary files,
if you prefer to **download the entire source code** you can use:

```console
composer require josantonius/language-code --prefer-source
```

You can also **clone the complete repository** with Git:

```console
clone https://github.com/josantonius/php-language-code.git
```

## Available Classes

### LanguageCode Class

```php
use Josantonius\LanguageCode\LanguageCode;
```

Create object:

```php
$languageCode = new LanguageCode();
```

Get all language codes as array:

```php
$languageCode->all(): array
```

Get language code from language name:

```php
$languageCode->getCode(string $languageName): string|null
```

Get language name from language code:

```php
$languageCode->getName(string $languageCode): string|null
```

### LanguageCodeCollection Class

```php
use Josantonius\LanguageCode\LanguageCodeCollection;
```

Get all language codes as array:

```php
LanguageCodeCollection::all(): array
```

Get language code from language name:

```php
LanguageCodeCollection::getCode(string $languageName): string|null
```

Get language name from language code:

```php
LanguageCodeCollection::getName(string $languageCode): string|null
```

## Usage

Example of use for this library:

### Get all language codes as array

```php
use Josantonius\LanguageCode\LanguageCode;

$languageCode = new LanguageCode();

$languageCode->all();
```

```php
use Josantonius\LanguageCode\LanguageCodeCollection;

LanguageCodeCollection::all();
```

Result:

```php
[
    'aa' => 'Afar',
    'ab' => 'Abkhazian',
    'af' => 'Afrikaans',
    'am' => 'Amharic',
    'ar' => 'Arabic',
    'ar-ae' => 'Arabic (U.A.E.)',
    'ar-bh' => 'Arabic (Bahrain)',
    'ar-dz' => 'Arabic (Algeria)',
    'ar-eg' => 'Arabic (Egypt)',
    'ar-iq' => 'Arabic (Iraq)',
    (...)
]
```

### Get language code from language name

```php
use Josantonius\LanguageCode\LanguageCode;

$languageCode = new LanguageCode();

$languageCode->getCode('Spanish'); // es
```

```php
use Josantonius\LanguageCode\LanguageCodeCollection;

LanguageCodeCollection::getCode('Turkish'); // tr
```

### Get language name from language code

```php
use Josantonius\LanguageCode\LanguageCode;

$languageCode = new LanguageCode();

$languageCode->getName('eo'); // Esperanto
```

```php
use Josantonius\LanguageCode\LanguageCodeCollection;

LanguageCodeCollection::getName('de'); // German
```

## List in JSON format

[Go to the resource](https://gist.github.com/josantonius/b455e315bc7f790d14b136d61d9ae469).

## Tests

To run [tests](tests) you just need [composer](http://getcomposer.org/download/)
and to execute the following:

```console
git clone https://github.com/josantonius/php-language-code.git
```

```console
cd php-language-code

```

```console
composer install
```

Run unit tests with [PHPUnit](https://phpunit.de/):

```console
composer phpunit
```

Run code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

```console
composer phpcs
```

Run [PHP Mess Detector](https://phpmd.org/) tests to detect inconsistencies in code style:

```console
composer phpmd
```

Run all previous tests:

```console
composer tests
```

## TODO

- [ ] Add new feature
- [ ] Improve tests
- [ ] Improve documentation
- [ ] Improve English translation in the README file
- [ ] Refactor code for disabled code style rules (see phpmd.xml and phpcs.xml)

## Changelog

Detailed changes for each release are documented in the
[release notes](https://github.com/josantonius/php-language-code/releases).

## Contribution

Please make sure to read the [Contributing Guide](.github/CONTRIBUTING.md), before making a pull
request, start a discussion or report a issue.

Thanks to all [contributors](https://github.com/josantonius/php-language-code/graphs/contributors)! :heart:

## Sponsor

If this project helps you to reduce your development time,
[you can sponsor me](https://github.com/josantonius#sponsor) to support my open source work :blush:

## License

This repository is licensed under the [MIT License](LICENSE).

Copyright © 2017-present, [Josantonius](https://github.com/josantonius#contact)
