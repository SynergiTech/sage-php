# SynergiTech\Sage\MigrationTaxReturnsApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMigrationTaxReturns()**](MigrationTaxReturnsApi.md#getMigrationTaxReturns) | **GET** /migration_tax_returns | Returns all Migration Tax Returns |
| [**getMigrationTaxReturnsKey()**](MigrationTaxReturnsApi.md#getMigrationTaxReturnsKey) | **GET** /migration_tax_returns/{key} | Returns a Migration Tax Return |
| [**postMigrationTaxReturns()**](MigrationTaxReturnsApi.md#postMigrationTaxReturns) | **POST** /migration_tax_returns | Creates a Migration Tax Return |


## `getMigrationTaxReturns()`

```php
getMigrationTaxReturns($showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\MigrationTaxReturn[]
```

Returns all Migration Tax Returns

### Endpoint Availability  * Accounting Plus: 🇬🇧, 🇮🇪 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Statutory Reporting`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\MigrationTaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showLegacyId = True; // bool | Display the legacy_id for the Migration Tax Returns.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Migration Tax Returns per request.
$page = 1; // int | Format - int32. Go to specific page of Migration Tax Returns
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Migration Tax Returns (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getMigrationTaxReturns($showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationTaxReturnsApi->getMigrationTaxReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showLegacyId** | **bool**| Display the legacy_id for the Migration Tax Returns. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Migration Tax Returns per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Migration Tax Returns | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Migration Tax Returns (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\MigrationTaxReturn[]**](../Model/MigrationTaxReturn.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMigrationTaxReturnsKey()`

```php
getMigrationTaxReturnsKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\MigrationTaxReturn
```

Returns a Migration Tax Return

### Endpoint Availability  * Accounting Plus: 🇬🇧, 🇮🇪 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Statutory Reporting`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\MigrationTaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Migration Tax Return Key.
$showLegacyId = True; // bool | Display the legacy_id for the Migration Tax Return.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Migration Tax Return (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getMigrationTaxReturnsKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationTaxReturnsApi->getMigrationTaxReturnsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Migration Tax Return Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Migration Tax Return. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Migration Tax Return (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\MigrationTaxReturn**](../Model/MigrationTaxReturn.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMigrationTaxReturns()`

```php
postMigrationTaxReturns($postMigrationTaxReturns): \SynergiTech\Sage\Model\MigrationTaxReturn
```

Creates a Migration Tax Return

### Endpoint Availability  * Accounting Plus: 🇬🇧, 🇮🇪 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Statutory Reporting`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\MigrationTaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postMigrationTaxReturns = new \SynergiTech\Sage\Model\PostMigrationTaxReturns(); // \SynergiTech\Sage\Model\PostMigrationTaxReturns

try {
    $result = $apiInstance->postMigrationTaxReturns($postMigrationTaxReturns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationTaxReturnsApi->postMigrationTaxReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postMigrationTaxReturns** | [**\SynergiTech\Sage\Model\PostMigrationTaxReturns**](../Model/PostMigrationTaxReturns.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\MigrationTaxReturn**](../Model/MigrationTaxReturn.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
