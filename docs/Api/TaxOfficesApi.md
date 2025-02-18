# SynergiTech\Sage\TaxOfficesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaxOffices()**](TaxOfficesApi.md#getTaxOffices) | **GET** /tax_offices | Returns all Tax Offices |
| [**getTaxOfficesKey()**](TaxOfficesApi.md#getTaxOfficesKey) | **GET** /tax_offices/{key} | Returns a Tax Office |


## `getTaxOffices()`

```php
getTaxOffices($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\TaxOffice[]
```

Returns all Tax Offices

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxOfficesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Tax Offices per request.
$page = 1; // int | Go to specific page of Tax Offices
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Offices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxOffices($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxOfficesApi->getTaxOffices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Tax Offices per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Tax Offices | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Offices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxOffice[]**](../Model/TaxOffice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxOfficesKey()`

```php
getTaxOfficesKey($key, $attributes): \SynergiTech\Sage\Model\TaxOffice
```

Returns a Tax Office

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxOfficesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Tax Office Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Office (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxOfficesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxOfficesApi->getTaxOfficesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Office Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Office (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxOffice**](../Model/TaxOffice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
