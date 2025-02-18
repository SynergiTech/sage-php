# SynergiTech\Sage\ProductsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteProductsKey()**](ProductsApi.md#deleteProductsKey) | **DELETE** /products/{key} | Deletes a Product |
| [**getProducts()**](ProductsApi.md#getProducts) | **GET** /products | Returns all Products |
| [**getProductsKey()**](ProductsApi.md#getProductsKey) | **GET** /products/{key} | Returns a Product |
| [**postProducts()**](ProductsApi.md#postProducts) | **POST** /products | Creates a Product |
| [**putProductsKey()**](ProductsApi.md#putProductsKey) | **PUT** /products/{key} | Updates a Product |


## `deleteProductsKey()`

```php
deleteProductsKey($key)
```

Deletes a Product

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Product Key.

try {
    $apiInstance->deleteProductsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Product Key. | |

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

## `getProducts()`

```php
getProducts($search, $updatedOrCreatedSince, $deletedSince, $active, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Product[]
```

Returns all Products

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Use this to filter by the item code or description.
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Products changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Products deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$active = True; // bool | Use this to only return active or inactive items
$itemsPerPage = 20; // int | Returns the given number of Products per request.
$page = 1; // int | Go to specific page of Products
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Products (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getProducts($search, $updatedOrCreatedSince, $deletedSince, $active, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Use this to filter by the item code or description. | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Products changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Products deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **active** | **bool**| Use this to only return active or inactive items | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Products per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Products | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Products (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Product[]**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductsKey()`

```php
getProductsKey($key, $attributes): \SynergiTech\Sage\Model\Product
```

Returns a Product

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Product Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Product (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getProductsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Product Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Product (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProducts()`

```php
postProducts($products): \SynergiTech\Sage\Model\Product
```

Creates a Product

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$products = new \SynergiTech\Sage\Model\PostProducts(); // \SynergiTech\Sage\Model\PostProducts

try {
    $result = $apiInstance->postProducts($products);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->postProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **products** | [**\SynergiTech\Sage\Model\PostProducts**](../Model/PostProducts.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putProductsKey()`

```php
putProductsKey($key, $products): \SynergiTech\Sage\Model\Product
```

Updates a Product

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Product Key.
$products = new \SynergiTech\Sage\Model\PutProducts(); // \SynergiTech\Sage\Model\PutProducts

try {
    $result = $apiInstance->putProductsKey($key, $products);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->putProductsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Product Key. | |
| **products** | [**\SynergiTech\Sage\Model\PutProducts**](../Model/PutProducts.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
