# Swagger\Client\StoreApi

All URIs are relative to *http://api.trustanduse.7indigo.website/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserRoleForStore**](StoreApi.md#addUserRoleForStore) | **POST** /store/{id}/user | 
[**allStores**](StoreApi.md#allStores) | **GET** /store/all | 
[**createCouponForStore**](StoreApi.md#createCouponForStore) | **POST** /store/{id}/coupon/create | 
[**createProductStore**](StoreApi.md#createProductStore) | **POST** /store/{id}/product/create | 
[**createStore**](StoreApi.md#createStore) | **POST** /store/create | 
[**removeUserStorePrivileges**](StoreApi.md#removeUserStorePrivileges) | **DELETE** /store/{id}/user | 
[**storeGetCoupons**](StoreApi.md#storeGetCoupons) | **GET** /store/{id}/getCoupons | 
[**storeGetDetails**](StoreApi.md#storeGetDetails) | **GET** /store/details/{id} | 
[**updateStore**](StoreApi.md#updateStore) | **PUT** /store/details/{id} | 


# **addUserRoleForStore**
> \Swagger\Client\Model\UserID addUserRoleForStore($id, $createStoreUserRole, $productID, $couponID)



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
$productID = "productID_example"; // string | ID of the Product connected with the Store
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Store

try {
    $result = $api_instance->addUserRoleForStore($id, $createStoreUserRole, $productID, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->addUserRoleForStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Store |
 **createStoreUserRole** | [**\Swagger\Client\Model\CreateStoreUserRole**](../Model/\Swagger\Client\Model\CreateStoreUserRole.md)| Store&#39;s User Priveleges Parameters for the store ID and UserID. |
 **productID** | **string**| ID of the Product connected with the Store | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Store | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allStores**
> \Swagger\Client\Model\StoresArray allStores()



Searches for all existing Stores. Returns array of JSON Store Objects with store id, store name and store address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();

try {
    $result = $api_instance->allStores();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->allStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\StoresArray**](../Model/StoresArray.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponForStore**
> \Swagger\Client\Model\Coupon createCouponForStore($id, $storeCouponcreateParameters)



Creates a new Coupon for a Store, for a single user id, based on included parameters of userid who initiated the creation proccess, products ids, categories ids and subcategories ids and primitives ids, optionally storeids. Validation must ensure userid who initiated the creation has required privileges.

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
    $result = $api_instance->createCouponForStore($id, $storeCouponcreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->createCouponForStore: ', $e->getMessage(), PHP_EOL;
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



Creates a new Product for a Store by included product parameters product type, product name, description, brandID, images and optionally merchantids . Returns JSON Product Object consisting of productID, product name and product description.

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

# **removeUserStorePrivileges**
> \Swagger\Client\Model\UserID removeUserStorePrivileges($id, $deleteStoreUserRole, $productID, $couponID)



Removes a User role for a Store. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for storeID(id) connected parameter productID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. productID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the Store
$deleteStoreUserRole = new \Swagger\Client\Model\DeleteStoreUserRole(); // \Swagger\Client\Model\DeleteStoreUserRole | Store's User ID and privileges to be removed  for the store ID.
$productID = "productID_example"; // string | ID of the Product connected with the Store
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Store

try {
    $result = $api_instance->removeUserStorePrivileges($id, $deleteStoreUserRole, $productID, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->removeUserStorePrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Store |
 **deleteStoreUserRole** | [**\Swagger\Client\Model\DeleteStoreUserRole**](../Model/\Swagger\Client\Model\DeleteStoreUserRole.md)| Store&#39;s User ID and privileges to be removed  for the store ID. |
 **productID** | **string**| ID of the Product connected with the Store | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Store | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeGetCoupons**
> \Swagger\Client\Model\Coupon storeGetCoupons($id)



Searches for a Stores available Coupons by single store id. Returns array of JSON Coupon objects consisting of couponID, coupon type, coupon categories, coupon subcategories, coupon products and coupon brands.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the store for which to find the coupons for

try {
    $result = $api_instance->storeGetCoupons($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->storeGetCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the store for which to find the coupons for |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **storeGetDetails**
> \Swagger\Client\Model\Store storeGetDetails($id, $companyID)



Searches for a Stores details by ID and returns JSON Store Object with store id and optionally type, kind, createdBy, name and address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\StoreApi();
$id = "id_example"; // string | ID for the store to find the details for.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the store is connected to.Required only if the store is connected with a company.

try {
    $result = $api_instance->storeGetDetails($id, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->storeGetDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the store to find the details for. |
 **companyID** | **string**| Company ID Parameter for the company that the store is connected to.Required only if the store is connected with a company. | [optional]

### Return type

[**\Swagger\Client\Model\Store**](../Model/Store.md)

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
$updateStoreParameters = new \Swagger\Client\Model\UpdateStoreParameters(); // \Swagger\Client\Model\UpdateStoreParameters | Store Parameters for the store to be updated and User ID for the User who makes the update.Company ID Parameter for the company that the store is connected to is required only if the store is connected with a company.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the store is connected to.Required only if the store is connected with a company.

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
 **updateStoreParameters** | [**\Swagger\Client\Model\UpdateStoreParameters**](../Model/\Swagger\Client\Model\UpdateStoreParameters.md)| Store Parameters for the store to be updated and User ID for the User who makes the update.Company ID Parameter for the company that the store is connected to is required only if the store is connected with a company. |
 **companyID** | **string**| Company ID Parameter for the company that the store is connected to.Required only if the store is connected with a company. | [optional]

### Return type

[**\Swagger\Client\Model\StoreID**](../Model/StoreID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

