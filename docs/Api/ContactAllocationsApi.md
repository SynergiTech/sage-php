# SynergiTech\Sage\ContactAllocationsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteContactAllocationsKey()**](ContactAllocationsApi.md#deleteContactAllocationsKey) | **DELETE** /contact_allocations/{key} | Deletes a Contact Allocation |
| [**getContactAllocations()**](ContactAllocationsApi.md#getContactAllocations) | **GET** /contact_allocations | Returns all Contact Allocations |
| [**getContactAllocationsKey()**](ContactAllocationsApi.md#getContactAllocationsKey) | **GET** /contact_allocations/{key} | Returns a Contact Allocation |
| [**postContactAllocations()**](ContactAllocationsApi.md#postContactAllocations) | **POST** /contact_allocations | Creates a Contact Allocation |
| [**putContactAllocationsKey()**](ContactAllocationsApi.md#putContactAllocationsKey) | **PUT** /contact_allocations/{key} | Updates a Contact Allocation |


## `deleteContactAllocationsKey()`

```php
deleteContactAllocationsKey($key)
```

Deletes a Contact Allocation

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, and `Contacts`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Allocation Key.

try {
    $apiInstance->deleteContactAllocationsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ContactAllocationsApi->deleteContactAllocationsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Allocation Key. | |

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

## `getContactAllocations()`

```php
getContactAllocations($contactId, $transactionTypeId, $updatedOrCreatedSince, $deletedSince, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\ContactAllocation[]
```

Returns all Contact Allocations

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, and `Contacts`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$transactionTypeId = 'transactionTypeId_example'; // string | Use this to filter by transaction type id
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Allocations changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Allocations deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$itemsPerPage = 20; // int | Returns the given number of Allocations per request.
$page = 1; // int | Go to specific page of Allocations
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Allocations (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getContactAllocations($contactId, $transactionTypeId, $updatedOrCreatedSince, $deletedSince, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAllocationsApi->getContactAllocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **transactionTypeId** | **string**| Use this to filter by transaction type id | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Allocations changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Allocations deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Allocations per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Allocations | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Allocations (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactAllocation[]**](../Model/ContactAllocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactAllocationsKey()`

```php
getContactAllocationsKey($key, $attributes): \SynergiTech\Sage\Model\ContactAllocation
```

Returns a Contact Allocation

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, and `Contacts`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Allocation Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Allocation (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactAllocationsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAllocationsApi->getContactAllocationsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Allocation Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Allocation (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactAllocation**](../Model/ContactAllocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactAllocations()`

```php
postContactAllocations($contactAllocations): \SynergiTech\Sage\Model\ContactAllocation
```

Creates a Contact Allocation

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, and `Contacts`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactAllocations = new \SynergiTech\Sage\Model\PostContactAllocations(); // \SynergiTech\Sage\Model\PostContactAllocations

try {
    $result = $apiInstance->postContactAllocations($contactAllocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAllocationsApi->postContactAllocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactAllocations** | [**\SynergiTech\Sage\Model\PostContactAllocations**](../Model/PostContactAllocations.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ContactAllocation**](../Model/ContactAllocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putContactAllocationsKey()`

```php
putContactAllocationsKey($key, $contactAllocations): \SynergiTech\Sage\Model\ContactAllocation
```

Updates a Contact Allocation

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, and `Contacts`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Allocation Key.
$contactAllocations = new \SynergiTech\Sage\Model\PutContactAllocations(); // \SynergiTech\Sage\Model\PutContactAllocations

try {
    $result = $apiInstance->putContactAllocationsKey($key, $contactAllocations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactAllocationsApi->putContactAllocationsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Allocation Key. | |
| **contactAllocations** | [**\SynergiTech\Sage\Model\PutContactAllocations**](../Model/PutContactAllocations.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ContactAllocation**](../Model/ContactAllocation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
