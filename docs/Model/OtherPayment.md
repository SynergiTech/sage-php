# OtherPayment

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
**transaction_type** | [**\Swagger\Client\Model\Base**](Base.md) | The transaction type of the payment | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was deleted | [optional] 
**base_currency_total_itc_amount** | **double** | The total amount of input tax credit in base currency for the                      Other Payment (Canada only) | [optional] 
**total_itc_amount** | **double** | The total amount of input tax credit for the Other Payment (Canada only) | [optional] 
**base_currency_total_itr_amount** | **double** | The total amount of input tax refund in base currency for the                      Other Payment (Canada only) | [optional] 
**total_itr_amount** | **double** | The total amount of input tax refund for the Other Payment (Canada only) | [optional] 
**part_recoverable** | **bool** | Indicates if the Other Payment is part recoverable or not (Canada only) | [optional] 
**payment_method** | [**\Swagger\Client\Model\Base**](Base.md) | The payment method of the payment | [optional] 
**contact** | [**\Swagger\Client\Model\Base**](Base.md) | The contact of the payment | [optional] 
**bank_account** | [**\Swagger\Client\Model\Base**](Base.md) | The bank account of the payment | [optional] 
**tax_address_region** | [**\Swagger\Client\Model\Base**](Base.md) | The address region for tax purposes (Canada only) | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the payment | [optional] 
**net_amount** | **double** | The net amount of the payment | [optional] 
**tax_amount** | **double** | The tax amount of the payment | [optional] 
**total_amount** | **double** | The total amount of the payment | [optional] 
**reference** | **string** | A reference of the payment Note: An upper length limit of 25 or 40 characters is imposed conditionally and may not apply in every request. A hard upper limit of 255 characters is imposed by the storage layer, though. | [optional] 
**payment_lines** | [**\Swagger\Client\Model\OtherPaymentLineItem[]**](OtherPaymentLineItem.md) | The payment lines of the payment | [optional] 
**editable** | **bool** | Indicates whether or not the payment can be edited | [optional] 
**deletable** | **bool** | Indicates whether or not the payment can be deleted | [optional] 
**withholding_tax_rate** | **double** | IRPF withheld tax rate | [optional] 
**withholding_tax_amount** | **double** | IRPF withheld tax amount | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


