# Swagger\Client\CustomSpeechProjectsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsCreate**](CustomSpeechProjectsApi.md#projectsCreate) | **POST** /projects | Creates a new project.
[**projectsDelete**](CustomSpeechProjectsApi.md#projectsDelete) | **DELETE** /projects/{id} | Deletes the project identified by the given ID.
[**projectsGet**](CustomSpeechProjectsApi.md#projectsGet) | **GET** /projects/{id} | Gets the project identified by the given ID.
[**projectsList**](CustomSpeechProjectsApi.md#projectsList) | **GET** /projects | Gets the list of projects for the authenticated subscription.
[**projectsListDatasets**](CustomSpeechProjectsApi.md#projectsListDatasets) | **GET** /projects/{id}/datasets | Gets the list of datasets for specified project.
[**projectsListEndpoints**](CustomSpeechProjectsApi.md#projectsListEndpoints) | **GET** /projects/{id}/endpoints | Gets the list of endpoints for specified project.
[**projectsListEvaluations**](CustomSpeechProjectsApi.md#projectsListEvaluations) | **GET** /projects/{id}/evaluations | Gets the list of evaluations for specified project.
[**projectsListModels**](CustomSpeechProjectsApi.md#projectsListModels) | **GET** /projects/{id}/models | Gets the list of models for specified project.
[**projectsListSupportedLocales**](CustomSpeechProjectsApi.md#projectsListSupportedLocales) | **GET** /projects/locales | Gets the list of supported locales.
[**projectsListTranscriptions**](CustomSpeechProjectsApi.md#projectsListTranscriptions) | **GET** /projects/{id}/transcriptions | Gets the list of transcriptions for specified project.
[**projectsUpdate**](CustomSpeechProjectsApi.md#projectsUpdate) | **PATCH** /projects/{id} | Updates the project identified by the given ID.


# **projectsCreate**
> \Swagger\Client\Model\Project projectsCreate($project)

Creates a new project.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = new \Swagger\Client\Model\Project(); // \Swagger\Client\Model\Project | The details of the project.

try {
    $result = $apiInstance->projectsCreate($project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | [**\Swagger\Client\Model\Project**](../Model/Project.md)| The details of the project. |

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsDelete**
> projectsDelete($id)

Deletes the project identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the project.

try {
    $apiInstance->projectsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the project. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsGet**
> \Swagger\Client\Model\Project projectsGet($id)

Gets the project identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the project.

try {
    $result = $apiInstance->projectsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the project. |

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsList**
> \Swagger\Client\Model\PaginatedProjects projectsList($skip, $top, $filter)

Gets the list of projects for the authenticated subscription.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available projects.              - Supported properties: displayName, description, createdDateTime, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime.                - and, or, not are supported.              - Example:                filter=displayName eq 'My test'

try {
    $result = $apiInstance->projectsList($skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available projects.              - Supported properties: displayName, description, createdDateTime, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime.                - and, or, not are supported.              - Example:                filter&#x3D;displayName eq &#39;My test&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedProjects**](../Model/PaginatedProjects.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsListDatasets**
> \Swagger\Client\Model\PaginatedDatasets projectsListDatasets($id, $skip, $top, $filter)

Gets the list of datasets for specified project.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the project.
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available datasets.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale, kind.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter=createdDateTime gt 2022-02-01T11:00:00Z

try {
    $result = $apiInstance->projectsListDatasets($id, $skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsListDatasets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the project. |
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available datasets.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale, kind.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter&#x3D;createdDateTime gt 2022-02-01T11:00:00Z | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedDatasets**](../Model/PaginatedDatasets.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsListEndpoints**
> \Swagger\Client\Model\PaginatedEndpoints projectsListEndpoints($id, $skip, $top, $filter)

Gets the list of endpoints for specified project.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the project.
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available endpoints.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter=locale eq 'en-US'

try {
    $result = $apiInstance->projectsListEndpoints($id, $skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsListEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the project. |
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

# **projectsListEvaluations**
> \Swagger\Client\Model\PaginatedEvaluations projectsListEvaluations($id, $skip, $top, $filter)

Gets the list of evaluations for specified project.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the project.
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available evaluations.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status and locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example                filter=displayName eq 'My evaluation'

try {
    $result = $apiInstance->projectsListEvaluations($id, $skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsListEvaluations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the project. |
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available evaluations.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status and locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example                filter&#x3D;displayName eq &#39;My evaluation&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedEvaluations**](../Model/PaginatedEvaluations.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsListModels**
> \Swagger\Client\Model\PaginatedCustomModels projectsListModels($id, $skip, $top, $filter)

Gets the list of models for specified project.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the project.
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available models.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.                - Operators:                  - eq, ne are supported for all properties.                  - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                  - and, or, not are supported.              - Example:                filter=status eq 'NotStarted' or status eq 'Running'

try {
    $result = $apiInstance->projectsListModels($id, $skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsListModels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the project. |
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available models.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.                - Operators:                  - eq, ne are supported for all properties.                  - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                  - and, or, not are supported.              - Example:                filter&#x3D;status eq &#39;NotStarted&#39; or status eq &#39;Running&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedCustomModels**](../Model/PaginatedCustomModels.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsListSupportedLocales**
> string[] projectsListSupportedLocales()

Gets the list of supported locales.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->projectsListSupportedLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsListSupportedLocales: ', $e->getMessage(), PHP_EOL;
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

# **projectsListTranscriptions**
> \Swagger\Client\Model\PaginatedTranscriptions projectsListTranscriptions($id, $skip, $top, $filter)

Gets the list of transcriptions for specified project.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the project.
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available transcriptions.              - Supported properties: displayName, description, createdDateTime, lastActionDateTime, status, locale.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter=createdDateTime gt 2022-02-01T11:00:00Z

try {
    $result = $apiInstance->projectsListTranscriptions($id, $skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsListTranscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the project. |
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

# **projectsUpdate**
> \Swagger\Client\Model\Project projectsUpdate($id, $project_update)

Updates the project identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the project.
$project_update = new \Swagger\Client\Model\ProjectUpdate(); // \Swagger\Client\Model\ProjectUpdate | The updated values for the project.

try {
    $result = $apiInstance->projectsUpdate($id, $project_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechProjectsApi->projectsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the project. |
 **project_update** | [**\Swagger\Client\Model\ProjectUpdate**](../Model/ProjectUpdate.md)| The updated values for the project. |

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

