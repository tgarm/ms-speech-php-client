# Swagger\Client\CustomSpeechModelsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**modelsCopyTo**](CustomSpeechModelsApi.md#modelsCopyTo) | **POST** /models/{id}:copyto | Copies a model from one subscription to another.
[**modelsCreate**](CustomSpeechModelsApi.md#modelsCreate) | **POST** /models | Creates a new model.
[**modelsDelete**](CustomSpeechModelsApi.md#modelsDelete) | **DELETE** /models/{id} | Deletes the model identified by the given ID.
[**modelsGetBaseModel**](CustomSpeechModelsApi.md#modelsGetBaseModel) | **GET** /models/base/{id} | Gets the base model identified by the given ID.
[**modelsGetBaseModelManifest**](CustomSpeechModelsApi.md#modelsGetBaseModelManifest) | **GET** /models/base/{id}/manifest | Returns an manifest for this base model which can be used in an on-premise container.
[**modelsGetCustomModel**](CustomSpeechModelsApi.md#modelsGetCustomModel) | **GET** /models/{id} | Gets the model identified by the given ID.
[**modelsGetCustomModelManifest**](CustomSpeechModelsApi.md#modelsGetCustomModelManifest) | **GET** /models/{id}/manifest | Returns an manifest for this model which can be used in an on-premise container.
[**modelsGetFile**](CustomSpeechModelsApi.md#modelsGetFile) | **GET** /models/{id}/files/{fileId} | Gets one specific file (identified with fileId) from a model (identified with id).
[**modelsListBaseModels**](CustomSpeechModelsApi.md#modelsListBaseModels) | **GET** /models/base | Gets the list of base models for the authenticated subscription.
[**modelsListCustomModels**](CustomSpeechModelsApi.md#modelsListCustomModels) | **GET** /models | Gets the list of custom models for the authenticated subscription.
[**modelsListFiles**](CustomSpeechModelsApi.md#modelsListFiles) | **GET** /models/{id}/files | Gets the files of the model identified by the given ID.
[**modelsListSupportedLocales**](CustomSpeechModelsApi.md#modelsListSupportedLocales) | **GET** /models/locales | Gets a list of supported locales for model adaptation.
[**modelsUpdate**](CustomSpeechModelsApi.md#modelsUpdate) | **PATCH** /models/{id} | Updates the metadata of the model identified by the given ID.


# **modelsCopyTo**
> \Swagger\Client\Model\CustomModel modelsCopyTo($id, $model_copy)

Copies a model from one subscription to another.

This method can be used to copy a model from one location to another. If the target subscription  key belongs to a subscription created for another location, the model will be copied to that location.  Only adapted models are allowed to copy to another subscription.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the model that will be copied.
$model_copy = new \Swagger\Client\Model\ModelCopy(); // \Swagger\Client\Model\ModelCopy | The body contains the subscription key of the target subscription.

try {
    $result = $apiInstance->modelsCopyTo($id, $model_copy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsCopyTo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the model that will be copied. |
 **model_copy** | [**\Swagger\Client\Model\ModelCopy**](../Model/ModelCopy.md)| The body contains the subscription key of the target subscription. |

### Return type

[**\Swagger\Client\Model\CustomModel**](../Model/CustomModel.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsCreate**
> \Swagger\Client\Model\CustomModel modelsCreate($model)

Creates a new model.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Swagger\Client\Model\CustomModel(); // \Swagger\Client\Model\CustomModel | The details of the new model.

try {
    $result = $apiInstance->modelsCreate($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\CustomModel**](../Model/CustomModel.md)| The details of the new model. |

### Return type

[**\Swagger\Client\Model\CustomModel**](../Model/CustomModel.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsDelete**
> modelsDelete($id)

Deletes the model identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the model.

try {
    $apiInstance->modelsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the model. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetBaseModel**
> \Swagger\Client\Model\BaseModel modelsGetBaseModel($id)

Gets the base model identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the base model.

try {
    $result = $apiInstance->modelsGetBaseModel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsGetBaseModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the base model. |

### Return type

[**\Swagger\Client\Model\BaseModel**](../Model/BaseModel.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetBaseModelManifest**
> \Swagger\Client\Model\ModelManifest modelsGetBaseModelManifest($id, $sas_validity_in_seconds)

Returns an manifest for this base model which can be used in an on-premise container.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ID of the model to generate a manifest for.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.

try {
    $result = $apiInstance->modelsGetBaseModelManifest($id, $sas_validity_in_seconds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsGetBaseModelManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the model to generate a manifest for. |
 **sas_validity_in_seconds** | **int**| The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated. | [optional]

### Return type

[**\Swagger\Client\Model\ModelManifest**](../Model/ModelManifest.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetCustomModel**
> \Swagger\Client\Model\CustomModel modelsGetCustomModel($id)

Gets the model identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the model.

try {
    $result = $apiInstance->modelsGetCustomModel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsGetCustomModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the model. |

### Return type

[**\Swagger\Client\Model\CustomModel**](../Model/CustomModel.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetCustomModelManifest**
> \Swagger\Client\Model\ModelManifest modelsGetCustomModelManifest($id, $sas_validity_in_seconds)

Returns an manifest for this model which can be used in an on-premise container.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The ID of the model to generate a manifest for.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.

try {
    $result = $apiInstance->modelsGetCustomModelManifest($id, $sas_validity_in_seconds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsGetCustomModelManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The ID of the model to generate a manifest for. |
 **sas_validity_in_seconds** | **int**| The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated. | [optional]

### Return type

[**\Swagger\Client\Model\ModelManifest**](../Model/ModelManifest.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetFile**
> \Swagger\Client\Model\File modelsGetFile($id, $file_id, $sas_validity_in_seconds)

Gets one specific file (identified with fileId) from a model (identified with id).

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the model.
$file_id = "file_id_example"; // string | The identifier of the file.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.

try {
    $result = $apiInstance->modelsGetFile($id, $file_id, $sas_validity_in_seconds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsGetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the model. |
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

# **modelsListBaseModels**
> \Swagger\Client\Model\PaginatedBaseModels modelsListBaseModels($skip, $top, $filter)

Gets the list of base models for the authenticated subscription.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available base models.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter=status eq 'NotStarted' or status eq 'Running'

try {
    $result = $apiInstance->modelsListBaseModels($skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsListBaseModels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available base models.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter&#x3D;status eq &#39;NotStarted&#39; or status eq &#39;Running&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedBaseModels**](../Model/PaginatedBaseModels.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsListCustomModels**
> \Swagger\Client\Model\PaginatedCustomModels modelsListCustomModels($skip, $top, $filter)

Gets the list of custom models for the authenticated subscription.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available models.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter=status eq 'NotStarted' or status eq 'Running'

try {
    $result = $apiInstance->modelsListCustomModels($skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsListCustomModels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available models.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter&#x3D;status eq &#39;NotStarted&#39; or status eq &#39;Running&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedCustomModels**](../Model/PaginatedCustomModels.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsListFiles**
> \Swagger\Client\Model\PaginatedFiles modelsListFiles($id, $sas_validity_in_seconds, $skip, $top, $filter)

Gets the files of the model identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the model.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available files.              - Supported properties: name, createdDateTime, kind.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime.                - and, or, not are supported.              - Example:                filter=name eq 'myaudio.wav' and kind eq 'Audio'

try {
    $result = $apiInstance->modelsListFiles($id, $sas_validity_in_seconds, $skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsListFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the model. |
 **sas_validity_in_seconds** | **int**| The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated. | [optional]
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available files.              - Supported properties: name, createdDateTime, kind.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime.                - and, or, not are supported.              - Example:                filter&#x3D;name eq &#39;myaudio.wav&#39; and kind eq &#39;Audio&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedFiles**](../Model/PaginatedFiles.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsListSupportedLocales**
> string[] modelsListSupportedLocales()

Gets a list of supported locales for model adaptation.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->modelsListSupportedLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsListSupportedLocales: ', $e->getMessage(), PHP_EOL;
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

# **modelsUpdate**
> \Swagger\Client\Model\CustomModel modelsUpdate($id, $model_update)

Updates the metadata of the model identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the model.
$model_update = new \Swagger\Client\Model\ModelUpdate(); // \Swagger\Client\Model\ModelUpdate | The updated values for the model.

try {
    $result = $apiInstance->modelsUpdate($id, $model_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechModelsApi->modelsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the model. |
 **model_update** | [**\Swagger\Client\Model\ModelUpdate**](../Model/ModelUpdate.md)| The updated values for the model. |

### Return type

[**\Swagger\Client\Model\CustomModel**](../Model/CustomModel.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

