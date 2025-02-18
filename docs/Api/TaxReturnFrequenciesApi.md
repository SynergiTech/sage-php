# SynergiTech\Sage\TaxReturnFrequenciesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaxReturnFrequencies()**](TaxReturnFrequenciesApi.md#getTaxReturnFrequencies) | **GET** /tax_return_frequencies | Returns all Tax Return Frequencies |
| [**getTaxReturnFrequenciesKey()**](TaxReturnFrequenciesApi.md#getTaxReturnFrequenciesKey) | **GET** /tax_return_frequencies/{key} | Returns a Tax Return Frequency |


## `getTaxReturnFrequencies()`

```php
getTaxReturnFrequencies($taxTypeId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Base[]
```

Returns all Tax Return Frequencies

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxReturnFrequenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxTypeId = 'taxTypeId_example'; // string | Use this to filter Tax Submission Frequency Types by tax_type_id (Canada only)
$itemsPerPage = 20; // int | Returns the given number of Tax Submission Frequency Types per request.
$page = 1; // int | Go to specific page of Tax Submission Frequency Types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Submission Frequency Types (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxReturnFrequencies($taxTypeId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReturnFrequenciesApi->getTaxReturnFrequencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taxTypeId** | **string**| Use this to filter Tax Submission Frequency Types by tax_type_id (Canada only) | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Tax Submission Frequency Types per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Tax Submission Frequency Types | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Submission Frequency Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Base[]**](../Model/Base.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxReturnFrequenciesKey()`

```php
getTaxReturnFrequenciesKey($key, $attributes): \SynergiTech\Sage\Model\Base
```

Returns a Tax Return Frequency

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇪🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxReturnFrequenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Tax Return Frequency Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Submission Frequency Type (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxReturnFrequenciesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxReturnFrequenciesApi->getTaxReturnFrequenciesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Return Frequency Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Submission Frequency Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Base**](../Model/Base.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
