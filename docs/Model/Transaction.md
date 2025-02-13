# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the transaction | [optional] 
**deleted** | **bool** | Indicates whether the transaction has been deleted | [optional] 
**reference** | **string** | The transaction reference | [optional] 
**total** | **double** | The transaction total in the base currency | [optional] 
**total_in_transaction_currency** | **double** | The transaction total in the transaction&#39;s origin&#39;s currency. This is null for some origin types. | [optional] 
**contact** | [**\Swagger\Client\Model\Base**](Base.md) | The contact for the transaction | [optional] 
**transaction_type** | [**\Swagger\Client\Model\Base**](Base.md) | The transaction type | [optional] 
**origin** | [**\Swagger\Client\Model\TransactionOrigin**](TransactionOrigin.md) | The original entity that generated the transaction | [optional] 
**audit_trail_id** | **string** | The original entity that generated the transaction | [optional] 
**number_of_attachments** | **string** | The number of attachments related to the transaction | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


