# PHP LanguageCode library

[![Latest Stable Version](https://poser.pugx.org/josantonius/languagecode/v/stable)](https://packagist.org/packages/josantonius/languagecode) [![Total Downloads](https://poser.pugx.org/josantonius/languagecode/downloads)](https://packagist.org/packages/josantonius/languagecode) [![Latest Unstable Version](https://poser.pugx.org/josantonius/languagecode/v/unstable)](https://packagist.org/packages/josantonius/languagecode) [![License](https://poser.pugx.org/josantonius/languagecode/license)](https://packagist.org/packages/josantonius/languagecode) [![Travis](https://travis-ci.org/Josantonius/PHP-LanguageCode.svg)](https://travis-ci.org/Josantonius/PHP-LanguageCode)

[Spanish version](README-ES.md)

List of 217 language codes: ISO 639-1.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP LanguageCode library, simply:

    $ composer require Josantonius/LanguageCode

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, exceptions not used, docs...) you can use:

    $ composer require Josantonius/LanguageCode --prefer-source

Or you can also clone the complete repository with Git:

  $ git clone https://github.com/Josantonius/PHP-LanguageCode.git

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

To run [tests](tests/LanguageCode/test) simply:

    $ git clone https://github.com/Josantonius/PHP-LanguageCode.git
    
    $ cd PHP-LanguageCode

    $ phpunit

### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).