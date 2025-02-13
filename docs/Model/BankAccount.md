# BankAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was deleted | [optional] 
**bank_account_details** | [**\Swagger\Client\Model\BankAccountDetails**](BankAccountDetails.md) | The account details for the bank account | [optional] 
**ledger_account** | [**\Swagger\Client\Model\Base**](Base.md) | The ledger account for the bank account | [optional] 
**bank_account_type** | [**\Swagger\Client\Model\Base**](Base.md) | The bank account type for the bank account | [optional] 
**balance** | **double** | The bank account balance | [optional] 
**main_address** | [**\Swagger\Client\Model\Address**](Address.md) | The main address for the bank account | [optional] 
**main_contact_person** | [**\Swagger\Client\Model\BankAccountContact**](BankAccountContact.md) | The main contact for the bank account | [optional] 
**nominal_code** | **int** | The nominal code of the bank account | [optional] 
**editable** | **bool** | Indicates whether or not the bank account can be edited | [optional] 
**deletable** | **bool** | Indicates whether or not the bank account can be deleted | [optional] 
**journal_code** | [**\Swagger\Client\Model\JournalCode**](JournalCode.md) | The journal code of the bank account (France only) | [optional] 
**default_payment_method** | [**\Swagger\Client\Model\Base**](Base.md) | The default payment method of the bank account | [optional] 
**gifi_code** | **int** | The GIFI code of the bank ledger account&#39;  GIFI is short for The General Index of Financial Information and it lets the CRA validate tax information electronically instead of manually. Information from financial statements is categorized under the appropriate 4-digit-long GIFI code and entered on corporate income tax returns. GIFI is needed when filing a T2 income tax return.  _Canada only_ | [optional] 
**is_active** | **bool** | Indicates whether the Bank account is active or inactive. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


