# SynergiTech\Sage\ExchangeRatesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getExchangeRates()**](ExchangeRatesApi.md#getExchangeRates) | **GET** /exchange_rates | Returns all Exchange Rates |
| [**getExchangeRatesKey()**](ExchangeRatesApi.md#getExchangeRatesKey) | **GET** /exchange_rates/{key} | Returns a Exchange Rate |


## `getExchangeRates()`

```php
getExchangeRates($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\ExchangeRate[]
```

Returns all Exchange Rates

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ExchangeRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Currencies per request.
$page = 1; // int | Go to specific page of Currencies
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Currencies (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getExchangeRates($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeRatesApi->getExchangeRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Currencies per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Currencies | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Currencies (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ExchangeRate[]**](../Model/ExchangeRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeRatesKey()`

```php
getExchangeRatesKey($key, $attributes): \SynergiTech\Sage\Model\ExchangeRate
```

Returns a Exchange Rate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ExchangeRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Exchange Rate Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Currency (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getExchangeRatesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExchangeRatesApi->getExchangeRatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Exchange Rate Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Currency (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ExchangeRate**](../Model/ExchangeRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
