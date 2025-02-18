# SynergiTech\Sage\ContactOpeningBalancesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteContactOpeningBalancesKey()**](ContactOpeningBalancesApi.md#deleteContactOpeningBalancesKey) | **DELETE** /contact_opening_balances/{key} | Deletes a Contact Opening Balance |
| [**getContactOpeningBalances()**](ContactOpeningBalancesApi.md#getContactOpeningBalances) | **GET** /contact_opening_balances | Returns all Contact Opening Balances |
| [**getContactOpeningBalancesKey()**](ContactOpeningBalancesApi.md#getContactOpeningBalancesKey) | **GET** /contact_opening_balances/{key} | Returns a Contact Opening Balance |
| [**postContactOpeningBalances()**](ContactOpeningBalancesApi.md#postContactOpeningBalances) | **POST** /contact_opening_balances | Creates a Contact Opening Balance |
| [**putContactOpeningBalancesKey()**](ContactOpeningBalancesApi.md#putContactOpeningBalancesKey) | **PUT** /contact_opening_balances/{key} | Updates a Contact Opening Balance |


## `deleteContactOpeningBalancesKey()`

```php
deleteContactOpeningBalancesKey($key)
```

Deletes a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Opening Balance Key.

try {
    $apiInstance->deleteContactOpeningBalancesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->deleteContactOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Opening Balance Key. | |

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

## `getContactOpeningBalances()`

```php
getContactOpeningBalances($updatedOrCreatedSince, $deletedSince, $contactTypeId, $contactId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\ContactOpeningBalance[]
```

Returns all Contact Opening Balances

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$contactTypeId = 'contactTypeId_example'; // string | Use this to filter by contact type id
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$itemsPerPage = 20; // int | Returns the given number of Batch Entries per request.
$page = 1; // int | Go to specific page of Batch Entries
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Batch Entries (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactOpeningBalances($updatedOrCreatedSince, $deletedSince, $contactTypeId, $contactId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->getContactOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **contactTypeId** | **string**| Use this to filter by contact type id | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Batch Entries per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Batch Entries | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Batch Entries (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactOpeningBalance[]**](../Model/ContactOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactOpeningBalancesKey()`

```php
getContactOpeningBalancesKey($key, $attributes): \SynergiTech\Sage\Model\ContactOpeningBalance
```

Returns a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Opening Balance Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Batch Entry (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactOpeningBalancesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->getContactOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Opening Balance Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Batch Entry (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactOpeningBalance**](../Model/ContactOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactOpeningBalances()`

```php
postContactOpeningBalances($contactOpeningBalances): \SynergiTech\Sage\Model\ContactOpeningBalance
```

Creates a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactOpeningBalances = new \SynergiTech\Sage\Model\PostContactOpeningBalances(); // \SynergiTech\Sage\Model\PostContactOpeningBalances

try {
    $result = $apiInstance->postContactOpeningBalances($contactOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->postContactOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactOpeningBalances** | [**\SynergiTech\Sage\Model\PostContactOpeningBalances**](../Model/PostContactOpeningBalances.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ContactOpeningBalance**](../Model/ContactOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putContactOpeningBalancesKey()`

```php
putContactOpeningBalancesKey($key, $contactOpeningBalances): \SynergiTech\Sage\Model\ContactOpeningBalance
```

Updates a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Opening Balance Key.
$contactOpeningBalances = new \SynergiTech\Sage\Model\PutContactOpeningBalances(); // \SynergiTech\Sage\Model\PutContactOpeningBalances

try {
    $result = $apiInstance->putContactOpeningBalancesKey($key, $contactOpeningBalances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->putContactOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Opening Balance Key. | |
| **contactOpeningBalances** | [**\SynergiTech\Sage\Model\PutContactOpeningBalances**](../Model/PutContactOpeningBalances.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ContactOpeningBalance**](../Model/ContactOpeningBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
