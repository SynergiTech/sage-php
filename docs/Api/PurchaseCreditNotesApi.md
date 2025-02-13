# SynergiTech\Sage\PurchaseCreditNotesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePurchaseCreditNotesKey()**](PurchaseCreditNotesApi.md#deletePurchaseCreditNotesKey) | **DELETE** /purchase_credit_notes/{key} | Deletes a Purchase Credit Note |
| [**getPurchaseCreditNotes()**](PurchaseCreditNotesApi.md#getPurchaseCreditNotes) | **GET** /purchase_credit_notes | Returns all Purchase Credit Notes |
| [**getPurchaseCreditNotesKey()**](PurchaseCreditNotesApi.md#getPurchaseCreditNotesKey) | **GET** /purchase_credit_notes/{key} | Returns a Purchase Credit Note |
| [**postPurchaseCreditNotes()**](PurchaseCreditNotesApi.md#postPurchaseCreditNotes) | **POST** /purchase_credit_notes | Creates a Purchase Credit Note |
| [**postPurchaseCreditNotesKeyRelease()**](PurchaseCreditNotesApi.md#postPurchaseCreditNotesKeyRelease) | **POST** /purchase_credit_notes/{key}/release | Releases a Purchase Credit Note |
| [**putPurchaseCreditNotesKey()**](PurchaseCreditNotesApi.md#putPurchaseCreditNotesKey) | **PUT** /purchase_credit_notes/{key} | Updates a Purchase Credit Note |


## `deletePurchaseCreditNotesKey()`

```php
deletePurchaseCreditNotesKey($key)
```

Deletes a Purchase Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Purchase Credit Note Key.

try {
    $apiInstance->deletePurchaseCreditNotesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCreditNotesApi->deletePurchaseCreditNotesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Credit Note Key. | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseCreditNotes()`

```php
getPurchaseCreditNotes($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\PurchaseCreditNote[]
```

Returns all Purchase Credit Notes

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$search = 'search_example'; // string | Use this to filter by the credit note reference or contact name.
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Credit Notes dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Credit Notes dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Credit Notes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Credit Notes deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Purchase Credit Notes by whether they have attachments or not
$showLegacyId = True; // bool | Display the legacy_id for the Purchase Credit Notes.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Purchase Credit Notes per request.
$page = 1; // int | Format - int32. Go to specific page of Purchase Credit Notes
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Credit Notes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getPurchaseCreditNotes($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCreditNotesApi->getPurchaseCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **search** | **string**| Use this to filter by the credit note reference or contact name. | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **statusId** | **string**| Use this to filter by status id | [optional] |
| **fromDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Credit Notes dates | [optional] |
| **toDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Credit Notes dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Credit Notes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Credit Notes deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Purchase Credit Notes by whether they have attachments or not | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Purchase Credit Notes. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Purchase Credit Notes per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Purchase Credit Notes | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Credit Notes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCreditNote[]**](../Model/PurchaseCreditNote.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseCreditNotesKey()`

```php
getPurchaseCreditNotesKey($key, $showPaymentsAllocations, $nestedAttributes, $showLegacyId, $attributes): \SynergiTech\Sage\Model\PurchaseCreditNote
```

Returns a Purchase Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Purchase Credit Note Key.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Purchase Credit Note (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showLegacyId = True; // bool | Display the legacy_id for the Purchase Credit Note.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Credit Note (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getPurchaseCreditNotesKey($key, $showPaymentsAllocations, $nestedAttributes, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCreditNotesApi->getPurchaseCreditNotesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Credit Note Key. | |
| **showPaymentsAllocations** | **bool**| Use this to show the artefact&#39;s payments and allocations | [optional] |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Purchase Credit Note (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Purchase Credit Note. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Credit Note (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCreditNote**](../Model/PurchaseCreditNote.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseCreditNotes()`

```php
postPurchaseCreditNotes($postPurchaseCreditNotes): \SynergiTech\Sage\Model\PurchaseCreditNote
```

Creates a Purchase Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postPurchaseCreditNotes = new \SynergiTech\Sage\Model\PostPurchaseCreditNotes(); // \SynergiTech\Sage\Model\PostPurchaseCreditNotes

try {
    $result = $apiInstance->postPurchaseCreditNotes($postPurchaseCreditNotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCreditNotesApi->postPurchaseCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postPurchaseCreditNotes** | [**\SynergiTech\Sage\Model\PostPurchaseCreditNotes**](../Model/PostPurchaseCreditNotes.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCreditNote**](../Model/PurchaseCreditNote.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseCreditNotesKeyRelease()`

```php
postPurchaseCreditNotesKeyRelease($key): \SynergiTech\Sage\Model\PurchaseCreditNote
```

Releases a Purchase Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Purchase Credit Note Key.

try {
    $result = $apiInstance->postPurchaseCreditNotesKeyRelease($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCreditNotesApi->postPurchaseCreditNotesKeyRelease: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Credit Note Key. | |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCreditNote**](../Model/PurchaseCreditNote.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPurchaseCreditNotesKey()`

```php
putPurchaseCreditNotesKey($key, $putPurchaseCreditNotes): \SynergiTech\Sage\Model\PurchaseCreditNote
```

Updates a Purchase Credit Note

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇮🇪, 🇬🇧, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Purchase Credit Note Key.
$putPurchaseCreditNotes = new \SynergiTech\Sage\Model\PutPurchaseCreditNotes(); // \SynergiTech\Sage\Model\PutPurchaseCreditNotes

try {
    $result = $apiInstance->putPurchaseCreditNotesKey($key, $putPurchaseCreditNotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCreditNotesApi->putPurchaseCreditNotesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Credit Note Key. | |
| **putPurchaseCreditNotes** | [**\SynergiTech\Sage\Model\PutPurchaseCreditNotes**](../Model/PutPurchaseCreditNotes.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCreditNote**](../Model/PurchaseCreditNote.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
