# UpdateProductParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productype** | **string** | Product type must be between 2 and 1084 characters and can contain only letters, digits and dashes | [optional] 
**name** | **string** | Product name must be between 2 and 1084 characters | [optional] 
**description** | **string** | Product description must be between 2 and 1284 characters | [optional] 
**brandID** | **string** | Brand ID for the Brand that the product will be connected with | [optional] 
**merchantsids** | **string[]** | contain array with elements of merhant ids for the product | [optional] 
**userDefinedObject** | **object** | a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. If for a key the value is empty then the key-property name will be deleted. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


