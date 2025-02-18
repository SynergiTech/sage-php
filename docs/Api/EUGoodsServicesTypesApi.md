# SynergiTech\Sage\EUGoodsServicesTypesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEuGoodsServicesTypes()**](EUGoodsServicesTypesApi.md#getEuGoodsServicesTypes) | **GET** /eu_goods_services_types | Returns all EU Goods Services Types |
| [**getEuGoodsServicesTypesKey()**](EUGoodsServicesTypesApi.md#getEuGoodsServicesTypesKey) | **GET** /eu_goods_services_types/{key} | Returns a EU Goods Services Type |


## `getEuGoodsServicesTypes()`

```php
getEuGoodsServicesTypes($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Base[]
```

Returns all EU Goods Services Types

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\EUGoodsServicesTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of EU Goods Services Types per request.
$page = 1; // int | Go to specific page of EU Goods Services Types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the EU Goods Services Types (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getEuGoodsServicesTypes($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EUGoodsServicesTypesApi->getEuGoodsServicesTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of EU Goods Services Types per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of EU Goods Services Types | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the EU Goods Services Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

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

## `getEuGoodsServicesTypesKey()`

```php
getEuGoodsServicesTypesKey($key, $attributes): \SynergiTech\Sage\Model\Base
```

Returns a EU Goods Services Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\EUGoodsServicesTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The EU Goods Services Type Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the EU Goods Services Type (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getEuGoodsServicesTypesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EUGoodsServicesTypesApi->getEuGoodsServicesTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The EU Goods Services Type Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the EU Goods Services Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

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
