# SynergiTech\Sage\StockItemsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStockItemsKey()**](StockItemsApi.md#deleteStockItemsKey) | **DELETE** /stock_items/{key} | Deletes a Stock Item |
| [**getStockItems()**](StockItemsApi.md#getStockItems) | **GET** /stock_items | Returns all Stock Items |
| [**getStockItemsKey()**](StockItemsApi.md#getStockItemsKey) | **GET** /stock_items/{key} | Returns a Stock Item |
| [**postStockItems()**](StockItemsApi.md#postStockItems) | **POST** /stock_items | Creates a Stock Item |
| [**putStockItemsKey()**](StockItemsApi.md#putStockItemsKey) | **PUT** /stock_items/{key} | Updates a Stock Item |


## `deleteStockItemsKey()`

```php
deleteStockItemsKey($key)
```

Deletes a Stock Item

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Stock Item Key.

try {
    $apiInstance->deleteStockItemsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->deleteStockItemsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Stock Item Key. | |

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

## `getStockItems()`

```php
getStockItems($search, $updatedOrCreatedSince, $deletedSince, $active, $outOfStock, $belowReorderLevel, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\StockItem[]
```

Returns all Stock Items

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Use this to filter by the item code or description.
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Stock Items changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Stock Items deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$active = True; // bool | Use this to only return active or inactive items
$outOfStock = True; // bool | Use this to filter by the Stock Items that are out of stock
$belowReorderLevel = True; // bool | Use this to filter by the Stock Items that are below the reorder level
$itemsPerPage = 20; // int | Returns the given number of Stock Items per request.
$page = 1; // int | Go to specific page of Stock Items
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Stock Items (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getStockItems($search, $updatedOrCreatedSince, $deletedSince, $active, $outOfStock, $belowReorderLevel, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->getStockItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Use this to filter by the item code or description. | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Stock Items changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Stock Items deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **active** | **bool**| Use this to only return active or inactive items | [optional] |
| **outOfStock** | **bool**| Use this to filter by the Stock Items that are out of stock | [optional] |
| **belowReorderLevel** | **bool**| Use this to filter by the Stock Items that are below the reorder level | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Stock Items per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Stock Items | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Stock Items (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\StockItem[]**](../Model/StockItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStockItemsKey()`

```php
getStockItemsKey($key, $attributes): \SynergiTech\Sage\Model\StockItem
```

Returns a Stock Item

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Stock Item Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Stock Item (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getStockItemsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->getStockItemsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Stock Item Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Stock Item (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\StockItem**](../Model/StockItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStockItems()`

```php
postStockItems($stockItems): \SynergiTech\Sage\Model\StockItem
```

Creates a Stock Item

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stockItems = new \SynergiTech\Sage\Model\PostStockItems(); // \SynergiTech\Sage\Model\PostStockItems

try {
    $result = $apiInstance->postStockItems($stockItems);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->postStockItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockItems** | [**\SynergiTech\Sage\Model\PostStockItems**](../Model/PostStockItems.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\StockItem**](../Model/StockItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putStockItemsKey()`

```php
putStockItemsKey($key, $stockItems): \SynergiTech\Sage\Model\StockItem
```

Updates a Stock Item

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Stock Item Key.
$stockItems = new \SynergiTech\Sage\Model\PutStockItems(); // \SynergiTech\Sage\Model\PutStockItems

try {
    $result = $apiInstance->putStockItemsKey($key, $stockItems);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->putStockItemsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Stock Item Key. | |
| **stockItems** | [**\SynergiTech\Sage\Model\PutStockItems**](../Model/PutStockItems.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\StockItem**](../Model/StockItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
