# SynergiTech\Sage\HostedArtefactPaymentSettingsApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteHostedArtefactPaymentSettingsKey()**](HostedArtefactPaymentSettingsApi.md#deleteHostedArtefactPaymentSettingsKey) | **DELETE** /hosted_artefact_payment_settings/{key} | Deletes a Hosted Artefact Payment Setting |
| [**getHostedArtefactPaymentSettings()**](HostedArtefactPaymentSettingsApi.md#getHostedArtefactPaymentSettings) | **GET** /hosted_artefact_payment_settings | Returns all Hosted Artefact Payment Settings |
| [**getHostedArtefactPaymentSettingsKey()**](HostedArtefactPaymentSettingsApi.md#getHostedArtefactPaymentSettingsKey) | **GET** /hosted_artefact_payment_settings/{key} | Returns a Hosted Artefact Payment Setting |
| [**postHostedArtefactPaymentSettings()**](HostedArtefactPaymentSettingsApi.md#postHostedArtefactPaymentSettings) | **POST** /hosted_artefact_payment_settings | Creates a Hosted Artefact Payment Setting |


## `deleteHostedArtefactPaymentSettingsKey()`

```php
deleteHostedArtefactPaymentSettingsKey($key)
```

Deletes a Hosted Artefact Payment Setting

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

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


$apiInstance = new SynergiTech\Sage\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Hosted Artefact Payment Setting Key.

try {
    $apiInstance->deleteHostedArtefactPaymentSettingsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->deleteHostedArtefactPaymentSettingsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Hosted Artefact Payment Setting Key. | |

### Return type

void (empty response body)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostedArtefactPaymentSettings()`

```php
getHostedArtefactPaymentSettings($objectGuid, $showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\HostedArtefactPaymentSetting[]
```

Returns all Hosted Artefact Payment Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$objectGuid = 'objectGuid_example'; // string | Use this to filter out hosted artefact payment settings by the guid of the object it is associated to.
$showLegacyId = True; // bool | Display the legacy_id for the Hosted Artefact Payment Settings.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Hosted Artefact Payment Settings per request.
$page = 1; // int | Format - int32. Go to specific page of Hosted Artefact Payment Settings
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Hosted Artefact Payment Settings (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getHostedArtefactPaymentSettings($objectGuid, $showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->getHostedArtefactPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **objectGuid** | **string**| Use this to filter out hosted artefact payment settings by the guid of the object it is associated to. | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Hosted Artefact Payment Settings. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Hosted Artefact Payment Settings per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Hosted Artefact Payment Settings | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Hosted Artefact Payment Settings (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\HostedArtefactPaymentSetting[]**](../Model/HostedArtefactPaymentSetting.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostedArtefactPaymentSettingsKey()`

```php
getHostedArtefactPaymentSettingsKey($key, $showLegacyId, $attributes): \SynergiTech\Sage\Model\HostedArtefactPaymentSetting
```

Returns a Hosted Artefact Payment Setting

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The Hosted Artefact Payment Setting Key.
$showLegacyId = True; // bool | Display the legacy_id for the Hosted Artefact Payment Setting.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Hosted Artefact Payment Setting (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getHostedArtefactPaymentSettingsKey($key, $showLegacyId, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->getHostedArtefactPaymentSettingsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Hosted Artefact Payment Setting Key. | |
| **showLegacyId** | **bool**| Display the legacy_id for the Hosted Artefact Payment Setting. | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Hosted Artefact Payment Setting (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\HostedArtefactPaymentSetting**](../Model/HostedArtefactPaymentSetting.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postHostedArtefactPaymentSettings()`

```php
postHostedArtefactPaymentSettings($postHostedArtefactPaymentSettings): \SynergiTech\Sage\Model\HostedArtefactPaymentSetting
```

Creates a Hosted Artefact Payment Setting

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

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


$apiInstance = new SynergiTech\Sage\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postHostedArtefactPaymentSettings = new \SynergiTech\Sage\Model\PostHostedArtefactPaymentSettings(); // \SynergiTech\Sage\Model\PostHostedArtefactPaymentSettings

try {
    $result = $apiInstance->postHostedArtefactPaymentSettings($postHostedArtefactPaymentSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->postHostedArtefactPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postHostedArtefactPaymentSettings** | [**\SynergiTech\Sage\Model\PostHostedArtefactPaymentSettings**](../Model/PostHostedArtefactPaymentSettings.md)|  | [optional] |

### Return type

[**\SynergiTech\Sage\Model\HostedArtefactPaymentSetting**](../Model/HostedArtefactPaymentSetting.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
