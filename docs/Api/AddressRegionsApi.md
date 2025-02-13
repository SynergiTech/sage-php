# Swagger\Client\AddressRegionsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddressRegions**](AddressRegionsApi.md#getAddressRegions) | **GET** /address_regions | Returns all Address Regions
[**getAddressRegionsKey**](AddressRegionsApi.md#getAddressRegionsKey) | **GET** /address_regions/{key} | Returns a Address Region


# **getAddressRegions**
> \Swagger\Client\Model\AddressRegionArray getAddressRegions($show_legacy_id, $items_per_page, $page, $attributes, $country_id)

Returns all Address Regions

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

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

$apiInstance = new Swagger\Client\Api\AddressRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_legacy_id = true; // bool | Display the legacy_id for the States.
$items_per_page = 20; // int | Format - int32. Returns the given number of States per request.
$page = 1; // int | Format - int32. Go to specific page of States
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the States (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$country_id = "country_id_example"; // string | Use this to filter by country id

try {
    $result = $apiInstance->getAddressRegions($show_legacy_id, $items_per_page, $page, $attributes, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRegionsApi->getAddressRegions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_legacy_id** | **bool**| Display the legacy_id for the States. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of States per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of States | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the States (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **country_id** | **string**| Use this to filter by country id | [optional]

### Return type

[**\Swagger\Client\Model\AddressRegionArray**](../Model/AddressRegionArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressRegionsKey**
> \Swagger\Client\Model\AddressRegion getAddressRegionsKey($key, $show_legacy_id, $attributes)

Returns a Address Region

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

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

$apiInstance = new Swagger\Client\Api\AddressRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Address Region Key.
$show_legacy_id = true; // bool | Display the legacy_id for the State.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the State (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getAddressRegionsKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressRegionsApi->getAddressRegionsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Address Region Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the State. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the State (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\AddressRegion**](../Model/AddressRegion.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

