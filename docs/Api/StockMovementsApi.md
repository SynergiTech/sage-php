# SynergiTech\Sage\StockMovementsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStockMovementsKey()**](StockMovementsApi.md#deleteStockMovementsKey) | **DELETE** /stock_movements/{key} | Deletes a Stock Movement |
| [**getStockMovements()**](StockMovementsApi.md#getStockMovements) | **GET** /stock_movements | Returns all Stock Movements |
| [**getStockMovementsKey()**](StockMovementsApi.md#getStockMovementsKey) | **GET** /stock_movements/{key} | Returns a Stock Movement |
| [**postStockMovements()**](StockMovementsApi.md#postStockMovements) | **POST** /stock_movements | Creates a Stock Movement |
| [**putStockMovementsKey()**](StockMovementsApi.md#putStockMovementsKey) | **PUT** /stock_movements/{key} | Updates a Stock Movement |


## `deleteStockMovementsKey()`

```php
deleteStockMovementsKey($key)
```

Deletes a Stock Movement

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Stock Movement Key.

try {
    $apiInstance->deleteStockMovementsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling StockMovementsApi->deleteStockMovementsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Stock Movement Key. | |

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

## `getStockMovements()`

```php
getStockMovements($search, $stockItemId, $fromDate, $toDate, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\StockMovement[]
```

Returns all Stock Movements

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Use this to filter by the details
$stockItemId = 'stockItemId_example'; // string | Use this to filter  by stock_item_id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Stock Movements dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Stock Movements dates
$itemsPerPage = 20; // int | Returns the given number of Stock Movements per request.
$page = 1; // int | Go to specific page of Stock Movements
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Stock Movements (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getStockMovements($search, $stockItemId, $fromDate, $toDate, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockMovementsApi->getStockMovements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Use this to filter by the details | [optional] |
| **stockItemId** | **string**| Use this to filter  by stock_item_id | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Stock Movements dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Stock Movements dates | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Stock Movements per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Stock Movements | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Stock Movements (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\StockMovement[]**](../Model/StockMovement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStockMovementsKey()`

```php
getStockMovementsKey($key, $attributes): \SynergiTech\Sage\Model\StockMovement
```

Returns a Stock Movement

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Stock Movement Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Stock Movement (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getStockMovementsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockMovementsApi->getStockMovementsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Stock Movement Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Stock Movement (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\StockMovement**](../Model/StockMovement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStockMovements()`

```php
postStockMovements($stockMovements): \SynergiTech\Sage\Model\StockMovement
```

Creates a Stock Movement

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stockMovements = new \SynergiTech\Sage\Model\PostStockMovements(); // \SynergiTech\Sage\Model\PostStockMovements

try {
    $result = $apiInstance->postStockMovements($stockMovements);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockMovementsApi->postStockMovements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockMovements** | [**\SynergiTech\Sage\Model\PostStockMovements**](../Model/PostStockMovements.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\StockMovement**](../Model/StockMovement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putStockMovementsKey()`

```php
putStockMovementsKey($key, $stockMovements): \SynergiTech\Sage\Model\StockMovement
```

Updates a Stock Movement

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Products & Services`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\StockMovementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Stock Movement Key.
$stockMovements = new \SynergiTech\Sage\Model\PutStockMovements(); // \SynergiTech\Sage\Model\PutStockMovements

try {
    $result = $apiInstance->putStockMovementsKey($key, $stockMovements);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockMovementsApi->putStockMovementsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Stock Movement Key. | |
| **stockMovements** | [**\SynergiTech\Sage\Model\PutStockMovements**](../Model/PutStockMovements.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\StockMovement**](../Model/StockMovement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
