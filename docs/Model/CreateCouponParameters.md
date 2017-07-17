# CreateCouponParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userid** | **string** | User ID for user who is making the creation of coupon | 
**name** | **string** | Coupon name must be between 2 and 1084 characters | 
**description** | **string** | Coupon description must be between 2 and 1284 characters | 
**kind** | **string** | Coupon type must be between 2 and 484 characters | 
**primitives** | **string[]** | contain array with elements the primitive ids for coupon | 
**categories** | **string[]** | contain array with elements the category ids that the coupon will be connected with | 
**selectedProducts** | **string[]** | contain array with elements the product ids that the coupon will be connected with | 
**selectedStores** | **string[]** | a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. | [optional] 
**userDefinedObject** | **object** | a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. If for a key the value is empty then the key-property name will be deleted. | [optional] 
**geoPosition** | [**\Swagger\Client\Model\Geometry**](Geometry.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


