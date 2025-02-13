# PostSalesEstimatesSalesEstimateEstimateLines

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description for the quote line | 
**ledger_account_id** | **string** | The ID of the Ledger Account. | 
**quantity** | **double** | The quantity for the quote line | 
**unit_price** | **double** | The unit price for the quote line | 
**product_id** | **string** | The ID of the Product. | [optional] 
**service_id** | **string** | The ID of the Service. | [optional] 
**trade_of_asset** | **bool** | Whether the line item is marked as trade of asset. | [optional] 
**net_amount** | **double** | The net amount for the quote line | [optional] 
**tax_rate_id** | **string** | The ID of the Tax Rate. | [optional] 
**tax_amount** | **double** | The tax amount for the quote line\&quot;. This attribute is required in v3.1, unless the tax rate is of a \&quot;zero\&quot;, \&quot;exempt\&quot; or \&quot;no_tax\&quot; type. Then the tax_amount is infered as 0.0. In v3, this attribute is optional, but you should still set, as it defaults to 0.0 in any case. This is not what you want for tax rates with a percentage &gt; 0.0. | [optional] 
**total_amount** | **double** | The total amount for the quote line | [optional] 
**base_currency_unit_price** | **double** | The unit price for the quote line in base currency | [optional] 
**unit_price_includes_tax** | **bool** | Defines whether the unit price includes tax | [optional] 
**base_currency_net_amount** | **double** | The net amount for the quote line in base currency | [optional] 
**base_currency_tax_amount** | **double** | The tax amount for the quote line in base currency | [optional] 
**base_currency_total_amount** | **double** | The total amount for the quote line in base currency | [optional] 
**eu_goods_services_type_id** | **string** | The ID of the EU Goods Services Type. | [optional] 
**discount_amount** | **double** | The discount amount for the quote line | [optional] 
**base_currency_discount_amount** | **double** | The discount amount for the quote line in base currency | [optional] 
**discount_percentage** | **double** | The discount percentage for the quote line | [optional] 
**eu_sales_description_id** | **string** | The ID of the EU Sales Description. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


