# PostSalesEstimatesSalesEstimate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** | The contact the estimate relates to | 
**date** | [**\DateTime**](\DateTime.md) | The date of the estimate | 
**expiry_date** | [**\DateTime**](\DateTime.md) | The expiry date of the estimate | 
**vat_reverse_charge** | **bool** | Indicates whether Domestic Reverser Charge is applied to the artefact. Only used for a UK business. | [optional] 
**destination_consignment** | **bool** | Indicates whether consignment checkbox for destination VAT is checked on the artefact. Only used for an UK business, where destination VAT was enabled in the settings. | [optional] 
**estimate_number_prefix** | **string** | The estimate number prefix | [optional] 
**estimate_number** | **string** | The generated estimate number | [optional] 
**contact_name** | **string** | The name of the contact when the estimate was created | [optional] 
**contact_reference** | **string** | The reference of the contact when the estimate was created | [optional] 
**reference** | **string** | The reference for the estimate | [optional] 
**notes** | **string** | Estimate notes | [optional] 
**terms_and_conditions** | **string** | Estimate terms and conditions | [optional] 
**shipping_net_amount** | **double** | The net shipping amount | [optional] 
**shipping_tax_rate_id** | **string** | The ID of the Shipping Tax Rate. | [optional] 
**shipping_tax_amount** | **double** | The tax shipping amount. NOTE: This is not required for POST/PUT requests as the shipping tax is calculated based on the shipping_net_amount and the shipping_tax_rate. | [optional] 
**shipping_total_amount** | **double** | The total shipping amount | [optional] 
**net_amount** | **double** | The net amount of the estimate | [optional] 
**tax_amount** | **double** | The tax amount of the estimate | [optional] 
**total_amount** | **double** | The total amount of the estimate | [optional] 
**currency_id** | **string** | The ID of the Currency. | [optional] 
**exchange_rate** | **double** | The exchange rate for the estimate | [optional] 
**inverse_exchange_rate** | **double** | The inverse exchange rate for the estimate | [optional] 
**base_currency_shipping_net_amount** | **double** | The net shipping amount in base currency | [optional] 
**base_currency_shipping_tax_amount** | **double** | The tax shipping amount in base currency | [optional] 
**base_currency_shipping_total_amount** | **double** | The total shipping amount in base currency | [optional] 
**total_quantity** | **double** | The total quantity of the estimate | [optional] 
**total_discount_amount** | **double** | The discount amount on the  estimate | [optional] 
**base_currency_total_discount_amount** | **double** | The discount amount on the  estimate in base currency | [optional] 
**base_currency_net_amount** | **double** | The net amount of the estimate in base currency | [optional] 
**base_currency_tax_amount** | **double** | The tax amount of the estimate in base currency | [optional] 
**base_currency_total_amount** | **double** | The total amount of the estimate in base currency | [optional] 
**status_id** | **string** | The ID of the Status. | [optional] 
**sent** | **bool** | Indicates whether the estimate has been sent | [optional] 
**tax_address_region_id** | **string** | The ID of the Tax Address Region. (Canada only) | [optional] 
**withholding_tax_rate** | **double** | IRPF withheld Tax Rate (Spain only) | [optional] 
**withholding_tax_amount** | **double** | IRPF withheld Tax Amount (Spain only) | [optional] 
**base_currency_withholding_tax_amount** | **double** | IRPF withheld Tax Amount (Spain only) in the base currency | [optional] 
**invoice_id** | **string** | The ID of the Invoice. | [optional] 
**main_address** | [**\Swagger\Client\Model\PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress**](PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress.md) |  | [optional] 
**delivery_address** | [**\Swagger\Client\Model\PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress**](PostSalesCorrectiveInvoicesSalesCorrectiveInvoiceMainAddress.md) |  | [optional] 
**estimate_lines** | [**\Swagger\Client\Model\PostSalesEstimatesSalesEstimateEstimateLines[]**](PostSalesEstimatesSalesEstimateEstimateLines.md) | The estimate lines of the estimate | 
**tax_analysis** | [**\Swagger\Client\Model\PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysis[]**](PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysis.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


