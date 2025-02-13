# Swagger\Client\LedgerEntriesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLedgerEntries**](LedgerEntriesApi.md#getLedgerEntries) | **GET** /ledger_entries | Returns all Ledger Entries
[**getLedgerEntriesKey**](LedgerEntriesApi.md#getLedgerEntriesKey) | **GET** /ledger_entries/{key} | Returns a Ledger Entry


# **getLedgerEntries**
> \Swagger\Client\Model\LedgerEntryArray getLedgerEntries($from_date, $to_date, $transaction_id, $transaction_type_id, $journal_code_id, $updated_or_created_since, $show_legacy_id, $items_per_page, $page, $attributes, $ledger_account_id)

Returns all Ledger Entries

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Journals`: Read Only, Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LedgerEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Ledger Entries dates
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Ledger Entries dates
$transaction_id = "transaction_id_example"; // string | Use this to filter by transaction id
$transaction_type_id = "transaction_type_id_example"; // string | Use this to filter by transaction type id
$journal_code_id = "journal_code_id_example"; // string | Use this to filter by journal code id
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Ledger Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$show_legacy_id = true; // bool | Display the legacy_id for the Ledger Entries.
$items_per_page = 20; // int | Format - int32. Returns the given number of Ledger Entries per request.
$page = 1; // int | Format - int32. Go to specific page of Ledger Entries
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Ledger Entries (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$ledger_account_id = "ledger_account_id_example"; // string | Use this to filter by ledger account id

try {
    $result = $apiInstance->getLedgerEntries($from_date, $to_date, $transaction_id, $transaction_type_id, $journal_code_id, $updated_or_created_since, $show_legacy_id, $items_per_page, $page, $attributes, $ledger_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerEntriesApi->getLedgerEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Ledger Entries dates | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Ledger Entries dates | [optional]
 **transaction_id** | **string**| Use this to filter by transaction id | [optional]
 **transaction_type_id** | **string**| Use this to filter by transaction type id | [optional]
 **journal_code_id** | **string**| Use this to filter by journal code id | [optional]
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Ledger Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Ledger Entries. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Ledger Entries per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Ledger Entries | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Entries (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **ledger_account_id** | **string**| Use this to filter by ledger account id | [optional]

### Return type

[**\Swagger\Client\Model\LedgerEntryArray**](../Model/LedgerEntryArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerEntriesKey**
> \Swagger\Client\Model\LedgerEntry getLedgerEntriesKey($key, $nested_attributes, $show_legacy_id, $attributes)

Returns a Ledger Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Journals`: Read Only, Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\LedgerEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Ledger Entry Key.
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Ledger Entry (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_legacy_id = true; // bool | Display the legacy_id for the Ledger Entry.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Ledger Entry (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerEntriesKey($key, $nested_attributes, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerEntriesApi->getLedgerEntriesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Ledger Entry Key. |
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Ledger Entry (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Ledger Entry. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Entry (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\LedgerEntry**](../Model/LedgerEntry.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

