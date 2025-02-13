# SynergiTech\Sage\SalesCorrectiveInvoicesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSalesCorrectiveInvoicesKey()**](SalesCorrectiveInvoicesApi.md#deleteSalesCorrectiveInvoicesKey) | **DELETE** /sales_corrective_invoices/{key} | Voids a Sales Corrective Invoice |
| [**getSalesCorrectiveInvoices()**](SalesCorrectiveInvoicesApi.md#getSalesCorrectiveInvoices) | **GET** /sales_corrective_invoices | Returns all Sales Corrective Invoices |
| [**getSalesCorrectiveInvoicesKey()**](SalesCorrectiveInvoicesApi.md#getSalesCorrectiveInvoicesKey) | **GET** /sales_corrective_invoices/{key} | Returns a Sales Corrective Invoice |
| [**postSalesCorrectiveInvoices()**](SalesCorrectiveInvoicesApi.md#postSalesCorrectiveInvoices) | **POST** /sales_corrective_invoices | Creates a Sales Corrective Invoice |
| [**putSalesCorrectiveInvoicesKey()**](SalesCorrectiveInvoicesApi.md#putSalesCorrectiveInvoicesKey) | **PUT** /sales_corrective_invoices/{key} | Updates a Sales Corrective Invoice |


## `deleteSalesCorrectiveInvoicesKey()`

```php
deleteSalesCorrectiveInvoicesKey($key, $voidReason): \SynergiTech\Sage\Model\SalesCorrectiveInvoice
```

Voids a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Sales Corrective Invoice Key.
$voidReason = 'voidReason_example'; // string | The reason the Sales Corrective Invoice is being voided (required unless status is DRAFT).

try {
    $result = $apiInstance->deleteSalesCorrectiveInvoicesKey($key, $voidReason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->deleteSalesCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Corrective Invoice Key. | |
| **voidReason** | **string**| The reason the Sales Corrective Invoice is being voided (required unless status is DRAFT). | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesCorrectiveInvoices()`

```php
getSalesCorrectiveInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\SalesCorrectiveInvoice[]
```

Returns all Sales Corrective Invoices

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$search = 'search_example'; // string | Use this to filter by the invoice reference or contact name.
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Corrective Invoices dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Sales Corrective Invoices dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Sales Corrective Invoices by whether they have attachments or not
$showLegacyId = True; // bool | Display the legacy_id for the Sales Corrective Invoices.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Sales Corrective Invoices per request.
$page = 1; // int | Format - int32. Go to specific page of Sales Corrective Invoices
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Corrective Invoices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date, due_date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getSalesCorrectiveInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->getSalesCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **search** | **string**| Use this to filter by the invoice reference or contact name. | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **statusId** | **string**| Use this to filter by status id | [optional] |
| **fromDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Corrective Invoices dates | [optional] |
| **toDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Sales Corrective Invoices dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Sales Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Sales Corrective Invoices by whether they have attachments or not | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Sales Corrective Invoices. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Sales Corrective Invoices per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Sales Corrective Invoices | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Corrective Invoices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date, due_date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCorrectiveInvoice[]**](../Model/SalesCorrectiveInvoice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesCorrectiveInvoicesKey()`

```php
getSalesCorrectiveInvoicesKey($key, $showPaymentsAllocations, $nestedAttributes, $markAsSent, $showLegacyId, $attributes): \SynergiTech\Sage\Model\SalesCorrectiveInvoice
```

Returns a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Sales Corrective Invoice Key.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Sales Corrective Invoice (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$markAsSent = True; // bool | Use this to mark/not mark the artefact as sent. Defaulted to 'true'.
$showLegacyId = True; // bool | Display the legacy_id for the Sales Corrective Invoice.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Corrective Invoice (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesCorrectiveInvoicesKey($key, $showPaymentsAllocations, $nestedAttributes, $markAsSent, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->getSalesCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Corrective Invoice Key. | |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Sales Corrective Invoice (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **markAsSent** | **bool**| Use this to mark/not mark the artefact as sent. Defaulted to &#39;true&#39;. | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Sales Corrective Invoice. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Corrective Invoice (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesCorrectiveInvoices()`

```php
postSalesCorrectiveInvoices($postSalesCorrectiveInvoices): \SynergiTech\Sage\Model\SalesCorrectiveInvoice
```

Creates a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postSalesCorrectiveInvoices = new \SynergiTech\Sage\Model\PostSalesCorrectiveInvoices(); // \SynergiTech\Sage\Model\PostSalesCorrectiveInvoices

try {
    $result = $apiInstance->postSalesCorrectiveInvoices($postSalesCorrectiveInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->postSalesCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postSalesCorrectiveInvoices** | [**\SynergiTech\Sage\Model\PostSalesCorrectiveInvoices**](../Model/PostSalesCorrectiveInvoices.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSalesCorrectiveInvoicesKey()`

```php
putSalesCorrectiveInvoicesKey($key, $putSalesCorrectiveInvoices): \SynergiTech\Sage\Model\SalesCorrectiveInvoice
```

Updates a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Sales Corrective Invoice Key.
$putSalesCorrectiveInvoices = new \SynergiTech\Sage\Model\PutSalesCorrectiveInvoices(); // \SynergiTech\Sage\Model\PutSalesCorrectiveInvoices

try {
    $result = $apiInstance->putSalesCorrectiveInvoicesKey($key, $putSalesCorrectiveInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->putSalesCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Corrective Invoice Key. | |
| **putSalesCorrectiveInvoices** | [**\SynergiTech\Sage\Model\PutSalesCorrectiveInvoices**](../Model/PutSalesCorrectiveInvoices.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
