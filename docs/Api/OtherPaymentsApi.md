# SynergiTech\Sage\OtherPaymentsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOtherPaymentsKey()**](OtherPaymentsApi.md#deleteOtherPaymentsKey) | **DELETE** /other_payments/{key} | Deletes a Other Payment |
| [**getOtherPayments()**](OtherPaymentsApi.md#getOtherPayments) | **GET** /other_payments | Returns all Other Payments |
| [**getOtherPaymentsKey()**](OtherPaymentsApi.md#getOtherPaymentsKey) | **GET** /other_payments/{key} | Returns a Other Payment |
| [**postOtherPayments()**](OtherPaymentsApi.md#postOtherPayments) | **POST** /other_payments | Creates a Other Payment |
| [**putOtherPaymentsKey()**](OtherPaymentsApi.md#putOtherPaymentsKey) | **PUT** /other_payments/{key} | Updates a Other Payment |


## `deleteOtherPaymentsKey()`

```php
deleteOtherPaymentsKey($key)
```

Deletes a Other Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Other Payment Key.

try {
    $apiInstance->deleteOtherPaymentsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->deleteOtherPaymentsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Other Payment Key. | |

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

## `getOtherPayments()`

```php
getOtherPayments($bankAccountId, $contactId, $deletedSince, $fromDate, $hasAttachments, $toDate, $transactionTypeId, $updatedOrCreatedSince, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\OtherPayment[]
```

Returns all Other Payments

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankAccountId = 'bankAccountId_example'; // string | Use this to filter by bank account id
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Payments deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Payments dates
$hasAttachments = True; // bool | Use this to filter Payments by whether they have attachments or not
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Payments dates
$transactionTypeId = 'transactionTypeId_example'; // string | Use this to filter by transaction type id
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Payments changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$itemsPerPage = 20; // int | Returns the given number of Payments per request.
$page = 1; // int | Go to specific page of Payments
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Payments (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getOtherPayments($bankAccountId, $contactId, $deletedSince, $fromDate, $hasAttachments, $toDate, $transactionTypeId, $updatedOrCreatedSince, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->getOtherPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankAccountId** | **string**| Use this to filter by bank account id | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Payments deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Payments dates | [optional] |
| **hasAttachments** | **bool**| Use this to filter Payments by whether they have attachments or not | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Payments dates | [optional] |
| **transactionTypeId** | **string**| Use this to filter by transaction type id | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Payments changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Payments per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Payments | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Payments (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\OtherPayment[]**](../Model/OtherPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOtherPaymentsKey()`

```php
getOtherPaymentsKey($key, $nestedAttributes, $showAnalysisTypes, $attributes): \SynergiTech\Sage\Model\OtherPayment
```

Returns a Other Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Other Payment Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Payment (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$showAnalysisTypes = True; // bool | Use this to show the line item analysis types
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Payment (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getOtherPaymentsKey($key, $nestedAttributes, $showAnalysisTypes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->getOtherPaymentsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Other Payment Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Payment (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **showAnalysisTypes** | **bool**| Use this to show the line item analysis types | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Payment (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\OtherPayment**](../Model/OtherPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOtherPayments()`

```php
postOtherPayments($otherPayments): \SynergiTech\Sage\Model\OtherPayment
```

Creates a Other Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$otherPayments = new \SynergiTech\Sage\Model\PostOtherPayments(); // \SynergiTech\Sage\Model\PostOtherPayments

try {
    $result = $apiInstance->postOtherPayments($otherPayments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->postOtherPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **otherPayments** | [**\SynergiTech\Sage\Model\PostOtherPayments**](../Model/PostOtherPayments.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\OtherPayment**](../Model/OtherPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putOtherPaymentsKey()`

```php
putOtherPaymentsKey($key, $otherPayments): \SynergiTech\Sage\Model\OtherPayment
```

Updates a Other Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\OtherPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Other Payment Key.
$otherPayments = new \SynergiTech\Sage\Model\PutOtherPayments(); // \SynergiTech\Sage\Model\PutOtherPayments

try {
    $result = $apiInstance->putOtherPaymentsKey($key, $otherPayments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherPaymentsApi->putOtherPaymentsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Other Payment Key. | |
| **otherPayments** | [**\SynergiTech\Sage\Model\PutOtherPayments**](../Model/PutOtherPayments.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\OtherPayment**](../Model/OtherPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
