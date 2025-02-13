# Swagger\Client\BankDepositsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBankDepositsKey**](BankDepositsApi.md#deleteBankDepositsKey) | **DELETE** /bank_deposits/{key} | Deletes a Bank Deposit
[**getBankDeposits**](BankDepositsApi.md#getBankDeposits) | **GET** /bank_deposits | Returns all Bank Deposits
[**getBankDepositsKey**](BankDepositsApi.md#getBankDepositsKey) | **GET** /bank_deposits/{key} | Returns a Bank Deposit
[**postBankDeposits**](BankDepositsApi.md#postBankDeposits) | **POST** /bank_deposits | Creates a Bank Deposit


# **deleteBankDepositsKey**
> deleteBankDepositsKey($key)

Deletes a Bank Deposit

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

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

$apiInstance = new Swagger\Client\Api\BankDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Bank Deposit Key.

try {
    $apiInstance->deleteBankDepositsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling BankDepositsApi->deleteBankDepositsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Bank Deposit Key. |

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankDeposits**
> \Swagger\Client\Model\BankDepositArray getBankDeposits($updated_or_created_since, $deleted_since, $from_date, $to_date, $show_legacy_id, $items_per_page, $page, $attributes, $sort)

Returns all Bank Deposits

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\BankDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Deposits changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deleted_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Deposits deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Deposits dates
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to filter by Deposits dates
$show_legacy_id = true; // bool | Display the legacy_id for the Deposits.
$items_per_page = 20; // int | Format - int32. Returns the given number of Deposits per request.
$page = 1; // int | Format - int32. Go to specific page of Deposits
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Deposits (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = "sort_example"; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getBankDeposits($updated_or_created_since, $deleted_since, $from_date, $to_date, $show_legacy_id, $items_per_page, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankDepositsApi->getBankDeposits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Deposits changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **deleted_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Deposits deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional]
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Deposits dates | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to filter by Deposits dates | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Deposits. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Deposits per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Deposits | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Deposits (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\BankDepositArray**](../Model/BankDepositArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBankDepositsKey**
> \Swagger\Client\Model\BankDeposit getBankDepositsKey($key, $nested_attributes, $show_legacy_id, $attributes)

Returns a Bank Deposit

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Read Only, Restricted Access, Full Access

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

$apiInstance = new Swagger\Client\Api\BankDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Bank Deposit Key.
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Deposit (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_legacy_id = true; // bool | Display the legacy_id for the Deposit.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Deposit (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBankDepositsKey($key, $nested_attributes, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankDepositsApi->getBankDepositsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Bank Deposit Key. |
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Deposit (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Deposit. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Deposit (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\BankDeposit**](../Model/BankDeposit.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBankDeposits**
> \Swagger\Client\Model\BankDeposit postBankDeposits($post_bank_deposits)

Creates a Bank Deposit

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

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

$apiInstance = new Swagger\Client\Api\BankDepositsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_bank_deposits = new \Swagger\Client\Model\PostBankDeposits(); // \Swagger\Client\Model\PostBankDeposits | 

try {
    $result = $apiInstance->postBankDeposits($post_bank_deposits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankDepositsApi->postBankDeposits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_bank_deposits** | [**\Swagger\Client\Model\PostBankDeposits**](../Model/PostBankDeposits.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BankDeposit**](../Model/BankDeposit.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

