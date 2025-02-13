# Swagger\Client\LedgerAccountClassificationsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLedgerAccountClassifications**](LedgerAccountClassificationsApi.md#getLedgerAccountClassifications) | **GET** /ledger_account_classifications | Returns all Ledger Account Classifications
[**getLedgerAccountClassificationsKey**](LedgerAccountClassificationsApi.md#getLedgerAccountClassificationsKey) | **GET** /ledger_account_classifications/{key} | Returns a Ledger Account Classification


# **getLedgerAccountClassifications**
> \Swagger\Client\Model\BaseArray getLedgerAccountClassifications($ledger_account_type_id, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Ledger Account Classifications

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

$apiInstance = new Swagger\Client\Api\LedgerAccountClassificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger_account_type_id = "ledger_account_type_id_example"; // string | Use this to filter by ledger account type id
$show_legacy_id = true; // bool | Display the legacy_id for the Ledger Account Classifications.
$items_per_page = 20; // int | Format - int32. Returns the given number of Ledger Account Classifications per request.
$page = 1; // int | Format - int32. Go to specific page of Ledger Account Classifications
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Ledger Account Classifications (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountClassifications($ledger_account_type_id, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountClassificationsApi->getLedgerAccountClassifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger_account_type_id** | **string**| Use this to filter by ledger account type id | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Ledger Account Classifications. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Ledger Account Classifications per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Ledger Account Classifications | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Account Classifications (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\BaseArray**](../Model/BaseArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerAccountClassificationsKey**
> \Swagger\Client\Model\Base getLedgerAccountClassificationsKey($key, $show_legacy_id, $attributes)

Returns a Ledger Account Classification

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

$apiInstance = new Swagger\Client\Api\LedgerAccountClassificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Ledger Account Classification Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Ledger Account Classification.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Ledger Account Classification (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountClassificationsKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountClassificationsApi->getLedgerAccountClassificationsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Ledger Account Classification Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Ledger Account Classification. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Account Classification (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\Base**](../Model/Base.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

