<?php
/**
 * DatasetKind
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Speech Services API v3.1
 *
 * Speech Services API v3.1.
 *
 * OpenAPI spec version: v3.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * DatasetKind Class Doc Comment
 *
 * @category Class
 * @description Type of data import.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DatasetKind
{
    /**
     * Possible values of this enum
     */
    const LANGUAGE = 'Language';
    const ACOUSTIC = 'Acoustic';
    const PRONUNCIATION = 'Pronunciation';
    const AUDIO_FILES = 'AudioFiles';
    const LANGUAGE_MARKDOWN = 'LanguageMarkdown';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LANGUAGE,
            self::ACOUSTIC,
            self::PRONUNCIATION,
            self::AUDIO_FILES,
            self::LANGUAGE_MARKDOWN,
        ];
    }
}


