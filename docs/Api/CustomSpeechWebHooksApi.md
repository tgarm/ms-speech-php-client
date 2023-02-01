# Swagger\Client\CustomSpeechWebHooksApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webHooksCreate**](CustomSpeechWebHooksApi.md#webHooksCreate) | **POST** /webhooks | Creates a new web hook.
[**webHooksDelete**](CustomSpeechWebHooksApi.md#webHooksDelete) | **DELETE** /webhooks/{id} | Deletes the web hook identified by the given ID.
[**webHooksGet**](CustomSpeechWebHooksApi.md#webHooksGet) | **GET** /webhooks/{id} | Gets the web hook identified by the given ID.
[**webHooksList**](CustomSpeechWebHooksApi.md#webHooksList) | **GET** /webhooks | Gets the list of web hooks for the authenticated subscription.
[**webHooksPing**](CustomSpeechWebHooksApi.md#webHooksPing) | **POST** /webhooks/{id}:ping | Sends a ping event to the registered URL.
[**webHooksTest**](CustomSpeechWebHooksApi.md#webHooksTest) | **POST** /webhooks/{id}:test | Sends a request for each registered event type to the registered URL.
[**webHooksUpdate**](CustomSpeechWebHooksApi.md#webHooksUpdate) | **PATCH** /webhooks/{id} | Updates the web hook identified by the given ID.


# **webHooksCreate**
> \Swagger\Client\Model\WebHook webHooksCreate($web_hook)

Creates a new web hook.

If the property secret in the configuration is present and contains a non-empty string, it will be used to create a SHA256 hash of the payload with  the secret as HMAC key. This hash will be set as X-MicrosoftSpeechServices-Signature header when calling back into the registered URL.                When calling back into the registered URL, the request will contain a X-MicrosoftSpeechServices-Event header containing one of the registered event  types. There will be one request per registered event type.                After successfully registering the web hook, it will not be usable until a challenge/response is completed. To do this, a request with the event type  challenge will be made with a query parameter called validationToken. Respond to the challenge with a 200 OK containing the value of the validationToken  query parameter as the response body. When the challenge/response is successfully completed, the web hook will begin receiving events.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_hook = new \Swagger\Client\Model\WebHook(); // \Swagger\Client\Model\WebHook | The details of the new web hook.

try {
    $result = $apiInstance->webHooksCreate($web_hook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechWebHooksApi->webHooksCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_hook** | [**\Swagger\Client\Model\WebHook**](../Model/WebHook.md)| The details of the new web hook. |

### Return type

[**\Swagger\Client\Model\WebHook**](../Model/WebHook.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksDelete**
> webHooksDelete($id)

Deletes the web hook identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the web hook.

try {
    $apiInstance->webHooksDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechWebHooksApi->webHooksDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the web hook. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksGet**
> \Swagger\Client\Model\WebHook webHooksGet($id)

Gets the web hook identified by the given ID.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the web hook.

try {
    $result = $apiInstance->webHooksGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechWebHooksApi->webHooksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the web hook. |

### Return type

[**\Swagger\Client\Model\WebHook**](../Model/WebHook.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksList**
> \Swagger\Client\Model\PaginatedWebHooks webHooksList($skip, $top, $filter)

Gets the list of web hooks for the authenticated subscription.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Number of datasets that will be skipped.
$top = 56; // int | Number of datasets that will be included after skipping.
$filter = "filter_example"; // string | A filtering expression for selecting a subset of the available hooks.              Supported properties: displayName, description, createdDateTime, lastActionDateTime, status and webUrl.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter=displayName eq 'test'

try {
    $result = $apiInstance->webHooksList($skip, $top, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechWebHooksApi->webHooksList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Number of datasets that will be skipped. | [optional]
 **top** | **int**| Number of datasets that will be included after skipping. | [optional]
 **filter** | **string**| A filtering expression for selecting a subset of the available hooks.              Supported properties: displayName, description, createdDateTime, lastActionDateTime, status and webUrl.              - Operators:                - eq, ne are supported for all properties.                - gt, ge, lt, le are supported for createdDateTime and lastActionDateTime.                - and, or, not are supported.              - Example:                filter&#x3D;displayName eq &#39;test&#39; | [optional]

### Return type

[**\Swagger\Client\Model\PaginatedWebHooks**](../Model/PaginatedWebHooks.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksPing**
> webHooksPing($id)

Sends a ping event to the registered URL.

The request body of the POST request sent to the registered web hook URL is of the same shape as in the GET request for a specific hook.  The Swagger Schema ID of the model is WebHookV3.                The request will contain a X-MicrosoftSpeechServices-Event header with the value ping. If the web hook was registered with  a secret it will contain a X-MicrosoftSpeechServices-Signature header with an SHA256 hash of the payload with  the secret as HMAC key. The hash is base64 encoded.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the web hook to ping.

try {
    $apiInstance->webHooksPing($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechWebHooksApi->webHooksPing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the web hook to ping. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksTest**
> webHooksTest($id)

Sends a request for each registered event type to the registered URL.

The payload will be generated from the last entity that would have invoked the web hook. If no entity is present for none of the registered event types,  the POST will respond with 204. If a test request can be made, it will respond with 200.  The request will contain a X-MicrosoftSpeechServices-Event header with the respective registered event type.  If the web hook was registered with a secret it will contain a X-MicrosoftSpeechServices-Signature header with an SHA256 hash of the payload with  the secret as HMAC key. The hash is base64 encoded.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the web hook to ping.

try {
    $apiInstance->webHooksTest($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechWebHooksApi->webHooksTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the web hook to ping. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webHooksUpdate**
> \Swagger\Client\Model\WebHook webHooksUpdate($id, $web_hook_update)

Updates the web hook identified by the given ID.

If the property secret in the configuration is omitted or contains an empty string, future callbacks won't contain X-MicrosoftSpeechServices-Signature  headers. If the property contains a non-empty string, it will be used to create a SHA256 hash of the payload with the secret as HMAC key. This hash  will be set as X-MicrosoftSpeechServices-Signature header when calling back into the registered URL.                If the URL changes,  the web hook will stop receiving events until a  challenge/response is completed. To do this, a request with the event type challenge will be made with a query parameter called validationToken.  Respond to the challenge with a 200 OK containing the value of the validationToken query parameter as the response body. When the challenge/response  is successfully completed, the web hook will begin receiving events.

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

$apiInstance = new Swagger\Client\Api\CustomSpeechWebHooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the web hook.
$web_hook_update = new \Swagger\Client\Model\WebHookUpdate(); // \Swagger\Client\Model\WebHookUpdate | The updated values for the web hook.

try {
    $result = $apiInstance->webHooksUpdate($id, $web_hook_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechWebHooksApi->webHooksUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The identifier of the web hook. |
 **web_hook_update** | [**\Swagger\Client\Model\WebHookUpdate**](../Model/WebHookUpdate.md)| The updated values for the web hook. |

### Return type

[**\Swagger\Client\Model\WebHook**](../Model/WebHook.md)

### Authorization

[api_key](../../README.md#api_key), [token](../../README.md#token)

### HTTP request headers

 - **Content-Type**: application/json, application/merge-patch+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

