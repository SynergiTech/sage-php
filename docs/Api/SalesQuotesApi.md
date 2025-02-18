# SynergiTech\Sage\SalesQuotesApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSalesQuotesKey()**](SalesQuotesApi.md#deleteSalesQuotesKey) | **DELETE** /sales_quotes/{key} | Deletes a Sales Quote |
| [**getSalesQuotes()**](SalesQuotesApi.md#getSalesQuotes) | **GET** /sales_quotes | Returns all Sales Quotes |
| [**getSalesQuotesKey()**](SalesQuotesApi.md#getSalesQuotesKey) | **GET** /sales_quotes/{key} | Returns a Sales Quote |
| [**postSalesQuotes()**](SalesQuotesApi.md#postSalesQuotes) | **POST** /sales_quotes | Creates a Sales Quote |
| [**putSalesQuotesKey()**](SalesQuotesApi.md#putSalesQuotesKey) | **PUT** /sales_quotes/{key} | Updates a Sales Quote |


## `deleteSalesQuotesKey()`

```php
deleteSalesQuotesKey($key)
```

Deletes a Sales Quote

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Quote Key.

try {
    $apiInstance->deleteSalesQuotesKey($key);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->deleteSalesQuotesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Quote Key. | |

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

## `getSalesQuotes()`

```php
getSalesQuotes($contactId, $search, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort): \SynergiTech\Sage\Model\SalesQuote[]
```

Returns all Sales Quotes

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$search = 'search_example'; // string | Use this to filter by the quote reference or contact name.
$statusId = 'statusId_example'; // string | Use this to filter by status id
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Sales Quotes dates
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to filter by Sales Quotes dates
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Sales Quotes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$hasAttachments = True; // bool | Use this to filter Sales Quotes by whether they have attachments or not
$itemsPerPage = 20; // int | Returns the given number of Sales Quotes per request.
$page = 1; // int | Go to specific page of Sales Quotes
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Quotes (expose all attributes with 'all'). These are in addition to the base attributes (name, path)
$sort = 'sort_example'; // string | Order by a given attribute (required) and direction (optional; `asc` or `desc`; defaults to `asc`). Available attributes are: created_at, updated_at, date, expiry_date  Example: `sort=created_at` or `sort=created_at:desc`

try {
    $result = $apiInstance->getSalesQuotes($contactId, $search, $statusId, $fromDate, $toDate, $updatedOrCreatedSince, $hasAttachments, $itemsPerPage, $page, $attributes, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->getSalesQuotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **search** | **string**| Use this to filter by the quote reference or contact name. | [optional] |
| **statusId** | **string**| Use this to filter by status id | [optional] |
| **fromDate** | **\DateTime**| Use this to filter by Sales Quotes dates | [optional] |
| **toDate** | **\DateTime**| Use this to filter by Sales Quotes dates | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Sales Quotes changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **hasAttachments** | **bool**| Use this to filter Sales Quotes by whether they have attachments or not | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Sales Quotes per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Sales Quotes | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Quotes (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **sort** | **string**| Order by a given attribute (required) and direction (optional; &#x60;asc&#x60; or &#x60;desc&#x60;; defaults to &#x60;asc&#x60;). Available attributes are: created_at, updated_at, date, expiry_date  Example: &#x60;sort&#x3D;created_at&#x60; or &#x60;sort&#x3D;created_at:desc&#x60; | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesQuote[]**](../Model/SalesQuote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesQuotesKey()`

```php
getSalesQuotesKey($key, $nestedAttributes, $attributes): \SynergiTech\Sage\Model\SalesQuote
```

Returns a Sales Quote

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Read Only, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Quote Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Sales Quote (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Sales Quote (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getSalesQuotesKey($key, $nestedAttributes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->getSalesQuotesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Quote Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Sales Quote (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Sales Quote (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\SalesQuote**](../Model/SalesQuote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSalesQuotes()`

```php
postSalesQuotes($salesQuotes): \SynergiTech\Sage\Model\SalesQuote
```

Creates a Sales Quote

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$salesQuotes = new \SynergiTech\Sage\Model\PostSalesQuotes(); // \SynergiTech\Sage\Model\PostSalesQuotes

try {
    $result = $apiInstance->postSalesQuotes($salesQuotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->postSalesQuotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **salesQuotes** | [**\SynergiTech\Sage\Model\PostSalesQuotes**](../Model/PostSalesQuotes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\SalesQuote**](../Model/SalesQuote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSalesQuotesKey()`

```php
putSalesQuotesKey($key, $salesQuotes): \SynergiTech\Sage\Model\SalesQuote
```

Updates a Sales Quote

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪  ### Access Control Restrictions  Requires the authenticated user to have any of the following roles in the area `Sales`: Full Access, Restricted Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\SalesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Sales Quote Key.
$salesQuotes = new \SynergiTech\Sage\Model\PutSalesQuotes(); // \SynergiTech\Sage\Model\PutSalesQuotes

try {
    $result = $apiInstance->putSalesQuotesKey($key, $salesQuotes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesQuotesApi->putSalesQuotesKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Sales Quote Key. | |
| **salesQuotes** | [**\SynergiTech\Sage\Model\PutSalesQuotes**](../Model/PutSalesQuotes.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\SalesQuote**](../Model/SalesQuote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
