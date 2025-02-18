# SynergiTech\Sage\EUSalesDescriptionsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEuSalesDescriptions()**](EUSalesDescriptionsApi.md#getEuSalesDescriptions) | **GET** /eu_sales_descriptions | Returns all EU Sales Descriptions |
| [**getEuSalesDescriptionsKey()**](EUSalesDescriptionsApi.md#getEuSalesDescriptionsKey) | **GET** /eu_sales_descriptions/{key} | Returns a EU Sales Description |


## `getEuSalesDescriptions()`

```php
getEuSalesDescriptions($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\EuSalesDescription[]
```

Returns all EU Sales Descriptions

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\EUSalesDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Ec Sales Descriptions per request.
$page = 1; // int | Go to specific page of Ec Sales Descriptions
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Ec Sales Descriptions (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getEuSalesDescriptions($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EUSalesDescriptionsApi->getEuSalesDescriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Ec Sales Descriptions per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Ec Sales Descriptions | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Ec Sales Descriptions (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\EuSalesDescription[]**](../Model/EuSalesDescription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEuSalesDescriptionsKey()`

```php
getEuSalesDescriptionsKey($key, $attributes): \SynergiTech\Sage\Model\EuSalesDescription
```

Returns a EU Sales Description

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\EUSalesDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The EU Sales Description Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Ec Sales Description (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getEuSalesDescriptionsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EUSalesDescriptionsApi->getEuSalesDescriptionsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The EU Sales Description Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Ec Sales Description (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\EuSalesDescription**](../Model/EuSalesDescription.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
