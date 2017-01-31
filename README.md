# PHP LanguageCode library

[![Latest Stable Version](https://poser.pugx.org/josantonius/languagecode/v/stable)](https://packagist.org/packages/josantonius/languagecode) [![Total Downloads](https://poser.pugx.org/josantonius/languagecode/downloads)](https://packagist.org/packages/josantonius/languagecode) [![Latest Unstable Version](https://poser.pugx.org/josantonius/languagecode/v/unstable)](https://packagist.org/packages/josantonius/languagecode) [![License](https://poser.pugx.org/josantonius/languagecode/license)](https://packagist.org/packages/josantonius/languagecode)

[Spanish version](README-ES.md)

List of 217 language codes: ISO 639-1.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Exception Handler](#exception-handler)
- [Contribute](#contribute)
- [Repository](#repository)
- [Author](#author)
- [Licensing](#licensing)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP LanguageCode library, simply:

    $ composer require Josantonius/LanguageCode

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\LanguageCode\LanguageCode;
```
### Available Methods

Available methods in this library:

```php
LanguageCode::getLanguageFromCode();
LanguageCode::getCodeFromLanguage();
LanguageCode::getAll();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\LanguageCode\LanguageCode;

LanguageCode::getLanguageFromCode('es');

/* string(7) "Spanish" */

LanguageCode::getLanguageFromCode('abcd');

/* string(9) "undefined" */

LanguageCode::getCodeFromLanguage('spanish');

/* string(2) "es" */

LanguageCode::getCodeFromLanguage('abcd');

/* string(9) "undefined" */

LanguageCode::getAll();

/*
array(217) {
  ["aa"]=>
  string(4) "Afar"
  ["ab"]=>
  string(9) "Abkhazian"
  ["af"]=>
  string(9) "Afrikaans"
  ["am"]=>
  string(7) "Amharic"
  ["ar"]=>
  string(6) "Arabic"
  (...)
*/
```

### Tests 

To use the [test](tests) class, simply:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\LanguageCode\\Tests\\', __DIR__ . '/vendor/josantonius/languagecode/tests');

use Josantonius\LanguageCode\Tests\LanguageCodeTest;

```
Available test methods in this library:

```php
LanguageCodeTest::testGetLanguageFromCode();
LanguageCodeTest::testGetLanguageFromCodeUndefined();
LanguageCodeTest::testGetCodeFromLanguage();
LanguageCodeTest::testGetCodeFromLanguageUndefined();
LanguageCodeTest::testGetAll();
```

### Exception Handler

This library uses [exception handler](src/Exception) that you can customize.
### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### Author

Maintained by [Josantonius](https://github.com/Josantonius/).

### Licensing

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.