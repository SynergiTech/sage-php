# SynergiTech\Sage\SalesInvoicesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSalesInvoicesKey()**](SalesInvoicesApi.md#deleteSalesInvoicesKey) | **DELETE** /sales_invoices/{key} | Voids a Sales Invoice |
| [**getSalesInvoices()**](SalesInvoicesApi.md#getSalesInvoices) | **GET** /sales_invoices | Returns all Sales Invoices |
| [**getSalesInvoicesKey()**](SalesInvoicesApi.md#getSalesInvoicesKey) | **GET** /sales_invoices/{key} | Returns a Sales Invoice |
| [**postSalesInvoices()**](SalesInvoicesApi.md#postSalesInvoices) | **POST** /sales_invoices | Creates a Sales Invoice |
| [**postSalesInvoicesKeyRelease()**](SalesInvoicesApi.md#postSalesInvoicesKeyRelease) | **POST** /sales_invoices/{key}/release | Releases a Sales Invoice |
| [**putSalesInvoicesKey()**](SalesInvoicesApi.md#putSalesInvoicesKey) | **PUT** /sales_invoices/{key} | Updates a Sales Invoice |


## `deleteSalesInvoicesKey()`

```php
deleteSalesInvoicesKey($key, $voidReason): \SynergiTech\Sage\Model\SalesInvoice
```

Voids a Sales Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Invoice Key.
$voidReason = 'voidReason_example'; // string | The reason the Sales Invoice is being voided (required unless status is DRAFT).

try {
    $result = $apiInstance->deleteSalesInvoicesKey($key, $voidReason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesApi->deleteSalesInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Invoice Key. | |
| **voidReason** | **string**| The reason the Sales Invoice is being voided (required unless status is DRAFT). | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesInvoices()`

```php
getSalesInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\SalesInvoice[]
```

Returns all Sales Invoices

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$search = 'search_example'; // string | Use this to filter by the invoice reference or contact name.
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Sales Invoices dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Sales Invoices dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Sales Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Sales Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Sales Invoices by whether they have attachments or not
$itemsPerPage = 20; // int | Returns the given number of Sales Invoices per request.
$page = 1; // int | Go to specific page of Sales Invoices
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Invoices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date, due_date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getSalesInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesApi->getSalesInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **search** | **string**| Use this to filter by the invoice reference or contact name. | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **statusId** | **string**| Use this to filter by status id | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Sales Invoices dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Sales Invoices dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Sales Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Sales Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Sales Invoices by whether they have attachments or not | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Sales Invoices per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Sales Invoices | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Invoices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date, due_date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesInvoice[]**](../Model/SalesInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesInvoicesKey()`

```php
getSalesInvoicesKey($key, $showPaymentsAllocations, $showCorrections, $nestedAttributes, $markAsSent, $showRecurringInvoice, $showAnalysisTypes, $attributes): \SynergiTech\Sage\Model\SalesInvoice
```

Returns a Sales Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Invoice Key.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$showCorrections = True; // bool | Use this to show the artefact's associated corrections
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Sales Invoice (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$markAsSent = True; // bool | Use this to mark/not mark the artefact as sent. Defaulted to 'true'.
$showRecurringInvoice = True; // bool | Use this to show the artefact's associated recurring invoice template if present
$showAnalysisTypes = True; // bool | Use this to show the line item analysis types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Invoice (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesInvoicesKey($key, $showPaymentsAllocations, $showCorrections, $nestedAttributes, $markAsSent, $showRecurringInvoice, $showAnalysisTypes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesApi->getSalesInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Invoice Key. | |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **showCorrections** | **bool**| Use this to show the artefact&#39;s associated corrections | [optional] |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Sales Invoice (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **markAsSent** | **bool**| Use this to mark/not mark the artefact as sent. Defaulted to &#39;true&#39;. | [optional] |
| **showRecurringInvoice** | **bool**| Use this to show the artefact&#39;s associated recurring invoice template if present | [optional] |
| **showAnalysisTypes** | **bool**| Use this to show the line item analysis types | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Invoice (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesInvoices()`

```php
postSalesInvoices($salesInvoices): \SynergiTech\Sage\Model\SalesInvoice
```

Creates a Sales Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salesInvoices = new \SynergiTech\Sage\Model\PostSalesInvoices(); // \SynergiTech\Sage\Model\PostSalesInvoices

try {
    $result = $apiInstance->postSalesInvoices($salesInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesApi->postSalesInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salesInvoices** | [**\SynergiTech\Sage\Model\PostSalesInvoices**](../Model/PostSalesInvoices.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesInvoicesKeyRelease()`

```php
postSalesInvoicesKeyRelease($key): \SynergiTech\Sage\Model\SalesInvoice
```

Releases a Sales Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Invoice Key.

try {
    $result = $apiInstance->postSalesInvoicesKeyRelease($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesApi->postSalesInvoicesKeyRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Invoice Key. | |

### Return type

[**\SynergiTech\Sage\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSalesInvoicesKey()`

```php
putSalesInvoicesKey($key, $salesInvoices): \SynergiTech\Sage\Model\SalesInvoice
```

Updates a Sales Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Invoice Key.
$salesInvoices = new \SynergiTech\Sage\Model\PutSalesInvoices(); // \SynergiTech\Sage\Model\PutSalesInvoices

try {
    $result = $apiInstance->putSalesInvoicesKey($key, $salesInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoicesApi->putSalesInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Invoice Key. | |
| **salesInvoices** | [**\SynergiTech\Sage\Model\PutSalesInvoices**](../Model/PutSalesInvoices.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
