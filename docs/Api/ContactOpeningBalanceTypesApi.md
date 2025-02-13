# Swagger\Client\ContactOpeningBalanceTypesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContactOpeningBalanceTypes**](ContactOpeningBalanceTypesApi.md#getContactOpeningBalanceTypes) | **GET** /contact_opening_balance_types | Returns all Contact Opening Balance Types
[**getContactOpeningBalanceTypesKey**](ContactOpeningBalanceTypesApi.md#getContactOpeningBalanceTypesKey) | **GET** /contact_opening_balance_types/{key} | Returns a Contact Opening Balance Type


# **getContactOpeningBalanceTypes**
> \Swagger\Client\Model\BaseArray getContactOpeningBalanceTypes($show_legacy_id, $items_per_page, $page, $attributes)

Returns all Contact Opening Balance Types

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

$apiInstance = new Swagger\Client\Api\ContactOpeningBalanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_legacy_id = true; // bool | Display the legacy_id for the Batch Entry Types.
$items_per_page = 20; // int | Format - int32. Returns the given number of Batch Entry Types per request.
$page = 1; // int | Format - int32. Go to specific page of Batch Entry Types
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Batch Entry Types (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactOpeningBalanceTypes($show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalanceTypesApi->getContactOpeningBalanceTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_legacy_id** | **bool**| Display the legacy_id for the Batch Entry Types. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Batch Entry Types per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Batch Entry Types | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Batch Entry Types (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\BaseArray**](../Model/BaseArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactOpeningBalanceTypesKey**
> \Swagger\Client\Model\Base getContactOpeningBalanceTypesKey($key, $show_legacy_id, $attributes)

Returns a Contact Opening Balance Type

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

$apiInstance = new Swagger\Client\Api\ContactOpeningBalanceTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Opening Balance Type Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Batch Entry Type.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Batch Entry Type (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactOpeningBalanceTypesKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalanceTypesApi->getContactOpeningBalanceTypesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Opening Balance Type Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Batch Entry Type. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Batch Entry Type (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\Base**](../Model/Base.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

