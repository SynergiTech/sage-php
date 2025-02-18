# SynergiTech\Sage\TransactionTypesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTransactionTypes()**](TransactionTypesApi.md#getTransactionTypes) | **GET** /transaction_types | Returns all Transaction Types |
| [**getTransactionTypesKey()**](TransactionTypesApi.md#getTransactionTypesKey) | **GET** /transaction_types/{key} | Returns a Transaction Type |


## `getTransactionTypes()`

```php
getTransactionTypes($validForBusiness, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\Base[]
```

Returns all Transaction Types

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TransactionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$validForBusiness = True; // bool | Use this to filter the transaction types to a business's locale and service
$itemsPerPage = 20; // int | Returns the given number of Transaction Types per request.
$page = 1; // int | Go to specific page of Transaction Types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Transaction Types (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTransactionTypes($validForBusiness, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionTypesApi->getTransactionTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validForBusiness** | **bool**| Use this to filter the transaction types to a business&#39;s locale and service | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Transaction Types per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Transaction Types | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Transaction Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

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

## `getTransactionTypesKey()`

```php
getTransactionTypesKey($key, $attributes): \SynergiTech\Sage\Model\Base
```

Returns a Transaction Type

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TransactionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Transaction Type Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Transaction Type (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTransactionTypesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionTypesApi->getTransactionTypesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Transaction Type Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Transaction Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

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
