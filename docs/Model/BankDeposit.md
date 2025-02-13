# # BankDeposit

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
**fromBankAccount** | [**\SynergiTech\Sage\Model\BankAccount**](BankAccount.md) |  | [optional]
**toBankAccount** | [**\SynergiTech\Sage\Model\BankAccount**](BankAccount.md) |  | [optional]
**date** | **\DateTime** | User generated date of transaction, not necessarily when it was created | [optional]
**reference** | **string** | Reference | [optional]
**cashAmount** | **float** | Cash total in the deposit | [optional]
**chequeAmount** | **float** | Cheque total in the deposit | [optional]
**totalAmount** | **float** | Total of cash and cheques in the deposit | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
