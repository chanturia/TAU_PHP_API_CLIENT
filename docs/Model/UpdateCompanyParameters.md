# UpdateCompanyParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Company name must be between 2 and 484 characters | [optional] 
**inChargePersonName** | **string** | In Charge Person name must be between 2 and 1084 characters and can contain only letters, digits and dashes | [optional] 
**mainAddress** | **string** | Company main address must be in the form House Number, Street Direction, Street Name, Street Suffix, City, State, Zip, Country | [optional] 
**mainImageURL** | **string** | Company main image URL must have valid URL form | [optional] 
**logoURL** | **string** | Company logo URL must have valid URL form | [optional] 
**contactPhone** | **string** | Company contact phone can contain only numbers and symbols plus sign and dash | [optional] 
**companyType** | **string** | Company type | [optional] 
**description** | **string** | Company description must be between 2 and 1284 characters | [optional] 
**userDefinedObject** | **object** | a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. If for a key the value is empty then the key-property name will be deleted. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


