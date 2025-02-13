# SynergiTech\Sage\TaxDeterminationsApi

All URIs are relative to https://api-qa.sageapim.com/uki/sageone/accounts/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaxDeterminations()**](TaxDeterminationsApi.md#getTaxDeterminations) | **GET** /tax_determinations | Returns all Tax Determinations |


## `getTaxDeterminations()`

```php
getTaxDeterminations($usage, $artefactId, $artefactLineAmount, $artefactLineDescription, $artefactLineGoodsServicesType, $artefactLineId, $artefactLineTaxIncluded, $contactId, $date, $includeDestinationVat, $includeLineDetermination, $showLegacyId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\TaxRate[]
```

Returns all Tax Determinations

### Endpoint Availability  * Accounting Plus: 🇫🇷, 🇪🇸, 🇬🇧, 🇮🇪 * Accounting Standard: 🇫🇷, 🇪🇸, 🇬🇧, 🇮🇪 * Accounting Start: 🇫🇷, 🇪🇸, 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas: * Area: `Sales`: Full Access, Restricted Access, Read Only * Area: `Purchases`: Full Access, Restricted Access, Read Only * Area: `Bank`: Full Access, Restricted Access, Read Only * Area: `Settings`: Full Access, Read Only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyQuery
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');

// Configure API key authorization: apiKeyHeader
$config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SynergiTech\Sage\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');


$apiInstance = new SynergiTech\Sage\Api\TaxDeterminationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usage = 'usage_example'; // string | Tax rates with the intended usage
$artefactId = 'artefactId_example'; // string | The artefact id
$artefactLineAmount = 3.4; // float | Format - double. The artefact line amount
$artefactLineDescription = 'artefactLineDescription_example'; // string | The artefact line description
$artefactLineGoodsServicesType = 'artefactLineGoodsServicesType_example'; // string | The artefact line goods and service type
$artefactLineId = 'artefactLineId_example'; // string | The artefact line id
$artefactLineTaxIncluded = 'artefactLineTaxIncluded_example'; // string | The artefact line includes tax
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Format - date (as full-date in RFC3339). Use this to return results on a specified date.
$includeDestinationVat = True; // bool | Include destination vat
$includeLineDetermination = True; // bool | Include line determination
$showLegacyId = True; // bool | Display the legacy_id for the Tax Rates.
$itemsPerPage = 20; // int | Format - int32. Returns the given number of Tax Rates per request.
$page = 1; // int | Format - int32. Go to specific page of Tax Rates
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Tax Rates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxDeterminations($usage, $artefactId, $artefactLineAmount, $artefactLineDescription, $artefactLineGoodsServicesType, $artefactLineId, $artefactLineTaxIncluded, $contactId, $date, $includeDestinationVat, $includeLineDetermination, $showLegacyId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxDeterminationsApi->getTaxDeterminations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usage** | **string**| Tax rates with the intended usage | |
| **artefactId** | **string**| The artefact id | [optional] |
| **artefactLineAmount** | **float**| Format - double. The artefact line amount | [optional] |
| **artefactLineDescription** | **string**| The artefact line description | [optional] |
| **artefactLineGoodsServicesType** | **string**| The artefact line goods and service type | [optional] |
| **artefactLineId** | **string**| The artefact line id | [optional] |
| **artefactLineTaxIncluded** | **string**| The artefact line includes tax | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **date** | **\DateTime**| Format - date (as full-date in RFC3339). Use this to return results on a specified date. | [optional] |
| **includeDestinationVat** | **bool**| Include destination vat | [optional] |
| **includeLineDetermination** | **bool**| Include line determination | [optional] |
| **showLegacyId** | **bool**| Display the legacy_id for the Tax Rates. | [optional] |
| **itemsPerPage** | **int**| Format - int32. Returns the given number of Tax Rates per request. | [optional] [default to 20] |
| **page** | **int**| Format - int32. Go to specific page of Tax Rates | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Tax Rates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\TaxRate[]**](../Model/TaxRate.md)

### Authorization

[apiKeyQuery](../../README.md#apiKeyQuery), [apiKeyHeader](../../README.md#apiKeyHeader)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
