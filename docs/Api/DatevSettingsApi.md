# SynergiTech\Sage\DatevSettingsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDatevSettings()**](DatevSettingsApi.md#getDatevSettings) | **GET** /datev_settings | Returns all Datev Settings |
| [**putDatevSettings()**](DatevSettingsApi.md#putDatevSettings) | **PUT** /datev_settings | Updates a Datev Settings |


## `getDatevSettings()`

```php
getDatevSettings(): \SynergiTech\Sage\Model\DatevSettings
```

Returns all Datev Settings

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\DatevSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDatevSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatevSettingsApi->getDatevSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Sage\Model\DatevSettings**](../Model/DatevSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDatevSettings()`

```php
putDatevSettings($datevSettings): \SynergiTech\Sage\Model\DatevSettings
```

Updates a Datev Settings

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\DatevSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datevSettings = new \SynergiTech\Sage\Model\PutDatevSettings(); // \SynergiTech\Sage\Model\PutDatevSettings

try {
    $result = $apiInstance->putDatevSettings($datevSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatevSettingsApi->putDatevSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **datevSettings** | [**\SynergiTech\Sage\Model\PutDatevSettings**](../Model/PutDatevSettings.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\DatevSettings**](../Model/DatevSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
