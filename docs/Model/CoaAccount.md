# CoaAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**ledger_account_group** | [**\Swagger\Client\Model\CoaGroupType**](CoaGroupType.md) | The ledger account group for the account | [optional] 
**name** | **string** | The name for the COA account | [optional] 
**control_name** | **string** | The system control name for the COA account.  System control names are used in Accounting to identify the correct ledger account for booking taxes etc. | [optional] 
**nominal_code** | **int** | The nominal code of the COA account | [optional] 
**ledger_account_type** | [**\Swagger\Client\Model\Base**](Base.md) | The ledger account type for the COA account | [optional] 
**ledger_account_classification** | [**\Swagger\Client\Model\Base**](Base.md) | The ledger account classification for the COA account | [optional] 
**tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The default tax rate for the COA account | [optional] 
**fixed_tax_rate** | **bool** | Indicates whether the default tax rate is fixed or may be changed per transaction | [optional] 
**cis_materials** | **bool** | Indicates whether the COA account is flagged for CIS Materials | [optional] 
**cis_labour** | **bool** | Indicates whether the COA account is flagged for CIS Labour | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


