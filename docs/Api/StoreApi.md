# Swagger\Client\StoreApi

All URIs are relative to *http://api.trustanduse.com/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserStore**](StoreApi.md#addUserStore) | **POST** /store/{id}/user | 
[**allStores**](StoreApi.md#allStores) | **GET** /store/all | 
[**createCouponStore**](StoreApi.md#createCouponStore) | **POST** /store/{id}/coupon/create | 
[**createProductStore**](StoreApi.md#createProductStore) | **POST** /store/{id}/product/create | 
[**createStore**](StoreApi.md#createStore) | **POST** /store/create | 
[**getStoreDetails**](StoreApi.md#getStoreDetails) | **GET** /store/details/{id} | 
[**removeUserStore**](StoreApi.md#removeUserStore) | **DELETE** /store/{id}/user | 
[**storeDelete**](StoreApi.md#storeDelete) | **DELETE** /store/{id}/delete | 
[**updateStore**](StoreApi.md#updateStore) | **PUT** /store/details/{id} | 


# **addUserStore**
> \Swagger\Client\Model\UserID addUserStore($id, $createStoreUserRole, $productID, $couponID)



Adds an User for a Store based on selected roles. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for storeID(id) connected parameter productID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. productID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the Store
$createStoreUserRole = new \Swagger\Client\Model\CreateStoreUserRole(); // \Swagger\Client\Model\CreateStoreUserRole | Store's User Priveleges Parameters for the store ID and UserID.
$productID = "productID_example"; // string | ID of the Product connected with the Store (only required for Authorization for the User making the request)
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Store (only required for Authorization for the User making the request)

try {
    $result = $api_instance->addUserStore($id, $createStoreUserRole, $productID, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->addUserStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Store |
 **createStoreUserRole** | [**\Swagger\Client\Model\CreateStoreUserRole**](../Model/\Swagger\Client\Model\CreateStoreUserRole.md)| Store&#39;s User Priveleges Parameters for the store ID and UserID. |
 **productID** | **string**| ID of the Product connected with the Store (only required for Authorization for the User making the request) | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Store (only required for Authorization for the User making the request) | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allStores**
> \Swagger\Client\Model\StoresArray allStores($name, $kind, $address)



Searches for all existing Stores. Returns array of JSON Store Objects with store id, store name and store address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$name = "name_example"; // string | Optional filter parameter to search for stores with a name that contains value of parameter name.
$kind = "kind_example"; // string | Optional filter parameter to search for stores with kind that contains value of parameter name.
$address = "address_example"; // string | Optional filter parameter to search for stores with an address that contains value of parameter name.

try {
    $result = $api_instance->allStores($name, $kind, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->allStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Optional filter parameter to search for stores with a name that contains value of parameter name. | [optional]
 **kind** | **string**| Optional filter parameter to search for stores with kind that contains value of parameter name. | [optional]
 **address** | **string**| Optional filter parameter to search for stores with an address that contains value of parameter name. | [optional]

### Return type

[**\Swagger\Client\Model\StoresArray**](../Model/StoresArray.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponStore**
> \Swagger\Client\Model\Coupon createCouponStore($id, $storeCouponcreateParameters)



Creates a new Coupon for a Store, for a single user id, based on included parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the Store
$storeCouponcreateParameters = new \Swagger\Client\Model\StoreCouponcreateParameters(); // \Swagger\Client\Model\StoreCouponcreateParameters | Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids.

try {
    $result = $api_instance->createCouponStore($id, $storeCouponcreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->createCouponStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Store |
 **storeCouponcreateParameters** | [**\Swagger\Client\Model\StoreCouponcreateParameters**](../Model/\Swagger\Client\Model\StoreCouponcreateParameters.md)| Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids. |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductStore**
> \Swagger\Client\Model\Product createProductStore($id, $storeProductCreateParameters)



Creates a new Product for a Store by included product parameters. Product that will be created will be connected with this Store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the Store
$storeProductCreateParameters = new \Swagger\Client\Model\StoreProductCreateParameters(); // \Swagger\Client\Model\StoreProductCreateParameters | Product parameters for creating new product consisting of product type, name, description, brandID, images and optionally merchantids.

try {
    $result = $api_instance->createProductStore($id, $storeProductCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->createProductStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Store |
 **storeProductCreateParameters** | [**\Swagger\Client\Model\StoreProductCreateParameters**](../Model/\Swagger\Client\Model\StoreProductCreateParameters.md)| Product parameters for creating new product consisting of product type, name, description, brandID, images and optionally merchantids. |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStore**
> \Swagger\Client\Model\Store createStore($createStoreParameters)



Creates a new Store based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$createStoreParameters = new \Swagger\Client\Model\CreateStoreParameters(); // \Swagger\Client\Model\CreateStoreParameters | Store Parameters for the store to be created and User ID of User that creates the store.

try {
    $result = $api_instance->createStore($createStoreParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->createStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createStoreParameters** | [**\Swagger\Client\Model\CreateStoreParameters**](../Model/\Swagger\Client\Model\CreateStoreParameters.md)| Store Parameters for the store to be created and User ID of User that creates the store. |

### Return type

[**\Swagger\Client\Model\Store**](../Model/Store.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreDetails**
> \Swagger\Client\Model\Store getStoreDetails($id, $companyID)



Searches for a Stores details by ID and returns JSON Store Object with store id and optionally type, kind, createdBy, name and address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the store to find the details for.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the store is connected to. Required only if the store is connected with a company.

try {
    $result = $api_instance->getStoreDetails($id, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getStoreDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the store to find the details for. |
 **companyID** | **string**| Company ID Parameter for the company that the store is connected to. Required only if the store is connected with a company. | [optional]

### Return type

[**\Swagger\Client\Model\Store**](../Model/Store.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserStore**
> \Swagger\Client\Model\UserID removeUserStore($id, $deleteStoreUserRole, $productID, $couponID)



Removes a User role for a Store. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for storeID(id) connected parameter productID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. productID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the Store
$deleteStoreUserRole = new \Swagger\Client\Model\DeleteStoreUserRole(); // \Swagger\Client\Model\DeleteStoreUserRole | Store's User ID and role to be removed  for the store ID opionally role connected entities id.
$productID = "productID_example"; // string | ID of the Product connected with the Store (only required for Authorization for the User making the request)
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Store (only required for Authorization for the User making the request)

try {
    $result = $api_instance->removeUserStore($id, $deleteStoreUserRole, $productID, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->removeUserStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Store |
 **deleteStoreUserRole** | [**\Swagger\Client\Model\DeleteStoreUserRole**](../Model/\Swagger\Client\Model\DeleteStoreUserRole.md)| Store&#39;s User ID and role to be removed  for the store ID opionally role connected entities id. |
 **productID** | **string**| ID of the Product connected with the Store (only required for Authorization for the User making the request) | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Store (only required for Authorization for the User making the request) | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeDelete**
> \Swagger\Client\Model\Success storeDelete($id, $companyID)



Functionality to delete a Store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the store to be deleted.
$companyID = "companyID_example"; // string | ID of the Company connected with the Store (required for Authorization for the User making the request)

try {
    $result = $api_instance->storeDelete($id, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->storeDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the store to be deleted. |
 **companyID** | **string**| ID of the Company connected with the Store (required for Authorization for the User making the request) | [optional]

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStore**
> \Swagger\Client\Model\StoreID updateStore($id, $updateStoreParameters, $companyID)



Updates a Store's details based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the store to be updated.
$updateStoreParameters = new \Swagger\Client\Model\UpdateStoreParameters(); // \Swagger\Client\Model\UpdateStoreParameters | Store Parameters for the store to be updated
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the store is connected to. Required only if the store is connected with a company.

try {
    $result = $api_instance->updateStore($id, $updateStoreParameters, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->updateStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the store to be updated. |
 **updateStoreParameters** | [**\Swagger\Client\Model\UpdateStoreParameters**](../Model/\Swagger\Client\Model\UpdateStoreParameters.md)| Store Parameters for the store to be updated |
 **companyID** | **string**| Company ID Parameter for the company that the store is connected to. Required only if the store is connected with a company. | [optional]

### Return type

[**\Swagger\Client\Model\StoreID**](../Model/StoreID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

