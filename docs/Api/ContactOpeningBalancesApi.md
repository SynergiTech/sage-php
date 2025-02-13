# Swagger\Client\ContactOpeningBalancesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContactOpeningBalancesKey**](ContactOpeningBalancesApi.md#deleteContactOpeningBalancesKey) | **DELETE** /contact_opening_balances/{key} | Deletes a Contact Opening Balance
[**getContactOpeningBalances**](ContactOpeningBalancesApi.md#getContactOpeningBalances) | **GET** /contact_opening_balances | Returns all Contact Opening Balances
[**getContactOpeningBalancesKey**](ContactOpeningBalancesApi.md#getContactOpeningBalancesKey) | **GET** /contact_opening_balances/{key} | Returns a Contact Opening Balance
[**postContactOpeningBalances**](ContactOpeningBalancesApi.md#postContactOpeningBalances) | **POST** /contact_opening_balances | Creates a Contact Opening Balance
[**putContactOpeningBalancesKey**](ContactOpeningBalancesApi.md#putContactOpeningBalancesKey) | **PUT** /contact_opening_balances/{key} | Updates a Contact Opening Balance


# **deleteContactOpeningBalancesKey**
> deleteContactOpeningBalancesKey($key)

Deletes a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access

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

$apiInstance = new Swagger\Client\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Opening Balance Key.

try {
    $apiInstance->deleteContactOpeningBalancesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->deleteContactOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Opening Balance Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactOpeningBalances**
> \Swagger\Client\Model\ContactOpeningBalanceArray getContactOpeningBalances($updated_or_created_since, $deleted_since, $contact_type_id, $contact_id, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Contact Opening Balances

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access, Read Only

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

$apiInstance = new Swagger\Client\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deleted_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$contact_type_id = "contact_type_id_example"; // string | Use this to filter by contact type id
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$show_legacy_id = true; // bool | Display the legacy_id for the Batch Entries.
$items_per_page = 20; // int | Format - int32. Returns the given number of Batch Entries per request.
$page = 1; // int | Format - int32. Go to specific page of Batch Entries
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Batch Entries (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactOpeningBalances($updated_or_created_since, $deleted_since, $contact_type_id, $contact_id, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->getContactOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Batch Entries changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **deleted_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Batch Entries deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional]
 **contact_type_id** | **string**| Use this to filter by contact type id | [optional]
 **contact_id** | **string**| Use this to filter by contact id | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Batch Entries. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Batch Entries per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Batch Entries | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Batch Entries (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\ContactOpeningBalanceArray**](../Model/ContactOpeningBalanceArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactOpeningBalancesKey**
> \Swagger\Client\Model\ContactOpeningBalance getContactOpeningBalancesKey($key, $show_legacy_id, $attributes)

Returns a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access, Read Only

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

$apiInstance = new Swagger\Client\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Opening Balance Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Batch Entry.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Batch Entry (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactOpeningBalancesKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->getContactOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Opening Balance Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Batch Entry. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Batch Entry (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\ContactOpeningBalance**](../Model/ContactOpeningBalance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactOpeningBalances**
> \Swagger\Client\Model\ContactOpeningBalance postContactOpeningBalances($post_contact_opening_balances)

Creates a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access

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

$apiInstance = new Swagger\Client\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_contact_opening_balances = new \Swagger\Client\Model\PostContactOpeningBalances(); // \Swagger\Client\Model\PostContactOpeningBalances | 

try {
    $result = $apiInstance->postContactOpeningBalances($post_contact_opening_balances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->postContactOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_contact_opening_balances** | [**\Swagger\Client\Model\PostContactOpeningBalances**](../Model/PostContactOpeningBalances.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ContactOpeningBalance**](../Model/ContactOpeningBalance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContactOpeningBalancesKey**
> \Swagger\Client\Model\ContactOpeningBalance putContactOpeningBalancesKey($key, $put_contact_opening_balances)

Updates a Contact Opening Balance

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Settings`, `Sales`, and `Purchases`: Full Access

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

$apiInstance = new Swagger\Client\Api\ContactOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Contact Opening Balance Key.
$put_contact_opening_balances = new \Swagger\Client\Model\PutContactOpeningBalances(); // \Swagger\Client\Model\PutContactOpeningBalances | 

try {
    $result = $apiInstance->putContactOpeningBalancesKey($key, $put_contact_opening_balances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactOpeningBalancesApi->putContactOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Contact Opening Balance Key. |
 **put_contact_opening_balances** | [**\Swagger\Client\Model\PutContactOpeningBalances**](../Model/PutContactOpeningBalances.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ContactOpeningBalance**](../Model/ContactOpeningBalance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

