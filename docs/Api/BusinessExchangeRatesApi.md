# SynergiTech\Sage\BusinessExchangeRatesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBusinessExchangeRatesKey()**](BusinessExchangeRatesApi.md#deleteBusinessExchangeRatesKey) | **DELETE** /business_exchange_rates/{key} | Deletes a Business Exchange Rate |
| [**getBusinessExchangeRates()**](BusinessExchangeRatesApi.md#getBusinessExchangeRates) | **GET** /business_exchange_rates | Returns all Business Exchange Rates |
| [**getBusinessExchangeRatesKey()**](BusinessExchangeRatesApi.md#getBusinessExchangeRatesKey) | **GET** /business_exchange_rates/{key} | Returns a Business Exchange Rate |
| [**postBusinessExchangeRates()**](BusinessExchangeRatesApi.md#postBusinessExchangeRates) | **POST** /business_exchange_rates | Creates a Business Exchange Rate |
| [**putBusinessExchangeRatesKey()**](BusinessExchangeRatesApi.md#putBusinessExchangeRatesKey) | **PUT** /business_exchange_rates/{key} | Updates a Business Exchange Rate |


## `deleteBusinessExchangeRatesKey()`

```php
deleteBusinessExchangeRatesKey($key)
```

Deletes a Business Exchange Rate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BusinessExchangeRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Business Exchange Rate Key.

try {
    $apiInstance->deleteBusinessExchangeRatesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling BusinessExchangeRatesApi->deleteBusinessExchangeRatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Business Exchange Rate Key. | |

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

## `getBusinessExchangeRates()`

```php
getBusinessExchangeRates($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\BusinessExchangeRate[]
```

Returns all Business Exchange Rates

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BusinessExchangeRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Business Exchange Rates per request.
$page = 1; // int | Go to specific page of Business Exchange Rates
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Business Exchange Rates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBusinessExchangeRates($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessExchangeRatesApi->getBusinessExchangeRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Business Exchange Rates per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Business Exchange Rates | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Business Exchange Rates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BusinessExchangeRate[]**](../Model/BusinessExchangeRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessExchangeRatesKey()`

```php
getBusinessExchangeRatesKey($key, $attributes): \SynergiTech\Sage\Model\BusinessExchangeRate
```

Returns a Business Exchange Rate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BusinessExchangeRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Business Exchange Rate Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Business Exchange Rate (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBusinessExchangeRatesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessExchangeRatesApi->getBusinessExchangeRatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Business Exchange Rate Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Business Exchange Rate (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BusinessExchangeRate**](../Model/BusinessExchangeRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBusinessExchangeRates()`

```php
postBusinessExchangeRates($businessExchangeRates): \SynergiTech\Sage\Model\BusinessExchangeRate
```

Creates a Business Exchange Rate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BusinessExchangeRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$businessExchangeRates = new \SynergiTech\Sage\Model\PostBusinessExchangeRates(); // \SynergiTech\Sage\Model\PostBusinessExchangeRates

try {
    $result = $apiInstance->postBusinessExchangeRates($businessExchangeRates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessExchangeRatesApi->postBusinessExchangeRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **businessExchangeRates** | [**\SynergiTech\Sage\Model\PostBusinessExchangeRates**](../Model/PostBusinessExchangeRates.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BusinessExchangeRate**](../Model/BusinessExchangeRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBusinessExchangeRatesKey()`

```php
putBusinessExchangeRatesKey($key, $businessExchangeRates): \SynergiTech\Sage\Model\BusinessExchangeRate
```

Updates a Business Exchange Rate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BusinessExchangeRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Business Exchange Rate Key.
$businessExchangeRates = new \SynergiTech\Sage\Model\PutBusinessExchangeRates(); // \SynergiTech\Sage\Model\PutBusinessExchangeRates

try {
    $result = $apiInstance->putBusinessExchangeRatesKey($key, $businessExchangeRates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessExchangeRatesApi->putBusinessExchangeRatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Business Exchange Rate Key. | |
| **businessExchangeRates** | [**\SynergiTech\Sage\Model\PutBusinessExchangeRates**](../Model/PutBusinessExchangeRates.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BusinessExchangeRate**](../Model/BusinessExchangeRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
