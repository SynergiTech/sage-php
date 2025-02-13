# ContactOpeningBalance

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
**transaction_type** | [**\Swagger\Client\Model\Base**](Base.md) | The transaction type of the contact opening balance | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was deleted | [optional] 
**contact_opening_balance_type** | [**\Swagger\Client\Model\Base**](Base.md) | The type of contact opening balance e.g. invoice or credit note | [optional] 
**contact** | [**\Swagger\Client\Model\Base**](Base.md) | The contact the opening balance relates to | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the opening balance | [optional] 
**reference** | **string** | The reference for the opening balance | [optional] 
**details** | **string** | A description of the opening balance | [optional] 
**net_amount** | **double** | The net amount of the opening balance | [optional] 
**tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The tax rate for the opening balance | [optional] 
**tax_amount** | **double** | The tax amount of the opening balance | [optional] 
**tax_breakdown** | [**\Swagger\Client\Model\TaxBreakdown[]**](TaxBreakdown.md) | The tax breakdown for the opening balance | [optional] 
**total_amount** | **double** | The total amount of the opening balance | [optional] 
**currency** | [**\Swagger\Client\Model\Base**](Base.md) | The currency for the opening balance | [optional] 
**exchange_rate** | **double** | The exchange rate for the opening balance | [optional] 
**base_currency_net_amount** | **double** | The net amount of the opening balance in base currency | [optional] 
**base_currency_tax_amount** | **double** | The tax amount of the opening balance in base currency | [optional] 
**base_currency_tax_breakdown** | [**\Swagger\Client\Model\TaxBreakdown[]**](TaxBreakdown.md) | The tax breakdown for the opening balance in base currency | [optional] 
**base_currency_total_amount** | **double** | The total amount of the opening balance in base currency | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


