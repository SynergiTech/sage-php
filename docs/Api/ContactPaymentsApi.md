# SynergiTech\Sage\ContactPaymentsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteContactPaymentsKey()**](ContactPaymentsApi.md#deleteContactPaymentsKey) | **DELETE** /contact_payments/{key} | Deletes a Contact Payment |
| [**getContactPayments()**](ContactPaymentsApi.md#getContactPayments) | **GET** /contact_payments | Returns all Contact Payments |
| [**getContactPaymentsKey()**](ContactPaymentsApi.md#getContactPaymentsKey) | **GET** /contact_payments/{key} | Returns a Contact Payment |
| [**postContactPayments()**](ContactPaymentsApi.md#postContactPayments) | **POST** /contact_payments | Creates a Contact Payment |
| [**putContactPaymentsKey()**](ContactPaymentsApi.md#putContactPaymentsKey) | **PUT** /contact_payments/{key} | Updates a Contact Payment |


## `deleteContactPaymentsKey()`

```php
deleteContactPaymentsKey($key)
```

Deletes a Contact Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Payment Key.

try {
    $apiInstance->deleteContactPaymentsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ContactPaymentsApi->deleteContactPaymentsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Payment Key. | |

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

## `getContactPayments()`

```php
getContactPayments($contactId, $bankAccountId, $transactionTypeId, $updatedOrCreatedSince, $deletedSince, $fromDate, $toDate, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\ContactPayment[]
```

Returns all Contact Payments

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$bankAccountId = 'bankAccountId_example'; // string | Use this to filter by bank account id
$transactionTypeId = 'transactionTypeId_example'; // string | Use this to filter by transaction type id
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Artefact Payments changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Artefact Payments deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Artefact Payments dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Artefact Payments dates
$itemsPerPage = 20; // int | Returns the given number of Artefact Payments per request.
$page = 1; // int | Go to specific page of Artefact Payments
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Artefact Payments (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getContactPayments($contactId, $bankAccountId, $transactionTypeId, $updatedOrCreatedSince, $deletedSince, $fromDate, $toDate, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPaymentsApi->getContactPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **bankAccountId** | **string**| Use this to filter by bank account id | [optional] |
| **transactionTypeId** | **string**| Use this to filter by transaction type id | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Artefact Payments changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Artefact Payments deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Artefact Payments dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Artefact Payments dates | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Artefact Payments per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Artefact Payments | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Artefact Payments (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactPayment[]**](../Model/ContactPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactPaymentsKey()`

```php
getContactPaymentsKey($key, $attributes): \SynergiTech\Sage\Model\ContactPayment
```

Returns a Contact Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Payment Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Artefact Payment (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactPaymentsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPaymentsApi->getContactPaymentsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Payment Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Artefact Payment (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactPayment**](../Model/ContactPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactPayments()`

```php
postContactPayments($contactPayments): \SynergiTech\Sage\Model\ContactPayment
```

Creates a Contact Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactPayments = new \SynergiTech\Sage\Model\PostContactPayments(); // \SynergiTech\Sage\Model\PostContactPayments

try {
    $result = $apiInstance->postContactPayments($contactPayments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPaymentsApi->postContactPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactPayments** | [**\SynergiTech\Sage\Model\PostContactPayments**](../Model/PostContactPayments.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ContactPayment**](../Model/ContactPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putContactPaymentsKey()`

```php
putContactPaymentsKey($key, $contactPayments): \SynergiTech\Sage\Model\ContactPayment
```

Updates a Contact Payment

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Payment Key.
$contactPayments = new \SynergiTech\Sage\Model\PutContactPayments(); // \SynergiTech\Sage\Model\PutContactPayments

try {
    $result = $apiInstance->putContactPaymentsKey($key, $contactPayments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPaymentsApi->putContactPaymentsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Payment Key. | |
| **contactPayments** | [**\SynergiTech\Sage\Model\PutContactPayments**](../Model/PutContactPayments.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ContactPayment**](../Model/ContactPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
