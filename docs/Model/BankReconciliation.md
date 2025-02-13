# BankReconciliation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**bank_account** | [**\Swagger\Client\Model\Base**](Base.md) | The bank account the reconciliation relates to | [optional] 
**statement_date** | [**\DateTime**](\DateTime.md) | The date of the bank reconciliation | [optional] 
**statement_end_balance** | **double** | The statement end balance for the reconciliation | [optional] 
**reference** | **string** | A reference for the bank reconciliation | [optional] 
**total_received** | **double** | The total amount received | [optional] 
**total_paid** | **double** | The total amount paid | [optional] 
**starting_balance** | **double** | The starting balance of the bank reconciliation | [optional] 
**closing_balance** | **double** | The closing balance of the bank reconciliation | [optional] 
**reconciled_balance** | **double** | The reconciled balance of the bank reconciliation | [optional] 
**balance_difference** | **double** | The difference between the statement end balance and the reconciled balance | [optional] 
**status** | [**\Swagger\Client\Model\BankReconciliationStatus**](BankReconciliationStatus.md) | The status of the bank reconciliation | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


