<?php
/**
 * FileKind
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
 * FileKind Class Doc Comment
 *
 * @category Class
 * @description Type of data.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileKind
{
    /**
     * Possible values of this enum
     */
    const DATASET_REPORT = 'DatasetReport';
    const AUDIO = 'Audio';
    const LANGUAGE_DATA = 'LanguageData';
    const PRONUNCIATION_DATA = 'PronunciationData';
    const ACOUSTIC_DATA_ARCHIVE = 'AcousticDataArchive';
    const ACOUSTIC_DATA_TRANSCRIPTION_V2 = 'AcousticDataTranscriptionV2';
    const TRANSCRIPTION = 'Transcription';
    const TRANSCRIPTION_REPORT = 'TranscriptionReport';
    const EVALUATION_DETAILS = 'EvaluationDetails';
    const MODEL_REPORT = 'ModelReport';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATASET_REPORT,
            self::AUDIO,
            self::LANGUAGE_DATA,
            self::PRONUNCIATION_DATA,
            self::ACOUSTIC_DATA_ARCHIVE,
            self::ACOUSTIC_DATA_TRANSCRIPTION_V2,
            self::TRANSCRIPTION,
            self::TRANSCRIPTION_REPORT,
            self::EVALUATION_DETAILS,
            self::MODEL_REPORT,
        ];
    }
}


