# PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vat_reverse_charge** | **bool** | Indicates whether Domestic Reverser Charge is applied to the artefact. Only used for a UK business. | [optional] 
**contact_id** | **string** | The ID of the Contact. | [optional] 
**contact_name** | **string** | The name of the contact when the invoice was created | [optional] 
**contact_reference** | **string** | The reference of the contact when the invoice was created | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the invoice | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | The due date of the invoice | [optional] 
**reference** | **string** | The reference for the invoice | [optional] 
**vendor_reference** | **string** | The vendor reference for the invoice | [optional] 
**notes** | **string** | Invoice notes | [optional] 
**total_quantity** | **double** | The total quantity of the invoice | [optional] 
**net_amount** | **double** | The net amount of the invoice | [optional] 
**tax_amount** | **double** | The tax amount of the invoice | [optional] 
**total_amount** | **double** | The total amount of the invoice | [optional] 
**currency_id** | **string** | The ID of the Currency. | [optional] 
**exchange_rate** | **double** | The exchange rate for the invoice | [optional] 
**inverse_exchange_rate** | **string** | The inverse exchange rate for the credit note | [optional] 
**base_currency_net_amount** | **double** | The net amount of the invoice in base currency | [optional] 
**base_currency_tax_amount** | **double** | The tax amount of the invoice in base currency | [optional] 
**base_currency_total_amount** | **double** | The total amount of the invoice in base currency | [optional] 
**status_id** | **string** | The ID of the Status. | [optional] 
**withholding_tax_rate** | **double** | IRPF withheld Tax Rate (Spain only) | [optional] 
**withholding_tax_amount** | **double** | IRPF withheld Tax Amount (Spain only) | [optional] 
**base_currency_withholding_tax_amount** | **double** | IRPF withheld Tax Amount (Spain only) in the base currency | [optional] 
**original_invoice_id** | **string** | The ID of the Original Invoice. (Spain only) | [optional] 
**original_invoice_number** | **string** | The number relating to the original invoice (Spain only) | [optional] 
**original_invoice_date** | **string** | The Invoice date relating to the original invoice (Spain only) | [optional] 
**invoice_lines** | [**\Swagger\Client\Model\PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceInvoiceLines[]**](PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceInvoiceLines.md) |  | [optional] 
**tax_analysis** | [**\Swagger\Client\Model\PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysis[]**](PostPurchaseCorrectiveInvoicesPurchaseCorrectiveInvoiceTaxAnalysis.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


