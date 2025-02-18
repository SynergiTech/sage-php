# SynergiTech\Sage\HostedArtefactPaymentSettingsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

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



$apiInstance = new SynergiTech\Sage\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostedArtefactPaymentSettings()`

```php
getHostedArtefactPaymentSettings($objectGuid, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\HostedArtefactPaymentSetting[]
```

Returns all Hosted Artefact Payment Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$objectGuid = 'objectGuid_example'; // string | Use this to filter out hosted artefact payment settings by the guid of the object it is associated to.
$itemsPerPage = 20; // int | Returns the given number of Hosted Artefact Payment Settings per request.
$page = 1; // int | Go to specific page of Hosted Artefact Payment Settings
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Hosted Artefact Payment Settings (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getHostedArtefactPaymentSettings($objectGuid, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->getHostedArtefactPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **objectGuid** | **string**| Use this to filter out hosted artefact payment settings by the guid of the object it is associated to. | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Hosted Artefact Payment Settings per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Hosted Artefact Payment Settings | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Hosted Artefact Payment Settings (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\HostedArtefactPaymentSetting[]**](../Model/HostedArtefactPaymentSetting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHostedArtefactPaymentSettingsKey()`

```php
getHostedArtefactPaymentSettingsKey($key, $attributes): \SynergiTech\Sage\Model\HostedArtefactPaymentSetting
```

Returns a Hosted Artefact Payment Setting

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Hosted Artefact Payment Setting Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Hosted Artefact Payment Setting (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getHostedArtefactPaymentSettingsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->getHostedArtefactPaymentSettingsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Hosted Artefact Payment Setting Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Hosted Artefact Payment Setting (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\HostedArtefactPaymentSetting**](../Model/HostedArtefactPaymentSetting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postHostedArtefactPaymentSettings()`

```php
postHostedArtefactPaymentSettings($hostedArtefactPaymentSettings): \SynergiTech\Sage\Model\HostedArtefactPaymentSetting
```

Creates a Hosted Artefact Payment Setting

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hostedArtefactPaymentSettings = new \SynergiTech\Sage\Model\PostHostedArtefactPaymentSettings(); // \SynergiTech\Sage\Model\PostHostedArtefactPaymentSettings

try {
    $result = $apiInstance->postHostedArtefactPaymentSettings($hostedArtefactPaymentSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->postHostedArtefactPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hostedArtefactPaymentSettings** | [**\SynergiTech\Sage\Model\PostHostedArtefactPaymentSettings**](../Model/PostHostedArtefactPaymentSettings.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\HostedArtefactPaymentSetting**](../Model/HostedArtefactPaymentSetting.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
