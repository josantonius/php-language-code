<?php

/*
 * This file is part of https://github.com/josantonius/php-language-code repository.
 *
 * (c) Josantonius <hello@josantonius.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Josantonius\LanguageCode;

/**
 * Language code handler.
 */
class LanguageCode
{
    /**
     * Get all language codes as array.
     */
    public static function all(): array
    {
        return LanguageCodeCollection::all();
    }

    /**
     * Get language code from language name.
     */
    public static function getCode(string $languageName): ?string
    {
        return LanguageCodeCollection::getCode($languageName);
    }

    /**
     * Get language name from language code.
     */
    public static function getName(string $languageCode): ?string
    {
        return LanguageCodeCollection::getName($languageCode);
    }
}
