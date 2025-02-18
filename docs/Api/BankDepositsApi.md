# SynergiTech\Sage\BankDepositsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBankDepositsKey()**](BankDepositsApi.md#deleteBankDepositsKey) | **DELETE** /bank_deposits/{key} | Deletes a Bank Deposit |
| [**getBankDeposits()**](BankDepositsApi.md#getBankDeposits) | **GET** /bank_deposits | Returns all Bank Deposits |
| [**getBankDepositsKey()**](BankDepositsApi.md#getBankDepositsKey) | **GET** /bank_deposits/{key} | Returns a Bank Deposit |
| [**postBankDeposits()**](BankDepositsApi.md#postBankDeposits) | **POST** /bank_deposits | Creates a Bank Deposit |


## `deleteBankDepositsKey()`

```php
deleteBankDepositsKey($key)
```

Deletes a Bank Deposit

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Deposit Key.

try {
    $apiInstance->deleteBankDepositsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling BankDepositsApi->deleteBankDepositsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Deposit Key. | |

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

## `getBankDeposits()`

```php
getBankDeposits($updatedOrCreatedSince, $deletedSince, $fromDate, $toDate, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\BankDeposit[]
```

Returns all Bank Deposits

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Deposits changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Deposits deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Deposits dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Deposits dates
$itemsPerPage = 20; // int | Returns the given number of Deposits per request.
$page = 1; // int | Go to specific page of Deposits
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Deposits (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getBankDeposits($updatedOrCreatedSince, $deletedSince, $fromDate, $toDate, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankDepositsApi->getBankDeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Deposits changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Deposits deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Deposits dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Deposits dates | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Deposits per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Deposits | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Deposits (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankDeposit[]**](../Model/BankDeposit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankDepositsKey()`

```php
getBankDepositsKey($key, $nestedAttributes, $attributes): \SynergiTech\Sage\Model\BankDeposit
```

Returns a Bank Deposit

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Deposit Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Deposit (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Deposit (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBankDepositsKey($key, $nestedAttributes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankDepositsApi->getBankDepositsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Deposit Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Deposit (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Deposit (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankDeposit**](../Model/BankDeposit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBankDeposits()`

```php
postBankDeposits($bankDeposits): \SynergiTech\Sage\Model\BankDeposit
```

Creates a Bank Deposit

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankDeposits = new \SynergiTech\Sage\Model\PostBankDeposits(); // \SynergiTech\Sage\Model\PostBankDeposits

try {
    $result = $apiInstance->postBankDeposits($bankDeposits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankDepositsApi->postBankDeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankDeposits** | [**\SynergiTech\Sage\Model\PostBankDeposits**](../Model/PostBankDeposits.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BankDeposit**](../Model/BankDeposit.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
