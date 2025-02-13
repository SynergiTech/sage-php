# PostSalesQuickEntriesSalesQuickEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quick_entry_type_id** | **string** | The type of quick entry e.g. invoice or credit note | 
**date** | [**\DateTime**](\DateTime.md) | The date of the quick entry | 
**contact_id** | **string** | The contact the quick entry relates to | 
**reference** | **string** | The reference for the quick entry | 
**ledger_account_id** | **string** | The associated ledger account | 
**contact_name** | **string** | The name of the contact when the quick entry was created | [optional] 
**contact_reference** | **string** | The reference of the contact when the quick entry was created | [optional] 
**details** | **string** | A description of the quick entry | [optional] 
**net_amount** | **double** | The net amount of the quick entry | [optional] 
**tax_rate_id** | **string** | The ID of the Tax Rate. | [optional] 
**tax_amount** | **double** | The tax amount of the quick entry | [optional] 
**total_amount** | **double** | The total amount of the quick entry | [optional] 
**currency_id** | **string** | The ID of the Currency. | [optional] 
**exchange_rate** | **double** | The exchange rate for the quick entry | [optional] 
**inverse_exchange_rate** | **double** | The inverse exchange rate for the quick entry | [optional] 
**base_currency_net_amount** | **double** | The net amount of the quick entry in base currency | [optional] 
**base_currency_tax_amount** | **double** | The tax amount of the quick entry in base currency | [optional] 
**base_currency_total_amount** | **double** | The total amount of the quick entry in base currency | [optional] 
**status_id** | **string** | The ID of the Status. | [optional] 
**tax_address_region_id** | **string** | The ID of the Tax Address Region. (Canada only) | [optional] 
**trade_of_asset** | **bool** | Whether the quick entry is marked as trade of asset. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


