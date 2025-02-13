# OpeningBalanceJournal

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
**date** | [**\DateTime**](\DateTime.md) | The date of the opening balance journal | [optional] 
**reference** | **string** | A reference for the opening balance journal | [optional] 
**journal_lines** | [**\Swagger\Client\Model\BaseJournalLine[]**](BaseJournalLine.md) | The journal lines | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


