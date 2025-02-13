# BankTransfer

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
**from_bank_account** | [**\Swagger\Client\Model\BankAccount**](BankAccount.md) | The bank account that the money was transfered from | [optional] 
**to_bank_account** | [**\Swagger\Client\Model\BankAccount**](BankAccount.md) | The bank account that the money was transfered to | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the bank transfer | [optional] 
**reference** | **string** | The reference for the bank transfer | [optional] 
**amount** | **double** | The amount of the bank transfer | [optional] 
**description** | **string** | The description for the bank transfer | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


