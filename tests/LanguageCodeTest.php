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
     * Get language name from language code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetLanguageFromCode()
    {
        $this->assertContains(
            'Spanish',
            LanguageCode::getLanguageFromCode('es')
        );
    }

    /**
     * Getting a language name wrong.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetLanguageFromCodeUndefined()
    {
        $this->assertFalse(
            LanguageCode::getLanguageFromCode('abcd')
        );
    }

    /**
     * Get language code from language name
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetCodeFromLanguage()
    {
        $this->assertContains(
            'es',
            LanguageCode::getCodeFromLanguage('Spanish')
        );
    }

    /**
     * Getting a language code wrong.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetCodeFromLanguageUndefined()
    {
        $this->assertFalse(
            LanguageCode::getCodeFromLanguage('abcd')
        );
    }

    /**
     * Get all language codes as array.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetAll()
    {
        $this->assertInternalType(
            'array',
            LanguageCode::get()
        );
    }
}
