# UpdateCouponParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name for the Coupon to be updated with | [optional] 
**description** | **string** | Description for the Coupon to be updated with | [optional] 
**kind** | **string** | Kind for the Coupon to be updated with | [optional] 
**primitives** | **string[]** | Contains array with primitives ids for the coupon | [optional] 
**categories** | **string[]** | Contains array with categories ids for the coupon | [optional] 
**selectedProducts** | **string[]** | Contains array with products ids that the coupon will be connected with | [optional] 
**selectedStores** | **string[]** | Contains array with stores ids that the coupon will be connected with | [optional] 
**userDefinedObject** | **object** | a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars. If for a key the value is empty then the key-property name will be deleted. | [optional] 
**geoPosition** | [**\Swagger\Client\Model\Geometry**](Geometry.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


