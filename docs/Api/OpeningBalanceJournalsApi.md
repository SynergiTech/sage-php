# Swagger\Client\OpeningBalanceJournalsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOpeningBalanceJournalsKey**](OpeningBalanceJournalsApi.md#deleteOpeningBalanceJournalsKey) | **DELETE** /opening_balance_journals/{key} | Deletes a Opening Balance Journal
[**getOpeningBalanceJournals**](OpeningBalanceJournalsApi.md#getOpeningBalanceJournals) | **GET** /opening_balance_journals | Returns all Opening Balance Journals
[**getOpeningBalanceJournalsKey**](OpeningBalanceJournalsApi.md#getOpeningBalanceJournalsKey) | **GET** /opening_balance_journals/{key} | Returns a Opening Balance Journal
[**postOpeningBalanceJournals**](OpeningBalanceJournalsApi.md#postOpeningBalanceJournals) | **POST** /opening_balance_journals | Creates a Opening Balance Journal


# **deleteOpeningBalanceJournalsKey**
> deleteOpeningBalanceJournalsKey($key)

Deletes a Opening Balance Journal

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory Reporting`, `Products & Services`, and `Reporting`: Full Access

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

$apiInstance = new Swagger\Client\Api\OpeningBalanceJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Opening Balance Journal Key.

try {
    $apiInstance->deleteOpeningBalanceJournalsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalanceJournalsApi->deleteOpeningBalanceJournalsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Opening Balance Journal Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpeningBalanceJournals**
> \Swagger\Client\Model\OpeningBalanceJournalArray getOpeningBalanceJournals($show_legacy_id, $items_per_page, $page, $attributes)

Returns all Opening Balance Journals

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory Reporting`, `Products & Services`, and `Reporting`: Full Access, Read Only

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

$apiInstance = new Swagger\Client\Api\OpeningBalanceJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$show_legacy_id = true; // bool | Display the legacy_id for the Journal Opening Balances.
$items_per_page = 20; // int | Format - int32. Returns the given number of Journal Opening Balances per request.
$page = 1; // int | Format - int32. Go to specific page of Journal Opening Balances
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Journal Opening Balances (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getOpeningBalanceJournals($show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalanceJournalsApi->getOpeningBalanceJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **show_legacy_id** | **bool**| Display the legacy_id for the Journal Opening Balances. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Journal Opening Balances per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Journal Opening Balances | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balances (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\OpeningBalanceJournalArray**](../Model/OpeningBalanceJournalArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpeningBalanceJournalsKey**
> \Swagger\Client\Model\OpeningBalanceJournal getOpeningBalanceJournalsKey($key, $show_legacy_id, $attributes)

Returns a Opening Balance Journal

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory Reporting`, `Products & Services`, and `Reporting`: Full Access, Read Only

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

$apiInstance = new Swagger\Client\Api\OpeningBalanceJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Opening Balance Journal Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Journal Opening Balance.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Journal Opening Balance (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getOpeningBalanceJournalsKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalanceJournalsApi->getOpeningBalanceJournalsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Opening Balance Journal Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Journal Opening Balance. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balance (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\OpeningBalanceJournal**](../Model/OpeningBalanceJournal.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOpeningBalanceJournals**
> \Swagger\Client\Model\OpeningBalanceJournal postOpeningBalanceJournals($post_opening_balance_journals)

Creates a Opening Balance Journal

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas `Sales`, `Purchases`, `Contacts`, `Journals`, `Settings`, `Bank`, `Statutory Reporting`, `Products & Services`, and `Reporting`: Full Access

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

$apiInstance = new Swagger\Client\Api\OpeningBalanceJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_opening_balance_journals = new \Swagger\Client\Model\PostOpeningBalanceJournals(); // \Swagger\Client\Model\PostOpeningBalanceJournals | 

try {
    $result = $apiInstance->postOpeningBalanceJournals($post_opening_balance_journals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpeningBalanceJournalsApi->postOpeningBalanceJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_opening_balance_journals** | [**\Swagger\Client\Model\PostOpeningBalanceJournals**](../Model/PostOpeningBalanceJournals.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\OpeningBalanceJournal**](../Model/OpeningBalanceJournal.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

