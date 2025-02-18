# SynergiTech\Sage\TaxProfilesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaxProfiles()**](TaxProfilesApi.md#getTaxProfiles) | **GET** /tax_profiles | Returns all Tax Profiles |
| [**getTaxProfilesKey()**](TaxProfilesApi.md#getTaxProfilesKey) | **GET** /tax_profiles/{key} | Returns a Tax Profile |
| [**putTaxProfilesKey()**](TaxProfilesApi.md#putTaxProfilesKey) | **PUT** /tax_profiles/{key} | Updates a Tax Profile |


## `getTaxProfiles()`

```php
getTaxProfiles($updatedOrCreatedSince, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\TaxProfile[]
```

Returns all Tax Profiles

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Tax Profiles changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$itemsPerPage = 20; // int | Returns the given number of Tax Profiles per request.
$page = 1; // int | Go to specific page of Tax Profiles
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Profiles (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxProfiles($updatedOrCreatedSince, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxProfilesApi->getTaxProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Tax Profiles changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Tax Profiles per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Tax Profiles | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Profiles (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxProfile[]**](../Model/TaxProfile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProfilesKey()`

```php
getTaxProfilesKey($key, $attributes): \SynergiTech\Sage\Model\TaxProfile
```

Returns a Tax Profile

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Tax Profile Key.
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Profile (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxProfilesKey($key, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxProfilesApi->getTaxProfilesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Profile Key. | |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Profile (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxProfile**](../Model/TaxProfile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putTaxProfilesKey()`

```php
putTaxProfilesKey($key, $taxProfiles): \SynergiTech\Sage\Model\TaxProfile
```

Updates a Tax Profile

### Endpoint Availability  * Accounting Plus: 🇨🇦 * Accounting Standard: 🇨🇦 * Accounting Start: 🇨🇦  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Tax Profile Key.
$taxProfiles = new \SynergiTech\Sage\Model\PutTaxProfiles(); // \SynergiTech\Sage\Model\PutTaxProfiles

try {
    $result = $apiInstance->putTaxProfilesKey($key, $taxProfiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxProfilesApi->putTaxProfilesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Profile Key. | |
| **taxProfiles** | [**\SynergiTech\Sage\Model\PutTaxProfiles**](../Model/PutTaxProfiles.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\TaxProfile**](../Model/TaxProfile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
