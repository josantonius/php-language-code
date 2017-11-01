# PHP LanguageCode library

[![Latest Stable Version](https://poser.pugx.org/josantonius/LanguageCode/v/stable)](https://packagist.org/packages/josantonius/LanguageCode) [![Latest Unstable Version](https://poser.pugx.org/josantonius/LanguageCode/v/unstable)](https://packagist.org/packages/josantonius/LanguageCode) [![License](https://poser.pugx.org/josantonius/LanguageCode/license)](LICENSE) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/5e3ca0b3edd2415d92d2262afb491d47)](https://www.codacy.com/app/Josantonius/PHP-LanguageCode?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Josantonius/PHP-LanguageCode&amp;utm_campaign=Badge_Grade) [![Total Downloads](https://poser.pugx.org/josantonius/LanguageCode/downloads)](https://packagist.org/packages/josantonius/LanguageCode) [![Travis](https://travis-ci.org/Josantonius/PHP-LanguageCode.svg)](https://travis-ci.org/Josantonius/PHP-LanguageCode) [![PSR2](https://img.shields.io/badge/PSR-2-1abc9c.svg)](http://www.php-fig.org/psr/psr-2/) [![PSR4](https://img.shields.io/badge/PSR-4-9b59b6.svg)](http://www.php-fig.org/psr/psr-4/) [![CodeCov](https://codecov.io/gh/Josantonius/PHP-LanguageCode/branch/master/graph/badge.svg)](https://codecov.io/gh/Josantonius/PHP-LanguageCode)

[Versión en español](README-ES.md)

List of 217 language codes: ISO 639-1.

---

- [Requirements](#requirements)
- [Installation](#installation)
- [Available Methods](#available-methods)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [List in JSON format](#list-in-json-format)
- [Tests](#tests)
- [TODO](#-todo)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

## Requirements

This library is supported by **PHP versions 5.6** or higher and is compatible with **HHVM versions 3.0** or higher.

## Installation

The preferred way to install this extension is through [Composer](http://getcomposer.org/download/).

To install **PHP LanguageCode library**, simply:

    $ composer require Josantonius/LanguageCode

The previous command will only install the necessary files, if you prefer to **download the entire source code** you can use:

    $ composer require Josantonius/LanguageCode --prefer-source

You can also **clone the complete repository** with Git:

  $ git clone https://github.com/Josantonius/PHP-LanguageCode.git

Or **install it manually**:

Download [LanguageCode.php](https://raw.githubusercontent.com/Josantonius/PHP-LanguageCode/master/src/LanguageCode.php) and [LanguageCodeCollection.php](https://raw.githubusercontent.com/Josantonius/PHP-LanguageCode/master/src/LanguageCodeCollection.php):

    $ wget https://raw.githubusercontent.com/Josantonius/PHP-LanguageCode/master/src/LanguageCode.php
    $ wget https://raw.githubusercontent.com/Josantonius/PHP-LanguageCode/master/src/LanguageCodeCollection.php

## Available Methods

Available methods in this library:

### - Get all language codes as array:

```php
LanguageCode::get();
```

**# Return** (array) → language codes and language names

### - Get language name from language code:

```php
LanguageCode::getLanguageFromCode($languageCode);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $languageCode | Language code, e.g. 'es'. | string | Yes | |

**# Return** (tring|false) → country name

### - Get language code from language name:

```php
LanguageCode::getCodeFromLanguage($languageName);
```

| Attribute | Description | Type | Required | Default
| --- | --- | --- | --- | --- |
| $languageName | Language name, e.g. 'Spanish'. | string | Yes | |

**# Return** (tring|false) → language code

## Quick Start

To use this library with **Composer**:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\LanguageCode\LanguageCode;
```

Or If you installed it **manually**, use it:

```php
require_once __DIR__ . '/LanguageCode.php';
require_once __DIR__ . '/LanguageCodeCollection.php';

use Josantonius\LanguageCode\LanguageCode;
```

## Usage

Example of use for this library:

## List in JSON format

[Go to the resource](https://gist.github.com/Josantonius/0a889ab6f18db2fcefda15a039613293).

## Tests 

To run [tests](tests) you just need [Composer](http://getcomposer.org/download/) and to execute the following:

    $ git clone https://github.com/Josantonius/PHP-LanguageCode.git
    
    $ cd PHP-LanguageCode

    $ composer install

Run unit tests with [PHPUnit](https://phpunit.de/):

    $ composer phpunit

Run [PSR2](http://www.php-fig.org/psr/psr-2/) code standard tests with [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer):

    $ composer phpcs

Run all previous tests:

    $ composer tests

## ☑ TODO

- [x] Create tests
- [x] Improve documentation

## Contribute

1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

## Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

## License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

## Copyright

2016 - 2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).