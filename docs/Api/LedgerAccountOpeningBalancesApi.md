# SynergiTech\Sage\LedgerAccountOpeningBalancesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

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

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory Reporting`, `Products & Services`, and `Reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerAccountOpeningBalances()`

```php
getLedgerAccountOpeningBalances($updatedOrCreatedSince, $showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\LedgerAccountOpeningBalance[]
```

Returns all Ledger Account Opening Balances

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory Reporting`, `Products & Services`, and `Reporting`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Journal Opening Balance Lines changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$showLegacyId = True; // bool | Display the legacy_id for the Journal Opening Balance Lines.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Journal Opening Balance Lines per request.
$page = 1; // int | Format - int32. Go to specific page of Journal Opening Balance Lines
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Opening Balance Lines (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountOpeningBalances($updatedOrCreatedSince, $showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->getLedgerAccountOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Journal Opening Balance Lines changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Journal Opening Balance Lines. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Journal Opening Balance Lines per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Journal Opening Balance Lines | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balance Lines (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccountOpeningBalance[]**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerAccountOpeningBalancesKey()`

```php
getLedgerAccountOpeningBalancesKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\LedgerAccountOpeningBalance
```

Returns a Ledger Account Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory Reporting`, `Products & Services`, and `Reporting`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Ledger Account Opening Balance Key.
$showLegacyId = True; // bool | Display the legacy_id for the Journal Opening Balance Line.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Opening Balance Line (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountOpeningBalancesKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->getLedgerAccountOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Ledger Account Opening Balance Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Journal Opening Balance Line. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balance Line (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccountOpeningBalance**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLedgerAccountOpeningBalances()`

```php
postLedgerAccountOpeningBalances($postLedgerAccountOpeningBalances): \SynergiTech\Sage\Model\LedgerAccountOpeningBalance
```

Creates a Ledger Account Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory Reporting`, `Products & Services`, and `Reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postLedgerAccountOpeningBalances = new \SynergiTech\Sage\Model\PostLedgerAccountOpeningBalances(); // \SynergiTech\Sage\Model\PostLedgerAccountOpeningBalances

try {
    $result = $apiInstance->postLedgerAccountOpeningBalances($postLedgerAccountOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->postLedgerAccountOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postLedgerAccountOpeningBalances** | [**\SynergiTech\Sage\Model\PostLedgerAccountOpeningBalances**](../Model/PostLedgerAccountOpeningBalances.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccountOpeningBalance**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putLedgerAccountOpeningBalancesKey()`

```php
putLedgerAccountOpeningBalancesKey($key, $putLedgerAccountOpeningBalances): \SynergiTech\Sage\Model\LedgerAccountOpeningBalance
```

Updates a Ledger Account Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory Reporting`, `Products & Services`, and `Reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Ledger Account Opening Balance Key.
$putLedgerAccountOpeningBalances = new \SynergiTech\Sage\Model\PutLedgerAccountOpeningBalances(); // \SynergiTech\Sage\Model\PutLedgerAccountOpeningBalances

try {
    $result = $apiInstance->putLedgerAccountOpeningBalancesKey($key, $putLedgerAccountOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->putLedgerAccountOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Ledger Account Opening Balance Key. | |
| **putLedgerAccountOpeningBalances** | [**\SynergiTech\Sage\Model\PutLedgerAccountOpeningBalances**](../Model/PutLedgerAccountOpeningBalances.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccountOpeningBalance**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
