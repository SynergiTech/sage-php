# SynergiTech\Sage\TaxRatesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteTaxRatesKey()**](TaxRatesApi.md#deleteTaxRatesKey) | **DELETE** /tax_rates/{key} | Deletes a Tax Rate (US only) |
| [**getTaxRates()**](TaxRatesApi.md#getTaxRates) | **GET** /tax_rates | Returns all Tax Rates |
| [**getTaxRatesKey()**](TaxRatesApi.md#getTaxRatesKey) | **GET** /tax_rates/{key} | Returns a Tax Rate |
| [**postTaxRates()**](TaxRatesApi.md#postTaxRates) | **POST** /tax_rates | Creates a Tax Rate (US only) |
| [**putTaxRatesKey()**](TaxRatesApi.md#putTaxRatesKey) | **PUT** /tax_rates/{key} | Updates a Tax Rate (US only) |


## `deleteTaxRatesKey()`

```php
deleteTaxRatesKey($key)
```

Deletes a Tax Rate (US only)

### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Tax Rate key.

try {
    $apiInstance->deleteTaxRatesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->deleteTaxRatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Rate key. | |

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

## `getTaxRates()`

```php
getTaxRates($updatedOrCreatedSince, $usage, $addressRegionId, $date, $includeHistoricalData, $includeDestinationVatRates, $cisOnly, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\TaxRate[]
```

Returns all Tax Rates

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Full Access, Restricted Access, Read Only * Area: `Purchases`: Full Access, Restricted Access, Read Only * Area: `Bank`: Full Access, Restricted Access, Read Only * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Tax Rates changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$usage = 'usage_example'; // string | possible values are `sales` and `purchase`
$addressRegionId = 'addressRegionId_example'; // string | Use this to filter by address region id
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to return results on a specified date.
$includeHistoricalData = True; // bool | Use this to include historical data in the response
$includeDestinationVatRates = True; // bool | Include vat destination tax rates
$cisOnly = True; // bool | Use this to filter Tax Rates to CIS only records
$itemsPerPage = 20; // int | Returns the given number of Tax Rates per request.
$page = 1; // int | Go to specific page of Tax Rates
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Rates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxRates($updatedOrCreatedSince, $usage, $addressRegionId, $date, $includeHistoricalData, $includeDestinationVatRates, $cisOnly, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->getTaxRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Tax Rates changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **usage** | **string**| possible values are &#x60;sales&#x60; and &#x60;purchase&#x60; | [optional] |
| **addressRegionId** | **string**| Use this to filter by address region id | [optional] |
| **date** | **\DateTime**| Use this to return results on a specified date. | [optional] |
| **includeHistoricalData** | **bool**| Use this to include historical data in the response | [optional] |
| **includeDestinationVatRates** | **bool**| Include vat destination tax rates | [optional] |
| **cisOnly** | **bool**| Use this to filter Tax Rates to CIS only records | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Tax Rates per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Tax Rates | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Rates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxRate[]**](../Model/TaxRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxRatesKey()`

```php
getTaxRatesKey($key, $date, $attributes): \SynergiTech\Sage\Model\TaxRate
```

Returns a Tax Rate

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Sales`: Full Access, Restricted Access, Read Only * Area: `Purchases`: Full Access, Restricted Access, Read Only * Area: `Bank`: Full Access, Restricted Access, Read Only * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Tax Rate Key.
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to show the tax rate percentage on the given date
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Rate (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxRatesKey($key, $date, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->getTaxRatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Rate Key. | |
| **date** | **\DateTime**| Use this to show the tax rate percentage on the given date | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Rate (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxRate**](../Model/TaxRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaxRates()`

```php
postTaxRates($taxRates): \SynergiTech\Sage\Model\TaxRate
```

Creates a Tax Rate (US only)

### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$taxRates = new \SynergiTech\Sage\Model\PostTaxRates(); // \SynergiTech\Sage\Model\PostTaxRates

try {
    $result = $apiInstance->postTaxRates($taxRates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->postTaxRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **taxRates** | [**\SynergiTech\Sage\Model\PostTaxRates**](../Model/PostTaxRates.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\TaxRate**](../Model/TaxRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putTaxRatesKey()`

```php
putTaxRatesKey($key, $taxRates): \SynergiTech\Sage\Model\TaxRate
```

Updates a Tax Rate (US only)

### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Settings`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Tax Rate key.
$taxRates = new \SynergiTech\Sage\Model\PutTaxRates(); // \SynergiTech\Sage\Model\PutTaxRates

try {
    $result = $apiInstance->putTaxRatesKey($key, $taxRates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->putTaxRatesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Tax Rate key. | |
| **taxRates** | [**\SynergiTech\Sage\Model\PutTaxRates**](../Model/PutTaxRates.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\TaxRate**](../Model/TaxRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
