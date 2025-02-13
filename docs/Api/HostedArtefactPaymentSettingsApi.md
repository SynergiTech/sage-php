# Swagger\Client\HostedArtefactPaymentSettingsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteHostedArtefactPaymentSettingsKey**](HostedArtefactPaymentSettingsApi.md#deleteHostedArtefactPaymentSettingsKey) | **DELETE** /hosted_artefact_payment_settings/{key} | Deletes a Hosted Artefact Payment Setting
[**getHostedArtefactPaymentSettings**](HostedArtefactPaymentSettingsApi.md#getHostedArtefactPaymentSettings) | **GET** /hosted_artefact_payment_settings | Returns all Hosted Artefact Payment Settings
[**getHostedArtefactPaymentSettingsKey**](HostedArtefactPaymentSettingsApi.md#getHostedArtefactPaymentSettingsKey) | **GET** /hosted_artefact_payment_settings/{key} | Returns a Hosted Artefact Payment Setting
[**postHostedArtefactPaymentSettings**](HostedArtefactPaymentSettingsApi.md#postHostedArtefactPaymentSettings) | **POST** /hosted_artefact_payment_settings | Creates a Hosted Artefact Payment Setting


# **deleteHostedArtefactPaymentSettingsKey**
> deleteHostedArtefactPaymentSettingsKey($key)

Deletes a Hosted Artefact Payment Setting

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Hosted Artefact Payment Setting Key.

try {
    $apiInstance->deleteHostedArtefactPaymentSettingsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->deleteHostedArtefactPaymentSettingsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Hosted Artefact Payment Setting Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostedArtefactPaymentSettings**
> \Swagger\Client\Model\HostedArtefactPaymentSettingArray getHostedArtefactPaymentSettings($object_guid, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Hosted Artefact Payment Settings

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_guid = "object_guid_example"; // string | Use this to filter out hosted artefact payment settings by the guid of the object it is associated to.
$show_legacy_id = true; // bool | Display the legacy_id for the Hosted Artefact Payment Settings.
$items_per_page = 20; // int | Format - int32. Returns the given number of Hosted Artefact Payment Settings per request.
$page = 1; // int | Format - int32. Go to specific page of Hosted Artefact Payment Settings
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Hosted Artefact Payment Settings (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getHostedArtefactPaymentSettings($object_guid, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->getHostedArtefactPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_guid** | **string**| Use this to filter out hosted artefact payment settings by the guid of the object it is associated to. | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Hosted Artefact Payment Settings. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Hosted Artefact Payment Settings per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Hosted Artefact Payment Settings | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Hosted Artefact Payment Settings (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\HostedArtefactPaymentSettingArray**](../Model/HostedArtefactPaymentSettingArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHostedArtefactPaymentSettingsKey**
> \Swagger\Client\Model\HostedArtefactPaymentSetting getHostedArtefactPaymentSettingsKey($key, $show_legacy_id, $attributes)

Returns a Hosted Artefact Payment Setting

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Hosted Artefact Payment Setting Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Hosted Artefact Payment Setting.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Hosted Artefact Payment Setting (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getHostedArtefactPaymentSettingsKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->getHostedArtefactPaymentSettingsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Hosted Artefact Payment Setting Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Hosted Artefact Payment Setting. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Hosted Artefact Payment Setting (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\HostedArtefactPaymentSetting**](../Model/HostedArtefactPaymentSetting.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postHostedArtefactPaymentSettings**
> \Swagger\Client\Model\HostedArtefactPaymentSetting postHostedArtefactPaymentSettings($post_hosted_artefact_payment_settings)

Creates a Hosted Artefact Payment Setting

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: apiKeyQuery
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\HostedArtefactPaymentSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_hosted_artefact_payment_settings = new \Swagger\Client\Model\PostHostedArtefactPaymentSettings(); // \Swagger\Client\Model\PostHostedArtefactPaymentSettings | 

try {
    $result = $apiInstance->postHostedArtefactPaymentSettings($post_hosted_artefact_payment_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostedArtefactPaymentSettingsApi->postHostedArtefactPaymentSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_hosted_artefact_payment_settings** | [**\Swagger\Client\Model\PostHostedArtefactPaymentSettings**](../Model/PostHostedArtefactPaymentSettings.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\HostedArtefactPaymentSetting**](../Model/HostedArtefactPaymentSetting.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

