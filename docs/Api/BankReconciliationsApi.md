# SynergiTech\Sage\BankReconciliationsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBankReconciliations()**](BankReconciliationsApi.md#getBankReconciliations) | **GET** /bank_reconciliations | Returns all Bank Reconciliations |
| [**getBankReconciliationsKey()**](BankReconciliationsApi.md#getBankReconciliationsKey) | **GET** /bank_reconciliations/{key} | Returns a Bank Reconciliation |
| [**postBankReconciliations()**](BankReconciliationsApi.md#postBankReconciliations) | **POST** /bank_reconciliations | Creates a Bank Reconciliation |
| [**putBankReconciliationsKey()**](BankReconciliationsApi.md#putBankReconciliationsKey) | **PUT** /bank_reconciliations/{key} | Updates a Bank Reconciliation |


## `getBankReconciliations()`

```php
getBankReconciliations($updatedOrCreatedSince, $bankAccountId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\BankReconciliation[]
```

Returns all Bank Reconciliations

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankReconciliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Bank Reconciliations changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$bankAccountId = 'bankAccountId_example'; // string | Use this to filter by bank account id
$itemsPerPage = 20; // int | Returns the given number of Bank Reconciliations per request.
$page = 1; // int | Go to specific page of Bank Reconciliations
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Bank Reconciliations (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBankReconciliations($updatedOrCreatedSince, $bankAccountId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankReconciliationsApi->getBankReconciliations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Bank Reconciliations changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **bankAccountId** | **string**| Use this to filter by bank account id | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Bank Reconciliations per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Bank Reconciliations | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Bank Reconciliations (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankReconciliation[]**](../Model/BankReconciliation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankReconciliationsKey()`

```php
getBankReconciliationsKey($key, $attributes): \SynergiTech\Sage\Model\BankReconciliation
```

Returns a Bank Reconciliation

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankReconciliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Reconciliation Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Bank Reconciliation (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBankReconciliationsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankReconciliationsApi->getBankReconciliationsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Reconciliation Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Bank Reconciliation (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankReconciliation**](../Model/BankReconciliation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBankReconciliations()`

```php
postBankReconciliations($bankReconciliations): \SynergiTech\Sage\Model\BankReconciliation
```

Creates a Bank Reconciliation

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankReconciliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankReconciliations = new \SynergiTech\Sage\Model\PostBankReconciliations(); // \SynergiTech\Sage\Model\PostBankReconciliations

try {
    $result = $apiInstance->postBankReconciliations($bankReconciliations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankReconciliationsApi->postBankReconciliations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankReconciliations** | [**\SynergiTech\Sage\Model\PostBankReconciliations**](../Model/PostBankReconciliations.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BankReconciliation**](../Model/BankReconciliation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBankReconciliationsKey()`

```php
putBankReconciliationsKey($key, $bankReconciliations): \SynergiTech\Sage\Model\BankReconciliation
```

Updates a Bank Reconciliation

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankReconciliationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Reconciliation Key.
$bankReconciliations = new \SynergiTech\Sage\Model\PutBankReconciliations(); // \SynergiTech\Sage\Model\PutBankReconciliations

try {
    $result = $apiInstance->putBankReconciliationsKey($key, $bankReconciliations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankReconciliationsApi->putBankReconciliationsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Reconciliation Key. | |
| **bankReconciliations** | [**\SynergiTech\Sage\Model\PutBankReconciliations**](../Model/PutBankReconciliations.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BankReconciliation**](../Model/BankReconciliation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
