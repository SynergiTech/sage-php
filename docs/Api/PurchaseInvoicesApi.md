# SynergiTech\Sage\PurchaseInvoicesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePurchaseInvoicesKey()**](PurchaseInvoicesApi.md#deletePurchaseInvoicesKey) | **DELETE** /purchase_invoices/{key} | Deletes a Purchase Invoice |
| [**getPurchaseInvoices()**](PurchaseInvoicesApi.md#getPurchaseInvoices) | **GET** /purchase_invoices | Returns all Purchase Invoices |
| [**getPurchaseInvoicesKey()**](PurchaseInvoicesApi.md#getPurchaseInvoicesKey) | **GET** /purchase_invoices/{key} | Returns a Purchase Invoice |
| [**postPurchaseInvoices()**](PurchaseInvoicesApi.md#postPurchaseInvoices) | **POST** /purchase_invoices | Creates a Purchase Invoice |
| [**postPurchaseInvoicesKeyRelease()**](PurchaseInvoicesApi.md#postPurchaseInvoicesKeyRelease) | **POST** /purchase_invoices/{key}/release | Releases a Purchase Invoice |
| [**putPurchaseInvoicesKey()**](PurchaseInvoicesApi.md#putPurchaseInvoicesKey) | **PUT** /purchase_invoices/{key} | Updates a Purchase Invoice |


## `deletePurchaseInvoicesKey()`

```php
deletePurchaseInvoicesKey($key)
```

Deletes a Purchase Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Invoice Key.

try {
    $apiInstance->deletePurchaseInvoicesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->deletePurchaseInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Invoice Key. | |

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

## `getPurchaseInvoices()`

```php
getPurchaseInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\PurchaseInvoice[]
```

Returns all Purchase Invoices

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$search = 'search_example'; // string | Use this to filter by the invoice reference or contact name.
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Purchase Invoices dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Purchase Invoices dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Purchase Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Purchase Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Purchase Invoices by whether they have attachments or not
$itemsPerPage = 20; // int | Returns the given number of Purchase Invoices per request.
$page = 1; // int | Go to specific page of Purchase Invoices
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Invoices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date, due_date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getPurchaseInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->getPurchaseInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **search** | **string**| Use this to filter by the invoice reference or contact name. | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **statusId** | **string**| Use this to filter by status id | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Purchase Invoices dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Purchase Invoices dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Purchase Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Purchase Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Purchase Invoices by whether they have attachments or not | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Purchase Invoices per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Purchase Invoices | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Invoices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date, due_date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseInvoice[]**](../Model/PurchaseInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseInvoicesKey()`

```php
getPurchaseInvoicesKey($key, $showPaymentsAllocations, $showCorrections, $nestedAttributes, $showAnalysisTypes, $attributes): \SynergiTech\Sage\Model\PurchaseInvoice
```

Returns a Purchase Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Invoice Key.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$showCorrections = True; // bool | Use this to show the artefact's associated corrections
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Purchase Invoice (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showAnalysisTypes = True; // bool | Use this to show the line item analysis types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Invoice (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getPurchaseInvoicesKey($key, $showPaymentsAllocations, $showCorrections, $nestedAttributes, $showAnalysisTypes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->getPurchaseInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Invoice Key. | |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **showCorrections** | **bool**| Use this to show the artefact&#39;s associated corrections | [optional] |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Purchase Invoice (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showAnalysisTypes** | **bool**| Use this to show the line item analysis types | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Invoice (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseInvoices()`

```php
postPurchaseInvoices($purchaseInvoices): \SynergiTech\Sage\Model\PurchaseInvoice
```

Creates a Purchase Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseInvoices = new \SynergiTech\Sage\Model\PostPurchaseInvoices(); // \SynergiTech\Sage\Model\PostPurchaseInvoices

try {
    $result = $apiInstance->postPurchaseInvoices($purchaseInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->postPurchaseInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchaseInvoices** | [**\SynergiTech\Sage\Model\PostPurchaseInvoices**](../Model/PostPurchaseInvoices.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseInvoicesKeyRelease()`

```php
postPurchaseInvoicesKeyRelease($key): \SynergiTech\Sage\Model\PurchaseInvoice
```

Releases a Purchase Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Invoice Key.

try {
    $result = $apiInstance->postPurchaseInvoicesKeyRelease($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->postPurchaseInvoicesKeyRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Invoice Key. | |

### Return type

[**\SynergiTech\Sage\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPurchaseInvoicesKey()`

```php
putPurchaseInvoicesKey($key, $purchaseInvoices): \SynergiTech\Sage\Model\PurchaseInvoice
```

Updates a Purchase Invoice

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Invoice Key.
$purchaseInvoices = new \SynergiTech\Sage\Model\PutPurchaseInvoices(); // \SynergiTech\Sage\Model\PutPurchaseInvoices

try {
    $result = $apiInstance->putPurchaseInvoicesKey($key, $purchaseInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseInvoicesApi->putPurchaseInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Invoice Key. | |
| **purchaseInvoices** | [**\SynergiTech\Sage\Model\PutPurchaseInvoices**](../Model/PutPurchaseInvoices.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\PurchaseInvoice**](../Model/PurchaseInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
