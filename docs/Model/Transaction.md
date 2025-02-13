# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**date** | **\DateTime** | The date of the transaction | [optional]
**deleted** | **bool** | Indicates whether the transaction has been deleted | [optional]
**reference** | **string** | The transaction reference | [optional]
**total** | **float** | The transaction total in the base currency | [optional]
**totalInTransactionCurrency** | **float** | The transaction total in the transaction&#39;s origin&#39;s currency. This is null for some origin types. | [optional]
**contact** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**transactionType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**origin** | [**\SynergiTech\Sage\Model\TransactionOrigin**](TransactionOrigin.md) |  | [optional]
**auditTrailId** | **string** | The original entity that generated the transaction | [optional]
**numberOfAttachments** | **string** | The number of attachments related to the transaction | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
