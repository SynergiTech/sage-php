# SynergiTech\Sage\CoaAccountsApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCoaAccounts()**](CoaAccountsApi.md#getCoaAccounts) | **GET** /coa_accounts | Returns all Coa Accounts |
| [**getCoaAccountsKey()**](CoaAccountsApi.md#getCoaAccountsKey) | **GET** /coa_accounts/{key} | Returns a Coa Account |


## `getCoaAccounts()`

```php
getCoaAccounts($coaTemplateId, $updatedOrCreatedSince, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\CoaAccount[]
```

Returns all Coa Accounts

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\CoaAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coaTemplateId = 'coaTemplateId_example'; // string | Use this to filter by COA Template
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Coa Accounts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$itemsPerPage = 20; // int | Returns the given number of Coa Accounts per request.
$page = 1; // int | Go to specific page of Coa Accounts
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Coa Accounts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCoaAccounts($coaTemplateId, $updatedOrCreatedSince, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoaAccountsApi->getCoaAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coaTemplateId** | **string**| Use this to filter by COA Template | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Coa Accounts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Coa Accounts per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Coa Accounts | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Coa Accounts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\CoaAccount[]**](../Model/CoaAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCoaAccountsKey()`

```php
getCoaAccountsKey($key, $attributes): \SynergiTech\Sage\Model\CoaAccount
```

Returns a Coa Account

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\CoaAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Coa Account Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Coa Account (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getCoaAccountsKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoaAccountsApi->getCoaAccountsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Coa Account Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Coa Account (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\CoaAccount**](../Model/CoaAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
