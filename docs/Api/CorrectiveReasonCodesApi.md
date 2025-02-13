# Swagger\Client\CorrectiveReasonCodesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCorrectiveReasonCodes**](CorrectiveReasonCodesApi.md#getCorrectiveReasonCodes) | **GET** /corrective_reason_codes | Returns all Corrective Reason Codes
[**getCorrectiveReasonCodesKey**](CorrectiveReasonCodesApi.md#getCorrectiveReasonCodesKey) | **GET** /corrective_reason_codes/{key} | Returns a Corrective Reason Code


# **getCorrectiveReasonCodes**
> \Swagger\Client\Model\BaseArray getCorrectiveReasonCodes($show_legacy_id, $items_per_page, $page, $attributes)

Returns all Corrective Reason Codes

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸

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

$apiInstance = new Swagger\Client\Api\CorrectiveReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_legacy_id = true; // bool | Display the legacy_id for the Corrective Reason Codes.
$items_per_page = 20; // int | Format - int32. Returns the given number of Corrective Reason Codes per request.
$page = 1; // int | Format - int32. Go to specific page of Corrective Reason Codes
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Corrective Reason Codes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCorrectiveReasonCodes($show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrectiveReasonCodesApi->getCorrectiveReasonCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_legacy_id** | **bool**| Display the legacy_id for the Corrective Reason Codes. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Corrective Reason Codes per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Corrective Reason Codes | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Corrective Reason Codes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\BaseArray**](../Model/BaseArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorrectiveReasonCodesKey**
> \Swagger\Client\Model\Base getCorrectiveReasonCodesKey($key, $show_legacy_id, $attributes)

Returns a Corrective Reason Code

### Endpoint Availability  * Accounting Plus: 🇪🇸 * Accounting Standard: 🇪🇸 * Accounting Start: 🇪🇸

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

$apiInstance = new Swagger\Client\Api\CorrectiveReasonCodesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Corrective Reason Code Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Corrective Reason Code.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Corrective Reason Code (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCorrectiveReasonCodesKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrectiveReasonCodesApi->getCorrectiveReasonCodesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Corrective Reason Code Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Corrective Reason Code. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Corrective Reason Code (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\Base**](../Model/Base.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

