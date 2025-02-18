# SynergiTech\Sage\SalesCreditNotesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSalesCreditNotesKey()**](SalesCreditNotesApi.md#deleteSalesCreditNotesKey) | **DELETE** /sales_credit_notes/{key} | Voids a Sales Credit Note |
| [**getSalesCreditNotes()**](SalesCreditNotesApi.md#getSalesCreditNotes) | **GET** /sales_credit_notes | Returns all Sales Credit Notes |
| [**getSalesCreditNotesKey()**](SalesCreditNotesApi.md#getSalesCreditNotesKey) | **GET** /sales_credit_notes/{key} | Returns a Sales Credit Note |
| [**postSalesCreditNotes()**](SalesCreditNotesApi.md#postSalesCreditNotes) | **POST** /sales_credit_notes | Creates a Sales Credit Note |
| [**postSalesCreditNotesKeyRelease()**](SalesCreditNotesApi.md#postSalesCreditNotesKeyRelease) | **POST** /sales_credit_notes/{key}/release | Releases a Sales Credit Note |
| [**putSalesCreditNotesKey()**](SalesCreditNotesApi.md#putSalesCreditNotesKey) | **PUT** /sales_credit_notes/{key} | Updates a Sales Credit Note |


## `deleteSalesCreditNotesKey()`

```php
deleteSalesCreditNotesKey($key, $voidReason): \SynergiTech\Sage\Model\SalesCreditNote
```

Voids a Sales Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Credit Note Key.
$voidReason = 'voidReason_example'; // string | The reason the Sales Credit Note is being voided (required unless status is DRAFT).

try {
    $result = $apiInstance->deleteSalesCreditNotesKey($key, $voidReason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditNotesApi->deleteSalesCreditNotesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Credit Note Key. | |
| **voidReason** | **string**| The reason the Sales Credit Note is being voided (required unless status is DRAFT). | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCreditNote**](../Model/SalesCreditNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesCreditNotes()`

```php
getSalesCreditNotes($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\SalesCreditNote[]
```

Returns all Sales Credit Notes

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$search = 'search_example'; // string | Use this to filter by the credit note reference or contact name.
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Sales Credit Notes dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Sales Credit Notes dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Sales Credit Notes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Sales Credit Notes deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Sales Credit Notes by whether they have attachments or not
$itemsPerPage = 20; // int | Returns the given number of Sales Credit Notes per request.
$page = 1; // int | Go to specific page of Sales Credit Notes
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Credit Notes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getSalesCreditNotes($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditNotesApi->getSalesCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **search** | **string**| Use this to filter by the credit note reference or contact name. | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **statusId** | **string**| Use this to filter by status id | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Sales Credit Notes dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Sales Credit Notes dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Sales Credit Notes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Sales Credit Notes deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Sales Credit Notes by whether they have attachments or not | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Sales Credit Notes per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Sales Credit Notes | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Credit Notes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCreditNote[]**](../Model/SalesCreditNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesCreditNotesKey()`

```php
getSalesCreditNotesKey($key, $showPaymentsAllocations, $nestedAttributes, $markAsSent, $showAnalysisTypes, $attributes): \SynergiTech\Sage\Model\SalesCreditNote
```

Returns a Sales Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Credit Note Key.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Sales Credit Note (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$markAsSent = True; // bool | Use this to mark/not mark the artefact as sent. Defaulted to 'true'.
$showAnalysisTypes = True; // bool | Use this to show the line item analysis types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Credit Note (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesCreditNotesKey($key, $showPaymentsAllocations, $nestedAttributes, $markAsSent, $showAnalysisTypes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditNotesApi->getSalesCreditNotesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Credit Note Key. | |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Sales Credit Note (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **markAsSent** | **bool**| Use this to mark/not mark the artefact as sent. Defaulted to &#39;true&#39;. | [optional] |
| **showAnalysisTypes** | **bool**| Use this to show the line item analysis types | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Credit Note (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesCreditNote**](../Model/SalesCreditNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesCreditNotes()`

```php
postSalesCreditNotes($salesCreditNotes): \SynergiTech\Sage\Model\SalesCreditNote
```

Creates a Sales Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salesCreditNotes = new \SynergiTech\Sage\Model\PostSalesCreditNotes(); // \SynergiTech\Sage\Model\PostSalesCreditNotes

try {
    $result = $apiInstance->postSalesCreditNotes($salesCreditNotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditNotesApi->postSalesCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salesCreditNotes** | [**\SynergiTech\Sage\Model\PostSalesCreditNotes**](../Model/PostSalesCreditNotes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\SalesCreditNote**](../Model/SalesCreditNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesCreditNotesKeyRelease()`

```php
postSalesCreditNotesKeyRelease($key): \SynergiTech\Sage\Model\SalesCreditNote
```

Releases a Sales Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Credit Note Key.

try {
    $result = $apiInstance->postSalesCreditNotesKeyRelease($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditNotesApi->postSalesCreditNotesKeyRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Credit Note Key. | |

### Return type

[**\SynergiTech\Sage\Model\SalesCreditNote**](../Model/SalesCreditNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSalesCreditNotesKey()`

```php
putSalesCreditNotesKey($key, $salesCreditNotes): \SynergiTech\Sage\Model\SalesCreditNote
```

Updates a Sales Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Credit Note Key.
$salesCreditNotes = new \SynergiTech\Sage\Model\PutSalesCreditNotes(); // \SynergiTech\Sage\Model\PutSalesCreditNotes

try {
    $result = $apiInstance->putSalesCreditNotesKey($key, $salesCreditNotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditNotesApi->putSalesCreditNotesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Credit Note Key. | |
| **salesCreditNotes** | [**\SynergiTech\Sage\Model\PutSalesCreditNotes**](../Model/PutSalesCreditNotes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\SalesCreditNote**](../Model/SalesCreditNote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
