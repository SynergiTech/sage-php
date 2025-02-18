# # BankReconciliation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**bankAccount** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**statementDate** | **\DateTime** | The date of the bank reconciliation | [optional]
**statementEndBalance** | **float** | The statement end balance for the reconciliation | [optional]
**reference** | **string** | A reference for the bank reconciliation | [optional]
**totalReceived** | **float** | The total amount received | [optional]
**totalPaid** | **float** | The total amount paid | [optional]
**startingBalance** | **float** | The starting balance of the bank reconciliation | [optional]
**closingBalance** | **float** | The closing balance of the bank reconciliation | [optional]
**reconciledBalance** | **float** | The reconciled balance of the bank reconciliation | [optional]
**balanceDifference** | **float** | The difference between the statement end balance and the reconciled balance | [optional]
**status** | [**\SynergiTech\Sage\Model\BankReconciliationStatus**](BankReconciliationStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
