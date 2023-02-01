# Swagger\Client\CustomSpeechTranscriptionsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transcriptionsCreate**](CustomSpeechTranscriptionsApi.md#transcriptionsCreate) | **POST** /transcriptions | Creates a new transcription.
[**transcriptionsDelete**](CustomSpeechTranscriptionsApi.md#transcriptionsDelete) | **DELETE** /transcriptions/{id} | Deletes the specified transcription task.
[**transcriptionsGet**](CustomSpeechTranscriptionsApi.md#transcriptionsGet) | **GET** /transcriptions/{id} | Gets the transcription identified by the given ID.
[**transcriptionsGetFile**](CustomSpeechTranscriptionsApi.md#transcriptionsGetFile) | **GET** /transcriptions/{id}/files/{fileId} | Gets one specific file (identified with fileId) from a transcription (identified with id).
[**transcriptionsList**](CustomSpeechTranscriptionsApi.md#transcriptionsList) | **GET** /transcriptions | Gets a list of transcriptions for the authenticated subscription.
[**transcriptionsListFiles**](CustomSpeechTranscriptionsApi.md#transcriptionsListFiles) | **GET** /transcriptions/{id}/files | Gets the files of the transcription identified by the given ID.
[**transcriptionsListSupportedLocales**](CustomSpeechTranscriptionsApi.md#transcriptionsListSupportedLocales) | **GET** /transcriptions/locales | Gets a list of supported locales for offline transcriptions.
[**transcriptionsUpdate**](CustomSpeechTranscriptionsApi.md#transcriptionsUpdate) | **PATCH** /transcriptions/{id} | Updates the mutable details of the transcription identified by its ID.


# **transcriptionsCreate**
> \Swagger\Client\Model\Transcription transcriptionsCreate($transcription)

Creates a new transcription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomSpeechTranscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transcription = new \Swagger\Client\Model\Transcription(); // \Swagger\Client\Model\Transcription | The details of the new transcription.

try {
    $result = $apiInstance->transcriptionsCreate($transcription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechTranscriptionsApi->transcriptionsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transcription** | [**\Swagger\Client\Model\Transcription**](../Model/Transcription.md)| The details of the new transcription. |

### Return type

[**\Swagger\Client\Model\Transcription**](../Model/Transcription.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transcriptionsDelete**
> transcriptionsDelete($id)

Deletes the specified transcription task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomSpeechTranscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the transcription.

try {
    $apiInstance->transcriptionsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechTranscriptionsApi->transcriptionsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the transcription. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transcriptionsGet**
> \Swagger\Client\Model\Transcription transcriptionsGet($id)

Gets the transcription identified by the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomSpeechTranscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the transcription.

try {
    $result = $apiInstance->transcriptionsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechTranscriptionsApi->transcriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the transcription. |

### Return type

[**\Swagger\Client\Model\Transcription**](../Model/Transcription.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transcriptionsGetFile**
> \Swagger\Client\Model\File transcriptionsGetFile($id, $file_id, $sas_validity_in_seconds)

Gets one specific file (identified with fileId) from a transcription (identified with id).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomSpeechTranscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the transcription.
$file_id = "file_id_example"; // string | The identifier of the file.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.

try {
    $result = $apiInstance->transcriptionsGetFile($id, $file_id, $sas_validity_in_seconds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechTranscriptionsApi->transcriptionsGetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the transcription. |
 **file_id** | [**string**](../Model/.md)| The identifier of the file. |
 **sas_validity_in_seconds** | **int**| The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated. | [optional]

### Return type

[**\Swagger\Client\Model\File**](../Model/File.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transcriptionsList**
> \Swagger\Client\Model\PaginatedTranscriptions transcriptionsList($skip, $top, $filter)

Gets a list of transcriptions for the authenticated subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomSpeechTranscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available transcriptions.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter=createdDateTime gt 2022-02-01T11:00:00Z

try {
    $result = $apiInstance->transcriptionsList($skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechTranscriptionsApi->transcriptionsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available transcriptions.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter&#x3D;createdDateTime gt 2022-02-01T11:00:00Z | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedTranscriptions**](../Model/PaginatedTranscriptions.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transcriptionsListFiles**
> \Swagger\Client\Model\PaginatedFiles transcriptionsListFiles($id, $sas_validity_in_seconds, $skip, $top, $filter)

Gets the files of the transcription identified by the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomSpeechTranscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the transcription.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available files.              - Supported properties: name, createdDateTime, kind.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime.                - and, or, not are supported.              - Example:                filter=name eq 'myaudio.wav.json' and kind eq 'Transcription'

try {
    $result = $apiInstance->transcriptionsListFiles($id, $sas_validity_in_seconds, $skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechTranscriptionsApi->transcriptionsListFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the transcription. |
 **sas_validity_in_seconds** | **int**| The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated. | [optional]
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available files.              - Supported properties: name, createdDateTime, kind.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime.                - and, or, not are supported.              - Example:                filter&#x3D;name eq &#39;myaudio.wav.json&#39; and kind eq &#39;Transcription&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedFiles**](../Model/PaginatedFiles.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transcriptionsListSupportedLocales**
> string[] transcriptionsListSupportedLocales()

Gets a list of supported locales for offline transcriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomSpeechTranscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->transcriptionsListSupportedLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechTranscriptionsApi->transcriptionsListSupportedLocales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transcriptionsUpdate**
> \Swagger\Client\Model\Transcription transcriptionsUpdate($id, $transcription_update)

Updates the mutable details of the transcription identified by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomSpeechTranscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the transcription.
$transcription_update = new \Swagger\Client\Model\TranscriptionUpdate(); // \Swagger\Client\Model\TranscriptionUpdate | The updated values for the transcription.

try {
    $result = $apiInstance->transcriptionsUpdate($id, $transcription_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechTranscriptionsApi->transcriptionsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the transcription. |
 **transcription_update** | [**\Swagger\Client\Model\TranscriptionUpdate**](../Model/TranscriptionUpdate.md)| The updated values for the transcription. |

### Return type

[**\Swagger\Client\Model\Transcription**](../Model/Transcription.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

