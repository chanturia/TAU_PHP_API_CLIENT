# UpdateCouponPrimitiveParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Coupon primitive name must be between 2 and 484 characters | [optional] 
**description** | **string** | Coupon primitive description must be between 2 and 1284 characters | [optional] 
**validatorURL** | **string** | Coupon primitive validator URL must have valid URL form | [optional] 
**validatorInputs** | **string[]** | contain array with validation input constrains | [optional] 
**validatorOutputs** | **string[]** | contain array with validation output results | [optional] 
**userDefinedObject** | **object** | a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. If for a key the value is empty then the key-property name will be deleted. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


