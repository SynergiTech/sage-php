# SynergiTech\Sage\DatevSettingsApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDatevSettings()**](DatevSettingsApi.md#getDatevSettings) | **GET** /datev_settings | Returns all Datev Settings |
| [**putDatevSettings()**](DatevSettingsApi.md#putDatevSettings) | **PUT** /datev_settings | Updates a Datev Settings |


## `getDatevSettings()`

```php
getDatevSettings($showLegacyId): \SynergiTech\Sage\Model\DatevSettings
```

Returns all Datev Settings

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

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


$apiInstance = new SynergiTech\Sage\Api\DatevSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$showLegacyId = True; // bool | Display the legacy_id for the Datev Settings.

try {
    $result = $apiInstance->getDatevSettings($showLegacyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatevSettingsApi->getDatevSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **showLegacyId** | **bool**| Display the legacy_id for the Datev Settings. | [optional] |

### Return type

[**\SynergiTech\Sage\Model\DatevSettings**](../Model/DatevSettings.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDatevSettings()`

```php
putDatevSettings($putDatevSettings): \SynergiTech\Sage\Model\DatevSettings
```

Updates a Datev Settings

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\DatevSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$putDatevSettings = new \SynergiTech\Sage\Model\PutDatevSettings(); // \SynergiTech\Sage\Model\PutDatevSettings

try {
    $result = $apiInstance->putDatevSettings($putDatevSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatevSettingsApi->putDatevSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **putDatevSettings** | [**\SynergiTech\Sage\Model\PutDatevSettings**](../Model/PutDatevSettings.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\DatevSettings**](../Model/DatevSettings.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
