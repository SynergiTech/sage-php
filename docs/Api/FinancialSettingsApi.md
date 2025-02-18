# SynergiTech\Sage\FinancialSettingsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFinancialSettings()**](FinancialSettingsApi.md#getFinancialSettings) | **GET** /financial_settings | Returns all Financial Settings |
| [**putFinancialSettings()**](FinancialSettingsApi.md#putFinancialSettings) | **PUT** /financial_settings | Updates a Financial Settings |


## `getFinancialSettings()`

```php
getFinancialSettings(): \SynergiTech\Sage\Model\FinancialSettings
```

Returns all Financial Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\FinancialSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFinancialSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialSettingsApi->getFinancialSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Sage\Model\FinancialSettings**](../Model/FinancialSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putFinancialSettings()`

```php
putFinancialSettings($financialSettings): \SynergiTech\Sage\Model\FinancialSettings
```

Updates a Financial Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\FinancialSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$financialSettings = new \SynergiTech\Sage\Model\PutFinancialSettings(); // \SynergiTech\Sage\Model\PutFinancialSettings

try {
    $result = $apiInstance->putFinancialSettings($financialSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialSettingsApi->putFinancialSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **financialSettings** | [**\SynergiTech\Sage\Model\PutFinancialSettings**](../Model/PutFinancialSettings.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\FinancialSettings**](../Model/FinancialSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
