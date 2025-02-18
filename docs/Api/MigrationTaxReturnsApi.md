# SynergiTech\Sage\MigrationTaxReturnsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMigrationTaxReturns()**](MigrationTaxReturnsApi.md#getMigrationTaxReturns) | **GET** /migration_tax_returns | Returns all Migration Tax Returns |
| [**getMigrationTaxReturnsKey()**](MigrationTaxReturnsApi.md#getMigrationTaxReturnsKey) | **GET** /migration_tax_returns/{key} | Returns a Migration Tax Return |
| [**postMigrationTaxReturns()**](MigrationTaxReturnsApi.md#postMigrationTaxReturns) | **POST** /migration_tax_returns | Creates a Migration Tax Return |


## `getMigrationTaxReturns()`

```php
getMigrationTaxReturns($itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\MigrationTaxReturn[]
```

Returns all Migration Tax Returns

### Endpoint Availability  * Accounting Plus: 🇬🇧, 🇮🇪 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Statutory reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\MigrationTaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$itemsPerPage = 20; // int | Returns the given number of Migration Tax Returns per request.
$page = 1; // int | Go to specific page of Migration Tax Returns
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Migration Tax Returns (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getMigrationTaxReturns($itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationTaxReturnsApi->getMigrationTaxReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **itemsPerPage** | **int**| Returns the given number of Migration Tax Returns per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Migration Tax Returns | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Migration Tax Returns (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\MigrationTaxReturn[]**](../Model/MigrationTaxReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMigrationTaxReturnsKey()`

```php
getMigrationTaxReturnsKey($key, $attributes): \SynergiTech\Sage\Model\MigrationTaxReturn
```

Returns a Migration Tax Return

### Endpoint Availability  * Accounting Plus: 🇬🇧, 🇮🇪 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Statutory reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\MigrationTaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Migration Tax Return Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Migration Tax Return (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getMigrationTaxReturnsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationTaxReturnsApi->getMigrationTaxReturnsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Migration Tax Return Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Migration Tax Return (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\MigrationTaxReturn**](../Model/MigrationTaxReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMigrationTaxReturns()`

```php
postMigrationTaxReturns($migrationTaxReturns): \SynergiTech\Sage\Model\MigrationTaxReturn
```

Creates a Migration Tax Return

### Endpoint Availability  * Accounting Plus: 🇬🇧, 🇮🇪 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Statutory reporting`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\MigrationTaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$migrationTaxReturns = new \SynergiTech\Sage\Model\PostMigrationTaxReturns(); // \SynergiTech\Sage\Model\PostMigrationTaxReturns

try {
    $result = $apiInstance->postMigrationTaxReturns($migrationTaxReturns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationTaxReturnsApi->postMigrationTaxReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **migrationTaxReturns** | [**\SynergiTech\Sage\Model\PostMigrationTaxReturns**](../Model/PostMigrationTaxReturns.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\MigrationTaxReturn**](../Model/MigrationTaxReturn.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
