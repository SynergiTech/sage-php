# SynergiTech\Sage\LedgerAccountsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLedgerAccounts()**](LedgerAccountsApi.md#getLedgerAccounts) | **GET** /ledger_accounts | Returns all Ledger Accounts |
| [**getLedgerAccountsKey()**](LedgerAccountsApi.md#getLedgerAccountsKey) | **GET** /ledger_accounts/{key} | Returns a Ledger Account |
| [**postLedgerAccounts()**](LedgerAccountsApi.md#postLedgerAccounts) | **POST** /ledger_accounts | Creates a Ledger Account |
| [**putLedgerAccountsKey()**](LedgerAccountsApi.md#putLedgerAccountsKey) | **PUT** /ledger_accounts/{key} | Updates a Ledger Account |


## `getLedgerAccounts()`

```php
getLedgerAccounts($updatedOrCreatedSince, $visibleIn, $notVisibleIn, $showIncludedInChart, $showControlAccounts, $ledgerAccountClassificationId, $showBalanceDetails, $excludeDeletedEntries, $fromDate, $toDate, $search, $sortOrderFromUserSetting, $filterInactiveBankAccounts, $itemsPerPage, $page, $attributes, $ledgerAccountTypeId): \SynergiTech\Sage\Model\LedgerAccount[]
```

Returns all Ledger Accounts

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Full Access, Restricted Access, Read Only * Area: `Purchases`: Full Access, Restricted Access, Read Only * Area: `Products & Services`: Full Access, Restricted Access, Read Only * Area: `Contacts`: Full Access, Restricted Access, Read Only * Area: `Bank`: Full Access, Restricted Access, Read Only * Area: `Journals`: Full Access, Restricted Access, Read Only * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\LedgerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Ledger Accounts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$visibleIn = 'visibleIn_example'; // string | Use this to limit the response to ledger account types visible in a specific area. Valid values are: banking, sales, expenses, other_payments, other_receipts, journals and reporting
$notVisibleIn = 'notVisibleIn_example'; // string | Use this to limit the response to ledger account types not visible in a specific area.
$showIncludedInChart = True; // bool | Use this to limit the response to ledger accounts that are/are not included in the chart
$showControlAccounts = True; // bool | Use this to limit the response to ledger accounts that are/are not control accounts
$ledgerAccountClassificationId = 'ledgerAccountClassificationId_example'; // string | Use this to filter by ledger account classification id
$showBalanceDetails = True; // bool | Use this to display the balance details for ledger accounts between a date range (requires from_date and to_date).
$excludeDeletedEntries = True; // bool | Exclude deleted ledger entries.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Calculate balances from this date.
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Calculate balances to this date.
$search = 'search_example'; // string | Use this to filter by the item code or description
$sortOrderFromUserSetting = True; // bool | Use this to enable ordering ledger accounts according to user settings. Defaulted to 'false'.
$filterInactiveBankAccounts = True; // bool | Use this to filter inactive bank accounts
$itemsPerPage = 20; // int | Returns the given number of Ledger Accounts per request.
$page = 1; // int | Go to specific page of Ledger Accounts
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Ledger Accounts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$ledgerAccountTypeId = 'ledgerAccountTypeId_example'; // string | Use this to filter by ledger account type id

try {
    $result = $apiInstance->getLedgerAccounts($updatedOrCreatedSince, $visibleIn, $notVisibleIn, $showIncludedInChart, $showControlAccounts, $ledgerAccountClassificationId, $showBalanceDetails, $excludeDeletedEntries, $fromDate, $toDate, $search, $sortOrderFromUserSetting, $filterInactiveBankAccounts, $itemsPerPage, $page, $attributes, $ledgerAccountTypeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountsApi->getLedgerAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Ledger Accounts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **visibleIn** | **string**| Use this to limit the response to ledger account types visible in a specific area. Valid values are: banking, sales, expenses, other_payments, other_receipts, journals and reporting | [optional] |
| **notVisibleIn** | **string**| Use this to limit the response to ledger account types not visible in a specific area. | [optional] |
| **showIncludedInChart** | **bool**| Use this to limit the response to ledger accounts that are/are not included in the chart | [optional] |
| **showControlAccounts** | **bool**| Use this to limit the response to ledger accounts that are/are not control accounts | [optional] |
| **ledgerAccountClassificationId** | **string**| Use this to filter by ledger account classification id | [optional] |
| **showBalanceDetails** | **bool**| Use this to display the balance details for ledger accounts between a date range (requires from_date and to_date). | [optional] |
| **excludeDeletedEntries** | **bool**| Exclude deleted ledger entries. | [optional] |
| **fromDate** | **\DateTime**| Calculate balances from this date. | [optional] |
| **toDate** | **\DateTime**| Calculate balances to this date. | [optional] |
| **search** | **string**| Use this to filter by the item code or description | [optional] |
| **sortOrderFromUserSetting** | **bool**| Use this to enable ordering ledger accounts according to user settings. Defaulted to &#39;false&#39;. | [optional] |
| **filterInactiveBankAccounts** | **bool**| Use this to filter inactive bank accounts | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Ledger Accounts per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Ledger Accounts | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Accounts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **ledgerAccountTypeId** | **string**| Use this to filter by ledger account type id | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccount[]**](../Model/LedgerAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerAccountsKey()`

```php
getLedgerAccountsKey($key, $nestedAttributes, $showBalanceDetails, $excludeDeletedEntries, $fromDate, $toDate, $attributes): \SynergiTech\Sage\Model\LedgerAccount
```

Returns a Ledger Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Full Access, Restricted Access, Read Only * Area: `Purchases`: Full Access, Restricted Access, Read Only * Area: `Products & Services`: Full Access, Restricted Access, Read Only * Area: `Contacts`: Full Access, Restricted Access, Read Only * Area: `Bank`: Full Access, Restricted Access, Read Only * Area: `Journals`: Full Access, Restricted Access, Read Only * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\LedgerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Ledger Account Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Ledger Account (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showBalanceDetails = True; // bool | Use this to display the balance details for ledger accounts between a date range (requires from_date and to_date).
$excludeDeletedEntries = True; // bool | Exclude deleted ledger entries.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Calculate balances from this date.
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Calculate balances to this date.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Ledger Account (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountsKey($key, $nestedAttributes, $showBalanceDetails, $excludeDeletedEntries, $fromDate, $toDate, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountsApi->getLedgerAccountsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Ledger Account Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Ledger Account (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showBalanceDetails** | **bool**| Use this to display the balance details for ledger accounts between a date range (requires from_date and to_date). | [optional] |
| **excludeDeletedEntries** | **bool**| Exclude deleted ledger entries. | [optional] |
| **fromDate** | **\DateTime**| Calculate balances from this date. | [optional] |
| **toDate** | **\DateTime**| Calculate balances to this date. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Account (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccount**](../Model/LedgerAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLedgerAccounts()`

```php
postLedgerAccounts($ledgerAccounts): \SynergiTech\Sage\Model\LedgerAccount
```

Creates a Ledger Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\LedgerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ledgerAccounts = new \SynergiTech\Sage\Model\PostLedgerAccounts(); // \SynergiTech\Sage\Model\PostLedgerAccounts

try {
    $result = $apiInstance->postLedgerAccounts($ledgerAccounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountsApi->postLedgerAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ledgerAccounts** | [**\SynergiTech\Sage\Model\PostLedgerAccounts**](../Model/PostLedgerAccounts.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccount**](../Model/LedgerAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putLedgerAccountsKey()`

```php
putLedgerAccountsKey($key, $ledgerAccounts): \SynergiTech\Sage\Model\LedgerAccount
```

Updates a Ledger Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\LedgerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Ledger Account Key.
$ledgerAccounts = new \SynergiTech\Sage\Model\PutLedgerAccounts(); // \SynergiTech\Sage\Model\PutLedgerAccounts

try {
    $result = $apiInstance->putLedgerAccountsKey($key, $ledgerAccounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountsApi->putLedgerAccountsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Ledger Account Key. | |
| **ledgerAccounts** | [**\SynergiTech\Sage\Model\PutLedgerAccounts**](../Model/PutLedgerAccounts.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\LedgerAccount**](../Model/LedgerAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
