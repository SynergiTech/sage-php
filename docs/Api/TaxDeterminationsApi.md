# Swagger\Client\TaxDeterminationsApi

All URIs are relative to *https://api-qa.sageapim.com/uki/sageone/accounts/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTaxDeterminations**](TaxDeterminationsApi.md#getTaxDeterminations) | **GET** /tax_determinations | Returns all Tax Determinations


# **getTaxDeterminations**
> \Swagger\Client\Model\TaxRateArray getTaxDeterminations($usage, $artefact_id, $artefact_line_amount, $artefact_line_description, $artefact_line_goods_services_type, $artefact_line_id, $artefact_line_tax_included, $contact_id, $date, $include_destination_vat, $include_line_determination, $show_legacy_id, $items_per_page, $page, $attributes)

Returns all Tax Determinations

### Endpoint Availability  * Accounting Plus: 🇫🇷, 🇪🇸, 🇬🇧, 🇮🇪 * Accounting Standard: 🇫🇷, 🇪🇸, 🇬🇧, 🇮🇪 * Accounting Start: 🇫🇷, 🇪🇸, 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the areas: * Area: `Sales`: Full Access, Restricted Access, Read Only * Area: `Purchases`: Full Access, Restricted Access, Read Only * Area: `Bank`: Full Access, Restricted Access, Read Only * Area: `Settings`: Full Access, Read Only

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

$apiInstance = new Swagger\Client\Api\TaxDeterminationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usage = "usage_example"; // string | Tax rates with the intended usage
$artefact_id = "artefact_id_example"; // string | The artefact id
$artefact_line_amount = 1.2; // double | Format - double. The artefact line amount
$artefact_line_description = "artefact_line_description_example"; // string | The artefact line description
$artefact_line_goods_services_type = "artefact_line_goods_services_type_example"; // string | The artefact line goods and service type
$artefact_line_id = "artefact_line_id_example"; // string | The artefact line id
$artefact_line_tax_included = "artefact_line_tax_included_example"; // string | The artefact line includes tax
$contact_id = "contact_id_example"; // string | Use this to filter by contact id
$date = new \DateTime("2013-10-20"); // \DateTime | Format - date (as full-date in RFC3339). Use this to return results on a specified date.
$include_destination_vat = true; // bool | Include destination vat
$include_line_determination = true; // bool | Include line determination
$show_legacy_id = true; // bool | Display the legacy_id for the Tax Rates.
$items_per_page = 20; // int | Format - int32. Returns the given number of Tax Rates per request.
$page = 1; // int | Format - int32. Go to specific page of Tax Rates
$attributes = "attributes_example"; // string | Specify the attributes that you want to expose for the Tax Rates (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getTaxDeterminations($usage, $artefact_id, $artefact_line_amount, $artefact_line_description, $artefact_line_goods_services_type, $artefact_line_id, $artefact_line_tax_included, $contact_id, $date, $include_destination_vat, $include_line_determination, $show_legacy_id, $items_per_page, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxDeterminationsApi->getTaxDeterminations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **usage** | **string**| Tax rates with the intended usage |
 **artefact_id** | **string**| The artefact id | [optional]
 **artefact_line_amount** | **double**| Format - double. The artefact line amount | [optional]
 **artefact_line_description** | **string**| The artefact line description | [optional]
 **artefact_line_goods_services_type** | **string**| The artefact line goods and service type | [optional]
 **artefact_line_id** | **string**| The artefact line id | [optional]
 **artefact_line_tax_included** | **string**| The artefact line includes tax | [optional]
 **contact_id** | **string**| Use this to filter by contact id | [optional]
 **date** | **\DateTime**| Format - date (as full-date in RFC3339). Use this to return results on a specified date. | [optional]
 **include_destination_vat** | **bool**| Include destination vat | [optional]
 **include_line_determination** | **bool**| Include line determination | [optional]
 **show_legacy_id** | **bool**| Display the legacy_id for the Tax Rates. | [optional]
 **items_per_page** | **int**| Format - int32. Returns the given number of Tax Rates per request. | [optional] [default to 20]
 **page** | **int**| Format - int32. Go to specific page of Tax Rates | [optional] [default to 1]
 **attributes** | **string**| Specify the attributes that you want to expose for the Tax Rates (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional]

### Return type

[**\Swagger\Client\Model\TaxRateArray**](../Model/TaxRateArray.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

