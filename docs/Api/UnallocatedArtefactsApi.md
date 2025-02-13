# Swagger\Client\UnallocatedArtefactsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUnallocatedArtefacts**](UnallocatedArtefactsApi.md#getUnallocatedArtefacts) | **GET** /unallocated_artefacts | Returns all Unallocated Artefacts
[**getUnallocatedArtefactsKey**](UnallocatedArtefactsApi.md#getUnallocatedArtefactsKey) | **GET** /unallocated_artefacts/{key} | Returns a Unallocated Artefact


# **getUnallocatedArtefacts**
> \Swagger\Client\Model\UnallocatedArtefactArray getUnallocatedArtefacts($contact_id, $search, $attributes, $items_per_page, $page, $show_legacy_id)

Returns all Unallocated Artefacts

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\UnallocatedArtefactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$search = "search_example"; // string | Use this to filter by the contact identifier.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Base Artefacts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$items_per_page = 20; // int | Format - int32. Returns the given number of Base Artefacts per request.
$page = 1; // int | Format - int32. Go to specific page of Base Artefacts
$show_legacy_id = true; // bool | Display the legacy_id for the Base Artefacts.

try {
    $result = $apiInstance->getUnallocatedArtefacts($contact_id, $search, $attributes, $items_per_page, $page, $show_legacy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnallocatedArtefactsApi->getUnallocatedArtefacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **string**| Use this to filter by contact id | [optional]
 **search** | **string**| Use this to filter by the contact identifier. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Base Artefacts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Base Artefacts per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Base Artefacts | [optional] [default to 1]
 **show_legacy_id** | **bool**| Display the legacy_id for the Base Artefacts. | [optional]

### Return type

[**\Swagger\Client\Model\UnallocatedArtefactArray**](../Model/UnallocatedArtefactArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnallocatedArtefactsKey**
> \Swagger\Client\Model\UnallocatedArtefact getUnallocatedArtefactsKey($key, $show_legacy_id, $attributes)

Returns a Unallocated Artefact

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\UnallocatedArtefactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Unallocated Artefact Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Base Artefact.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Base Artefact (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getUnallocatedArtefactsKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnallocatedArtefactsApi->getUnallocatedArtefactsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Unallocated Artefact Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Base Artefact. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Base Artefact (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\UnallocatedArtefact**](../Model/UnallocatedArtefact.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

