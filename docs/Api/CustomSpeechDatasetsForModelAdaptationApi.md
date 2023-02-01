# Swagger\Client\CustomSpeechDatasetsForModelAdaptationApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**datasetsCommitBlocks**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsCommitBlocks) | **POST** /datasets/{id}/blocks:commit | Commit block list to complete the upload of the dataset.
[**datasetsCreate**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsCreate) | **POST** /datasets | Uploads and creates a new dataset by getting the data from a specified URL or starts waiting for data blocks to be uploaded.
[**datasetsDelete**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsDelete) | **DELETE** /datasets/{id} | Deletes the specified dataset.
[**datasetsGet**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsGet) | **GET** /datasets/{id} | Gets the dataset identified by the given ID.
[**datasetsGetBlocks**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsGetBlocks) | **GET** /datasets/{id}/blocks | Gets the list of uploaded blocks for this dataset.
[**datasetsGetFile**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsGetFile) | **GET** /datasets/{id}/files/{fileId} | Gets one specific file (identified with fileId) from a dataset (identified with id).
[**datasetsList**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsList) | **GET** /datasets | Gets a list of datasets for the authenticated subscription.
[**datasetsListFiles**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsListFiles) | **GET** /datasets/{id}/files | Gets the files of the dataset identified by the given ID.
[**datasetsListSupportedLocales**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsListSupportedLocales) | **GET** /datasets/locales | Gets a list of supported locales for datasets.
[**datasetsUpdate**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsUpdate) | **PATCH** /datasets/{id} | Updates the mutable details of the dataset identified by its ID.
[**datasetsUpload**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsUpload) | **POST** /datasets/upload | Uploads data and creates a new dataset.
[**datasetsUploadBlock**](CustomSpeechDatasetsForModelAdaptationApi.md#datasetsUploadBlock) | **PUT** /datasets/{id}/blocks | Upload a block of data for the dataset. The maximum size of the block is 8MiB.


# **datasetsCommitBlocks**
> datasetsCommitBlocks($id, $block_list)

Commit block list to complete the upload of the dataset.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the dataset.
$block_list = array(new \Swagger\Client\Model\CommitBlocksEntry()); // \Swagger\Client\Model\CommitBlocksEntry[] | The list of blocks that compile the dataset.

try {
    $apiInstance->datasetsCommitBlocks($id, $block_list);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsCommitBlocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the dataset. |
 **block_list** | [**\Swagger\Client\Model\CommitBlocksEntry[]**](../Model/CommitBlocksEntry.md)| The list of blocks that compile the dataset. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datasetsCreate**
> \Swagger\Client\Model\Dataset datasetsCreate($dataset)

Uploads and creates a new dataset by getting the data from a specified URL or starts waiting for data blocks to be uploaded.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dataset = new \Swagger\Client\Model\Dataset(); // \Swagger\Client\Model\Dataset | Definition for the new dataset.

try {
    $result = $apiInstance->datasetsCreate($dataset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dataset** | [**\Swagger\Client\Model\Dataset**](../Model/Dataset.md)| Definition for the new dataset. |

### Return type

[**\Swagger\Client\Model\Dataset**](../Model/Dataset.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datasetsDelete**
> datasetsDelete($id)

Deletes the specified dataset.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the dataset.

try {
    $apiInstance->datasetsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the dataset. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datasetsGet**
> \Swagger\Client\Model\Dataset datasetsGet($id)

Gets the dataset identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the dataset.

try {
    $result = $apiInstance->datasetsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the dataset. |

### Return type

[**\Swagger\Client\Model\Dataset**](../Model/Dataset.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datasetsGetBlocks**
> \Swagger\Client\Model\UploadedBlocks datasetsGetBlocks($id)

Gets the list of uploaded blocks for this dataset.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the dataset.

try {
    $result = $apiInstance->datasetsGetBlocks($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsGetBlocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the dataset. |

### Return type

[**\Swagger\Client\Model\UploadedBlocks**](../Model/UploadedBlocks.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datasetsGetFile**
> \Swagger\Client\Model\File datasetsGetFile($id, $file_id, $sas_validity_in_seconds)

Gets one specific file (identified with fileId) from a dataset (identified with id).

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the dataset.
$file_id = "file_id_example"; // string | The identifier of the file.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.

try {
    $result = $apiInstance->datasetsGetFile($id, $file_id, $sas_validity_in_seconds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsGetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the dataset. |
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

# **datasetsList**
> \Swagger\Client\Model\PaginatedDatasets datasetsList($skip, $top, $filter)

Gets a list of datasets for the authenticated subscription.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available datasets.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale, kind.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              -Example:               filter=createdDateTime gt 2022-02-01T11:00:00Z and displayName eq 'My dataset'

try {
    $result = $apiInstance->datasetsList($skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available datasets.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale, kind.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              -Example:               filter&#x3D;createdDateTime gt 2022-02-01T11:00:00Z and displayName eq &#39;My dataset&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDatasets**](../Model/PaginatedDatasets.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datasetsListFiles**
> \Swagger\Client\Model\PaginatedFiles datasetsListFiles($id, $sas_validity_in_seconds, $skip, $top, $filter)

Gets the files of the dataset identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the dataset.
$sas_validity_in_seconds = 56; // int | The duration in seconds that an SAS url should be valid. The default duration is 12 hours. When using BYOS (https://docs.microsoft.com/en-us/azure/cognitive-services/speech-service/speech-encryption-of-data-at-rest#bring-your-own-storage-byos-for-customization-and-logging): A value of 0 means that a plain blob URI without SAS token will be generated.
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available files.              - Supported properties: name, createdDateTime, kind.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime.                - and, or, not are supported.              - Example:                filter=name eq 'myaudio.wav' and kind eq 'Audio'

try {
    $result = $apiInstance->datasetsListFiles($id, $sas_validity_in_seconds, $skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsListFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the dataset. |
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

# **datasetsListSupportedLocales**
> \Swagger\Client\Model\DatasetLocales datasetsListSupportedLocales()

Gets a list of supported locales for datasets.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->datasetsListSupportedLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsListSupportedLocales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DatasetLocales**](../Model/DatasetLocales.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datasetsUpdate**
> \Swagger\Client\Model\Dataset datasetsUpdate($id, $dataset_update)

Updates the mutable details of the dataset identified by its ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the dataset.
$dataset_update = new \Swagger\Client\Model\DatasetUpdate(); // \Swagger\Client\Model\DatasetUpdate | The updated values for the dataset.

try {
    $result = $apiInstance->datasetsUpdate($id, $dataset_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the dataset. |
 **dataset_update** | [**\Swagger\Client\Model\DatasetUpdate**](../Model/DatasetUpdate.md)| The updated values for the dataset. |

### Return type

[**\Swagger\Client\Model\Dataset**](../Model/Dataset.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datasetsUpload**
> \Swagger\Client\Model\Dataset datasetsUpload($display_name, $locale, $kind, $project, $description, $custom_properties, $data, $email)

Uploads data and creates a new dataset.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$display_name = "display_name_example"; // string | The name of this dataset (required).
$locale = "locale_example"; // string | The locale of this dataset (required).
$kind = "kind_example"; // string | The kind of the dataset (required). Possible values are \"Language\", \"Acoustic\", \"Pronunciation\", \"AudioFiles\", \"LanguageMarkdown\".
$project = "project_example"; // string | The optional string representation of the url of a project. If set, the dataset will be associated with that project.
$description = "description_example"; // string | Optional description of this dataset.
$custom_properties = "custom_properties_example"; // string | The optional custom properties of this entity. The maximum allowed key length is 64 characters, the maximum allowed value length is 256 characters and the count of allowed entries is 10.
$data = "/path/to/file.txt"; // \SplFileObject | For acoustic datasets, a zip file containing the audio data and a text file containing the transcriptions for the audio data. For language datasets, a text file containing the language or pronunciation data. Required in both cases.
$email = "email_example"; // string | An optional string containing the email address to send email notifications to in case the operation completes. The value will be removed after successfully sending the email.

try {
    $result = $apiInstance->datasetsUpload($display_name, $locale, $kind, $project, $description, $custom_properties, $data, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **display_name** | **string**| The name of this dataset (required). |
 **locale** | **string**| The locale of this dataset (required). |
 **kind** | **string**| The kind of the dataset (required). Possible values are \&quot;Language\&quot;, \&quot;Acoustic\&quot;, \&quot;Pronunciation\&quot;, \&quot;AudioFiles\&quot;, \&quot;LanguageMarkdown\&quot;. |
 **project** | **string**| The optional string representation of the url of a project. If set, the dataset will be associated with that project. | [optional]
 **description** | **string**| Optional description of this dataset. | [optional]
 **custom_properties** | **string**| The optional custom properties of this entity. The maximum allowed key length is 64 characters, the maximum allowed value length is 256 characters and the count of allowed entries is 10. | [optional]
 **data** | **\SplFileObject**| For acoustic datasets, a zip file containing the audio data and a text file containing the transcriptions for the audio data. For language datasets, a text file containing the language or pronunciation data. Required in both cases. | [optional]
 **email** | **string**| An optional string containing the email address to send email notifications to in case the operation completes. The value will be removed after successfully sending the email. | [optional]

### Return type

[**\Swagger\Client\Model\Dataset**](../Model/Dataset.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **datasetsUploadBlock**
> datasetsUploadBlock($id, $blockid, $body)

Upload a block of data for the dataset. The maximum size of the block is 8MiB.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the dataset.
$blockid = "blockid_example"; // string | A valid Base64 string value that identifies the block. Prior to encoding, the string must be less than or equal to 64 bytes in size. For a given blob, the length of the value specified for the blockid parameter must be the same size for each block. Note that the Base64 string must be URL-encoded.
$body = "B"; // string | 

try {
    $apiInstance->datasetsUploadBlock($id, $blockid, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsUploadBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the dataset. |
 **blockid** | **string**| A valid Base64 string value that identifies the block. Prior to encoding, the string must be less than or equal to 64 bytes in size. For a given blob, the length of the value specified for the blockid parameter must be the same size for each block. Note that the Base64 string must be URL-encoded. |
 **body** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

