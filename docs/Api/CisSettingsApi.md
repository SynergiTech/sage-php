# SynergiTech\Sage\CisSettingsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCisSettings()**](CisSettingsApi.md#getCisSettings) | **GET** /cis_settings | Returns all Cis Settings |
| [**putCisSettings()**](CisSettingsApi.md#putCisSettings) | **PUT** /cis_settings | Updates a Cis Settings |


## `getCisSettings()`

```php
getCisSettings(): \SynergiTech\Sage\Model\CisSettings
```

Returns all Cis Settings

### Endpoint Availability  * Accounting Plus: 🇬🇧 * Accounting Standard: 🇬🇧 * Accounting Start: 🇬🇧  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\CisSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCisSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisSettingsApi->getCisSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Sage\Model\CisSettings**](../Model/CisSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCisSettings()`

```php
putCisSettings($cisSettings): \SynergiTech\Sage\Model\CisSettings
```

Updates a Cis Settings

### Endpoint Availability  * Accounting Plus: 🇬🇧 * Accounting Standard: 🇬🇧 * Accounting Start: 🇬🇧  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\CisSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cisSettings = new \SynergiTech\Sage\Model\PutCisSettings(); // \SynergiTech\Sage\Model\PutCisSettings

try {
    $result = $apiInstance->putCisSettings($cisSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CisSettingsApi->putCisSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cisSettings** | [**\SynergiTech\Sage\Model\PutCisSettings**](../Model/PutCisSettings.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\CisSettings**](../Model/CisSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
