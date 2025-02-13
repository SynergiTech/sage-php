# PutFinancialSettingsFinancialSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**year_end_date** | [**\DateTime**](\DateTime.md) | The financial year end date of the business | [optional] 
**year_end_lockdown_date** | [**\DateTime**](\DateTime.md) | The year end lockdown date of the business | [optional] 
**accounting_type** | **string** | Indicates the accounting type of a business, it can be accrual or cash based | [optional] 
**accounts_start_date** | [**\DateTime**](\DateTime.md) | The accounts start date of the business | [optional] 
**base_currency_id** | **string** | The ID of the Base Currency. | [optional] 
**multi_currency_enabled** | **bool** | Indicates whether multi-currency is enabled for the business | [optional] 
**use_live_exchange_rates** | **bool** | Indicates whether to use live or business defined exchange rates | [optional] 
**mtd_activation_status** | **string** | Indicates the UK Making Tax Digital for VAT activation status | [optional] 
**mtd_connected** | **bool** | Indicates whether UK Making Tax Digital for VAT is currently connected | [optional] 
**mtd_authenticated_date** | [**\DateTime**](\DateTime.md) | Indicates when a UK business enabled UK Making Tax Digital for VAT, nil if not enabled or non-uk | [optional] 
**tax_scheme_id** | **string** | The ID of the Tax Scheme. | [optional] 
**tax_return_frequency_id** | **string** | The ID of the Tax Return Frequency. | [optional] 
**tax_number** | **string** | The tax number | [optional] 
**general_tax_number** | **string** | The number for various tax report submissions | [optional] 
**tax_office_id** | **string** | The ID of the Tax Office. | [optional] 
**default_irpf_rate** | **double** | The default IRPF rate | [optional] 
**flat_rate_tax_percentage** | **double** | The tax percentage that applies to flat rate tax schemes. | [optional] 
**recoverable_percentage** | **double** | The partial recoverable tax rate (Canada only) | [optional] 
**sales_tax_calculation** | **string** | The method of collection for tax on sales. Allowed values - \&quot;invoice\&quot;, \&quot;cash\&quot;. | [optional] 
**purchase_tax_calculation** | **string** | The method of collection for tax on purchases. Allowed values - \&quot;invoice\&quot;, \&quot;cash\&quot;. | [optional] 
**postponed_accounting** | **bool** | Indicates whether to use postponed accounting or not | [optional] 
**destination_vat** | **bool** | Indicates whether to use destination vat or not | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


