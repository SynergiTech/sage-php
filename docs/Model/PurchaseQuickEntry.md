# PurchaseQuickEntry

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
**quick_entry_type** | [**\Swagger\Client\Model\Base**](Base.md) | The type of quick entry e.g. invoice or credit note | [optional] 
**contact_name** | **string** | The name of the contact when the quick entry was created | [optional] 
**contact_reference** | **string** | The reference of the contact when the quick entry was created | [optional] 
**contact** | [**\Swagger\Client\Model\Base**](Base.md) | The contact the quick entry relates to | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the quick entry | [optional] 
**reference** | **string** | The reference for the quick entry | [optional] 
**ledger_account** | [**\Swagger\Client\Model\Base**](Base.md) | The associated ledger account | [optional] 
**details** | **string** | A description of the quick entry | [optional] 
**net_amount** | **double** | The net amount of the quick entry | [optional] 
**tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The tax rate for the quick entry | [optional] 
**tax_amount** | **double** | The tax amount of the quick entry | [optional] 
**tax_breakdown** | [**\Swagger\Client\Model\TaxBreakdown[]**](TaxBreakdown.md) | The tax breakdown for the quick entry | [optional] 
**total_amount** | **double** | The total amount of the quick entry | [optional] 
**outstanding_amount** | **double** | The outstanding amount of the quick entry | [optional] 
**currency** | [**\Swagger\Client\Model\Base**](Base.md) | The currency for the quick entry | [optional] 
**exchange_rate** | **double** | The exchange rate for the quick entry | [optional] 
**inverse_exchange_rate** | **double** | The inverse exchange rate for the quick entry | [optional] 
**base_currency_net_amount** | **double** | The net amount of the quick entry in base currency | [optional] 
**base_currency_tax_amount** | **double** | The tax amount of the quick entry in base currency | [optional] 
**base_currency_tax_breakdown** | [**\Swagger\Client\Model\TaxBreakdown[]**](TaxBreakdown.md) | The tax breakdown for the quick entry in base currency | [optional] 
**base_currency_total_amount** | **double** | The total amount of the quick entry in base currency | [optional] 
**base_currency_outstanding_amount** | **double** | The outstanding amount of the quick entry in base currency | [optional] 
**status** | [**\Swagger\Client\Model\Base**](Base.md) | The status of the quick entry | [optional] 
**payments_allocations** | [**\Swagger\Client\Model\PaymentAllocation[]**](PaymentAllocation.md) | The associated payments and allocations | [optional] 
**tax_address_region** | [**\Swagger\Client\Model\Base**](Base.md) | The address region for tax purposes (Canada only) | [optional] 
**migrated** | **bool** | Indicates if the quick entry was migrated from another system. | [optional] 
**trade_of_asset** | **bool** | Whether the quick entry is marked as trade of asset. | [optional] 
**gst_amount** | **double** | The gst or hst tax amount for the purchase quick entry | [optional] 
**pst_amount** | **double** | The pst or qst tax amount for the purchase quick entry | [optional] 
**tax_recoverable** | **bool** | Indicates if the purchase quick entry is tax recoverable or not | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


