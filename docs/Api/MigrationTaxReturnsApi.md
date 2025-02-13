# Swagger\Client\MigrationTaxReturnsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMigrationTaxReturns**](MigrationTaxReturnsApi.md#getMigrationTaxReturns) | **GET** /migration_tax_returns | Returns all Migration Tax Returns
[**getMigrationTaxReturnsKey**](MigrationTaxReturnsApi.md#getMigrationTaxReturnsKey) | **GET** /migration_tax_returns/{key} | Returns a Migration Tax Return
[**postMigrationTaxReturns**](MigrationTaxReturnsApi.md#postMigrationTaxReturns) | **POST** /migration_tax_returns | Creates a Migration Tax Return


# **getMigrationTaxReturns**
> \Swagger\Client\Model\MigrationTaxReturnArray getMigrationTaxReturns($show_legacy_id, $items_per_page, $page, $attributes)

Returns all Migration Tax Returns

### Endpoint Availability  * Accounting Plus: 🇬🇧, 🇮🇪 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Statutory Reporting`: Full Access

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

$apiInstance = new Swagger\Client\Api\MigrationTaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_legacy_id = true; // bool | Display the legacy_id for the Migration Tax Returns.
$items_per_page = 20; // int | Format - int32. Returns the given number of Migration Tax Returns per request.
$page = 1; // int | Format - int32. Go to specific page of Migration Tax Returns
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Migration Tax Returns (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getMigrationTaxReturns($show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationTaxReturnsApi->getMigrationTaxReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_legacy_id** | **bool**| Display the legacy_id for the Migration Tax Returns. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Migration Tax Returns per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Migration Tax Returns | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Migration Tax Returns (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\MigrationTaxReturnArray**](../Model/MigrationTaxReturnArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMigrationTaxReturnsKey**
> \Swagger\Client\Model\MigrationTaxReturn getMigrationTaxReturnsKey($key, $show_legacy_id, $attributes)

Returns a Migration Tax Return

### Endpoint Availability  * Accounting Plus: 🇬🇧, 🇮🇪 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Statutory Reporting`: Full Access

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

$apiInstance = new Swagger\Client\Api\MigrationTaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Migration Tax Return Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Migration Tax Return.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Migration Tax Return (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getMigrationTaxReturnsKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationTaxReturnsApi->getMigrationTaxReturnsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Migration Tax Return Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Migration Tax Return. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Migration Tax Return (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\MigrationTaxReturn**](../Model/MigrationTaxReturn.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMigrationTaxReturns**
> \Swagger\Client\Model\MigrationTaxReturn postMigrationTaxReturns($post_migration_tax_returns)

Creates a Migration Tax Return

### Endpoint Availability  * Accounting Plus: 🇬🇧, 🇮🇪 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Statutory Reporting`: Full Access

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

$apiInstance = new Swagger\Client\Api\MigrationTaxReturnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_migration_tax_returns = new \Swagger\Client\Model\PostMigrationTaxReturns(); // \Swagger\Client\Model\PostMigrationTaxReturns | 

try {
    $result = $apiInstance->postMigrationTaxReturns($post_migration_tax_returns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrationTaxReturnsApi->postMigrationTaxReturns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_migration_tax_returns** | [**\Swagger\Client\Model\PostMigrationTaxReturns**](../Model/PostMigrationTaxReturns.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MigrationTaxReturn**](../Model/MigrationTaxReturn.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

