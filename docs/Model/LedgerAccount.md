# # LedgerAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacyId** | **int** | The legacy ID for the item | [optional]
**id** | **string** | The unique identifier for the item | [optional]
**displayedAs** | **string** | The name of the resource | [optional]
**path** | **string** | The API path for the resource | [optional]
**createdAt** | **\DateTime** | The datetime when the item was created | [optional]
**updatedAt** | **\DateTime** | The datetime when the item was last updated | [optional]
**ledgerAccountGroup** | [**\SynergiTech\Sage\Model\CoaGroupType**](CoaGroupType.md) |  | [optional]
**name** | **string** | The name for the ledger account.  Changes to this field do not propagate to other resources, namely not to the name of the associated bank_account (unlike the behaviour of the UI). | [optional]
**displayName** | **string** | The display name for the ledger account | [optional]
**visibleScopes** | **string[]** | The visible scopes for the ledger account.  This indicates in which of the UI&#39;s areas the ledger account is displayed and available for user selection. Possible entries in this array are &#x60;bank&#x60;, &#x60;sales&#x60;, &#x60;purchasing&#x60;, &#x60;other_payment&#x60;, &#x60;other_receipt&#x60;, &#x60;reporting&#x60;, &#x60;journals&#x60;, &#x60;sales_eu&#x60;, &#x60;sales_row&#x60;, &#x60;purchasing_eu&#x60;, &#x60;purchasing_row&#x60; and &#x60;purchasing_hrc&#x60;. | [optional]
**includedInChart** | **bool** | Indicates whether the ledger account is included in the chart of accounts | [optional]
**nominalCode** | **int** | The nominal code of the ledger account | [optional]
**ledgerAccountType** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**ledgerAccountClassification** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**taxRate** | [**\SynergiTech\Sage\Model\Base**](Base.md) |  | [optional]
**fixedTaxRate** | **bool** | Indicates whether the default tax rate is fixed or may be changed per transaction | [optional]
**visibleInBanking** | **bool** | Indicates whether the ledger account is displayed in the banking area of the application | [optional]
**visibleInExpenses** | **bool** | Indicates whether the ledger account is displayed in the purchases area of the application | [optional]
**visibleInJournals** | **bool** | Indicates whether the ledger account is displayed in the journals area of the application | [optional]
**visibleInOtherPayments** | **bool** | Indicates whether the ledger account is displayed in the other payments area of the application | [optional]
**visibleInOtherReceipts** | **bool** | Indicates whether the ledger account is displayed in the other receipts area of the application | [optional]
**visibleInReporting** | **bool** | Indicates whether the ledger account is displayed in the reporting area of the application | [optional]
**visibleInSales** | **bool** | Indicates whether the ledger account is displayed in the sales area of the application | [optional]
**balanceDetails** | [**\SynergiTech\Sage\Model\LedgerAccountBalanceDetails**](LedgerAccountBalanceDetails.md) |  | [optional]
**isControlAccount** | **bool** | Indicates whether the ledger account is a control account.  Control accounts cannot be removed. See also &#x60;control_name&#x60;. | [optional]
**controlName** | **string** | The control name for the ledger account.  This is used internally by Accounting to identify the correct ledger account for booking taxes etc. You cannot add ledger accounts with control name and you cannot modify the control name of existing ledger accounts. | [optional]
**displayFormatted** | **string** | The display name formatted based on coa_list_order in settings | [optional]
**taxRecoverable** | **bool** | Indicates that transactions posted to this ledger account have part recoverable taxes (Canada only) | [optional]
**recoverablePercentage** | **float** | The partial recoverable tax rate (Canada only) | [optional]
**nonRecoverableLedgerAccount** | [**\SynergiTech\Sage\Model\LedgerAccount**](LedgerAccount.md) |  | [optional]
**cisMaterials** | **bool** | Indicates whether the ledger account is flagged for CIS Materials | [optional]
**taxInstalment** | **bool** | Indicates whether the ledger account is flagged for Tax Intalment (Canada only) | [optional]
**cisLabour** | **bool** | Indicates whether the ledger account is flagged for CIS Labour | [optional]
**gifiCode** | **int** | The GIFI code of the ledger account.  GIFI is short for The General Index of Financial Information and it lets the CRA validate tax information electronically instead of manually. Information from financial statements is categorized under the appropriate 4-digit-long GIFI code and entered on corporate income tax returns. GIFI is needed when filing a T2 income tax return.  _Canada only_ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
