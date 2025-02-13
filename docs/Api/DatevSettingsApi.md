# Swagger\Client\DatevSettingsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDatevSettings**](DatevSettingsApi.md#getDatevSettings) | **GET** /datev_settings | Returns all Datev Settings
[**putDatevSettings**](DatevSettingsApi.md#putDatevSettings) | **PUT** /datev_settings | Updates a Datev Settings


# **getDatevSettings**
> \Swagger\Client\Model\DatevSettings getDatevSettings($show_legacy_id)

Returns all Datev Settings

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access, Read Only

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

$apiInstance = new Swagger\Client\Api\DatevSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_legacy_id = true; // bool | Display the legacy_id for the Datev Settings.

try {
    $result = $apiInstance->getDatevSettings($show_legacy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatevSettingsApi->getDatevSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_legacy_id** | **bool**| Display the legacy_id for the Datev Settings. | [optional]

### Return type

[**\Swagger\Client\Model\DatevSettings**](../Model/DatevSettings.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDatevSettings**
> \Swagger\Client\Model\DatevSettings putDatevSettings($put_datev_settings)

Updates a Datev Settings

### Endpoint Availability  * Accounting Plus: 🇩🇪 * Accounting Standard: 🇩🇪 * Accounting Start: 🇩🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Settings`: Full Access

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

$apiInstance = new Swagger\Client\Api\DatevSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$put_datev_settings = new \Swagger\Client\Model\PutDatevSettings(); // \Swagger\Client\Model\PutDatevSettings | 

try {
    $result = $apiInstance->putDatevSettings($put_datev_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatevSettingsApi->putDatevSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **put_datev_settings** | [**\Swagger\Client\Model\PutDatevSettings**](../Model/PutDatevSettings.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DatevSettings**](../Model/DatevSettings.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

