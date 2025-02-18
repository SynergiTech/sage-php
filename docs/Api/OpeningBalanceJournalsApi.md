# SynergiTech\Sage\OpeningBalanceJournalsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOpeningBalanceJournalsKey()**](OpeningBalanceJournalsApi.md#deleteOpeningBalanceJournalsKey) | **DELETE** /opening_balance_journals/{key} | Deletes a Opening Balance Journal |
| [**getOpeningBalanceJournals()**](OpeningBalanceJournalsApi.md#getOpeningBalanceJournals) | **GET** /opening_balance_journals | Returns all Opening Balance Journals |
| [**getOpeningBalanceJournalsKey()**](OpeningBalanceJournalsApi.md#getOpeningBalanceJournalsKey) | **GET** /opening_balance_journals/{key} | Returns a Opening Balance Journal |
| [**postOpeningBalanceJournals()**](OpeningBalanceJournalsApi.md#postOpeningBalanceJournals) | **POST** /opening_balance_journals | Creates a Opening Balance Journal |


## `deleteOpeningBalanceJournalsKey()`

```php
deleteOpeningBalanceJournalsKey($key)
```

Deletes a Opening Balance Journal

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory reporting`, `Products & Services`, and `Reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\OpeningBalanceJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Opening Balance Journal Key.

try {
    $apiInstance->deleteOpeningBalanceJournalsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalanceJournalsApi->deleteOpeningBalanceJournalsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Opening Balance Journal Key. | |

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

## `getOpeningBalanceJournals()`

```php
getOpeningBalanceJournals($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\OpeningBalanceJournal[]
```

Returns all Opening Balance Journals

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory reporting`, `Products & Services`, and `Reporting`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\OpeningBalanceJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Journal Opening Balances per request.
$page = 1; // int | Go to specific page of Journal Opening Balances
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Opening Balances (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getOpeningBalanceJournals($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalanceJournalsApi->getOpeningBalanceJournals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Journal Opening Balances per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Journal Opening Balances | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balances (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\OpeningBalanceJournal[]**](../Model/OpeningBalanceJournal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpeningBalanceJournalsKey()`

```php
getOpeningBalanceJournalsKey($key, $attributes): \SynergiTech\Sage\Model\OpeningBalanceJournal
```

Returns a Opening Balance Journal

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory reporting`, `Products & Services`, and `Reporting`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\OpeningBalanceJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Opening Balance Journal Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Journal Opening Balance (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getOpeningBalanceJournalsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalanceJournalsApi->getOpeningBalanceJournalsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Opening Balance Journal Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balance (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\OpeningBalanceJournal**](../Model/OpeningBalanceJournal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOpeningBalanceJournals()`

```php
postOpeningBalanceJournals($openingBalanceJournals): \SynergiTech\Sage\Model\OpeningBalanceJournal
```

Creates a Opening Balance Journal

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory reporting`, `Products & Services`, and `Reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\OpeningBalanceJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$openingBalanceJournals = new \SynergiTech\Sage\Model\PostOpeningBalanceJournals(); // \SynergiTech\Sage\Model\PostOpeningBalanceJournals

try {
    $result = $apiInstance->postOpeningBalanceJournals($openingBalanceJournals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalanceJournalsApi->postOpeningBalanceJournals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **openingBalanceJournals** | [**\SynergiTech\Sage\Model\PostOpeningBalanceJournals**](../Model/PostOpeningBalanceJournals.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\OpeningBalanceJournal**](../Model/OpeningBalanceJournal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
