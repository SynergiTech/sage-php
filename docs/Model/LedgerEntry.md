# # LedgerEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**date** | **\DateTime** | The date of the ledger entry | [optional]
**credit** | **float** | The credit amount of the ledger entry | [optional]
**debit** | **float** | The debit amount of the ledger entry | [optional]
**ledgerAccount** | [**\SynergiTech\Sage\Model\LedgerAccount**](LedgerAccount.md) |  | [optional]
**transaction** | [**\SynergiTech\Sage\Model\Transaction**](Transaction.md) |  | [optional]
**contact** | [**\SynergiTech\Sage\Model\Contact**](Contact.md) |  | [optional]
**deleted** | **bool** | Indicates whether the ledger entry has been deleted or not | [optional]
**taxRate** | [**\SynergiTech\Sage\Model\TaxRate**](TaxRate.md) |  | [optional]
**description** | **string** | The ledger entry description | [optional]
**journalCode** | [**\SynergiTech\Sage\Model\JournalCode**](JournalCode.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
