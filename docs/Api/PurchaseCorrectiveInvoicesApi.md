# SynergiTech\Sage\PurchaseCorrectiveInvoicesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePurchaseCorrectiveInvoicesKey()**](PurchaseCorrectiveInvoicesApi.md#deletePurchaseCorrectiveInvoicesKey) | **DELETE** /purchase_corrective_invoices/{key} | Deletes a Purchase Corrective Invoice |
| [**getPurchaseCorrectiveInvoices()**](PurchaseCorrectiveInvoicesApi.md#getPurchaseCorrectiveInvoices) | **GET** /purchase_corrective_invoices | Returns all Purchase Corrective Invoices |
| [**getPurchaseCorrectiveInvoicesKey()**](PurchaseCorrectiveInvoicesApi.md#getPurchaseCorrectiveInvoicesKey) | **GET** /purchase_corrective_invoices/{key} | Returns a Purchase Corrective Invoice |
| [**postPurchaseCorrectiveInvoices()**](PurchaseCorrectiveInvoicesApi.md#postPurchaseCorrectiveInvoices) | **POST** /purchase_corrective_invoices | Creates a Purchase Corrective Invoice |
| [**putPurchaseCorrectiveInvoicesKey()**](PurchaseCorrectiveInvoicesApi.md#putPurchaseCorrectiveInvoicesKey) | **PUT** /purchase_corrective_invoices/{key} | Updates a Purchase Corrective Invoice |


## `deletePurchaseCorrectiveInvoicesKey()`

```php
deletePurchaseCorrectiveInvoicesKey($key)
```

Deletes a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Corrective Invoice Key.

try {
    $apiInstance->deletePurchaseCorrectiveInvoicesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->deletePurchaseCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Corrective Invoice Key. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseCorrectiveInvoices()`

```php
getPurchaseCorrectiveInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\PurchaseCorrectiveInvoice[]
```

Returns all Purchase Corrective Invoices

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$search = 'search_example'; // string | Use this to filter by the invoice reference or contact name.
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Purchase Corrective Invoices dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Purchase Corrective Invoices dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Purchase Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Purchase Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Purchase Corrective Invoices by whether they have attachments or not
$itemsPerPage = 20; // int | Returns the given number of Purchase Corrective Invoices per request.
$page = 1; // int | Go to specific page of Purchase Corrective Invoices
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Corrective Invoices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date, due_date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getPurchaseCorrectiveInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->getPurchaseCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **search** | **string**| Use this to filter by the invoice reference or contact name. | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **statusId** | **string**| Use this to filter by status id | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Purchase Corrective Invoices dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Purchase Corrective Invoices dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Purchase Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Purchase Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Purchase Corrective Invoices by whether they have attachments or not | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Purchase Corrective Invoices per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Purchase Corrective Invoices | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Corrective Invoices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date, due_date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCorrectiveInvoice[]**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseCorrectiveInvoicesKey()`

```php
getPurchaseCorrectiveInvoicesKey($key, $showPaymentsAllocations, $nestedAttributes, $showAnalysisTypes, $attributes): \SynergiTech\Sage\Model\PurchaseCorrectiveInvoice
```

Returns a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Corrective Invoice Key.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Purchase Corrective Invoice (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showAnalysisTypes = True; // bool | Use this to show the line item analysis types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Corrective Invoice (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getPurchaseCorrectiveInvoicesKey($key, $showPaymentsAllocations, $nestedAttributes, $showAnalysisTypes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->getPurchaseCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Corrective Invoice Key. | |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Purchase Corrective Invoice (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showAnalysisTypes** | **bool**| Use this to show the line item analysis types | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Corrective Invoice (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCorrectiveInvoice**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseCorrectiveInvoices()`

```php
postPurchaseCorrectiveInvoices($purchaseCorrectiveInvoices): \SynergiTech\Sage\Model\PurchaseCorrectiveInvoice
```

Creates a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseCorrectiveInvoices = new \SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoices(); // \SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoices

try {
    $result = $apiInstance->postPurchaseCorrectiveInvoices($purchaseCorrectiveInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->postPurchaseCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchaseCorrectiveInvoices** | [**\SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoices**](../Model/PostPurchaseCorrectiveInvoices.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCorrectiveInvoice**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPurchaseCorrectiveInvoicesKey()`

```php
putPurchaseCorrectiveInvoicesKey($key, $purchaseCorrectiveInvoices): \SynergiTech\Sage\Model\PurchaseCorrectiveInvoice
```

Updates a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Corrective Invoice Key.
$purchaseCorrectiveInvoices = new \SynergiTech\Sage\Model\PutPurchaseCorrectiveInvoices(); // \SynergiTech\Sage\Model\PutPurchaseCorrectiveInvoices

try {
    $result = $apiInstance->putPurchaseCorrectiveInvoicesKey($key, $purchaseCorrectiveInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->putPurchaseCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Corrective Invoice Key. | |
| **purchaseCorrectiveInvoices** | [**\SynergiTech\Sage\Model\PutPurchaseCorrectiveInvoices**](../Model/PutPurchaseCorrectiveInvoices.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCorrectiveInvoice**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
