# Service

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy_id** | **int** | The legacy ID for the item | [optional] 
**id** | **string** | The unique identifier for the item | [optional] 
**displayed_as** | **string** | The name of the resource | [optional] 
**path** | **string** | The API path for the resource | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was created | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was last updated | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | The datetime when the item was deleted | [optional] 
**deletable** | **bool** | Indicates whether the service can be deleted | [optional] 
**deactivatable** | **bool** | Indicates whether the service can be deactivated | [optional] 
**used_on_recurring_invoice** | **bool** | Indicates whether the service has been used on a recurring invoice | [optional] 
**item_code** | **string** | The item code for the service | [optional] 
**description** | **string** | The service description | [optional] 
**notes** | **string** | The notes for the service | [optional] 
**sales_ledger_account** | [**\Swagger\Client\Model\Base**](Base.md) | The sales ledger account for the service | [optional] 
**purchase_ledger_account** | [**\Swagger\Client\Model\Base**](Base.md) | The purchase ledger account for the service | [optional] 
**sales_tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The sales tax rate for the service | [optional] 
**purchase_tax_rate** | [**\Swagger\Client\Model\Base**](Base.md) | The purchase tax rate for the service | [optional] 
**sales_rates** | [**\Swagger\Client\Model\Rate[]**](Rate.md) | The sales rates for the service | [optional] 
**source_guid** | **string** | Used when importing services from external sources | [optional] 
**purchase_description** | **string** | The service purchase description | [optional] 
**usual_supplier** | [**\Swagger\Client\Model\Contact**](Contact.md) | The usual supplier for the service | [optional] 
**active** | **bool** | Indicates whether the service is active | [optional] 
**cost_price** | **double** | The cost price of the service | [optional] 
**oss_service** | **bool** | Indicates whether the service is One Stop Shop | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


