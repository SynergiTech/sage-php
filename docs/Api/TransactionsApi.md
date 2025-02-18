# SynergiTech\Sage\TransactionsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTransactions()**](TransactionsApi.md#getTransactions) | **GET** /transactions | Returns all Transactions |
| [**getTransactionsKey()**](TransactionsApi.md#getTransactionsKey) | **GET** /transactions/{key} | Returns a Transaction |


## `getTransactions()`

```php
getTransactions($updatedOrCreatedSince, $fromDate, $toDate, $updatedFromDate, $updatedToDate, $hasAttachments, $itemsPerPage, $page, $attributes, $transactionTypeId): \SynergiTech\Sage\Model\Transaction[]
```

Returns all Transactions

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Journals`: Read Only, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Transactions changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Transactions dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Transactions dates
$updatedFromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter Transactions by the date they were last updated
$updatedToDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter Transactions by the date they were last updated
$hasAttachments = True; // bool | Use this to filter Transactions by whether they have attachments or not
$itemsPerPage = 20; // int | Returns the given number of Transactions per request.
$page = 1; // int | Go to specific page of Transactions
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Transactions (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$transactionTypeId = 'transactionTypeId_example'; // string | Use this to filter by transaction type id

try {
    $result = $apiInstance->getTransactions($updatedOrCreatedSince, $fromDate, $toDate, $updatedFromDate, $updatedToDate, $hasAttachments, $itemsPerPage, $page, $attributes, $transactionTypeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Transactions changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Transactions dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Transactions dates | [optional] |
| **updatedFromDate** | **\DateTime**| Use this to filter Transactions by the date they were last updated | [optional] |
| **updatedToDate** | **\DateTime**| Use this to filter Transactions by the date they were last updated | [optional] |
| **hasAttachments** | **bool**| Use this to filter Transactions by whether they have attachments or not | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Transactions per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Transactions | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Transactions (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **transactionTypeId** | **string**| Use this to filter by transaction type id | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Transaction[]**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsKey()`

```php
getTransactionsKey($key, $expandOrigin, $attributes): \SynergiTech\Sage\Model\Transaction
```

Returns a Transaction

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Journals`: Read Only, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Transaction Key.
$expandOrigin = True; // bool
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Transaction (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTransactionsKey($key, $expandOrigin, $attributes);
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
| **attributes** | **string**| Specify the attributes that you want to expose for the Transaction (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
