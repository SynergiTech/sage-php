# Swagger\Client\PurchaseQuickEntriesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePurchaseQuickEntriesKey**](PurchaseQuickEntriesApi.md#deletePurchaseQuickEntriesKey) | **DELETE** /purchase_quick_entries/{key} | Deletes a Purchase Quick Entry
[**getPurchaseQuickEntries**](PurchaseQuickEntriesApi.md#getPurchaseQuickEntries) | **GET** /purchase_quick_entries | Returns all Purchase Quick Entries
[**getPurchaseQuickEntriesKey**](PurchaseQuickEntriesApi.md#getPurchaseQuickEntriesKey) | **GET** /purchase_quick_entries/{key} | Returns a Purchase Quick Entry
[**postPurchaseQuickEntries**](PurchaseQuickEntriesApi.md#postPurchaseQuickEntries) | **POST** /purchase_quick_entries | Creates a Purchase Quick Entry
[**putPurchaseQuickEntriesKey**](PurchaseQuickEntriesApi.md#putPurchaseQuickEntriesKey) | **PUT** /purchase_quick_entries/{key} | Updates a Purchase Quick Entry


# **deletePurchaseQuickEntriesKey**
> deletePurchaseQuickEntriesKey($key)

Deletes a Purchase Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access

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

$apiInstance = new Swagger\Client\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Purchase Quick Entry Key.

try {
    $apiInstance->deletePurchaseQuickEntriesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->deletePurchaseQuickEntriesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Purchase Quick Entry Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchaseQuickEntries**
> \Swagger\Client\Model\PurchaseQuickEntryArray getPurchaseQuickEntries($contact_id, $search, $status_id, $from_date, $to_date, $updated_or_created_since, $deleted_since, $show_payments_allocations, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $sort)

Returns all Purchase Quick Entries

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$search = "search_example"; // string | Use this to filter by the quick entry reference or contact name.
$status_id = "status_id_example"; // string | Use this to filter by status id
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Batch Entries dates
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Batch Entries dates
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deleted_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$show_payments_allocations = true; // bool | Use this to show the artefact's payments and allocations
$has_attachments = true; // bool | Use this to filter Purchase Batch Entries by whether they have attachments or not
$show_legacy_id = true; // bool | Display the legacy_id for the Purchase Batch Entries.
$items_per_page = 20; // int | Format - int32. Returns the given number of Purchase Batch Entries per request.
$page = 1; // int | Format - int32. Go to specific page of Purchase Batch Entries
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Purchase Batch Entries (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = "sort_example"; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getPurchaseQuickEntries($contact_id, $search, $status_id, $from_date, $to_date, $updated_or_created_since, $deleted_since, $show_payments_allocations, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->getPurchaseQuickEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **string**| Use this to filter by contact id | [optional]
 **search** | **string**| Use this to filter by the quick entry reference or contact name. | [optional]
 **status_id** | **string**| Use this to filter by status id | [optional]
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Batch Entries dates | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Batch Entries dates | [optional]
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **deleted_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional]
 **show_payments_allocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional]
 **has_attachments** | **bool**| Use this to filter Purchase Batch Entries by whether they have attachments or not | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Purchase Batch Entries. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Purchase Batch Entries per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Purchase Batch Entries | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Batch Entries (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseQuickEntryArray**](../Model/PurchaseQuickEntryArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchaseQuickEntriesKey**
> \Swagger\Client\Model\PurchaseQuickEntry getPurchaseQuickEntriesKey($key, $show_payments_allocations, $nested_attributes, $show_legacy_id, $attributes)

Returns a Purchase Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Purchase Quick Entry Key.
$show_payments_allocations = true; // bool | Use this to show the artefact's payments and allocations
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Purchase Batch Entry (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_legacy_id = true; // bool | Display the legacy_id for the Purchase Batch Entry.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Purchase Batch Entry (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getPurchaseQuickEntriesKey($key, $show_payments_allocations, $nested_attributes, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->getPurchaseQuickEntriesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Purchase Quick Entry Key. |
 **show_payments_allocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional]
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Purchase Batch Entry (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Purchase Batch Entry. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Batch Entry (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseQuickEntry**](../Model/PurchaseQuickEntry.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPurchaseQuickEntries**
> \Swagger\Client\Model\PurchaseQuickEntry postPurchaseQuickEntries($post_purchase_quick_entries)

Creates a Purchase Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_purchase_quick_entries = new \Swagger\Client\Model\PostPurchaseQuickEntries(); // \Swagger\Client\Model\PostPurchaseQuickEntries | 

try {
    $result = $apiInstance->postPurchaseQuickEntries($post_purchase_quick_entries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->postPurchaseQuickEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_purchase_quick_entries** | [**\Swagger\Client\Model\PostPurchaseQuickEntries**](../Model/PostPurchaseQuickEntries.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseQuickEntry**](../Model/PurchaseQuickEntry.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPurchaseQuickEntriesKey**
> \Swagger\Client\Model\PurchaseQuickEntry putPurchaseQuickEntriesKey($key, $put_purchase_quick_entries)

Updates a Purchase Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Purchase Quick Entry Key.
$put_purchase_quick_entries = new \Swagger\Client\Model\PutPurchaseQuickEntries(); // \Swagger\Client\Model\PutPurchaseQuickEntries | 

try {
    $result = $apiInstance->putPurchaseQuickEntriesKey($key, $put_purchase_quick_entries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->putPurchaseQuickEntriesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Purchase Quick Entry Key. |
 **put_purchase_quick_entries** | [**\Swagger\Client\Model\PutPurchaseQuickEntries**](../Model/PutPurchaseQuickEntries.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseQuickEntry**](../Model/PurchaseQuickEntry.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

