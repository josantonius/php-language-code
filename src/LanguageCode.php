<?php
/**
 * List of 217 language codes: ISO 639-1.
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2016 - 2017
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link       https://github.com/Josantonius/PHP-LanguageCode
 * @since      1.0.0
 */

namespace Josantonius\LanguageCode;

/**
 * Language code handler.
 *
 * @since 1.0.0
 */
class LanguageCode { 

    /**
     * Language code list.
     *
     * @since 1.0.0
     *
     * @var array
     */
    public static $lamguageCodes;

    /**
     * Load Jsond file with language codes.
     *
     * @since 1.0.0
     *
     * @return array → language code
     */
    protected static function load() {

        if (is_null(static::$lamguageCodes)) {

            $filepath = __DIR__ . '/resources/languageCodes.jsond';

            $jsonFile  = file_get_contents($filepath);

            $lamguageCodes = json_decode($jsonFile, true);

            static::$lamguageCodes = $lamguageCodes['data'];

            unset($lamguageCodes);
        }

        return static::$lamguageCodes;
    }

    /**
     * Get language name from language code.
     *
     * @since 1.0.0
     *
     * @param string $languageCode → language code, e.g. 'es'
     *
     * @return string              → country name
     */
    public static function getLanguageFromCode($languageCode) {

        static::load();

        if (!isset(static::$lamguageCodes[$languageCode])) {

            static::$lamguageCodes[$languageCode] = 'undefined';
        }

        return static::$lamguageCodes[$languageCode];
    }

    /**
     * Get language code from language name.
     *
     * @since 1.0.0
     *
     * @param string $language → language name, e.g. 'Spanish'
     *
     * @return string          → language code
     */
    public static function getCodeFromLanguage($language) {

        static::load();

        if ($index = array_search(ucfirst($language), static::$lamguageCodes)) {

            return $index;
        }

        return 'undefined';
    }

    /**
     * Get all language codes as array.
     *
     * @since 1.0.0
     *
     * @return array → language codes and language names
     */
    public static function getAll() {
        
        return static::load();
    }
}
