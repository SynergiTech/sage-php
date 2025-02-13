# SynergiTech\Sage\PurchaseCorrectiveInvoicesApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

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


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseCorrectiveInvoices()`

```php
getPurchaseCorrectiveInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\PurchaseCorrectiveInvoice[]
```

Returns all Purchase Corrective Invoices

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$search = 'search_example'; // string | Use this to filter by the invoice reference or contact name.
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Corrective Invoices dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Corrective Invoices dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Purchase Corrective Invoices by whether they have attachments or not
$showLegacyId = True; // bool | Display the legacy_id for the Purchase Corrective Invoices.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Purchase Corrective Invoices per request.
$page = 1; // int | Format - int32. Go to specific page of Purchase Corrective Invoices
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Corrective Invoices (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date, due_date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getPurchaseCorrectiveInvoices($showPaymentsAllocations, $search, $contactId, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $deletedSince, $hasAttachments, $showLegacyId, $itemsPerPage, $page, $attributes, $sort);
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
| **fromDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Corrective Invoices dates | [optional] |
| **toDate** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Purchase Corrective Invoices dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Corrective Invoices changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Purchase Corrective Invoices deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Purchase Corrective Invoices by whether they have attachments or not | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Purchase Corrective Invoices. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Purchase Corrective Invoices per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Purchase Corrective Invoices | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Corrective Invoices (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date, due_date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCorrectiveInvoice[]**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPurchaseCorrectiveInvoicesKey()`

```php
getPurchaseCorrectiveInvoicesKey($key, $showPaymentsAllocations, $nestedAttributes, $showLegacyId, $attributes): \SynergiTech\Sage\Model\PurchaseCorrectiveInvoice
```

Returns a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Read Only, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Purchase Corrective Invoice Key.
$showPaymentsAllocations = True; // bool | Use this to show the artefact's payments and allocations
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Purchase Corrective Invoice (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showLegacyId = True; // bool | Display the legacy_id for the Purchase Corrective Invoice.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Purchase Corrective Invoice (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getPurchaseCorrectiveInvoicesKey($key, $showPaymentsAllocations, $nestedAttributes, $showLegacyId, $attributes);
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
| **showLegacyId** | **bool**| Display the legacy_id for the Purchase Corrective Invoice. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Purchase Corrective Invoice (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCorrectiveInvoice**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPurchaseCorrectiveInvoices()`

```php
postPurchaseCorrectiveInvoices($postPurchaseCorrectiveInvoices): \SynergiTech\Sage\Model\PurchaseCorrectiveInvoice
```

Creates a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postPurchaseCorrectiveInvoices = new \SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoices(); // \SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoices

try {
    $result = $apiInstance->postPurchaseCorrectiveInvoices($postPurchaseCorrectiveInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->postPurchaseCorrectiveInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postPurchaseCorrectiveInvoices** | [**\SynergiTech\Sage\Model\PostPurchaseCorrectiveInvoices**](../Model/PostPurchaseCorrectiveInvoices.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCorrectiveInvoice**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPurchaseCorrectiveInvoicesKey()`

```php
putPurchaseCorrectiveInvoicesKey($key, $putPurchaseCorrectiveInvoices): \SynergiTech\Sage\Model\PurchaseCorrectiveInvoice
```

Updates a Purchase Corrective Invoice

### Endpoint Availability  * Accounting Plus: 🇪🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Purchases`: Full Access, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\PurchaseCorrectiveInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Purchase Corrective Invoice Key.
$putPurchaseCorrectiveInvoices = new \SynergiTech\Sage\Model\PutPurchaseCorrectiveInvoices(); // \SynergiTech\Sage\Model\PutPurchaseCorrectiveInvoices

try {
    $result = $apiInstance->putPurchaseCorrectiveInvoicesKey($key, $putPurchaseCorrectiveInvoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseCorrectiveInvoicesApi->putPurchaseCorrectiveInvoicesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Purchase Corrective Invoice Key. | |
| **putPurchaseCorrectiveInvoices** | [**\SynergiTech\Sage\Model\PutPurchaseCorrectiveInvoices**](../Model/PutPurchaseCorrectiveInvoices.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\PurchaseCorrectiveInvoice**](../Model/PurchaseCorrectiveInvoice.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
