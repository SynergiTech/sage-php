# # ContactAllocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**links** | [**\SynergiTech\Sage\Model\Link[]**](Link.md) | Links for the resource | [optional]
**transaction** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**transactionType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**date** | **\DateTime** | The date the allocation was made | [optional]
**contact** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**allocatedArtefacts** | [**\SynergiTech\Sage\Model\AllocatedArtefact[]**](AllocatedArtefact.md) | The payment lines of the payment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
