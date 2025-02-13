# SynergiTech\Sage\LegalFormTypesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLegalFormTypes()**](LegalFormTypesApi.md#getLegalFormTypes) | **GET** /legal_form_types | Returns all Legal Form Types |
| [**getLegalFormTypesKey()**](LegalFormTypesApi.md#getLegalFormTypesKey) | **GET** /legal_form_types/{key} | Returns a Legal Form Type |


## `getLegalFormTypes()`

```php
getLegalFormTypes($showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\LegalFormType[]
```

Returns all Legal Form Types

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\LegalFormTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showLegacyId = True; // bool | Display the legacy_id for the Business Classifications.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Business Classifications per request.
$page = 1; // int | Format - int32. Go to specific page of Business Classifications
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Business Classifications (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLegalFormTypes($showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalFormTypesApi->getLegalFormTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showLegacyId** | **bool**| Display the legacy_id for the Business Classifications. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Business Classifications per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Business Classifications | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Business Classifications (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LegalFormType[]**](../Model/LegalFormType.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLegalFormTypesKey()`

```php
getLegalFormTypesKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\LegalFormType
```

Returns a Legal Form Type

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\LegalFormTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Legal Form Type Key.
$showLegacyId = True; // bool | Display the legacy_id for the Business Classification.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Business Classification (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLegalFormTypesKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalFormTypesApi->getLegalFormTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Legal Form Type Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Business Classification. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Business Classification (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LegalFormType**](../Model/LegalFormType.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
