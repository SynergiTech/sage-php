# SynergiTech\Sage\TransactionsApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTransactions()**](TransactionsApi.md#getTransactions) | **GET** /transactions | Returns all Transactions |
| [**getTransactionsKey()**](TransactionsApi.md#getTransactionsKey) | **GET** /transactions/{key} | Returns a Transaction |


## `getTransactions()`

```php
getTransactions($updatedOrCreatedSince, $fromDate, $toDate, $updatedFromDate, $updatedToDate, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes, $transactionTypeId): \SynergiTech\Sage\Model\Transaction[]
```

Returns all Transactions

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


$apiInstance = new SynergiTech\Sage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Transactions changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Transactions dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Transactions dates
$updatedFromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter Transactions by the date they were last updated
$updatedToDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter Transactions by the date they were last updated
$hasAttachments = True; // bool | Use this to filter Transactions by whether they have attachments or not
$showLegacyId = True; // bool | Display the legacy_id for the Transactions.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Transactions per request.
$page = 1; // int | Format - int32. Go to specific page of Transactions
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Transactions (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$transactionTypeId = 'transactionTypeId_example'; // string | Use this to filter by transaction type id

try {
    $result = $apiInstance->getTransactions($updatedOrCreatedSince, $fromDate, $toDate, $updatedFromDate, $updatedToDate, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes, $transactionTypeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Transactions changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **fromDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Transactions dates | [optional] |
| **toDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Transactions dates | [optional] |
| **updatedFromDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter Transactions by the date they were last updated | [optional] |
| **updatedToDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter Transactions by the date they were last updated | [optional] |
| **hasAttachments** | **bool**| Use this to filter Transactions by whether they have attachments or not | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Transactions. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Transactions per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Transactions | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Transactions (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **transactionTypeId** | **string**| Use this to filter by transaction type id | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsKey()`

```php
getTransactionsKey($key, $expandOrigin, $showLegacyId, $attributes): \SynergiTech\Sage\Model\Transaction
```

Returns a Transaction

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


$apiInstance = new SynergiTech\Sage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Transaction Key.
$expandOrigin = True; // bool
$showLegacyId = True; // bool | Display the legacy_id for the Transaction.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Transaction (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTransactionsKey($key, $expandOrigin, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Transaction Key. | |
| **expandOrigin** | **bool**|  | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Transaction. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Transaction (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Transaction**](../Model/Transaction.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
