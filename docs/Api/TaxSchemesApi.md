# SynergiTech\Sage\TaxSchemesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaxSchemes()**](TaxSchemesApi.md#getTaxSchemes) | **GET** /tax_schemes | Returns all Tax Schemes |
| [**getTaxSchemesKey()**](TaxSchemesApi.md#getTaxSchemesKey) | **GET** /tax_schemes/{key} | Returns a Tax Scheme |


## `getTaxSchemes()`

```php
getTaxSchemes($showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\TaxScheme[]
```

Returns all Tax Schemes

### Endpoint Availability  * Accounting Plus: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Standard: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Start: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸

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


$apiInstance = new SynergiTech\Sage\Api\TaxSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showLegacyId = True; // bool | Display the legacy_id for the Tax Schemes.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Tax Schemes per request.
$page = 1; // int | Format - int32. Go to specific page of Tax Schemes
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Schemes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxSchemes($showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxSchemesApi->getTaxSchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showLegacyId** | **bool**| Display the legacy_id for the Tax Schemes. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Tax Schemes per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Tax Schemes | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Schemes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxScheme[]**](../Model/TaxScheme.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxSchemesKey()`

```php
getTaxSchemesKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\TaxScheme
```

Returns a Tax Scheme

### Endpoint Availability  * Accounting Plus: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Standard: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Start: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸

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


$apiInstance = new SynergiTech\Sage\Api\TaxSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Tax Scheme Key.
$showLegacyId = True; // bool | Display the legacy_id for the Tax Scheme.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Scheme (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxSchemesKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxSchemesApi->getTaxSchemesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Scheme Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Tax Scheme. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Scheme (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxScheme**](../Model/TaxScheme.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
