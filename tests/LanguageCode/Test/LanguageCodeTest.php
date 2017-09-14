<?php
/**
 * List of 217 language codes: ISO 639-1.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2016 - 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-LanguageCode
 * @since      1.1.3
 */

namespace Josantonius\LanguageCode\Test;

use Josantonius\LanguageCode\LanguageCode,
    PHPUnit\Framework\TestCase;

/**
 * Tests class for LanguageCode library.
 *
 * @since 1.1.3
 */
class LanguageCodeTest extends TestCase { 

    /**
     * Get language name from language code.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetLanguageFromCode() {

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
    public function testGetLanguageFromCodeUndefined() {
        
        $this->assertContains(

            'undefined',
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
    public function testGetCodeFromLanguage() {

        $this->assertContains(

            'es',
            LanguageCode::getCodeFromLanguage('spanish')
        );
    }

    /**
     * Getting a language code wrong.
     *
     * @since 1.1.3
     *
     * @return void
     */
    public function testGetCodeFromLanguageUndefined() {

        $this->assertContains(

            'undefined',
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
    public function testGetAll() {

        $this->assertInternalType(

            'array',
            LanguageCode::getAll()
        );
    }
}
