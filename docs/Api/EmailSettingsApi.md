# SynergiTech\Sage\EmailSettingsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmailSettings()**](EmailSettingsApi.md#getEmailSettings) | **GET** /email_settings | Returns all Email Settings |
| [**putEmailSettings()**](EmailSettingsApi.md#putEmailSettings) | **PUT** /email_settings | Updates a Email Settings |


## `getEmailSettings()`

```php
getEmailSettings(): \SynergiTech\Sage\Model\EmailSettings
```

Returns all Email Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEmailSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->getEmailSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Sage\Model\EmailSettings**](../Model/EmailSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEmailSettings()`

```php
putEmailSettings($emailSettings): \SynergiTech\Sage\Model\EmailSettings
```

Updates a Email Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\EmailSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$emailSettings = new \SynergiTech\Sage\Model\PutEmailSettings(); // \SynergiTech\Sage\Model\PutEmailSettings

try {
    $result = $apiInstance->putEmailSettings($emailSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailSettingsApi->putEmailSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **emailSettings** | [**\SynergiTech\Sage\Model\PutEmailSettings**](../Model/PutEmailSettings.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\EmailSettings**](../Model/EmailSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
