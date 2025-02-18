# SynergiTech\Sage\ContactPeopleApi

All URIs are relative to https://api.accounting.sage.com/v3.1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteContactPersonsKey()**](ContactPeopleApi.md#deleteContactPersonsKey) | **DELETE** /contact_persons/{key} | Deletes a Contact Person |
| [**getContactPersons()**](ContactPeopleApi.md#getContactPersons) | **GET** /contact_persons | Returns all Contact People |
| [**getContactPersonsKey()**](ContactPeopleApi.md#getContactPersonsKey) | **GET** /contact_persons/{key} | Returns a Contact Person |
| [**postContactPersons()**](ContactPeopleApi.md#postContactPersons) | **POST** /contact_persons | Creates a Contact Person |
| [**putContactPersonsKey()**](ContactPeopleApi.md#putContactPersonsKey) | **PUT** /contact_persons/{key} | Updates a Contact Person |


## `deleteContactPersonsKey()`

```php
deleteContactPersonsKey($key)
```

Deletes a Contact Person

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Person Key.

try {
    $apiInstance->deleteContactPersonsKey($key);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->deleteContactPersonsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Person Key. | |

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

## `getContactPersons()`

```php
getContactPersons($addressId, $updatedOrCreatedSince, $deletedSince, $contactId, $itemsPerPage, $page, $attributes): \SynergiTech\Sage\Model\ContactPerson[]
```

Returns all Contact People

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$addressId = 'addressId_example'; // string | Use this to filter by address id
$updatedOrCreatedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Address Contacts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp.
$deletedSince = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Use this to limit the response to Address Contacts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp.
$contactId = 'contactId_example'; // string | Use this to filter by contact id
$itemsPerPage = 20; // int | Returns the given number of Address Contacts per request.
$page = 1; // int | Go to specific page of Address Contacts
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Address Contacts (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactPersons($addressId, $updatedOrCreatedSince, $deletedSince, $contactId, $itemsPerPage, $page, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->getContactPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **addressId** | **string**| Use this to filter by address id | [optional] |
| **updatedOrCreatedSince** | **\DateTime**| Use this to limit the response to Address Contacts changed since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Inclusive of the passed timestamp. | [optional] |
| **deletedSince** | **\DateTime**| Use this to limit the response to Address Contacts deleted since a given date (format: YYYY-MM-DDT(+|-)hh:mm) or date-time (format: YYYY-MM-DDThh:mm:ss(+|-)hh:mm). Not inclusive of the passed timestamp. | [optional] |
| **contactId** | **string**| Use this to filter by contact id | [optional] |
| **itemsPerPage** | **int**| Returns the given number of Address Contacts per request. | [optional] [default to 20] |
| **page** | **int**| Go to specific page of Address Contacts | [optional] [default to 1] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Address Contacts (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactPerson[]**](../Model/ContactPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactPersonsKey()`

```php
getContactPersonsKey($key, $nestedAttributes, $attributes): \SynergiTech\Sage\Model\ContactPerson
```

Returns a Contact Person

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Read Only, Restricted Access, Full Access * Area: `Sales`: Read Only, Restricted Access, Full Access * Area: `Purchases`: Read Only, Restricted Access, Full Access * Area: `Bank`: Read Only, Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Person Key.
$nestedAttributes = 'nestedAttributes_example'; // string | Specify the attributes that you want to expose for nested entities of the Address Contact (expose all nested attributes with 'all'). These are in addition to the base attributes (name, path)
$attributes = 'attributes_example'; // string | Specify the attributes that you want to expose for the Address Contact (expose all attributes with 'all'). These are in addition to the base attributes (name, path)

try {
    $result = $apiInstance->getContactPersonsKey($key, $nestedAttributes, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->getContactPersonsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Person Key. | |
| **nestedAttributes** | **string**| Specify the attributes that you want to expose for nested entities of the Address Contact (expose all nested attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |
| **attributes** | **string**| Specify the attributes that you want to expose for the Address Contact (expose all attributes with &#39;all&#39;). These are in addition to the base attributes (name, path) | [optional] |

### Return type

[**\SynergiTech\Sage\Model\ContactPerson**](../Model/ContactPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactPersons()`

```php
postContactPersons($contactPersons): \SynergiTech\Sage\Model\ContactPerson
```

Creates a Contact Person

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contactPersons = new \SynergiTech\Sage\Model\PostContactPersons(); // \SynergiTech\Sage\Model\PostContactPersons

try {
    $result = $apiInstance->postContactPersons($contactPersons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->postContactPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contactPersons** | [**\SynergiTech\Sage\Model\PostContactPersons**](../Model/PostContactPersons.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ContactPerson**](../Model/ContactPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putContactPersonsKey()`

```php
putContactPersonsKey($key, $contactPersons): \SynergiTech\Sage\Model\ContactPerson
```

Updates a Contact Person

### Endpoint Availability  * Accounting Plus: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸 * Accounting Standard: 🇬🇧, 🇮🇪 * Accounting Start: 🇨🇦, 🇪🇸, 🇫🇷, 🇬🇧, 🇮🇪, 🇺🇸  ### Access Control Restrictions  Requires the authenticated user to have any mentioned role in one of the listed areas: * Area: `Contacts`: Restricted Access, Full Access

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SynergiTech\Sage\Api\ContactPeopleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The Contact Person Key.
$contactPersons = new \SynergiTech\Sage\Model\PutContactPersons(); // \SynergiTech\Sage\Model\PutContactPersons

try {
    $result = $apiInstance->putContactPersonsKey($key, $contactPersons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPeopleApi->putContactPersonsKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The Contact Person Key. | |
| **contactPersons** | [**\SynergiTech\Sage\Model\PutContactPersons**](../Model/PutContactPersons.md)|  | |

### Return type

[**\SynergiTech\Sage\Model\ContactPerson**](../Model/ContactPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
