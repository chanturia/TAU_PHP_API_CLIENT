# UserCreateCredentials

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientID** | **string** | Client ID of the Application requesting the user to be created. | 
**name** | **string** | User first name must be between 2 and 485 characters and can contain only letters, digits and dashes. | 
**lastName** | **string** | User last name must be between 2 and 485 characters and can contain only letters. | 
**email** | **string** | User email address | 
**password** | **string** | User password | 
**dateOfBirth** | [**\DateTime**](Date.md) | User date of birth must be a string representing an RFC2822 or ISO 8601 date | [optional] 
**gender** | **string** | User gender with possible values male/female/other | [optional] 
**fbID** | **string** | Facebook ID for User to be created with his facebook id | [optional] 
**googleID** | **string** | Google ID for User to be created with his google id | [optional] 
**geoPosition** | [**\Swagger\Client\Model\Geometry**](Geometry.md) |  | [optional] 
**userDefinedObject** | **object** | a free form user defined object that includes a key - value array.Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


