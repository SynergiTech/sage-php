# LedgerEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the ledger entry | [optional] 
**credit** | **double** | The credit amount of the ledger entry | [optional] 
**debit** | **double** | The debit amount of the ledger entry | [optional] 
**ledger_account** | [**\Swagger\Client\Model\LedgerAccount**](LedgerAccount.md) | The ledger account of the ledger entry | [optional] 
**transaction** | [**\Swagger\Client\Model\Transaction**](Transaction.md) | The ledger entry transaction record | [optional] 
**contact** | [**\Swagger\Client\Model\Contact**](Contact.md) | The contact for the ledger entry | [optional] 
**deleted** | **bool** | Indicates whether the ledger entry has been deleted or not | [optional] 
**tax_rate** | [**\Swagger\Client\Model\TaxRate**](TaxRate.md) | The ledger entry tax rate | [optional] 
**description** | **string** | The ledger entry description | [optional] 
**journal_code** | [**\Swagger\Client\Model\JournalCode**](JournalCode.md) | The journal code of the ledger entry (France only) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


