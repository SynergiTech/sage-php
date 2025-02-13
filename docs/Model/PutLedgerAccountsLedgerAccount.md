# # PutLedgerAccountsLedgerAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ledgerAccountTypeId** | **string** | The ledger account type for the ledger account | [optional]
**includedInChart** | **bool** | Indicates whether the ledger account is included in the chart of accounts | [optional]
**name** | **string** | The name for the ledger account.  Changes to this field do not propagate to other resources, namely not to the name of the associated bank_account (unlike the behaviour of the UI). | [optional]
**displayName** | **string** | The display name for the ledger account | [optional]
**nominalCode** | **int** | The nominal code of the ledger account | [optional]
**ledgerAccountClassificationId** | **string** | The ID of the Ledger Account Classification. | [optional]
**taxRateId** | **string** | The ID of the Tax Rate. | [optional]
**fixedTaxRate** | **bool** | Indicates whether the default tax rate is fixed or may be changed per transaction | [optional]
**visibleInBanking** | **bool** | Indicates whether the ledger account is displayed in the banking area of the application | [optional]
**visibleInExpenses** | **bool** | Indicates whether the ledger account is displayed in the purchases area of the application | [optional]
**visibleInJournals** | **bool** | Indicates whether the ledger account is displayed in the journals area of the application | [optional]
**visibleInOtherPayments** | **bool** | Indicates whether the ledger account is displayed in the other payments area of the application | [optional]
**visibleInOtherReceipts** | **bool** | Indicates whether the ledger account is displayed in the other receipts area of the application | [optional]
**visibleInReporting** | **bool** | Indicates whether the ledger account is displayed in the reporting area of the application | [optional]
**visibleInSales** | **bool** | Indicates whether the ledger account is displayed in the sales area of the application | [optional]
**controlName** | **string** | The control name for the ledger account.  This is used internally by Accounting to identify the correct ledger account for booking taxes etc. You cannot add ledger accounts with control name and you cannot modify the control name of existing ledger accounts. | [optional]
**taxRecoverable** | **bool** | Indicates that transactions posted to this ledger account have part recoverable taxes (Canada only) | [optional]
**recoverablePercentage** | **float** | The partial recoverable tax rate (Canada only) | [optional]
**nonRecoverableLedgerAccountId** | **string** | The ID of the Non Recoverable Ledger Account. | [optional]
**cisMaterials** | **bool** | Indicates whether the ledger account is flagged for CIS Materials | [optional]
**cisLabour** | **bool** | Indicates whether the ledger account is flagged for CIS Labour | [optional]
**gifiCode** | **int** | The GIFI code of the ledger account.  GIFI is short for The General Index of Financial Information and it lets the CRA validate tax information electronically instead of manually. Information from financial statements is categorized under the appropriate 4-digit-long GIFI code and entered on corporate income tax returns. GIFI is needed when filing a T2 income tax return.  _Canada only_ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
