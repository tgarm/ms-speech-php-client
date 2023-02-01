# Swagger\Client\CustomSpeechEndpointsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**endpointsCreate**](CustomSpeechEndpointsApi.md#endpointsCreate) | **POST** /endpoints | Creates a new endpoint.
[**endpointsDelete**](CustomSpeechEndpointsApi.md#endpointsDelete) | **DELETE** /endpoints/{id} | Deletes the endpoint identified by the given ID.
[**endpointsDeleteBaseModelLog**](CustomSpeechEndpointsApi.md#endpointsDeleteBaseModelLog) | **DELETE** /endpoints/base/{locale}/files/logs/{logId} | Deletes one audio or transcription log that have been stored when using the default base model of a given language.
[**endpointsDeleteBaseModelLogs**](CustomSpeechEndpointsApi.md#endpointsDeleteBaseModelLogs) | **DELETE** /endpoints/base/{locale}/files/logs | Deletes the specified audio and transcription logs that have been stored when using the default base model of a given language. It deletes all logs before (and including) a specific day.
[**endpointsDeleteLog**](CustomSpeechEndpointsApi.md#endpointsDeleteLog) | **DELETE** /endpoints/{id}/files/logs/{logId} | Deletes one audio or transcription log that have been stored for a given endpoint.
[**endpointsDeleteLogs**](CustomSpeechEndpointsApi.md#endpointsDeleteLogs) | **DELETE** /endpoints/{id}/files/logs | Deletes the specified audio and transcription logs that have been stored for a given endpoint. It deletes all logs before (and including) a specific day.
[**endpointsGet**](CustomSpeechEndpointsApi.md#endpointsGet) | **GET** /endpoints/{id} | Gets the endpoint identified by the given ID.
[**endpointsGetBaseModelLog**](CustomSpeechEndpointsApi.md#endpointsGetBaseModelLog) | **GET** /endpoints/base/{locale}/files/logs/{logId} | Gets a specific audio or transcription log for the default base model in a given language.
[**endpointsGetLog**](CustomSpeechEndpointsApi.md#endpointsGetLog) | **GET** /endpoints/{id}/files/logs/{logId} | Gets a specific audio or transcription log for a given endpoint.
[**endpointsList**](CustomSpeechEndpointsApi.md#endpointsList) | **GET** /endpoints | Gets the list of endpoints for the authenticated subscription.
[**endpointsListBaseModelLogs**](CustomSpeechEndpointsApi.md#endpointsListBaseModelLogs) | **GET** /endpoints/base/{locale}/files/logs | Gets the list of audio and transcription logs that have been stored when using the default base model of a given language.
[**endpointsListLogs**](CustomSpeechEndpointsApi.md#endpointsListLogs) | **GET** /endpoints/{id}/files/logs | Gets the list of audio and transcription logs that have been stored for a given endpoint.
[**endpointsListSupportedLocales**](CustomSpeechEndpointsApi.md#endpointsListSupportedLocales) | **GET** /endpoints/locales | Gets a list of supported locales for endpoint creations.
[**endpointsUpdate**](CustomSpeechEndpointsApi.md#endpointsUpdate) | **PATCH** /endpoints/{id} | Updates the metadata of the endpoint identified by the given ID.


# **endpointsCreate**
> \Swagger\Client\Model\Endpoint endpointsCreate($endpoint)

Creates a new endpoint.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint = new \Swagger\Client\Model\Endpoint(); // \Swagger\Client\Model\Endpoint | The details of the endpoint.

try {
    $result = $apiInstance->endpointsCreate($endpoint);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint** | [**\Swagger\Client\Model\Endpoint**](../Model/Endpoint.md)| The details of the endpoint. |

### Return type

[**\Swagger\Client\Model\Endpoint**](../Model/Endpoint.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsDelete**
> endpointsDelete($id)

Deletes the endpoint identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the endpoint.

try {
    $apiInstance->endpointsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the endpoint. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsDeleteBaseModelLog**
> endpointsDeleteBaseModelLog($locale, $log_id)

Deletes one audio or transcription log that have been stored when using the default base model of a given language.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = "locale_example"; // string | The language used to select the default base model.
$log_id = "log_id_example"; // string | The identifier of the log.

try {
    $apiInstance->endpointsDeleteBaseModelLog($locale, $log_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsDeleteBaseModelLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**| The language used to select the default base model. |
 **log_id** | **string**| The identifier of the log. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsDeleteBaseModelLogs**
> endpointsDeleteBaseModelLogs($locale, $end_date)

Deletes the specified audio and transcription logs that have been stored when using the default base model of a given language. It deletes all logs before (and including) a specific day.

Deletion process is done asynchronously and can take up to one day depending on the amount of log files.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = "locale_example"; // string | The language used to select the default base model.
$end_date = "end_date_example"; // string | The end date of the audio logs deletion (specific day, UTC).              Expected format: \"yyyy-mm-dd\". For instance, \"2019-09-20\" results in deleting all logs on September 20h, 2019 and before.              Deletes all existing logs when date is not specified.

try {
    $apiInstance->endpointsDeleteBaseModelLogs($locale, $end_date);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsDeleteBaseModelLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**| The language used to select the default base model. |
 **end_date** | **string**| The end date of the audio logs deletion (specific day, UTC).              Expected format: \&quot;yyyy-mm-dd\&quot;. For instance, \&quot;2019-09-20\&quot; results in deleting all logs on September 20h, 2019 and before.              Deletes all existing logs when date is not specified. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsDeleteLog**
> endpointsDeleteLog($id, $log_id)

Deletes one audio or transcription log that have been stored for a given endpoint.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the endpoint.
$log_id = "log_id_example"; // string | The identifier of the log.

try {
    $apiInstance->endpointsDeleteLog($id, $log_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsDeleteLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the endpoint. |
 **log_id** | **string**| The identifier of the log. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsDeleteLogs**
> endpointsDeleteLogs($id, $end_date)

Deletes the specified audio and transcription logs that have been stored for a given endpoint. It deletes all logs before (and including) a specific day.

The deletion process is done asynchronously and can take up to one day depending on the amount of log files.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the endpoint.
$end_date = "end_date_example"; // string | The end date of the audio logs deletion (specific day, UTC).              Expected format: \"yyyy-mm-dd\". For instance, \"2019-09-20\" results in deleting all logs on September 20h, 2019 and before.              Deletes all existing logs when date is not specified.

try {
    $apiInstance->endpointsDeleteLogs($id, $end_date);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsDeleteLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the endpoint. |
 **end_date** | **string**| The end date of the audio logs deletion (specific day, UTC).              Expected format: \&quot;yyyy-mm-dd\&quot;. For instance, \&quot;2019-09-20\&quot; results in deleting all logs on September 20h, 2019 and before.              Deletes all existing logs when date is not specified. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsGet**
> \Swagger\Client\Model\Endpoint endpointsGet($id)

Gets the endpoint identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the endpoint.

try {
    $result = $apiInstance->endpointsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the endpoint. |

### Return type

[**\Swagger\Client\Model\Endpoint**](../Model/Endpoint.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsGetBaseModelLog**
> \Swagger\Client\Model\File endpointsGetBaseModelLog($locale, $log_id, $sas_validity_in_seconds)

Gets a specific audio or transcription log for the default base model in a given language.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = "locale_example"; // string | The language used to select the default base model.
$log_id = "log_id_example"; // string | The identifier of the log.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.

try {
    $result = $apiInstance->endpointsGetBaseModelLog($locale, $log_id, $sas_validity_in_seconds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsGetBaseModelLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**| The language used to select the default base model. |
 **log_id** | **string**| The identifier of the log. |
 **sas_validity_in_seconds** | **int**| The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated. | [optional]

### Return type

[**\Swagger\Client\Model\File**](../Model/File.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsGetLog**
> \Swagger\Client\Model\File endpointsGetLog($id, $log_id, $sas_validity_in_seconds)

Gets a specific audio or transcription log for a given endpoint.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the endpoint.
$log_id = "log_id_example"; // string | The identifier of the log.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.

try {
    $result = $apiInstance->endpointsGetLog($id, $log_id, $sas_validity_in_seconds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsGetLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the endpoint. |
 **log_id** | **string**| The identifier of the log. |
 **sas_validity_in_seconds** | **int**| The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated. | [optional]

### Return type

[**\Swagger\Client\Model\File**](../Model/File.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsList**
> \Swagger\Client\Model\PaginatedEndpoints endpointsList($skip, $top, $filter)

Gets the list of endpoints for the authenticated subscription.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available endpoints.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter=locale eq 'en-US'

try {
    $result = $apiInstance->endpointsList($skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available endpoints.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter&#x3D;locale eq &#39;en-US&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedEndpoints**](../Model/PaginatedEndpoints.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsListBaseModelLogs**
> \Swagger\Client\Model\PaginatedFiles endpointsListBaseModelLogs($locale, $sas_validity_in_seconds, $skip_token, $top)

Gets the list of audio and transcription logs that have been stored when using the default base model of a given language.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = "locale_example"; // string | The language used to select the default base model.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.
$skip_token = "skip_token_example"; // string | Token to skip logs that were already retrieved in previous requests. Pagination starts from beginning when not defined.
$top = 56; // int | Number of datasets that will be included after skipping.

try {
    $result = $apiInstance->endpointsListBaseModelLogs($locale, $sas_validity_in_seconds, $skip_token, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsListBaseModelLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**| The language used to select the default base model. |
 **sas_validity_in_seconds** | **int**| The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated. | [optional]
 **skip_token** | **string**| Token to skip logs that were already retrieved in previous requests. Pagination starts from beginning when not defined. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedFiles**](../Model/PaginatedFiles.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsListLogs**
> \Swagger\Client\Model\PaginatedFiles endpointsListLogs($id, $sas_validity_in_seconds, $skip_token, $top)

Gets the list of audio and transcription logs that have been stored for a given endpoint.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the endpoint.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.
$skip_token = "skip_token_example"; // string | Token to skip logs that were already retrieved in previous requests. Pagination starts from beginning when not defined.
$top = 56; // int | Number of datasets that will be included after skipping.

try {
    $result = $apiInstance->endpointsListLogs($id, $sas_validity_in_seconds, $skip_token, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsListLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the endpoint. |
 **sas_validity_in_seconds** | **int**| The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated. | [optional]
 **skip_token** | **string**| Token to skip logs that were already retrieved in previous requests. Pagination starts from beginning when not defined. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedFiles**](../Model/PaginatedFiles.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointsListSupportedLocales**
> string[] endpointsListSupportedLocales()

Gets a list of supported locales for endpoint creations.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->endpointsListSupportedLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsListSupportedLocales: ', $e->getMessage(), PHP_EOL;
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

# **endpointsUpdate**
> \Swagger\Client\Model\Endpoint endpointsUpdate($id, $endpoint_update)

Updates the metadata of the endpoint identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the endpoint.
$endpoint_update = new \Swagger\Client\Model\EndpointUpdate(); // \Swagger\Client\Model\EndpointUpdate | The updated values for the endpoint.

try {
    $result = $apiInstance->endpointsUpdate($id, $endpoint_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechEndpointsApi->endpointsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the endpoint. |
 **endpoint_update** | [**\Swagger\Client\Model\EndpointUpdate**](../Model/EndpointUpdate.md)| The updated values for the endpoint. |

### Return type

[**\Swagger\Client\Model\Endpoint**](../Model/Endpoint.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

