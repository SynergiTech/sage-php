# PutOtherPaymentsOtherPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_type_id** | **string** | The transaction type of the payment | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the payment | [optional] 
**total_amount** | **double** | The total amount of the payment | [optional] 
**base_currency_total_itc_amount** | **double** | The total amount of input tax credit in base currency for the                      Other Payment (Canada only) | [optional] 
**total_itc_amount** | **double** | The total amount of input tax credit for the Other Payment (Canada only) | [optional] 
**base_currency_total_itr_amount** | **double** | The total amount of input tax refund in base currency for the                      Other Payment (Canada only) | [optional] 
**total_itr_amount** | **double** | The total amount of input tax refund for the Other Payment (Canada only) | [optional] 
**part_recoverable** | **bool** | Indicates if the Other Payment is part recoverable or not (Canada only) | [optional] 
**payment_method_id** | **string** | The ID of the Payment Method. | [optional] 
**contact_id** | **string** | The ID of the Contact. | [optional] 
**bank_account_id** | **string** | The ID of the Bank Account. | [optional] 
**tax_address_region_id** | **string** | The ID of the Tax Address Region. (Canada only) | [optional] 
**net_amount** | **double** | The net amount of the payment | [optional] 
**tax_amount** | **double** | The tax amount of the payment | [optional] 
**reference** | **string** | A reference of the payment | [optional] 
**withholding_tax_rate** | **double** | IRPF withheld tax rate | [optional] 
**withholding_tax_amount** | **double** | IRPF withheld tax amount | [optional] 
**payment_lines** | [**\Swagger\Client\Model\PutOtherPaymentsOtherPaymentPaymentLines[]**](PutOtherPaymentsOtherPaymentPaymentLines.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


