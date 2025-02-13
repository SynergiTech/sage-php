# Swagger\Client\LedgerAccountOpeningBalancesApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteLedgerAccountOpeningBalancesKey**](LedgerAccountOpeningBalancesApi.md#deleteLedgerAccountOpeningBalancesKey) | **DELETE** /ledger_account_opening_balances/{key} | Deletes a Ledger Account Opening Balance
[**getLedgerAccountOpeningBalances**](LedgerAccountOpeningBalancesApi.md#getLedgerAccountOpeningBalances) | **GET** /ledger_account_opening_balances | Returns all Ledger Account Opening Balances
[**getLedgerAccountOpeningBalancesKey**](LedgerAccountOpeningBalancesApi.md#getLedgerAccountOpeningBalancesKey) | **GET** /ledger_account_opening_balances/{key} | Returns a Ledger Account Opening Balance
[**postLedgerAccountOpeningBalances**](LedgerAccountOpeningBalancesApi.md#postLedgerAccountOpeningBalances) | **POST** /ledger_account_opening_balances | Creates a Ledger Account Opening Balance
[**putLedgerAccountOpeningBalancesKey**](LedgerAccountOpeningBalancesApi.md#putLedgerAccountOpeningBalancesKey) | **PUT** /ledger_account_opening_balances/{key} | Updates a Ledger Account Opening Balance


# **deleteLedgerAccountOpeningBalancesKey**
> deleteLedgerAccountOpeningBalancesKey($key)

Deletes a Ledger Account Opening Balance

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

$apiInstance = new Swagger\Client\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Ledger Account Opening Balance Key.

try {
    $apiInstance->deleteLedgerAccountOpeningBalancesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->deleteLedgerAccountOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Ledger Account Opening Balance Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerAccountOpeningBalances**
> \Swagger\Client\Model\LedgerAccountOpeningBalanceArray getLedgerAccountOpeningBalances($updated_or_created_since, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Ledger Account Opening Balances

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

$apiInstance = new Swagger\Client\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Journal Opening Balance Lines changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$show_legacy_id = true; // bool | Display the legacy_id for the Journal Opening Balance Lines.
$items_per_page = 20; // int | Format - int32. Returns the given number of Journal Opening Balance Lines per request.
$page = 1; // int | Format - int32. Go to specific page of Journal Opening Balance Lines
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Journal Opening Balance Lines (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountOpeningBalances($updated_or_created_since, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->getLedgerAccountOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Journal Opening Balance Lines changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Journal Opening Balance Lines. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Journal Opening Balance Lines per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Journal Opening Balance Lines | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balance Lines (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\LedgerAccountOpeningBalanceArray**](../Model/LedgerAccountOpeningBalanceArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerAccountOpeningBalancesKey**
> \Swagger\Client\Model\LedgerAccountOpeningBalance getLedgerAccountOpeningBalancesKey($key, $show_legacy_id, $attributes)

Returns a Ledger Account Opening Balance

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

$apiInstance = new Swagger\Client\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Ledger Account Opening Balance Key.
$show_legacy_id = true; // bool | Display the legacy_id for the Journal Opening Balance Line.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Journal Opening Balance Line (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountOpeningBalancesKey($key, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->getLedgerAccountOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Ledger Account Opening Balance Key. |
 **show_legacy_id** | **bool**| Display the legacy_id for the Journal Opening Balance Line. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Journal Opening Balance Line (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\LedgerAccountOpeningBalance**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLedgerAccountOpeningBalances**
> \Swagger\Client\Model\LedgerAccountOpeningBalance postLedgerAccountOpeningBalances($post_ledger_account_opening_balances)

Creates a Ledger Account Opening Balance

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

$apiInstance = new Swagger\Client\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_ledger_account_opening_balances = new \Swagger\Client\Model\PostLedgerAccountOpeningBalances(); // \Swagger\Client\Model\PostLedgerAccountOpeningBalances | 

try {
    $result = $apiInstance->postLedgerAccountOpeningBalances($post_ledger_account_opening_balances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->postLedgerAccountOpeningBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_ledger_account_opening_balances** | [**\Swagger\Client\Model\PostLedgerAccountOpeningBalances**](../Model/PostLedgerAccountOpeningBalances.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LedgerAccountOpeningBalance**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putLedgerAccountOpeningBalancesKey**
> \Swagger\Client\Model\LedgerAccountOpeningBalance putLedgerAccountOpeningBalancesKey($key, $put_ledger_account_opening_balances)

Updates a Ledger Account Opening Balance

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

$apiInstance = new Swagger\Client\Api\LedgerAccountOpeningBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Ledger Account Opening Balance Key.
$put_ledger_account_opening_balances = new \Swagger\Client\Model\PutLedgerAccountOpeningBalances(); // \Swagger\Client\Model\PutLedgerAccountOpeningBalances | 

try {
    $result = $apiInstance->putLedgerAccountOpeningBalancesKey($key, $put_ledger_account_opening_balances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountOpeningBalancesApi->putLedgerAccountOpeningBalancesKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Ledger Account Opening Balance Key. |
 **put_ledger_account_opening_balances** | [**\Swagger\Client\Model\PutLedgerAccountOpeningBalances**](../Model/PutLedgerAccountOpeningBalances.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LedgerAccountOpeningBalance**](../Model/LedgerAccountOpeningBalance.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

