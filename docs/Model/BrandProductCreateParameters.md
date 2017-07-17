# BrandProductCreateParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userID** | **string** | UserID for user who is making the creation of product | 
**productype** | **string** | Product type must be between 2 and 1084 characters and can contain only letters, digits and dashes | 
**name** | **string** | Product name must be between 2 and 1084 characters | 
**description** | **string** | Product description must be between 2 and 1284 characters | 
**selectedMerchantsIDs** | **string[]** | contain array with elements of merhant ids for the product | [optional] 
**geoPosition** | [**\Swagger\Client\Model\Geometry**](Geometry.md) |  | [optional] 
**userDefinedObject** | **object** | a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


