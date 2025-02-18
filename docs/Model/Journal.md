# # Journal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**transaction** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**transactionType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**date** | **\DateTime** | The date of the journal | [optional]
**reference** | **string** | A reference for the journal | [optional]
**description** | **string** | A description of the journal | [optional]
**total** | **float** | The total for the journal | [optional]
**journalCode** | [**\SynergiTech\Sage\Model\JournalCode**](JournalCode.md) |  | [optional]
**journalLines** | [**\SynergiTech\Sage\Model\JournalLine[]**](JournalLine.md) | The journal lines | [optional]
**migrated** | **bool** | Indicates if the journal was migrated from another system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
