# # TaxProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**taxType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**taxNumber** | **string** | The tax number | [optional]
**taxNumberSuffix** | **string** | The tax number suffix | [optional]
**collectTax** | **bool** | Indicates whether tax is collected for this tax type | [optional]
**taxReturnFrequency** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**addressRegion** | [**\SynergiTech\Sage\Model\AddressRegion**](AddressRegion.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
