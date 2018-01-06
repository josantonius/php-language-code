<?php
/**
 * List of 217 language codes: ISO 639-1.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2017 - 2018 (c) Josantonius - PHP-LanguageCode
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-LanguageCode
 * @since     1.1.3
 */
namespace Josantonius\LanguageCode;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for LanguageCode library.
 */
class LanguageCodeTest extends TestCase
{
    /**
     * LanguageCode instance.
     *
     * @since 1.1.5
     *
     * @var object
     */
    protected $LanguageCode;

    /**
     * Set up.
     *
     * @since 1.1.5
     */
    public function setUp()
    {
        parent::setUp();

        $this->LanguageCode = new LanguageCode;
    }

    /**
     * Check if it is an instance of LanguageCode.
     *
     * @since 1.1.5
     */
    public function testIsInstanceOfLanguageCode()
    {
        $this->assertInstanceOf(
            'Josantonius\LanguageCode\LanguageCode',
            $this->LanguageCode
        );
    }

    /**
     * Get language name from language code.
     */
    public function testGetLanguageFromCode()
    {
        $languageCode = $this->LanguageCode;

        $this->assertContains(
            'Spanish',
            $this->LanguageCode->getLanguageFromCode('es')
        );
    }

    /**
     * Getting a language name wrong.
     */
    public function testGetLanguageFromCodeUndefined()
    {
        $languageCode = $this->LanguageCode;

        $this->assertFalse(
            $this->LanguageCode->getLanguageFromCode('abcd')
        );
    }

    /**
     * Get language code from language name
     */
    public function testGetCodeFromLanguage()
    {
        $languageCode = $this->LanguageCode;

        $this->assertContains(
            'es',
            $this->LanguageCode->getCodeFromLanguage('Spanish')
        );
    }

    /**
     * Getting a language code wrong.
     */
    public function testGetCodeFromLanguageUndefined()
    {
        $languageCode = $this->LanguageCode;

        $this->assertFalse(
            $this->LanguageCode->getCodeFromLanguage('abcd')
        );
    }

    /**
     * Get all language codes as array.
     */
    public function testGetAll()
    {
        $languageCode = $this->LanguageCode;

        $this->assertInternalType(
            'array',
            $this->LanguageCode->get()
        );
    }
}
