# # MigrationTaxReturn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**fromDate** | **\DateTime** | The start date of the tax return | [optional]
**toDate** | **\DateTime** | The end date of the tax return | [optional]
**taxReturnFrequency** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**totalAmount** | **float** | The total of the tax return | [optional]
**gb** | [**\SynergiTech\Sage\Model\GBBoxData**](GBBoxData.md) |  | [optional]
**ie** | [**\SynergiTech\Sage\Model\IEBoxData**](IEBoxData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
