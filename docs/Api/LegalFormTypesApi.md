# Swagger\Client\LegalFormTypesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLegalFormTypes**](LegalFormTypesApi.md#getLegalFormTypes) | **GET** /legal_form_types | Returns all Legal Form Types
[**getLegalFormTypesKey**](LegalFormTypesApi.md#getLegalFormTypesKey) | **GET** /legal_form_types/{key} | Returns a Legal Form Type


# **getLegalFormTypes**
> \Swagger\Client\Model\LegalFormTypeArray getLegalFormTypes($show_legacy_id, $items_per_page, $page, $attributes)

Returns all Legal Form Types

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷

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

$apiInstance = new Swagger\Client\Api\LegalFormTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_legacy_id = true; // bool | Display the legacy_id for the Business Classifications.
$items_per_page = 20; // int | Format - int32. Returns the given number of Business Classifications per request.
$page = 1; // int | Format - int32. Go to specific page of Business Classifications
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Business Classifications (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLegalFormTypes($show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalFormTypesApi->getLegalFormTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_legacy_id** | **bool**| Display the legacy_id for the Business Classifications. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Business Classifications per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Business Classifications | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Business Classifications (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\LegalFormTypeArray**](../Model/LegalFormTypeArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLegalFormTypesKey**
> \Swagger\Client\Model\LegalFormType getLegalFormTypesKey($key, $show_legacy_id, $attributes)

Returns a Legal Form Type

### Endpoint Availability  * Accounting Plus: 🇫🇷 * Accounting Standard: 🇫🇷 * Accounting Start: 🇫🇷

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

$apiInstance = new Swagger\Client\Api\LegalFormTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Legal Form Type Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Business Classification.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Business Classification (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLegalFormTypesKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalFormTypesApi->getLegalFormTypesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Legal Form Type Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Business Classification. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Business Classification (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\LegalFormType**](../Model/LegalFormType.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

