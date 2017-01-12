<?php declare(strict_types=1);
/**
 * List of 217 language codes: ISO 639-1.
 * 
 * @category   JST
 * @package    LanguageCode
 * @subpackage LanguageCode
 * @author     Josantonius - info@josantonius.com
 * @copyright  Copyright (c) 2017 JST PHP Framework
 * @license    https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @version    1.0.0
 * @link       https://github.com/Josantonius/PHP-LanguageCode
 * @since      File available since 1.0.0 - Update: 2017-01-12
 */

namespace Josantonius\LanguageCode;

# use Josantonius\LanguageCode\Exception\LanguageCodeException;

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
    protected static function load(): array {

        if (is_null(static::$lamguageCodes)) {

            $filepath = __DIR__ . "/resources/languageCodes.jsond";

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
     * @param string $languageCode → language code, e.g. "es"
     *
     * @return string              → country name
     */
    public static function getLanguageFromCode(string $languageCode): string {

        static::load();

        return static::$lamguageCodes[$languageCode] ?? "undefined";
    }

    /**
     * Get language code from language name.
     *
     * @since 1.0.0
     *
     * @param string $language → language name, e.g. "Spanish"
     *
     * @return string          → language code
     */
    public static function getCodeFromLanguage(string $language): string {

        static::load();

        if ($index = array_search(ucfirst($language), static::$lamguageCodes)) {

            return $index;
        }

        return "undefined";
    }

    /**
     * Get all language codes as array.
     *
     * @since 1.0.0
     *
     * @return array → language codes and language names
     */
    public static function getAll(): array {
        
        return static::load();
    }
}