# BusinessSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | The path for the resource | [optional] 
**siret** | **string** | SIRET Number (France only) | [optional] 
**management_centre_member** | **bool** | Member of Approved Management Centres (France only) | [optional] 
**rcs_number** | **string** | RCS Number (France only) | [optional] 
**share_capital** | **double** | Share Capital (France only) | [optional] 
**business_activity_type** | [**\Swagger\Client\Model\BusinessActivityType**](BusinessActivityType.md) | Business Activity Type (France only) | [optional] 
**legal_form_type** | [**\Swagger\Client\Model\LegalFormType**](LegalFormType.md) | Legal Form Business Type (France only) | [optional] 
**auxiliary_accounts_visible** | **bool** | Auxiliary Accounts Visible (France &amp; Spain only) | [optional] 
**default_ledger_accounts** | [**\Swagger\Client\Model\DefaultLedgerAccounts**](DefaultLedgerAccounts.md) | The default ledger accounts for the business | [optional] 
**business_type** | [**\Swagger\Client\Model\BusinessType**](BusinessType.md) | The type of the business | [optional] 
**country_of_registration** | [**\Swagger\Client\Model\Base**](Base.md) | One of the political entities identified by [\&quot;ENGLAND_AND_WALES\&quot;, \&quot;WALES\&quot;, \&quot;SCOTLAND\&quot;, \&quot;NORTHERN_IRELAND\&quot;, \&quot;REPUBLIC_OF_IRELAND\&quot;]. Only for businesses registered on the British Isles | [optional] 
**business_created_at** | [**\DateTime**](\DateTime.md) | The timestamp on which the business was created. This can be the timestamp of the initial creation or the latest business reset. | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


