# # OpeningBalanceJournal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**transaction** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**transactionType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**deletedAt** | **\DateTime** | The datetime when the item was deleted | [optional]
**date** | **\DateTime** | The date of the opening balance journal | [optional]
**reference** | **string** | A reference for the opening balance journal | [optional]
**journalLines** | [**\SynergiTech\Sage\Model\BaseJournalLine[]**](BaseJournalLine.md) | The journal lines | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
