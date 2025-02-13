# Swagger\Client\SalesCorrectiveInvoicesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSalesCorrectiveInvoicesKey**](SalesCorrectiveInvoicesApi.md#deleteSalesCorrectiveInvoicesKey) | **DELETE** /sales_corrective_invoices/{key} | Voids a Sales Corrective Invoice
[**getSalesCorrectiveInvoices**](SalesCorrectiveInvoicesApi.md#getSalesCorrectiveInvoices) | **GET** /sales_corrective_invoices | Returns all Sales Corrective Invoices
[**getSalesCorrectiveInvoicesKey**](SalesCorrectiveInvoicesApi.md#getSalesCorrectiveInvoicesKey) | **GET** /sales_corrective_invoices/{key} | Returns a Sales Corrective Invoice
[**postSalesCorrectiveInvoices**](SalesCorrectiveInvoicesApi.md#postSalesCorrectiveInvoices) | **POST** /sales_corrective_invoices | Creates a Sales Corrective Invoice
[**putSalesCorrectiveInvoicesKey**](SalesCorrectiveInvoicesApi.md#putSalesCorrectiveInvoicesKey) | **PUT** /sales_corrective_invoices/{key} | Updates a Sales Corrective Invoice


# **deleteSalesCorrectiveInvoicesKey**
> \Swagger\Client\Model\SalesCorrectiveInvoice deleteSalesCorrectiveInvoicesKey($key, $void_reason)

Voids a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

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

$apiInstance = new Swagger\Client\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Sales Corrective Invoice Key.
$void_reason = "void_reason_example"; // string | The reason the Sales Corrective Invoice is being voided (required unless status is DRAFT).

try {
    $result = $apiInstance->deleteSalesCorrectiveInvoicesKey($key, $void_reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->deleteSalesCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Sales Corrective Invoice Key. |
 **void_reason** | **string**| The reason the Sales Corrective Invoice is being voided (required unless status is DRAFT). | [optional]

### Return type

[**\Swagger\Client\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesCorrectiveInvoices**
> \Swagger\Client\Model\SalesCorrectiveInvoiceArray getSalesCorrectiveInvoices($show_payments_allocations, $search, $contact_id, $status_id, $from_date, $to_date, $updated_or_created_since, $deleted_since, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $sort)

Returns all Sales Corrective Invoices

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_payments_allocations = true; // bool | Use this to show the artefact's payments and allocations
$search = "search_example"; // string | Use this to filter by the invoice reference or contact name.
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$status_id = "status_id_example"; // string | Use this to filter by status id
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Corrective Invoices dates
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Corrective Invoices dates
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deleted_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$has_attachments = true; // bool | Use this to filter Sales Corrective Invoices by whether they have attachments or not
$show_legacy_id = true; // bool | Display the legacy_id for the Sales Corrective Invoices.
$items_per_page = 20; // int | Format - int32. Returns the given number of Sales Corrective Invoices per request.
$page = 1; // int | Format - int32. Go to specific page of Sales Corrective Invoices
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Sales Corrective Invoices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = "sort_example"; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date, due_date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getSalesCorrectiveInvoices($show_payments_allocations, $search, $contact_id, $status_id, $from_date, $to_date, $updated_or_created_since, $deleted_since, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->getSalesCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_payments_allocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional]
 **search** | **string**| Use this to filter by the invoice reference or contact name. | [optional]
 **contact_id** | **string**| Use this to filter by contact id | [optional]
 **status_id** | **string**| Use this to filter by status id | [optional]
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Corrective Invoices dates | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Corrective Invoices dates | [optional]
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **deleted_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional]
 **has_attachments** | **bool**| Use this to filter Sales Corrective Invoices by whether they have attachments or not | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Sales Corrective Invoices. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Sales Corrective Invoices per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Sales Corrective Invoices | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Sales Corrective Invoices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date, due_date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\SalesCorrectiveInvoiceArray**](../Model/SalesCorrectiveInvoiceArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesCorrectiveInvoicesKey**
> \Swagger\Client\Model\SalesCorrectiveInvoice getSalesCorrectiveInvoicesKey($key, $show_payments_allocations, $nested_attributes, $mark_as_sent, $show_legacy_id, $attributes)

Returns a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Sales Corrective Invoice Key.
$show_payments_allocations = true; // bool | Use this to show the artefact's payments and allocations
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Sales Corrective Invoice (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$mark_as_sent = true; // bool | Use this to mark/not mark the artefact as sent. Defaulted to 'true'.
$show_legacy_id = true; // bool | Display the legacy_id for the Sales Corrective Invoice.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Sales Corrective Invoice (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesCorrectiveInvoicesKey($key, $show_payments_allocations, $nested_attributes, $mark_as_sent, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->getSalesCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Sales Corrective Invoice Key. |
 **show_payments_allocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional]
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Sales Corrective Invoice (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **mark_as_sent** | **bool**| Use this to mark/not mark the artefact as sent. Defaulted to &#39;true&#39;. | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Sales Corrective Invoice. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Sales Corrective Invoice (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSalesCorrectiveInvoices**
> \Swagger\Client\Model\SalesCorrectiveInvoice postSalesCorrectiveInvoices($post_sales_corrective_invoices)

Creates a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_sales_corrective_invoices = new \Swagger\Client\Model\PostSalesCorrectiveInvoices(); // \Swagger\Client\Model\PostSalesCorrectiveInvoices | 

try {
    $result = $apiInstance->postSalesCorrectiveInvoices($post_sales_corrective_invoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->postSalesCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_sales_corrective_invoices** | [**\Swagger\Client\Model\PostSalesCorrectiveInvoices**](../Model/PostSalesCorrectiveInvoices.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSalesCorrectiveInvoicesKey**
> \Swagger\Client\Model\SalesCorrectiveInvoice putSalesCorrectiveInvoicesKey($key, $put_sales_corrective_invoices)

Updates a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Sales Corrective Invoice Key.
$put_sales_corrective_invoices = new \Swagger\Client\Model\PutSalesCorrectiveInvoices(); // \Swagger\Client\Model\PutSalesCorrectiveInvoices | 

try {
    $result = $apiInstance->putSalesCorrectiveInvoicesKey($key, $put_sales_corrective_invoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->putSalesCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Sales Corrective Invoice Key. |
 **put_sales_corrective_invoices** | [**\Swagger\Client\Model\PutSalesCorrectiveInvoices**](../Model/PutSalesCorrectiveInvoices.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

