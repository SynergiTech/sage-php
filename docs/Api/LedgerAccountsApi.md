# Swagger\Client\LedgerAccountsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLedgerAccounts**](LedgerAccountsApi.md#getLedgerAccounts) | **GET** /ledger_accounts | Returns all Ledger Accounts
[**getLedgerAccountsKey**](LedgerAccountsApi.md#getLedgerAccountsKey) | **GET** /ledger_accounts/{key} | Returns a Ledger Account
[**postLedgerAccounts**](LedgerAccountsApi.md#postLedgerAccounts) | **POST** /ledger_accounts | Creates a Ledger Account
[**putLedgerAccountsKey**](LedgerAccountsApi.md#putLedgerAccountsKey) | **PUT** /ledger_accounts/{key} | Updates a Ledger Account


# **getLedgerAccounts**
> \Swagger\Client\Model\LedgerAccountArray getLedgerAccounts($updated_or_created_since, $visible_in, $not_visible_in, $show_included_in_chart, $show_control_accounts, $ledger_account_classification_id, $show_balance_details, $exclude_deleted_entries, $from_date, $to_date, $search, $sort_order_from_user_setting, $filter_inactive_bank_accounts, $show_legacy_id, $items_per_page, $page, $attributes, $ledger_account_type_id)

Returns all Ledger Accounts

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Full Access, Restricted Access, Read Only * Area: `Purchases`: Full Access, Restricted Access, Read Only * Area: `Products & Services`: Full Access, Restricted Access, Read Only * Area: `Contacts`: Full Access, Restricted Access, Read Only * Area: `Bank`: Full Access, Restricted Access, Read Only * Area: `Journals`: Full Access, Restricted Access, Read Only * Area: `Settings`: Full Access, Read Only

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

$apiInstance = new Swagger\Client\Api\LedgerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updated_or_created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Use this to limit the response to Ledger Accounts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$visible_in = "visible_in_example"; // string | Use this to limit the response to ledger account types visible in a specific area. Valid values are: banking, sales, expenses, other_payments, other_receipts, journals and reporting
$not_visible_in = "not_visible_in_example"; // string | Use this to limit the response to ledger account types not visible in a specific area.
$show_included_in_chart = true; // bool | Use this to limit the response to ledger accounts that are/are not included in the chart
$show_control_accounts = true; // bool | Use this to limit the response to ledger accounts that are/are not control accounts
$ledger_account_classification_id = "ledger_account_classification_id_example"; // string | Use this to filter by ledger account classification id
$show_balance_details = true; // bool | Use this to display the balance details for ledger accounts between a date range (requires from_date and to_date).
$exclude_deleted_entries = true; // bool | Exclude deleted ledger entries.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Calculate balances from this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Calculate balances to this date.
$search = "search_example"; // string | Use this to filter by the item code or description
$sort_order_from_user_setting = true; // bool | Use this to enable ordering ledger accounts according to user settings. Defaulted to 'false'.
$filter_inactive_bank_accounts = true; // bool | Use this to filter inactive bank accounts
$show_legacy_id = true; // bool | Display the legacy_id for the Ledger Accounts.
$items_per_page = 20; // int | Format - int32. Returns the given number of Ledger Accounts per request.
$page = 1; // int | Format - int32. Go to specific page of Ledger Accounts
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Ledger Accounts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$ledger_account_type_id = "ledger_account_type_id_example"; // string | Use this to filter by ledger account type id

try {
    $result = $apiInstance->getLedgerAccounts($updated_or_created_since, $visible_in, $not_visible_in, $show_included_in_chart, $show_control_accounts, $ledger_account_classification_id, $show_balance_details, $exclude_deleted_entries, $from_date, $to_date, $search, $sort_order_from_user_setting, $filter_inactive_bank_accounts, $show_legacy_id, $items_per_page, $page, $attributes, $ledger_account_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountsApi->getLedgerAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_or_created_since** | **\DateTime**| Format - date-time (as date-time in RFC3339). Use this to limit the response to Ledger Accounts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional]
 **visible_in** | **string**| Use this to limit the response to ledger account types visible in a specific area. Valid values are: banking, sales, expenses, other_payments, other_receipts, journals and reporting | [optional]
 **not_visible_in** | **string**| Use this to limit the response to ledger account types not visible in a specific area. | [optional]
 **show_included_in_chart** | **bool**| Use this to limit the response to ledger accounts that are/are not included in the chart | [optional]
 **show_control_accounts** | **bool**| Use this to limit the response to ledger accounts that are/are not control accounts | [optional]
 **ledger_account_classification_id** | **string**| Use this to filter by ledger account classification id | [optional]
 **show_balance_details** | **bool**| Use this to display the balance details for ledger accounts between a date range (requires from_date and to_date). | [optional]
 **exclude_deleted_entries** | **bool**| Exclude deleted ledger entries. | [optional]
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Calculate balances from this date. | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Calculate balances to this date. | [optional]
 **search** | **string**| Use this to filter by the item code or description | [optional]
 **sort_order_from_user_setting** | **bool**| Use this to enable ordering ledger accounts according to user settings. Defaulted to &#39;false&#39;. | [optional]
 **filter_inactive_bank_accounts** | **bool**| Use this to filter inactive bank accounts | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Ledger Accounts. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Ledger Accounts per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Ledger Accounts | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Accounts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **ledger_account_type_id** | **string**| Use this to filter by ledger account type id | [optional]

### Return type

[**\Swagger\Client\Model\LedgerAccountArray**](../Model/LedgerAccountArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerAccountsKey**
> \Swagger\Client\Model\LedgerAccount getLedgerAccountsKey($key, $nested_attributes, $show_balance_details, $exclude_deleted_entries, $from_date, $to_date, $show_legacy_id, $attributes)

Returns a Ledger Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Full Access, Restricted Access, Read Only * Area: `Purchases`: Full Access, Restricted Access, Read Only * Area: `Products & Services`: Full Access, Restricted Access, Read Only * Area: `Contacts`: Full Access, Restricted Access, Read Only * Area: `Bank`: Full Access, Restricted Access, Read Only * Area: `Journals`: Full Access, Restricted Access, Read Only * Area: `Settings`: Full Access, Read Only

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

$apiInstance = new Swagger\Client\Api\LedgerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Ledger Account Key.
$nested_attributes = "nested_attributes_example"; // string | Specify the attributes that you want to expose for nested entities of the Ledger Account (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$show_balance_details = true; // bool | Use this to display the balance details for ledger accounts between a date range (requires from_date and to_date).
$exclude_deleted_entries = true; // bool | Exclude deleted ledger entries.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Calculate balances from this date.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Format - date-time (as date-time in RFC3339). Calculate balances to this date.
$show_legacy_id = true; // bool | Display the legacy_id for the Ledger Account.
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Ledger Account (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getLedgerAccountsKey($key, $nested_attributes, $show_balance_details, $exclude_deleted_entries, $from_date, $to_date, $show_legacy_id, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountsApi->getLedgerAccountsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Ledger Account Key. |
 **nested_attributes** | **string**| Specify the attributes that you want to expose for nested entities of the Ledger Account (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]
 **show_balance_details** | **bool**| Use this to display the balance details for ledger accounts between a date range (requires from_date and to_date). | [optional]
 **exclude_deleted_entries** | **bool**| Exclude deleted ledger entries. | [optional]
 **from_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Calculate balances from this date. | [optional]
 **to_date** | **\DateTime**| Format - date-time (as date-time in RFC3339). Calculate balances to this date. | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Ledger Account. | [optional]
 **attributes** | **string**| Specify the attributes that you want to expose for the Ledger Account (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\LedgerAccount**](../Model/LedgerAccount.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLedgerAccounts**
> \Swagger\Client\Model\LedgerAccount postLedgerAccounts($post_ledger_accounts)

Creates a Ledger Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Start: 🇨🇦, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

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

$apiInstance = new Swagger\Client\Api\LedgerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_ledger_accounts = new \Swagger\Client\Model\PostLedgerAccounts(); // \Swagger\Client\Model\PostLedgerAccounts | 

try {
    $result = $apiInstance->postLedgerAccounts($post_ledger_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountsApi->postLedgerAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_ledger_accounts** | [**\Swagger\Client\Model\PostLedgerAccounts**](../Model/PostLedgerAccounts.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LedgerAccount**](../Model/LedgerAccount.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putLedgerAccountsKey**
> \Swagger\Client\Model\LedgerAccount putLedgerAccountsKey($key, $put_ledger_accounts)

Updates a Ledger Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

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

$apiInstance = new Swagger\Client\Api\LedgerAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | The Ledger Account Key.
$put_ledger_accounts = new \Swagger\Client\Model\PutLedgerAccounts(); // \Swagger\Client\Model\PutLedgerAccounts | 

try {
    $result = $apiInstance->putLedgerAccountsKey($key, $put_ledger_accounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerAccountsApi->putLedgerAccountsKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| The Ledger Account Key. |
 **put_ledger_accounts** | [**\Swagger\Client\Model\PutLedgerAccounts**](../Model/PutLedgerAccounts.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LedgerAccount**](../Model/LedgerAccount.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

