# SynergiTech\Sage\TaxSchemesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaxSchemes()**](TaxSchemesApi.md#getTaxSchemes) | **GET** /tax_schemes | Returns all Tax Schemes |
| [**getTaxSchemesKey()**](TaxSchemesApi.md#getTaxSchemesKey) | **GET** /tax_schemes/{key} | Returns a Tax Scheme |


## `getTaxSchemes()`

```php
getTaxSchemes($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\TaxScheme[]
```

Returns all Tax Schemes

### Endpoint Availability  * Accounting Plus: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Standard: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Start: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Tax Schemes per request.
$page = 1; // int | Go to specific page of Tax Schemes
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Schemes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxSchemes($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxSchemesApi->getTaxSchemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Tax Schemes per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Tax Schemes | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Schemes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxScheme[]**](../Model/TaxScheme.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxSchemesKey()`

```php
getTaxSchemesKey($key, $attributes): \SynergiTech\Sage\Model\TaxScheme
```

Returns a Tax Scheme

### Endpoint Availability  * Accounting Plus: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Standard: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Start: 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxSchemesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Tax Scheme Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Scheme (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxSchemesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxSchemesApi->getTaxSchemesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Scheme Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Scheme (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxScheme**](../Model/TaxScheme.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
