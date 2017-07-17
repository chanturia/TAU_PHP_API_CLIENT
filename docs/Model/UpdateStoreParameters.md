# UpdateStoreParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Store name must be between 2 and 484 characters | [optional] 
**kind** | **string** | Store type must be between 2 and 484 characters and can contain only letters, digits and dashes | [optional] 
**address** | **string** | Store main address must be in the form House Number, Street Direction, Street Name, Street Suffix, City, State, Zip, Country | [optional] 
**userDefinedObject** | **object** | a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. If for a key the value is empty then the key-property name will be deleted. | [optional] 
**geoPosition** | [**\Swagger\Client\Model\Geometry**](Geometry.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


