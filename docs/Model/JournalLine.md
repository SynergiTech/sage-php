# # JournalLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**ledgerAccount** | [**\SynergiTech\Sage\Model\LedgerAccount**](LedgerAccount.md) |  | [optional]
**details** | **string** | A description of the journal line | [optional]
**debit** | **float** | The debit amount of the journal line | [optional]
**credit** | **float** | The credit amount of the journal line | [optional]
**includeOnTaxReturn** | **bool** | Indicates whether the journal line should affect the tax return | [optional]
**taxReconciled** | **bool** | Indicates if the journal line is tax reconciled or not. | [optional]
**cleared** | **bool** | Indicates if the journal line is cleared or not.  Will be true when a journal item has been matched with a bank feed or statement. | [optional]
**bankReconciled** | **bool** | Indicates if the journal line is bank reconciled or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
