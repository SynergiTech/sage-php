# SynergiTech\Sage\BankAccountsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBankAccountsKey()**](BankAccountsApi.md#deleteBankAccountsKey) | **DELETE** /bank_accounts/{key} | Deletes a Bank Account |
| [**getBankAccounts()**](BankAccountsApi.md#getBankAccounts) | **GET** /bank_accounts | Returns all Bank Accounts |
| [**getBankAccountsKey()**](BankAccountsApi.md#getBankAccountsKey) | **GET** /bank_accounts/{key} | Returns a Bank Account |
| [**getBankAccountsKeyBankFeed()**](BankAccountsApi.md#getBankAccountsKeyBankFeed) | **GET** /bank_accounts/{key}/bank_feed | Bank feed endpoint for Banking Cloud Bank accounts |
| [**postBankAccounts()**](BankAccountsApi.md#postBankAccounts) | **POST** /bank_accounts | Creates a Bank Account |
| [**putBankAccountsKey()**](BankAccountsApi.md#putBankAccountsKey) | **PUT** /bank_accounts/{key} | Updates a Bank Account |


## `deleteBankAccountsKey()`

```php
deleteBankAccountsKey($key)
```

Deletes a Bank Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Account Key.

try {
    $apiInstance->deleteBankAccountsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->deleteBankAccountsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Account Key. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankAccounts()`

```php
getBankAccounts($updatedOrCreatedSince, $deletedSince, $nestedAttributes, $excludeStripe, $filterInactiveBankAccounts, $appName, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\BankAccount[]
```

Returns all Bank Accounts

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Bank Accounts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Bank Accounts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Bank Accounts (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$excludeStripe = True; // bool | Use this to filter out Stripe Bank Accounts
$filterInactiveBankAccounts = True; // bool | Use this to filter inactive bank accounts
$appName = 'appName_example'; // string | The App Name
$itemsPerPage = 20; // int | Returns the given number of Bank Accounts per request.
$page = 1; // int | Go to specific page of Bank Accounts
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Bank Accounts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBankAccounts($updatedOrCreatedSince, $deletedSince, $nestedAttributes, $excludeStripe, $filterInactiveBankAccounts, $appName, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->getBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Bank Accounts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Bank Accounts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Bank Accounts (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **excludeStripe** | **bool**| Use this to filter out Stripe Bank Accounts | [optional] |
| **filterInactiveBankAccounts** | **bool**| Use this to filter inactive bank accounts | [optional] |
| **appName** | **string**| The App Name | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Bank Accounts per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Bank Accounts | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Bank Accounts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankAccount[]**](../Model/BankAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankAccountsKey()`

```php
getBankAccountsKey($key, $nestedAttributes, $attributes): \SynergiTech\Sage\Model\BankAccount
```

Returns a Bank Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Account Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Bank Account (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Bank Account (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getBankAccountsKey($key, $nestedAttributes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->getBankAccountsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Account Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Bank Account (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Bank Account (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBankAccountsKeyBankFeed()`

```php
getBankAccountsKeyBankFeed($key): \SynergiTech\Sage\Model\Base
```

Bank feed endpoint for Banking Cloud Bank accounts

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Account GUID.

try {
    $result = $apiInstance->getBankAccountsKeyBankFeed($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->getBankAccountsKeyBankFeed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Account GUID. | |

### Return type

[**\SynergiTech\Sage\Model\Base**](../Model/Base.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBankAccounts()`

```php
postBankAccounts($bankAccounts): \SynergiTech\Sage\Model\BankAccount
```

Creates a Bank Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bankAccounts = new \SynergiTech\Sage\Model\PostBankAccounts(); // \SynergiTech\Sage\Model\PostBankAccounts

try {
    $result = $apiInstance->postBankAccounts($bankAccounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->postBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankAccounts** | [**\SynergiTech\Sage\Model\PostBankAccounts**](../Model/PostBankAccounts.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putBankAccountsKey()`

```php
putBankAccountsKey($key, $bankAccounts): \SynergiTech\Sage\Model\BankAccount
```

Updates a Bank Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Bank`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Bank Account Key.
$bankAccounts = new \SynergiTech\Sage\Model\PutBankAccounts(); // \SynergiTech\Sage\Model\PutBankAccounts

try {
    $result = $apiInstance->putBankAccountsKey($key, $bankAccounts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->putBankAccountsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Bank Account Key. | |
| **bankAccounts** | [**\SynergiTech\Sage\Model\PutBankAccounts**](../Model/PutBankAccounts.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
