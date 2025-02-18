# SynergiTech\Sage\PurchaseQuickEntriesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePurchaseQuickEntriesKey()**](PurchaseQuickEntriesApi.md#deletePurchaseQuickEntriesKey) | **DELETE** /purchase_quick_entries/{key} | Deletes a Purchase Quick Entry |
| [**getPurchaseQuickEntries()**](PurchaseQuickEntriesApi.md#getPurchaseQuickEntries) | **GET** /purchase_quick_entries | Returns all Purchase Quick Entries |
| [**getPurchaseQuickEntriesKey()**](PurchaseQuickEntriesApi.md#getPurchaseQuickEntriesKey) | **GET** /purchase_quick_entries/{key} | Returns a Purchase Quick Entry |
| [**postPurchaseQuickEntries()**](PurchaseQuickEntriesApi.md#postPurchaseQuickEntries) | **POST** /purchase_quick_entries | Creates a Purchase Quick Entry |
| [**putPurchaseQuickEntriesKey()**](PurchaseQuickEntriesApi.md#putPurchaseQuickEntriesKey) | **PUT** /purchase_quick_entries/{key} | Updates a Purchase Quick Entry |


## `deletePurchaseQuickEntriesKey()`

```php
deletePurchaseQuickEntriesKey($key)
```

Deletes a Purchase Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Quick Entry Key.

try {
    $apiInstance->deletePurchaseQuickEntriesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->deletePurchaseQuickEntriesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Quick Entry Key. | |

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

## `getPurchaseQuickEntries()`

```php
getPurchaseQuickEntries($contactId, $search, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $showPaymentsAllocations, $hasAttachments, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\PurchaseQuickEntry[]
```

Returns all Purchase Quick Entries

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$search = 'search_example'; // string | Use this to filter by the quick entry reference or contact name.
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Purchase Batch Entries dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Purchase Batch Entries dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Purchase Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Purchase Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$hasAttachments = True; // bool | Use this to filter Purchase Batch Entries by whether they have attachments or not
$itemsPerPage = 20; // int | Returns the given number of Purchase Batch Entries per request.
$page = 1; // int | Go to specific page of Purchase Batch Entries
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Batch Entries (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getPurchaseQuickEntries($contactId, $search, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $showPaymentsAllocations, $hasAttachments, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->getPurchaseQuickEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **search** | **string**| Use this to filter by the quick entry reference or contact name. | [optional] |
| **statusId** | **string**| Use this to filter by status id | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Purchase Batch Entries dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Purchase Batch Entries dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Purchase Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Purchase Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **hasAttachments** | **bool**| Use this to filter Purchase Batch Entries by whether they have attachments or not | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Purchase Batch Entries per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Purchase Batch Entries | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Batch Entries (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseQuickEntry[]**](../Model/PurchaseQuickEntry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseQuickEntriesKey()`

```php
getPurchaseQuickEntriesKey($key, $showPaymentsAllocations, $nestedAttributes, $showAnalysisTypes, $attributes): \SynergiTech\Sage\Model\PurchaseQuickEntry
```

Returns a Purchase Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Quick Entry Key.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Purchase Batch Entry (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showAnalysisTypes = True; // bool | Use this to show the line item analysis types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Batch Entry (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getPurchaseQuickEntriesKey($key, $showPaymentsAllocations, $nestedAttributes, $showAnalysisTypes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->getPurchaseQuickEntriesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Quick Entry Key. | |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Purchase Batch Entry (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showAnalysisTypes** | **bool**| Use this to show the line item analysis types | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Batch Entry (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseQuickEntry**](../Model/PurchaseQuickEntry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseQuickEntries()`

```php
postPurchaseQuickEntries($purchaseQuickEntries): \SynergiTech\Sage\Model\PurchaseQuickEntry
```

Creates a Purchase Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseQuickEntries = new \SynergiTech\Sage\Model\PostPurchaseQuickEntries(); // \SynergiTech\Sage\Model\PostPurchaseQuickEntries

try {
    $result = $apiInstance->postPurchaseQuickEntries($purchaseQuickEntries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->postPurchaseQuickEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchaseQuickEntries** | [**\SynergiTech\Sage\Model\PostPurchaseQuickEntries**](../Model/PostPurchaseQuickEntries.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\PurchaseQuickEntry**](../Model/PurchaseQuickEntry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPurchaseQuickEntriesKey()`

```php
putPurchaseQuickEntriesKey($key, $purchaseQuickEntries): \SynergiTech\Sage\Model\PurchaseQuickEntry
```

Updates a Purchase Quick Entry

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\PurchaseQuickEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Purchase Quick Entry Key.
$purchaseQuickEntries = new \SynergiTech\Sage\Model\PutPurchaseQuickEntries(); // \SynergiTech\Sage\Model\PutPurchaseQuickEntries

try {
    $result = $apiInstance->putPurchaseQuickEntriesKey($key, $purchaseQuickEntries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseQuickEntriesApi->putPurchaseQuickEntriesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Quick Entry Key. | |
| **purchaseQuickEntries** | [**\SynergiTech\Sage\Model\PutPurchaseQuickEntries**](../Model/PutPurchaseQuickEntries.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\PurchaseQuickEntry**](../Model/PurchaseQuickEntry.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
