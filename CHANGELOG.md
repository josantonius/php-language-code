# CHANGELOG

## [v2.0.2](https://github.com/josantonius/php-language-code/releases/tag/v2.0.2) (2022-XX-XX)

* The notation type in the test function names has been changed from camel to snake case for readability.

* Functions were added to document the methods and avoid confusion.

* Disabled the ´CamelCaseMethodName´ rule in ´phpmd.xml´ to avoid warnings about function names in tests.

* The alignment of the asterisks in the comments has been fixed.

* Tests for Windows have been added.

* Tests for PHP 8.2 have been added.

## [v2.0.1](https://github.com/josantonius/php-language-code/releases/tag/v2.0.1) (2022-08-11)

* Improved documentation.

## [v2.0.0](https://github.com/josantonius/php-language-code/releases/tag/v2.0.0) (2022-08-02)

> Version 1.x is considered as deprecated and unsupported.
> In this version (2.x) the library was completely restructured.
> It is recommended to review the documentation for this version and make the necessary changes
> before starting to use it, as it not be compatible with version 1.x.

---

* The library was completely refactored.

* Support for PHP version 8.1.

* Support for earlier versions of PHP **8.1** is discontinued.

* Replaced all static methods in `Josantonius\LanguageCode\LanguageCode` class.

* Improved documentation; `README.md`, `CODE_OF_CONDUCT.md`, `CONTRIBUTING.md` and `CHANGELOG.md`.

* Removed `Codacy`.

* Removed `PHP Coding Standards Fixer`.

* The `master` branch was renamed to `main`.

* The `develop` branch was added to use a workflow based on `Git Flow`.

* `Travis` is discontinued for continuous integration. `GitHub Actions` will be used from now on.

* Added `.github/CODE_OF_CONDUCT.md` file.
* Added `.github/CONTRIBUTING.md` file.
* Added `.github/FUNDING.yml` file.
* Added `.github/workflows/ci.yml` file.
* Added `.github/lang/es-ES/CODE_OF_CONDUCT.md` file.
* Added `.github/lang/es-ES/CONTRIBUTING.md` file.
* Added `.github/lang/es-ES/LICENSE` file.
* Added `.github/lang/es-ES/README` file.

* Deleted `.travis.yml` file.
* Deleted `.editorconfig` file.
* Deleted `CONDUCT.MD` file.
* Deleted `README-ES.MD` file.
* Deleted `.php_cs.dist` file.

## [1.1.6](https://github.com/josantonius/php-language-code/releases/tag/1.1.5) (2018-01-06)

* The tests were fixed.

* Changes in documentation.

## [1.1.5](https://github.com/josantonius/php-language-code/releases/tag/1.1.5) (2017-11-08)

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

## [1.1.4](https://github.com/josantonius/php-language-code/releases/tag/1.0.0) (2017-11-01)

* Implemented `PSR-4 autoloader standard` from all library files.

* Implemented `PSR-2 coding standard` from all library PHP files.

* Implemented `PHPCS` to ensure that PHP code complies with `PSR2` code standards.

* Implemented `Codacy` to automates code reviews and monitors code quality over time.

* Implemented `Codecov` to coverage reports.

* Added `LanguageCode/phpcs.ruleset.xml` file.

* Deleted `LanguageCode/src/bootstrap.php` file.

* Deleted `LanguageCode/tests/bootstrap.php` file.

* Deleted `LanguageCode/vendor` folder.

* Deleted `LanguageCode/resources/languageCodes.jsond` file.

* Changed `Josantonius\LanguageCode\Test\LanguageCodeTest` class to  `Josantonius\LanguageCode\LanguageCodeTest` class.

* Added `Josantonius\LanguageCode\LanguageCodeCollection` class.
* Added `Josantonius\LanguageCode\LanguageCodeCollection::all()` method.
* Added `Josantonius\LanguageCode\LanguageCodeCollection::get()` method.

* Deleted `Josantonius\LanguageCode\LanguageCode::getAll()` method.

* Added `Josantonius\LanguageCode\LanguageCode::get()` method.

## [1.1.3](https://github.com/josantonius/php-language-code/releases/tag/1.1.3) (2017-09-14)

* Unit tests supported by `PHPUnit` were added.

* The repository was synchronized with Travis CI to implement continuous integration.

* Added `LanguageCode/src/bootstrap.php` file

* Added `LanguageCode/tests/bootstrap.php` file.

* Added `LanguageCode/phpunit.xml.dist` file.
* Added `LanguageCode/_config.yml` file.
* Added `LanguageCode/.travis.yml` file.

* Deleted `Josantonius\LanguageCode\Tests\LanguageCodeTest` class.
* Deleted `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetLanguageFromCode()` method.
* Deleted `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetLanguageFromCodeUndefined()` method.
* Deleted `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetCodeFromLanguage()` method.
* Deleted `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetCodeFromLanguageUndefined()` method.
* Deleted `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetAll()` method.

* Added `Josantonius\LanguageCode\Test\LanguageCodeTest` class.
* Added `Josantonius\LanguageCode\Test\LanguageCodeTest::testGetLanguageFromCode()` method.
* Added `Josantonius\LanguageCode\Test\LanguageCodeTest::testGetLanguageFromCodeUndefined()` method.
* Added `Josantonius\LanguageCode\Test\LanguageCodeTest::testGetCodeFromLanguage()` method.
* Added `Josantonius\LanguageCode\Test\LanguageCodeTest::testGetCodeFromLanguageUndefined()` method.
* Added `Josantonius\LanguageCode\Test\LanguageCodeTest::testGetAll()` method.

## [1.1.2](https://github.com/josantonius/php-language-code/releases/tag/1.1.2) (2017-07-16)

* Deleted `Josantonius\LanguageCode\Exception\LanguageCodeException` class.
* Deleted `Josantonius\LanguageCode\Exception\Exceptions` abstract class.
* Deleted `Josantonius\LanguageCode\Exception\LanguageCodeException->__construct()` method.

## [1.1.1](https://github.com/josantonius/php-language-code/releases/tag/1.1.1) (2017-03-18)

* Some files were excluded from download and comments and readme files were updated.

## [1.1.0](https://github.com/josantonius/php-language-code/releases/tag/1.1.0) (2017-01-30)

* Compatible with PHP 5.6 or higher.

## [1.0.0](https://github.com/josantonius/php-language-code/releases/tag/1.0.0) (2017-01-12)

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

* Added `Josantonius\LanguageCode\LanguageCode` class.
* Added `Josantonius\LanguageCode\LanguageCode::load()` method.
* Added `Josantonius\LanguageCode\LanguageCode::getLanguageFromCode()` method.
* Added `Josantonius\LanguageCode\LanguageCode::getCodeFromLanguage()` method.
* Added `Josantonius\LanguageCode\LanguageCode::getAll()` method.
* Added `Josantonius\LanguageCode\Exception\LanguageCodeException` class.
* Added `Josantonius\LanguageCode\Exception\Exceptions` abstract class.
* Added `Josantonius\LanguageCode\Exception\LanguageCodeException->__construct()` method.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest` class.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetLanguageFromCode()` method.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetLanguageFromCodeUndefined()` method.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetCodeFromLanguage()` method.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetCodeFromLanguageUndefined()` method.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetAll()` method.
