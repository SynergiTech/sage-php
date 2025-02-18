# SynergiTech\Sage\BusinessSettingsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBusinessSettings()**](BusinessSettingsApi.md#getBusinessSettings) | **GET** /business_settings | Returns all Business Settings |
| [**putBusinessSettings()**](BusinessSettingsApi.md#putBusinessSettings) | **PUT** /business_settings | Updates a Business Settings |


## `getBusinessSettings()`

```php
getBusinessSettings(): \SynergiTech\Sage\Model\BusinessSettings
```

Returns all Business Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BusinessSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBusinessSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessSettingsApi->getBusinessSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Sage\Model\BusinessSettings**](../Model/BusinessSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBusinessSettings()`

```php
putBusinessSettings($businessSettings): \SynergiTech\Sage\Model\BusinessSettings
```

Updates a Business Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BusinessSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$businessSettings = new \SynergiTech\Sage\Model\PutBusinessSettings(); // \SynergiTech\Sage\Model\PutBusinessSettings

try {
    $result = $apiInstance->putBusinessSettings($businessSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessSettingsApi->putBusinessSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **businessSettings** | [**\SynergiTech\Sage\Model\PutBusinessSettings**](../Model/PutBusinessSettings.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BusinessSettings**](../Model/BusinessSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
