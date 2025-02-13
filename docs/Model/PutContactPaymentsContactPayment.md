# PutContactPaymentsContactPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type_id** | **string** | The transaction type of the payment | [optional] 
**contact_id** | **string** | The contact of the payment | [optional] 
**bank_account_id** | **string** | The bank account of the payment | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date the payment was made | [optional] 
**total_amount** | **double** | The total amount of the payment | [optional] 
**payment_method_id** | **string** | The ID of the Payment Method. | [optional] 
**net_amount** | **double** | The net amount of the payment | [optional] 
**tax_amount** | **double** | The tax amount of the payment | [optional] 
**currency_id** | **string** | The ID of the Currency. | [optional] 
**exchange_rate** | **double** | The exchange rate of the payment | [optional] 
**base_currency_net_amount** | **double** | The net amount of the payment in base currency | [optional] 
**base_currency_tax_amount** | **double** | The tax amount of the payment in base currency | [optional] 
**base_currency_total_amount** | **double** | The total amount of the payment in base currency | [optional] 
**base_currency_currency_charge** | **double** | The currency conversion charges in base currency | [optional] 
**reference** | **string** | A reference for the payment | [optional] 
**tax_rate_id** | **string** | The ID of the Tax Rate. | [optional] 
**allocated_artefacts** | [**\Swagger\Client\Model\PostContactPaymentsContactPaymentAllocatedArtefacts[]**](PostContactPaymentsContactPaymentAllocatedArtefacts.md) |  | [optional] 
**payment_on_account** | [**\Swagger\Client\Model\PostContactPaymentsContactPaymentPaymentOnAccount**](PostContactPaymentsContactPaymentPaymentOnAccount.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


