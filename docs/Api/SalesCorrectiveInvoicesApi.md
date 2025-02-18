# SynergiTech\Sage\SalesCorrectiveInvoicesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

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



$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesCorrectiveInvoices()`

```php
getSalesCorrectiveInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\SalesCorrectiveInvoice[]
```

Returns all Sales Corrective Invoices

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$search = 'search_example'; // string | Use this to filter by the invoice reference or contact name.
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Sales Corrective Invoices dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Sales Corrective Invoices dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Sales Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Sales Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Sales Corrective Invoices by whether they have attachments or not
$itemsPerPage = 20; // int | Returns the given number of Sales Corrective Invoices per request.
$page = 1; // int | Go to specific page of Sales Corrective Invoices
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Corrective Invoices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date, due_date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getSalesCorrectiveInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort);
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
| **fromDate** | **\DateTime**| Use this to filter by Sales Corrective Invoices dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Sales Corrective Invoices dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Sales Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Sales Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Sales Corrective Invoices by whether they have attachments or not | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Sales Corrective Invoices per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Sales Corrective Invoices | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Corrective Invoices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date, due_date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCorrectiveInvoice[]**](../Model/SalesCorrectiveInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesCorrectiveInvoicesKey()`

```php
getSalesCorrectiveInvoicesKey($key, $showPaymentsAllocations, $nestedAttributes, $markAsSent, $showAnalysisTypes, $attributes): \SynergiTech\Sage\Model\SalesCorrectiveInvoice
```

Returns a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Corrective Invoice Key.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Sales Corrective Invoice (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$markAsSent = True; // bool | Use this to mark/not mark the artefact as sent. Defaulted to 'true'.
$showAnalysisTypes = True; // bool | Use this to show the line item analysis types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Corrective Invoice (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesCorrectiveInvoicesKey($key, $showPaymentsAllocations, $nestedAttributes, $markAsSent, $showAnalysisTypes, $attributes);
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
| **showAnalysisTypes** | **bool**| Use this to show the line item analysis types | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Corrective Invoice (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesCorrectiveInvoices()`

```php
postSalesCorrectiveInvoices($salesCorrectiveInvoices): \SynergiTech\Sage\Model\SalesCorrectiveInvoice
```

Creates a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salesCorrectiveInvoices = new \SynergiTech\Sage\Model\PostSalesCorrectiveInvoices(); // \SynergiTech\Sage\Model\PostSalesCorrectiveInvoices

try {
    $result = $apiInstance->postSalesCorrectiveInvoices($salesCorrectiveInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->postSalesCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salesCorrectiveInvoices** | [**\SynergiTech\Sage\Model\PostSalesCorrectiveInvoices**](../Model/PostSalesCorrectiveInvoices.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSalesCorrectiveInvoicesKey()`

```php
putSalesCorrectiveInvoicesKey($key, $salesCorrectiveInvoices): \SynergiTech\Sage\Model\SalesCorrectiveInvoice
```

Updates a Sales Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Corrective Invoice Key.
$salesCorrectiveInvoices = new \SynergiTech\Sage\Model\PutSalesCorrectiveInvoices(); // \SynergiTech\Sage\Model\PutSalesCorrectiveInvoices

try {
    $result = $apiInstance->putSalesCorrectiveInvoicesKey($key, $salesCorrectiveInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCorrectiveInvoicesApi->putSalesCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Corrective Invoice Key. | |
| **salesCorrectiveInvoices** | [**\SynergiTech\Sage\Model\PutSalesCorrectiveInvoices**](../Model/PutSalesCorrectiveInvoices.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\SalesCorrectiveInvoice**](../Model/SalesCorrectiveInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
