# # BankTransfer

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
**date** | **\DateTime** | The date of the bank transfer | [optional]
**reference** | **string** | The reference for the bank transfer | [optional]
**amount** | **float** | The amount of the bank transfer | [optional]
**description** | **string** | The description for the bank transfer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
