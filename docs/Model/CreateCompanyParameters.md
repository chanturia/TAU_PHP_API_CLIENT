# CreateCompanyParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userID** | **string** | userID for user who is making the creation of company | 
**name** | **string** | Company name must be between 2 and 484 characters | 
**inChargePersonName** | **string** | In Charge Person name must be between 2 and 1084 characters and can contain only letters, digits and dashes | 
**mainAddress** | **string** | Company main address must be in the form House Number, Street Direction, Street Name, Street Suffix, City, State, Zip, Country | 
**mainImageURL** | **string** | Company main image URL must have valid URL form | 
**logoURL** | **string** | Company logo URL must have valid URL form | 
**contactPhone** | **string** | Company contact phone can contain only numbers and symbols plus sign and dash | 
**companyType** | **string** | Company type | 
**description** | **string** | Company description must be between 2 and 1284 characters | [optional] 
**geoPosition** | [**\Swagger\Client\Model\Geometry**](Geometry.md) |  | [optional] 
**userDefinedObject** | **object** | a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


