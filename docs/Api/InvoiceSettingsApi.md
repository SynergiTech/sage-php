# SynergiTech\Sage\InvoiceSettingsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInvoiceSettings()**](InvoiceSettingsApi.md#getInvoiceSettings) | **GET** /invoice_settings | Returns all Invoice Settings |
| [**putInvoiceSettings()**](InvoiceSettingsApi.md#putInvoiceSettings) | **PUT** /invoice_settings | Updates a Invoice Settings |


## `getInvoiceSettings()`

```php
getInvoiceSettings(): \SynergiTech\Sage\Model\InvoiceSettings
```

Returns all Invoice Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\InvoiceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getInvoiceSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSettingsApi->getInvoiceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Sage\Model\InvoiceSettings**](../Model/InvoiceSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putInvoiceSettings()`

```php
putInvoiceSettings($invoiceSettings): \SynergiTech\Sage\Model\InvoiceSettings
```

Updates a Invoice Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\InvoiceSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invoiceSettings = new \SynergiTech\Sage\Model\PutInvoiceSettings(); // \SynergiTech\Sage\Model\PutInvoiceSettings

try {
    $result = $apiInstance->putInvoiceSettings($invoiceSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceSettingsApi->putInvoiceSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoiceSettings** | [**\SynergiTech\Sage\Model\PutInvoiceSettings**](../Model/PutInvoiceSettings.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\InvoiceSettings**](../Model/InvoiceSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
