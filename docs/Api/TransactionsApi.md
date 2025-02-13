# Swagger\Client\TransactionsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactions**](TransactionsApi.md#getTransactions) | **GET** /transactions | Returns all Transactions
[**getTransactionsKey**](TransactionsApi.md#getTransactionsKey) | **GET** /transactions/{key} | Returns a Transaction


# **getTransactions**
> \Swagger\Client\Model\TransactionArray getTransactions($updated_or_created_since, $from_date, $to_date, $updated_from_date, $updated_to_date, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $transaction_type_id)

Returns all Transactions

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

$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Transactions changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Transactions dates
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Transactions dates
$updated_from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter Transactions by the date they were last updated
$updated_to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter Transactions by the date they were last updated
$has_attachments = true; // bool | Use this to filter Transactions by whether they have attachments or not
$show_legacy_id = true; // bool | Display the legacy_id for the Transactions.
$items_per_page = 20; // int | Format - int32. Returns the given number of Transactions per request.
$page = 1; // int | Format - int32. Go to specific page of Transactions
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Transactions (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$transaction_type_id = "transaction_type_id_example"; // string | Use this to filter by transaction type id

try {
    $result = $apiInstance->getTransactions($updated_or_created_since, $from_date, $to_date, $updated_from_date, $updated_to_date, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $transaction_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Transactions changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Transactions dates | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Transactions dates | [optional]
 **updated_from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter Transactions by the date they were last updated | [optional]
 **updated_to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter Transactions by the date they were last updated | [optional]
 **has_attachments** | **bool**| Use this to filter Transactions by whether they have attachments or not | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Transactions. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Transactions per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Transactions | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Transactions (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **transaction_type_id** | **string**| Use this to filter by transaction type id | [optional]

### Return type

[**\Swagger\Client\Model\TransactionArray**](../Model/TransactionArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionsKey**
> \Swagger\Client\Model\Transaction getTransactionsKey($key, $expand_origin, $show_legacy_id, $attributes)

Returns a Transaction

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

$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Transaction Key.
$expand_origin = true; // bool | 
$show_legacy_id = true; // bool | Display the legacy_id for the Transaction.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Transaction (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTransactionsKey($key, $expand_origin, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->getTransactionsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Transaction Key. |
 **expand_origin** | **bool**|  | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Transaction. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Transaction (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

