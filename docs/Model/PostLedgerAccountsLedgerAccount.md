# PostLedgerAccountsLedgerAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ledger_account_type_id** | **string** | The ledger account type for the ledger account | 
**included_in_chart** | **bool** | Indicates whether the ledger account is included in the chart of accounts | 
**name** | **string** | The name for the ledger account.  Changes to this field do not propagate to other resources, namely not to the name of the associated bank_account (unlike the behaviour of the UI). | 
**display_name** | **string** | The display name for the ledger account | 
**nominal_code** | **int** | The nominal code of the ledger account | 
**ledger_account_classification_id** | **string** | The ID of the Ledger Account Classification. | [optional] 
**tax_rate_id** | **string** | The ID of the Tax Rate. | [optional] 
**fixed_tax_rate** | **bool** | Indicates whether the default tax rate is fixed or may be changed per transaction | [optional] 
**visible_in_banking** | **bool** | Indicates whether the ledger account is displayed in the banking area of the application | [optional] 
**visible_in_expenses** | **bool** | Indicates whether the ledger account is displayed in the purchases area of the application | [optional] 
**visible_in_journals** | **bool** | Indicates whether the ledger account is displayed in the journals area of the application | [optional] 
**visible_in_other_payments** | **bool** | Indicates whether the ledger account is displayed in the other payments area of the application | [optional] 
**visible_in_other_receipts** | **bool** | Indicates whether the ledger account is displayed in the other receipts area of the application | [optional] 
**visible_in_reporting** | **bool** | Indicates whether the ledger account is displayed in the reporting area of the application | [optional] 
**visible_in_sales** | **bool** | Indicates whether the ledger account is displayed in the sales area of the application | [optional] 
**control_name** | **string** | The control name for the ledger account.  This is used internally by Accounting to identify the correct ledger account for booking taxes etc. You cannot add ledger accounts with control name and you cannot modify the control name of existing ledger accounts. | [optional] 
**tax_recoverable** | **bool** | Indicates that transactions posted to this ledger account have part recoverable taxes (Canada only) | [optional] 
**recoverable_percentage** | **double** | The partial recoverable tax rate (Canada only) | [optional] 
**non_recoverable_ledger_account_id** | **string** | The ID of the Non Recoverable Ledger Account. | [optional] 
**cis_materials** | **bool** | Indicates whether the ledger account is flagged for CIS Materials | [optional] 
**cis_labour** | **bool** | Indicates whether the ledger account is flagged for CIS Labour | [optional] 
**gifi_code** | **int** | The GIFI code of the ledger account.  GIFI is short for The General Index of Financial Information and it lets the CRA validate tax information electronically instead of manually. Information from financial statements is categorized under the appropriate 4-digit-long GIFI code and entered on corporate income tax returns. GIFI is needed when filing a T2 income tax return.  _Canada only_ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


