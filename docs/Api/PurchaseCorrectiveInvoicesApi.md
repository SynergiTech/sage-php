# Swagger\Client\PurchaseCorrectiveInvoicesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePurchaseCorrectiveInvoicesKey**](PurchaseCorrectiveInvoicesApi.md#deletePurchaseCorrectiveInvoicesKey) | **DELETE** /purchase_corrective_invoices/{key} | Deletes a Purchase Corrective Invoice
[**getPurchaseCorrectiveInvoices**](PurchaseCorrectiveInvoicesApi.md#getPurchaseCorrectiveInvoices) | **GET** /purchase_corrective_invoices | Returns all Purchase Corrective Invoices
[**getPurchaseCorrectiveInvoicesKey**](PurchaseCorrectiveInvoicesApi.md#getPurchaseCorrectiveInvoicesKey) | **GET** /purchase_corrective_invoices/{key} | Returns a Purchase Corrective Invoice
[**postPurchaseCorrectiveInvoices**](PurchaseCorrectiveInvoicesApi.md#postPurchaseCorrectiveInvoices) | **POST** /purchase_corrective_invoices | Creates a Purchase Corrective Invoice
[**putPurchaseCorrectiveInvoicesKey**](PurchaseCorrectiveInvoicesApi.md#putPurchaseCorrectiveInvoicesKey) | **PUT** /purchase_corrective_invoices/{key} | Updates a Purchase Corrective Invoice


# **deletePurchaseCorrectiveInvoicesKey**
> deletePurchaseCorrectiveInvoicesKey($key)

Deletes a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access

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

$apiInstance = new Swagger\Client\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Purchase Corrective Invoice Key.

try {
    $apiInstance->deletePurchaseCorrectiveInvoicesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->deletePurchaseCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Purchase Corrective Invoice Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchaseCorrectiveInvoices**
> \Swagger\Client\Model\PurchaseCorrectiveInvoiceArray getPurchaseCorrectiveInvoices($show_payments_allocations, $search, $contact_id, $status_id, $from_date, $to_date, $updated_or_created_since, $deleted_since, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $sort)

Returns all Purchase Corrective Invoices

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_payments_allocations = true; // bool | Use this to show the artefact's payments and allocations
$search = "search_example"; // string | Use this to filter by the invoice reference or contact name.
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$status_id = "status_id_example"; // string | Use this to filter by status id
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Corrective Invoices dates
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Corrective Invoices dates
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deleted_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$has_attachments = true; // bool | Use this to filter Purchase Corrective Invoices by whether they have attachments or not
$show_legacy_id = true; // bool | Display the legacy_id for the Purchase Corrective Invoices.
$items_per_page = 20; // int | Format - int32. Returns the given number of Purchase Corrective Invoices per request.
$page = 1; // int | Format - int32. Go to specific page of Purchase Corrective Invoices
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Purchase Corrective Invoices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = "sort_example"; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date, due_date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getPurchaseCorrectiveInvoices($show_payments_allocations, $search, $contact_id, $status_id, $from_date, $to_date, $updated_or_created_since, $deleted_since, $has_attachments, $show_legacy_id, $items_per_page, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->getPurchaseCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
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
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Corrective Invoices dates | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Corrective Invoices dates | [optional]
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **deleted_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional]
 **has_attachments** | **bool**| Use this to filter Purchase Corrective Invoices by whether they have attachments or not | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Purchase Corrective Invoices. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Purchase Corrective Invoices per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Purchase Corrective Invoices | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Corrective Invoices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date, due_date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseCorrectiveInvoiceArray**](../Model/PurchaseCorrectiveInvoiceArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchaseCorrectiveInvoicesKey**
> \Swagger\Client\Model\PurchaseCorrectiveInvoice getPurchaseCorrectiveInvoicesKey($key, $show_payments_allocations, $nested_attributes, $show_legacy_id, $attributes)

Returns a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

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

$apiInstance = new Swagger\Client\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Purchase Corrective Invoice Key.
$show_payments_allocations = true; // bool | Use this to show the artefact's payments and allocations
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Purchase Corrective Invoice (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_legacy_id = true; // bool | Display the legacy_id for the Purchase Corrective Invoice.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Purchase Corrective Invoice (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getPurchaseCorrectiveInvoicesKey($key, $show_payments_allocations, $nested_attributes, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->getPurchaseCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Purchase Corrective Invoice Key. |
 **show_payments_allocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional]
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Purchase Corrective Invoice (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Purchase Corrective Invoice. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Corrective Invoice (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseCorrectiveInvoice**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPurchaseCorrectiveInvoices**
> \Swagger\Client\Model\PurchaseCorrectiveInvoice postPurchaseCorrectiveInvoices($post_purchase_corrective_invoices)

Creates a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_purchase_corrective_invoices = new \Swagger\Client\Model\PostPurchaseCorrectiveInvoices(); // \Swagger\Client\Model\PostPurchaseCorrectiveInvoices | 

try {
    $result = $apiInstance->postPurchaseCorrectiveInvoices($post_purchase_corrective_invoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->postPurchaseCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_purchase_corrective_invoices** | [**\Swagger\Client\Model\PostPurchaseCorrectiveInvoices**](../Model/PostPurchaseCorrectiveInvoices.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseCorrectiveInvoice**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPurchaseCorrectiveInvoicesKey**
> \Swagger\Client\Model\PurchaseCorrectiveInvoice putPurchaseCorrectiveInvoicesKey($key, $put_purchase_corrective_invoices)

Updates a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

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

$apiInstance = new Swagger\Client\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Purchase Corrective Invoice Key.
$put_purchase_corrective_invoices = new \Swagger\Client\Model\PutPurchaseCorrectiveInvoices(); // \Swagger\Client\Model\PutPurchaseCorrectiveInvoices | 

try {
    $result = $apiInstance->putPurchaseCorrectiveInvoicesKey($key, $put_purchase_corrective_invoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->putPurchaseCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Purchase Corrective Invoice Key. |
 **put_purchase_corrective_invoices** | [**\Swagger\Client\Model\PutPurchaseCorrectiveInvoices**](../Model/PutPurchaseCorrectiveInvoices.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PurchaseCorrectiveInvoice**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

