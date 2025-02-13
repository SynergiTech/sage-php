# BankDeposit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**transaction** | [**\Swagger\Client\Model\Base**](Base.md) | The transaction for the item | [optional] 
**transaction_type** | [**\Swagger\Client\Model\Base**](Base.md) | The transaction type of the item | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was deleted | [optional] 
**from_bank_account** | [**\Swagger\Client\Model\BankAccount**](BankAccount.md) | From bank account - money leaves this account | [optional] 
**to_bank_account** | [**\Swagger\Client\Model\BankAccount**](BankAccount.md) | To bank account - money goes into this account | [optional] 
**date** | [**\DateTime**](\DateTime.md) | User generated date of transaction, not necessarily when it was created | [optional] 
**reference** | **string** | Reference | [optional] 
**cash_amount** | **double** | Cash total in the deposit | [optional] 
**cheque_amount** | **double** | Cheque total in the deposit | [optional] 
**total_amount** | **double** | Total of cash and cheques in the deposit | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


