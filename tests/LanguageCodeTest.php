<?php
/**
 * List of 217 language codes: ISO 639-1.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @copyright 2016 - 2017 (c) Josantonius - PHP-LanguageCode
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/PHP-LanguageCode
 * @since     1.1.3
 */
namespace Josantonius\LanguageCode;

use PHPUnit\Framework\TestCase;

/**
 * Tests class for LanguageCode library.
 *
 * @since 1.1.3
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
        $actual = $this->LanguageCode;
        $this->assertInstanceOf('Josantonius\LanguageCode\LanguageCode', $actual);
    }

    /**
     * Get language name from language code.
     *
     * @since 1.1.3
     */
    public function testGetLanguageFromCode()
    {
        $this->assertContains(
            'Spanish',
            $this->LanguageCode->getLanguageFromCode('es')
        );
    }

    /**
     * Getting a language name wrong.
     *
     * @since 1.1.3
     */
    public function testGetLanguageFromCodeUndefined()
    {
        $this->assertFalse(
            $this->LanguageCode->getLanguageFromCode('abcd')
        );
    }

    /**
     * Get language code from language name
     *
     * @since 1.1.3
     */
    public function testGetCodeFromLanguage()
    {
        $this->assertContains(
            'es',
            $this->LanguageCode->getCodeFromLanguage('Spanish')
        );
    }

    /**
     * Getting a language code wrong.
     *
     * @since 1.1.3
     */
    public function testGetCodeFromLanguageUndefined()
    {
        $this->assertFalse(
            $this->LanguageCode->getCodeFromLanguage('abcd')
        );
    }

    /**
     * Get all language codes as array.
     *
     * @since 1.1.3
     */
    public function testGetAll()
    {
        $this->assertInternalType(
            'array',
            $this->LanguageCode->get()
        );
    }
}
