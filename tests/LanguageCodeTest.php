<?php

/*
* This file is part of https://github.com/josantonius/php-language-code repository.
*
* (c) Josantonius <hello@josantonius.dev>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Josantonius\LanguageCode\Tests;

use PHPUnit\Framework\TestCase;
use Josantonius\LanguageCode\LanguageCode;
use Josantonius\LanguageCode\LanguageCodeCollection;

class LanguageCodeTest extends TestCase
{
    protected $languageCode;

    public function setUp(): void
    {
        parent::setUp();

        $this->collection   = new LanguageCodeCollection();
        $this->languageCode = new LanguageCode();
    }

    public function testShouldGetAllLanguageCodes(): void
    {
        $this->assertNotEmpty($this->languageCode->all());

        $this->assertNotEmpty($this->collection->all());
    }

    public function testShouldGetLanguageCodeFromLanguageName(): void
    {
        $this->assertSame('es', $this->languageCode->getCode('Spanish'));

        $this->assertSame('es', $this->collection->getCode('Spanish'));
    }

    public function testShouldReturnNullWithUnknownLanguageName(): void
    {
        $this->assertNull($this->languageCode->getCode('foo'));

        $this->assertNull($this->collection->getCode('foo'));
    }

    public function testShouldGetLanguageNameFromLanguageCode(): void
    {
        $this->assertSame('Spanish', $this->languageCode->getName('es'));

        $this->assertSame('Spanish', $this->collection->getName('es'));
    }

    public function testShouldReturnNullWithUnknownLanguageCode(): void
    {
        $this->assertNull($this->languageCode->getName('bar'));

        $this->assertNull($this->collection->getName('bar'));
    }
}
