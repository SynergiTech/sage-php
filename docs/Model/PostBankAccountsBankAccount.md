# PostBankAccountsBankAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank_account_type_id** | **string** | The bank account type for the bank account | 
**ledger_account_id** | **string** | The ID of the Ledger Account. | [optional] 
**nominal_code** | **int** | The nominal code of the bank account | [optional] 
**default_payment_method_id** | **string** | The ID of the Default Payment Method. | [optional] 
**gifi_code** | **int** | The GIFI code of the bank ledger account&#39;  GIFI is short for The General Index of Financial Information and it lets the CRA validate tax information electronically instead of manually. Information from financial statements is categorized under the appropriate 4-digit-long GIFI code and entered on corporate income tax returns. GIFI is needed when filing a T2 income tax return.  _Canada only_ | [optional] 
**is_active** | **bool** | Indicates whether the Bank account is active or inactive. | [optional] 
**bank_account_details** | [**\Swagger\Client\Model\PostBankAccountsBankAccountBankAccountDetails**](PostBankAccountsBankAccountBankAccountDetails.md) |  | [optional] 
**main_address** | [**\Swagger\Client\Model\PostBankAccountsBankAccountMainAddress**](PostBankAccountsBankAccountMainAddress.md) |  | [optional] 
**main_contact_person** | [**\Swagger\Client\Model\PostBankAccountsBankAccountMainContactPerson**](PostBankAccountsBankAccountMainContactPerson.md) |  | [optional] 
**journal_code** | [**\Swagger\Client\Model\PostJournalsJournalJournalCode**](PostJournalsJournalJournalCode.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


