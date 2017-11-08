# CHANGELOG

## 1.1.5 - 2017-11-08

* Implemented `PHP Mess Detector` to detect inconsistencies in code styles.

* Implemented `PHP Code Beautifier and Fixer` to fixing errors automatically.

* Implemented `PHP Coding Standards Fixer` to organize PHP code automatically according to PSR standards.

## 1.1.4 - 2017-11-01

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

## 1.1.3 - 2017-09-14

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

## 1.1.2 - 2017-07-16

* Deleted `Josantonius\LanguageCode\Exception\LanguageCodeException` class.
* Deleted `Josantonius\LanguageCode\Exception\Exceptions` abstract class.
* Deleted `Josantonius\LanguageCode\Exception\LanguageCodeException->__construct()` method.

## 1.1.1 - 2017-03-18

* Some files were excluded from download and comments and readme files were updated.

## 1.1.0 - 2017-01-30

* Compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-30

* Compatible only with PHP 7.0 or higher. In the next versions, the library will be modified to make it compatible with PHP 5.6 or higher.

## 1.0.0 - 2017-01-12

* Added `Josantonius\LanguageCode\LanguageCode` class.
* Added `Josantonius\LanguageCode\LanguageCode::load()` method.
* Added `Josantonius\LanguageCode\LanguageCode::getLanguageFromCode()` method.
* Added `Josantonius\LanguageCode\LanguageCode::getCodeFromLanguage()` method.
* Added `Josantonius\LanguageCode\LanguageCode::getAll()` method.

## 1.0.0 - 2017-01-12

* Added `Josantonius\LanguageCode\Exception\LanguageCodeException` class.
* Added `Josantonius\LanguageCode\Exception\Exceptions` abstract class.
* Added `Josantonius\LanguageCode\Exception\LanguageCodeException->__construct()` method.

## 1.0.0 - 2017-01-12

* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest` class.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetLanguageFromCode()` method.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetLanguageFromCodeUndefined()` method.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetCodeFromLanguage()` method.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetCodeFromLanguageUndefined()` method.
* Added `Josantonius\LanguageCode\Tests\LanguageCodeTest::testGetAll()` method.
