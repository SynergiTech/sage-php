# PurchaseCreditNoteLineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**is_purchase_for_resale** | **bool** | Identifies whether the line item is for resale. (Ireland Only) | [optional] 
**description** | **string** | The description for the credit note line | [optional] 
**product** | [**\Swagger\Client\Model\Product**](Product.md) | The product the credit note line relates to | [optional] 
**service** | [**\Swagger\Client\Model\Service**](Service.md) | The service the credit note line relates to | [optional] 
**ledger_account** | [**\Swagger\Client\Model\Base**](Base.md) | The ledger account for the credit note line | [optional] 
**trade_of_asset** | **bool** | Whether the line item is marked as trade of asset. | [optional] 
**quantity** | **double** | The quantity for the credit note line | [optional] 
**unit_price** | **double** | The unit price for the credit note line | [optional] 
**net_amount** | **double** | The net amount for the credit note line | [optional] 
**tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The tax rate for the credit note line | [optional] 
**tax_amount** | **double** | The tax amount for the credit note line\&quot;. This attribute is required in v3.1, unless the tax rate is of a \&quot;zero\&quot;, \&quot;exempt\&quot; or \&quot;no_tax\&quot; type. Then the tax_amount is infered as 0.0. In v3, this attribute is optional, but you should still set, as it defaults to 0.0 in any case. This is not what you want for tax rates with a percentage &gt; 0.0. | [optional] 
**tax_breakdown** | [**\Swagger\Client\Model\TaxBreakdown[]**](TaxBreakdown.md) | The tax breakdown for the credit note line | [optional] 
**total_amount** | **double** | The total amount for the credit note line | [optional] 
**base_currency_unit_price** | **double** | The unit price for the credit note line in base currency | [optional] 
**unit_price_includes_tax** | **bool** | Defines whether the unit price includes tax | [optional] 
**base_currency_net_amount** | **double** | The net amount for the credit note line in base currency | [optional] 
**base_currency_tax_amount** | **double** | The tax amount for the credit note line in base currency | [optional] 
**base_currency_tax_breakdown** | [**\Swagger\Client\Model\TaxBreakdown[]**](TaxBreakdown.md) | The tax breakdown for the credit note line in base currency | [optional] 
**base_currency_total_amount** | **double** | The total amount for the credit note line in base currency | [optional] 
**eu_goods_services_type** | [**\Swagger\Client\Model\Base**](Base.md) | Indicates goods and related services or standalone services as required for Import/Export and EU entry. | [optional] 
**gst_amount** | **double** | The gst or hst tax amount for the credit note line | [optional] 
**pst_amount** | **double** | The pst or qst tax amount for the credit note line | [optional] 
**tax_recoverable** | **bool** | Indicates if the credit note line is tax recoverable or not | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


