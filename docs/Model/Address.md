# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**addressLine1** | **string** | The first line of the address | [optional]
**addressLine2** | **string** | The second line of the address | [optional]
**city** | **string** | The address town/city | [optional]
**postalCode** | **string** | The address postal code/zipcode | [optional]
**country** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**bankAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**contact** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**addressType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**name** | **string** | The custom name of the address | [optional]
**region** | **string** | The address state/province/region | [optional]
**countryGroup** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**isMainAddress** | **bool** | Specifies the address as the contact&#39;s main address. Only a single address can exist for a contact in Start so this is always true when returned by the API but cannot be seen in the UI | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
