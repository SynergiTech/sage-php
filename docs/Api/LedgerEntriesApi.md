# SynergiTech\Sage\LedgerEntriesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLedgerEntries()**](LedgerEntriesApi.md#getLedgerEntries) | **GET** /ledger_entries | Returns all Ledger Entries |
| [**getLedgerEntriesKey()**](LedgerEntriesApi.md#getLedgerEntriesKey) | **GET** /ledger_entries/{key} | Returns a Ledger Entry |


## `getLedgerEntries()`

```php
getLedgerEntries($fromDate, $toDate, $transactionId, $transactionTypeId, $journalCodeId, $updatedOrCreatedSince, $showLegacyId, $itemsPerPage, $page, $attributes, $ledgerAccountId): \SynergiTech\Sage\Model\LedgerEntry[]
```

Returns all Ledger Entries

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Journals`: Read Only, Full Access

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


$apiInstance = new SynergiTech\Sage\Api\LedgerEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Ledger Entries dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Ledger Entries dates
$transactionId = 'transactionId_example'; // string | Use this to filter by transaction id
$transactionTypeId = 'transactionTypeId_example'; // string | Use this to filter by transaction type id
$journalCodeId = 'journalCodeId_example'; // string | Use this to filter by journal code id
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Ledger Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$showLegacyId = True; // bool | Display the legacy_id for the Ledger Entries.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Ledger Entries per request.
$page = 1; // int | Format - int32. Go to specific page of Ledger Entries
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Ledger Entries (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$ledgerAccountId = 'ledgerAccountId_example'; // string | Use this to filter by ledger account id

try {
    $result = $apiInstance->getLedgerEntries($fromDate, $toDate, $transactionId, $transactionTypeId, $journalCodeId, $updatedOrCreatedSince, $showLegacyId, $itemsPerPage, $page, $attributes, $ledgerAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerEntriesApi->getLedgerEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Ledger Entries dates | [optional] |
| **toDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Ledger Entries dates | [optional] |
| **transactionId** | **string**| Use this to filter by transaction id | [optional] |
| **transactionTypeId** | **string**| Use this to filter by transaction type id | [optional] |
| **journalCodeId** | **string**| Use this to filter by journal code id | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Ledger Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Ledger Entries. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Ledger Entries per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Ledger Entries | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Entries (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **ledgerAccountId** | **string**| Use this to filter by ledger account id | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerEntry[]**](../Model/LedgerEntry.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLedgerEntriesKey()`

```php
getLedgerEntriesKey($key, $nestedAttributes, $showLegacyId, $attributes): \SynergiTech\Sage\Model\LedgerEntry
```

Returns a Ledger Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Journals`: Read Only, Full Access

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


$apiInstance = new SynergiTech\Sage\Api\LedgerEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Ledger Entry Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Ledger Entry (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showLegacyId = True; // bool | Display the legacy_id for the Ledger Entry.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Ledger Entry (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerEntriesKey($key, $nestedAttributes, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerEntriesApi->getLedgerEntriesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Ledger Entry Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Ledger Entry (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Ledger Entry. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Entry (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\LedgerEntry**](../Model/LedgerEntry.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
