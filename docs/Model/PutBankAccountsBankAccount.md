# # PutBankAccountsBankAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bankAccountTypeId** | **string** | The bank account type for the bank account | [optional]
**ledgerAccountId** | **string** | The ID of the Ledger Account. | [optional]
**nominalCode** | **int** | The nominal code of the bank account | [optional]
**defaultPaymentMethodId** | **string** | The ID of the Default Payment Method. | [optional]
**gifiCode** | **int** | The GIFI code of the bank ledger account&#39;  GIFI is short for The General Index of Financial Information and it lets the CRA validate tax information electronically instead of manually. Information from financial statements is categorized under the appropriate 4-digit-long GIFI code and entered on corporate income tax returns. GIFI is needed when filing a T2 income tax return.  _Canada only_ | [optional]
**isActive** | **bool** | Indicates whether the Bank account is active or inactive. | [optional]
**currencyId** | **string** | The ID of the Currency. | [optional]
**bankAccountDetails** | [**\SynergiTech\Sage\Model\PutBankAccountsBankAccountBankAccountDetails**](PutBankAccountsBankAccountBankAccountDetails.md) |  | [optional]
**mainAddress** | [**\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainAddress**](PostBankAccountsBankAccountMainAddress.md) |  | [optional]
**mainContactPerson** | [**\SynergiTech\Sage\Model\PostBankAccountsBankAccountMainContactPerson**](PostBankAccountsBankAccountMainContactPerson.md) |  | [optional]
**journalCode** | [**\SynergiTech\Sage\Model\PostJournalsJournalJournalCode**](PostJournalsJournalJournalCode.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
