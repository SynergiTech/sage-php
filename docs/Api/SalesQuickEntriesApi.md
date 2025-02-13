# Swagger\Client\SalesQuickEntriesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSalesQuickEntriesKey**](SalesQuickEntriesApi.md#deleteSalesQuickEntriesKey) | **DELETE** /sales_quick_entries/{key} | Deletes a Sales Quick Entry
[**getSalesQuickEntries**](SalesQuickEntriesApi.md#getSalesQuickEntries) | **GET** /sales_quick_entries | Returns all Sales Quick Entries
[**getSalesQuickEntriesKey**](SalesQuickEntriesApi.md#getSalesQuickEntriesKey) | **GET** /sales_quick_entries/{key} | Returns a Sales Quick Entry
[**postSalesQuickEntries**](SalesQuickEntriesApi.md#postSalesQuickEntries) | **POST** /sales_quick_entries | Creates a Sales Quick Entry
[**putSalesQuickEntriesKey**](SalesQuickEntriesApi.md#putSalesQuickEntriesKey) | **PUT** /sales_quick_entries/{key} | Updates a Sales Quick Entry


# **deleteSalesQuickEntriesKey**
> deleteSalesQuickEntriesKey($key)

Deletes a Sales Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

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

$apiInstance = new Swagger\Client\Api\SalesQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Sales Quick Entry Key.

try {
    $apiInstance->deleteSalesQuickEntriesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuickEntriesApi->deleteSalesQuickEntriesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Sales Quick Entry Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesQuickEntries**
> \Swagger\Client\Model\QuickEntryArray getSalesQuickEntries($contact_id, $search, $status_id, $from_date, $to_date, $updated_or_created_since, $deleted_since, $show_payments_allocations, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $sort)

Returns all Sales Quick Entries

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$search = "search_example"; // string | Use this to filter by the quick entry reference or contact name.
$status_id = "status_id_example"; // string | Use this to filter by status id
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Batch Entries dates
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Batch Entries dates
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deleted_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$show_payments_allocations = true; // bool | Use this to show the artefact's payments and allocations
$has_attachments = true; // bool | Use this to filter Sales Batch Entries by whether they have attachments or not
$show_legacy_id = true; // bool | Display the legacy_id for the Sales Batch Entries.
$items_per_page = 20; // int | Format - int32. Returns the given number of Sales Batch Entries per request.
$page = 1; // int | Format - int32. Go to specific page of Sales Batch Entries
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Sales Batch Entries (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = "sort_example"; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getSalesQuickEntries($contact_id, $search, $status_id, $from_date, $to_date, $updated_or_created_since, $deleted_since, $show_payments_allocations, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuickEntriesApi->getSalesQuickEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **string**| Use this to filter by contact id | [optional]
 **search** | **string**| Use this to filter by the quick entry reference or contact name. | [optional]
 **status_id** | **string**| Use this to filter by status id | [optional]
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Batch Entries dates | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Batch Entries dates | [optional]
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **deleted_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional]
 **show_payments_allocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional]
 **has_attachments** | **bool**| Use this to filter Sales Batch Entries by whether they have attachments or not | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Sales Batch Entries. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Sales Batch Entries per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Sales Batch Entries | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Sales Batch Entries (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\QuickEntryArray**](../Model/QuickEntryArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesQuickEntriesKey**
> \Swagger\Client\Model\QuickEntry getSalesQuickEntriesKey($key, $show_payments_allocations, $nested_attributes, $show_legacy_id, $attributes)

Returns a Sales Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Sales Quick Entry Key.
$show_payments_allocations = true; // bool | Use this to show the artefact's payments and allocations
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Sales Batch Entry (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_legacy_id = true; // bool | Display the legacy_id for the Sales Batch Entry.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Sales Batch Entry (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesQuickEntriesKey($key, $show_payments_allocations, $nested_attributes, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuickEntriesApi->getSalesQuickEntriesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Sales Quick Entry Key. |
 **show_payments_allocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional]
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Sales Batch Entry (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Sales Batch Entry. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Sales Batch Entry (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\QuickEntry**](../Model/QuickEntry.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSalesQuickEntries**
> \Swagger\Client\Model\QuickEntry postSalesQuickEntries($post_sales_quick_entries)

Creates a Sales Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_sales_quick_entries = new \Swagger\Client\Model\PostSalesQuickEntries(); // \Swagger\Client\Model\PostSalesQuickEntries | 

try {
    $result = $apiInstance->postSalesQuickEntries($post_sales_quick_entries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuickEntriesApi->postSalesQuickEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_sales_quick_entries** | [**\Swagger\Client\Model\PostSalesQuickEntries**](../Model/PostSalesQuickEntries.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\QuickEntry**](../Model/QuickEntry.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSalesQuickEntriesKey**
> \Swagger\Client\Model\QuickEntry putSalesQuickEntriesKey($key, $put_sales_quick_entries)

Updates a Sales Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Sales Quick Entry Key.
$put_sales_quick_entries = new \Swagger\Client\Model\PutSalesQuickEntries(); // \Swagger\Client\Model\PutSalesQuickEntries | 

try {
    $result = $apiInstance->putSalesQuickEntriesKey($key, $put_sales_quick_entries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuickEntriesApi->putSalesQuickEntriesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Sales Quick Entry Key. |
 **put_sales_quick_entries** | [**\Swagger\Client\Model\PutSalesQuickEntries**](../Model/PutSalesQuickEntries.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\QuickEntry**](../Model/QuickEntry.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

