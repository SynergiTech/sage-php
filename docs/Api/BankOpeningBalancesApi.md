# SynergiTech\Sage\BankOpeningBalancesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBankOpeningBalancesKey()**](BankOpeningBalancesApi.md#deleteBankOpeningBalancesKey) | **DELETE** /bank_opening_balances/{key} | Deletes a Bank Opening Balance |
| [**getBankOpeningBalances()**](BankOpeningBalancesApi.md#getBankOpeningBalances) | **GET** /bank_opening_balances | Returns all Bank Opening Balances |
| [**getBankOpeningBalancesKey()**](BankOpeningBalancesApi.md#getBankOpeningBalancesKey) | **GET** /bank_opening_balances/{key} | Returns a Bank Opening Balance |
| [**postBankOpeningBalances()**](BankOpeningBalancesApi.md#postBankOpeningBalances) | **POST** /bank_opening_balances | Creates a Bank Opening Balance |
| [**putBankOpeningBalancesKey()**](BankOpeningBalancesApi.md#putBankOpeningBalancesKey) | **PUT** /bank_opening_balances/{key} | Updates a Bank Opening Balance |


## `deleteBankOpeningBalancesKey()`

```php
deleteBankOpeningBalancesKey($key)
```

Deletes a Bank Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings` and `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Opening Balance Key.

try {
    $apiInstance->deleteBankOpeningBalancesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling BankOpeningBalancesApi->deleteBankOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Opening Balance Key. | |

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

## `getBankOpeningBalances()`

```php
getBankOpeningBalances($updatedOrCreatedSince, $bankAccountId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\BankOpeningBalance[]
```

Returns all Bank Opening Balances

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings` and `Bank`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Bank Opening Balances changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$bankAccountId = 'bankAccountId_example'; // string | Use this to filter by bank account id
$itemsPerPage = 20; // int | Returns the given number of Bank Opening Balances per request.
$page = 1; // int | Go to specific page of Bank Opening Balances
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Bank Opening Balances (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBankOpeningBalances($updatedOrCreatedSince, $bankAccountId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankOpeningBalancesApi->getBankOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Bank Opening Balances changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **bankAccountId** | **string**| Use this to filter by bank account id | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Bank Opening Balances per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Bank Opening Balances | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Bank Opening Balances (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankOpeningBalance[]**](../Model/BankOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankOpeningBalancesKey()`

```php
getBankOpeningBalancesKey($key, $attributes): \SynergiTech\Sage\Model\BankOpeningBalance
```

Returns a Bank Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings` and `Bank`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Opening Balance Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Bank Opening Balance (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBankOpeningBalancesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankOpeningBalancesApi->getBankOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Opening Balance Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Bank Opening Balance (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankOpeningBalance**](../Model/BankOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBankOpeningBalances()`

```php
postBankOpeningBalances($bankOpeningBalances): \SynergiTech\Sage\Model\BankOpeningBalance
```

Creates a Bank Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings` and `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankOpeningBalances = new \SynergiTech\Sage\Model\PostBankOpeningBalances(); // \SynergiTech\Sage\Model\PostBankOpeningBalances

try {
    $result = $apiInstance->postBankOpeningBalances($bankOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankOpeningBalancesApi->postBankOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankOpeningBalances** | [**\SynergiTech\Sage\Model\PostBankOpeningBalances**](../Model/PostBankOpeningBalances.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BankOpeningBalance**](../Model/BankOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBankOpeningBalancesKey()`

```php
putBankOpeningBalancesKey($key, $bankOpeningBalances): \SynergiTech\Sage\Model\BankOpeningBalance
```

Updates a Bank Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings` and `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Opening Balance Key.
$bankOpeningBalances = new \SynergiTech\Sage\Model\PutBankOpeningBalances(); // \SynergiTech\Sage\Model\PutBankOpeningBalances

try {
    $result = $apiInstance->putBankOpeningBalancesKey($key, $bankOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankOpeningBalancesApi->putBankOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Opening Balance Key. | |
| **bankOpeningBalances** | [**\SynergiTech\Sage\Model\PutBankOpeningBalances**](../Model/PutBankOpeningBalances.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BankOpeningBalance**](../Model/BankOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
