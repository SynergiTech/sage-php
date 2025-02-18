# SynergiTech\Sage\LedgerAccountOpeningBalancesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteLedgerAccountOpeningBalancesKey()**](LedgerAccountOpeningBalancesApi.md#deleteLedgerAccountOpeningBalancesKey) | **DELETE** /ledger_account_opening_balances/{key} | Deletes a Ledger Account Opening Balance |
| [**getLedgerAccountOpeningBalances()**](LedgerAccountOpeningBalancesApi.md#getLedgerAccountOpeningBalances) | **GET** /ledger_account_opening_balances | Returns all Ledger Account Opening Balances |
| [**getLedgerAccountOpeningBalancesKey()**](LedgerAccountOpeningBalancesApi.md#getLedgerAccountOpeningBalancesKey) | **GET** /ledger_account_opening_balances/{key} | Returns a Ledger Account Opening Balance |
| [**postLedgerAccountOpeningBalances()**](LedgerAccountOpeningBalancesApi.md#postLedgerAccountOpeningBalances) | **POST** /ledger_account_opening_balances | Creates a Ledger Account Opening Balance |
| [**putLedgerAccountOpeningBalancesKey()**](LedgerAccountOpeningBalancesApi.md#putLedgerAccountOpeningBalancesKey) | **PUT** /ledger_account_opening_balances/{key} | Updates a Ledger Account Opening Balance |


## `deleteLedgerAccountOpeningBalancesKey()`

```php
deleteLedgerAccountOpeningBalancesKey($key)
```

Deletes a Ledger Account Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory reporting`, `Products & Services`, and `Reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Ledger Account Opening Balance Key.

try {
    $apiInstance->deleteLedgerAccountOpeningBalancesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->deleteLedgerAccountOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Ledger Account Opening Balance Key. | |

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

## `getLedgerAccountOpeningBalances()`

```php
getLedgerAccountOpeningBalances($updatedOrCreatedSince, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\LedgerAccountOpeningBalance[]
```

Returns all Ledger Account Opening Balances

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory reporting`, `Products & Services`, and `Reporting`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Journal Opening Balance Lines changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$itemsPerPage = 20; // int | Returns the given number of Journal Opening Balance Lines per request.
$page = 1; // int | Go to specific page of Journal Opening Balance Lines
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Opening Balance Lines (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountOpeningBalances($updatedOrCreatedSince, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->getLedgerAccountOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Journal Opening Balance Lines changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Journal Opening Balance Lines per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Journal Opening Balance Lines | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balance Lines (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccountOpeningBalance[]**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerAccountOpeningBalancesKey()`

```php
getLedgerAccountOpeningBalancesKey($key, $attributes): \SynergiTech\Sage\Model\LedgerAccountOpeningBalance
```

Returns a Ledger Account Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory reporting`, `Products & Services`, and `Reporting`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Ledger Account Opening Balance Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Opening Balance Line (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountOpeningBalancesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->getLedgerAccountOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Ledger Account Opening Balance Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balance Line (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccountOpeningBalance**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLedgerAccountOpeningBalances()`

```php
postLedgerAccountOpeningBalances($ledgerAccountOpeningBalances): \SynergiTech\Sage\Model\LedgerAccountOpeningBalance
```

Creates a Ledger Account Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory reporting`, `Products & Services`, and `Reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledgerAccountOpeningBalances = new \SynergiTech\Sage\Model\PostLedgerAccountOpeningBalances(); // \SynergiTech\Sage\Model\PostLedgerAccountOpeningBalances

try {
    $result = $apiInstance->postLedgerAccountOpeningBalances($ledgerAccountOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->postLedgerAccountOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledgerAccountOpeningBalances** | [**\SynergiTech\Sage\Model\PostLedgerAccountOpeningBalances**](../Model/PostLedgerAccountOpeningBalances.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccountOpeningBalance**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putLedgerAccountOpeningBalancesKey()`

```php
putLedgerAccountOpeningBalancesKey($key, $ledgerAccountOpeningBalances): \SynergiTech\Sage\Model\LedgerAccountOpeningBalance
```

Updates a Ledger Account Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory reporting`, `Products & Services`, and `Reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Ledger Account Opening Balance Key.
$ledgerAccountOpeningBalances = new \SynergiTech\Sage\Model\PutLedgerAccountOpeningBalances(); // \SynergiTech\Sage\Model\PutLedgerAccountOpeningBalances

try {
    $result = $apiInstance->putLedgerAccountOpeningBalancesKey($key, $ledgerAccountOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->putLedgerAccountOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Ledger Account Opening Balance Key. | |
| **ledgerAccountOpeningBalances** | [**\SynergiTech\Sage\Model\PutLedgerAccountOpeningBalances**](../Model/PutLedgerAccountOpeningBalances.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccountOpeningBalance**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
