# Swagger\Client\CoaTemplatesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCoaTemplates**](CoaTemplatesApi.md#getCoaTemplates) | **GET** /coa_templates | Returns all Coa Templates
[**getCoaTemplatesKey**](CoaTemplatesApi.md#getCoaTemplatesKey) | **GET** /coa_templates/{key} | Returns a Coa Template


# **getCoaTemplates**
> \Swagger\Client\Model\CoaTemplateArray getCoaTemplates($show_legacy_id, $items_per_page, $page, $attributes, $country_id)

Returns all Coa Templates

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

$apiInstance = new Swagger\Client\Api\CoaTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_legacy_id = true; // bool | Display the legacy_id for the Coa Templates.
$items_per_page = 20; // int | Format - int32. Returns the given number of Coa Templates per request.
$page = 1; // int | Format - int32. Go to specific page of Coa Templates
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Coa Templates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$country_id = "country_id_example"; // string | Use this to filter by country id

try {
    $result = $apiInstance->getCoaTemplates($show_legacy_id, $items_per_page, $page, $attributes, $country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoaTemplatesApi->getCoaTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_legacy_id** | **bool**| Display the legacy_id for the Coa Templates. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Coa Templates per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Coa Templates | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Coa Templates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **country_id** | **string**| Use this to filter by country id | [optional]

### Return type

[**\Swagger\Client\Model\CoaTemplateArray**](../Model/CoaTemplateArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCoaTemplatesKey**
> \Swagger\Client\Model\CoaTemplate getCoaTemplatesKey($key, $show_legacy_id, $attributes)

Returns a Coa Template

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

$apiInstance = new Swagger\Client\Api\CoaTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Coa Template Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Coa Template.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Coa Template (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCoaTemplatesKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoaTemplatesApi->getCoaTemplatesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Coa Template Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Coa Template. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Coa Template (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\CoaTemplate**](../Model/CoaTemplate.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

