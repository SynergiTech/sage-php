# SynergiTech\Sage\ProductSalesPriceTypesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProductSalesPriceTypesKey()**](ProductSalesPriceTypesApi.md#deleteProductSalesPriceTypesKey) | **DELETE** /product_sales_price_types/{key} | Deletes a Product Sales Price Type |
| [**getProductSalesPriceTypes()**](ProductSalesPriceTypesApi.md#getProductSalesPriceTypes) | **GET** /product_sales_price_types | Returns all Product Sales Price Types |
| [**getProductSalesPriceTypesKey()**](ProductSalesPriceTypesApi.md#getProductSalesPriceTypesKey) | **GET** /product_sales_price_types/{key} | Returns a Product Sales Price Type |
| [**postProductSalesPriceTypes()**](ProductSalesPriceTypesApi.md#postProductSalesPriceTypes) | **POST** /product_sales_price_types | Creates a Product Sales Price Type |
| [**putProductSalesPriceTypesKey()**](ProductSalesPriceTypesApi.md#putProductSalesPriceTypesKey) | **PUT** /product_sales_price_types/{key} | Updates a Product Sales Price Type |


## `deleteProductSalesPriceTypesKey()`

```php
deleteProductSalesPriceTypesKey($key)
```

Deletes a Product Sales Price Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Product Sales Price Type Key.

try {
    $apiInstance->deleteProductSalesPriceTypesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->deleteProductSalesPriceTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Product Sales Price Type Key. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductSalesPriceTypes()`

```php
getProductSalesPriceTypes($active, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\ProductSalesPriceType[]
```

Returns all Product Sales Price Types

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$active = True; // bool | Use this to only return active or inactive items
$itemsPerPage = 20; // int | Returns the given number of Product Prices per request.
$page = 1; // int | Go to specific page of Product Prices
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Product Prices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getProductSalesPriceTypes($active, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->getProductSalesPriceTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active** | **bool**| Use this to only return active or inactive items | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Product Prices per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Product Prices | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Product Prices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ProductSalesPriceType[]**](../Model/ProductSalesPriceType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductSalesPriceTypesKey()`

```php
getProductSalesPriceTypesKey($key, $attributes): \SynergiTech\Sage\Model\ProductSalesPriceType
```

Returns a Product Sales Price Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Product Sales Price Type Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Product Price (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getProductSalesPriceTypesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->getProductSalesPriceTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Product Sales Price Type Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Product Price (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ProductSalesPriceType**](../Model/ProductSalesPriceType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProductSalesPriceTypes()`

```php
postProductSalesPriceTypes($productSalesPriceTypes): \SynergiTech\Sage\Model\ProductSalesPriceType
```

Creates a Product Sales Price Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productSalesPriceTypes = new \SynergiTech\Sage\Model\PostProductSalesPriceTypes(); // \SynergiTech\Sage\Model\PostProductSalesPriceTypes

try {
    $result = $apiInstance->postProductSalesPriceTypes($productSalesPriceTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->postProductSalesPriceTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productSalesPriceTypes** | [**\SynergiTech\Sage\Model\PostProductSalesPriceTypes**](../Model/PostProductSalesPriceTypes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ProductSalesPriceType**](../Model/ProductSalesPriceType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductSalesPriceTypesKey()`

```php
putProductSalesPriceTypesKey($key, $productSalesPriceTypes): \SynergiTech\Sage\Model\ProductSalesPriceType
```

Updates a Product Sales Price Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductSalesPriceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Product Sales Price Type Key.
$productSalesPriceTypes = new \SynergiTech\Sage\Model\PutProductSalesPriceTypes(); // \SynergiTech\Sage\Model\PutProductSalesPriceTypes

try {
    $result = $apiInstance->putProductSalesPriceTypesKey($key, $productSalesPriceTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSalesPriceTypesApi->putProductSalesPriceTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Product Sales Price Type Key. | |
| **productSalesPriceTypes** | [**\SynergiTech\Sage\Model\PutProductSalesPriceTypes**](../Model/PutProductSalesPriceTypes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ProductSalesPriceType**](../Model/ProductSalesPriceType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
