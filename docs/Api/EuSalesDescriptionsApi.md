# Swagger\Client\EuSalesDescriptionsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEuSalesDescriptions**](EuSalesDescriptionsApi.md#getEuSalesDescriptions) | **GET** /eu_sales_descriptions | Returns all EU Sales Descriptions
[**getEuSalesDescriptionsKey**](EuSalesDescriptionsApi.md#getEuSalesDescriptionsKey) | **GET** /eu_sales_descriptions/{key} | Returns a EU Sales Description


# **getEuSalesDescriptions**
> \Swagger\Client\Model\EuSalesDescriptionArray getEuSalesDescriptions($show_legacy_id, $items_per_page, $page, $attributes)

Returns all EU Sales Descriptions

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

$apiInstance = new Swagger\Client\Api\EuSalesDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_legacy_id = true; // bool | Display the legacy_id for the Ec Sales Descriptions.
$items_per_page = 20; // int | Format - int32. Returns the given number of Ec Sales Descriptions per request.
$page = 1; // int | Format - int32. Go to specific page of Ec Sales Descriptions
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Ec Sales Descriptions (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getEuSalesDescriptions($show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EuSalesDescriptionsApi->getEuSalesDescriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_legacy_id** | **bool**| Display the legacy_id for the Ec Sales Descriptions. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Ec Sales Descriptions per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Ec Sales Descriptions | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Ec Sales Descriptions (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\EuSalesDescriptionArray**](../Model/EuSalesDescriptionArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEuSalesDescriptionsKey**
> \Swagger\Client\Model\EuSalesDescription getEuSalesDescriptionsKey($key, $show_legacy_id, $attributes)

Returns a EU Sales Description

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

$apiInstance = new Swagger\Client\Api\EuSalesDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The EU Sales Description Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Ec Sales Description.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Ec Sales Description (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getEuSalesDescriptionsKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EuSalesDescriptionsApi->getEuSalesDescriptionsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The EU Sales Description Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Ec Sales Description. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Ec Sales Description (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\EuSalesDescription**](../Model/EuSalesDescription.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

