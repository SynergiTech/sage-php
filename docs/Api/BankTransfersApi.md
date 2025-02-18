# SynergiTech\Sage\BankTransfersApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBankTransfersKey()**](BankTransfersApi.md#deleteBankTransfersKey) | **DELETE** /bank_transfers/{key} | Deletes a Bank Transfer |
| [**getBankTransfers()**](BankTransfersApi.md#getBankTransfers) | **GET** /bank_transfers | Returns all Bank Transfers |
| [**getBankTransfersKey()**](BankTransfersApi.md#getBankTransfersKey) | **GET** /bank_transfers/{key} | Returns a Bank Transfer |
| [**postBankTransfers()**](BankTransfersApi.md#postBankTransfers) | **POST** /bank_transfers | Creates a Bank Transfer |
| [**putBankTransfersKey()**](BankTransfersApi.md#putBankTransfersKey) | **PUT** /bank_transfers/{key} | Updates a Bank Transfer |


## `deleteBankTransfersKey()`

```php
deleteBankTransfersKey($key)
```

Deletes a Bank Transfer

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Transfer Key.

try {
    $apiInstance->deleteBankTransfersKey($key);
} catch (Exception $e) {
    echo 'Exception when calling BankTransfersApi->deleteBankTransfersKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Transfer Key. | |

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

## `getBankTransfers()`

```php
getBankTransfers($updatedOrCreatedSince, $deletedSince, $fromDate, $toDate, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\BankTransfer[]
```

Returns all Bank Transfers

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Bank Transfers changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Bank Transfers deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Bank Transfers dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Bank Transfers dates
$itemsPerPage = 20; // int | Returns the given number of Bank Transfers per request.
$page = 1; // int | Go to specific page of Bank Transfers
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Bank Transfers (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getBankTransfers($updatedOrCreatedSince, $deletedSince, $fromDate, $toDate, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransfersApi->getBankTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Bank Transfers changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Bank Transfers deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Bank Transfers dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Bank Transfers dates | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Bank Transfers per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Bank Transfers | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Bank Transfers (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankTransfer[]**](../Model/BankTransfer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankTransfersKey()`

```php
getBankTransfersKey($key, $nestedAttributes, $attributes): \SynergiTech\Sage\Model\BankTransfer
```

Returns a Bank Transfer

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Transfer Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Bank Transfer (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Bank Transfer (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBankTransfersKey($key, $nestedAttributes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransfersApi->getBankTransfersKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Transfer Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Bank Transfer (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Bank Transfer (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankTransfer**](../Model/BankTransfer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBankTransfers()`

```php
postBankTransfers($bankTransfers): \SynergiTech\Sage\Model\BankTransfer
```

Creates a Bank Transfer

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankTransfers = new \SynergiTech\Sage\Model\PostBankTransfers(); // \SynergiTech\Sage\Model\PostBankTransfers

try {
    $result = $apiInstance->postBankTransfers($bankTransfers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransfersApi->postBankTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankTransfers** | [**\SynergiTech\Sage\Model\PostBankTransfers**](../Model/PostBankTransfers.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BankTransfer**](../Model/BankTransfer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBankTransfersKey()`

```php
putBankTransfersKey($key, $bankTransfers): \SynergiTech\Sage\Model\BankTransfer
```

Updates a Bank Transfer

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankTransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Transfer Key.
$bankTransfers = new \SynergiTech\Sage\Model\PutBankTransfers(); // \SynergiTech\Sage\Model\PutBankTransfers

try {
    $result = $apiInstance->putBankTransfersKey($key, $bankTransfers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankTransfersApi->putBankTransfersKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Transfer Key. | |
| **bankTransfers** | [**\SynergiTech\Sage\Model\PutBankTransfers**](../Model/PutBankTransfers.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BankTransfer**](../Model/BankTransfer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
