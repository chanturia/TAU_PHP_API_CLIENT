# Swagger\Client\MerchantApi

All URIs are relative to *http://api.trustanduse.com/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserMerchant**](MerchantApi.md#addUserMerchant) | **POST** /merchant/{id}/user | 
[**allMerchants**](MerchantApi.md#allMerchants) | **GET** /merchant/all | 
[**createCouponMerchant**](MerchantApi.md#createCouponMerchant) | **POST** /merchant/{id}/coupon/create | 
[**createMerchant**](MerchantApi.md#createMerchant) | **POST** /merchant/create | 
[**createProductMerchant**](MerchantApi.md#createProductMerchant) | **POST** /merchant/{id}/product/create | 
[**getMerchantDetails**](MerchantApi.md#getMerchantDetails) | **GET** /merchant/details/{id} | 
[**merchantDelete**](MerchantApi.md#merchantDelete) | **DELETE** /merchant/{id}/delete | 
[**removeUserMerchant**](MerchantApi.md#removeUserMerchant) | **DELETE** /merchant/{id}/user | 
[**updateMerchant**](MerchantApi.md#updateMerchant) | **PUT** /merchant/details/{id} | 


# **addUserMerchant**
> \Swagger\Client\Model\UserID addUserMerchant($id, $productID, $couponID, $createMerchantUserRole)



Adds a User for a Merchant based on selected roles. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for merchantID(id) connected parameter productID  then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. productID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MerchantApi();
$id = "id_example"; // string | ID for the merchant.
$productID = "productID_example"; // string | ID of the Product connected with the Merchant (only required for Authorization for the User making the request)
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Merchant (only required for Authorization for the User making the request)
$createMerchantUserRole = new \Swagger\Client\Model\CreateMerchantUserRole(); // \Swagger\Client\Model\CreateMerchantUserRole | Merchant's User Priveleges Parameters for the merchant ID and userID.

try {
    $result = $api_instance->addUserMerchant($id, $productID, $couponID, $createMerchantUserRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->addUserMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the merchant. |
 **productID** | **string**| ID of the Product connected with the Merchant (only required for Authorization for the User making the request) | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Merchant (only required for Authorization for the User making the request) | [optional]
 **createMerchantUserRole** | [**\Swagger\Client\Model\CreateMerchantUserRole**](../Model/\Swagger\Client\Model\CreateMerchantUserRole.md)| Merchant&#39;s User Priveleges Parameters for the merchant ID and userID. | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allMerchants**
> \Swagger\Client\Model\MerchantsArray allMerchants($name, $address)



Searches for all existing merchants. Returns array of JSON Merchant Objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MerchantApi();
$name = "name_example"; // string | Optional filter parameter to search for merchants with a name that contains value of parameter name.
$address = "address_example"; // string | Optional filter parameter to search for address with address that contains value of parameter address.

try {
    $result = $api_instance->allMerchants($name, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->allMerchants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Optional filter parameter to search for merchants with a name that contains value of parameter name. | [optional]
 **address** | **string**| Optional filter parameter to search for address with address that contains value of parameter address. | [optional]

### Return type

[**\Swagger\Client\Model\MerchantsArray**](../Model/MerchantsArray.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponMerchant**
> \Swagger\Client\Model\Coupon createCouponMerchant($id, $merchantCouponCreateParameters)



Creates a new Coupon for a Merchant, for a single user id, based on included parameters of userid who initiated the creation proccess, products ids, categories ids and subcategories ids and primitives ids, optionally storeids. Validation must ensure userid who initiated the creation has required privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MerchantApi();
$id = "id_example"; // string | ID of the merchant
$merchantCouponCreateParameters = new \Swagger\Client\Model\MerchantCouponCreateParameters(); // \Swagger\Client\Model\MerchantCouponCreateParameters | Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids.

try {
    $result = $api_instance->createCouponMerchant($id, $merchantCouponCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->createCouponMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the merchant |
 **merchantCouponCreateParameters** | [**\Swagger\Client\Model\MerchantCouponCreateParameters**](../Model/\Swagger\Client\Model\MerchantCouponCreateParameters.md)| Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids. |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMerchant**
> \Swagger\Client\Model\Merchant createMerchant($merchantCreateParameters)



Creates a new Merchant by included parameters name, address and logo. Returns JSON Merchant Object consisting of merchantID, merchant name, merchant address and merchant logo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MerchantApi();
$merchantCreateParameters = new \Swagger\Client\Model\MerchantCreateParameters(); // \Swagger\Client\Model\MerchantCreateParameters | Merchant parameters for creating new Merchant consisting of userID, merchant name, address and logo.

try {
    $result = $api_instance->createMerchant($merchantCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->createMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantCreateParameters** | [**\Swagger\Client\Model\MerchantCreateParameters**](../Model/\Swagger\Client\Model\MerchantCreateParameters.md)| Merchant parameters for creating new Merchant consisting of userID, merchant name, address and logo. |

### Return type

[**\Swagger\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductMerchant**
> \Swagger\Client\Model\Product createProductMerchant($id, $merchantProductCreateParameters)



Creates a new Product for a merchant by included product parameters product type, product name, description, brandID, images and optionally merchantids . Returns JSON Product Object consisting of productID, product name and product description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MerchantApi();
$id = "id_example"; // string | ID of the merchant
$merchantProductCreateParameters = new \Swagger\Client\Model\MerchantProductCreateParameters(); // \Swagger\Client\Model\MerchantProductCreateParameters | Product parameters for creating new product consisting of product type, name, description, brandID, images.

try {
    $result = $api_instance->createProductMerchant($id, $merchantProductCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->createProductMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the merchant |
 **merchantProductCreateParameters** | [**\Swagger\Client\Model\MerchantProductCreateParameters**](../Model/\Swagger\Client\Model\MerchantProductCreateParameters.md)| Product parameters for creating new product consisting of product type, name, description, brandID, images. |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMerchantDetails**
> \Swagger\Client\Model\Merchant getMerchantDetails($id)



Searches a Merchant based on single merchant id. Returns JSON Merchant Object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MerchantApi();
$id = "id_example"; // string | ID for the merchant being searched for.

try {
    $result = $api_instance->getMerchantDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->getMerchantDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the merchant being searched for. |

### Return type

[**\Swagger\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantDelete**
> \Swagger\Client\Model\Success merchantDelete($id)



Functionality to delete a Merchant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MerchantApi();
$id = "id_example"; // string | ID for the merchant to be deleted.

try {
    $result = $api_instance->merchantDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->merchantDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the merchant to be deleted. |

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserMerchant**
> \Swagger\Client\Model\UserID removeUserMerchant($id, $deleteMerchantUserRole, $productID, $couponID)



Removes a User Role for a Merchant. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for merchantID(id) connected parameter productID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. productID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MerchantApi();
$id = "id_example"; // string | ID for the merchant
$deleteMerchantUserRole = new \Swagger\Client\Model\DeleteMerchantUserRole(); // \Swagger\Client\Model\DeleteMerchantUserRole | Merchant's User ID and privileges to be removed  for the merchant ID.
$productID = "productID_example"; // string | ID of the Product connected with the Merchant (only required for Authorization for the User making the request)
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Merchant (only required for Authorization for the User making the request)

try {
    $result = $api_instance->removeUserMerchant($id, $deleteMerchantUserRole, $productID, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->removeUserMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the merchant |
 **deleteMerchantUserRole** | [**\Swagger\Client\Model\DeleteMerchantUserRole**](../Model/\Swagger\Client\Model\DeleteMerchantUserRole.md)| Merchant&#39;s User ID and privileges to be removed  for the merchant ID. |
 **productID** | **string**| ID of the Product connected with the Merchant (only required for Authorization for the User making the request) | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Merchant (only required for Authorization for the User making the request) | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMerchant**
> \Swagger\Client\Model\MerchantID updateMerchant($id, $merchantUpdateParameters)



Updates an existing Merchant by included merchant parameters product type, name, description, brandID, images and optionally merchantids . Returns JSON Product Object consisting of productID, product name and product description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\MerchantApi();
$id = "id_example"; // string | ID for the merchant to be updated.
$merchantUpdateParameters = new \Swagger\Client\Model\MerchantUpdateParameters(); // \Swagger\Client\Model\MerchantUpdateParameters | Merchant parameters for updating merchant consisting of product type, name, description, brandID, images and optionally merchantids.

try {
    $result = $api_instance->updateMerchant($id, $merchantUpdateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantApi->updateMerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the merchant to be updated. |
 **merchantUpdateParameters** | [**\Swagger\Client\Model\MerchantUpdateParameters**](../Model/\Swagger\Client\Model\MerchantUpdateParameters.md)| Merchant parameters for updating merchant consisting of product type, name, description, brandID, images and optionally merchantids. |

### Return type

[**\Swagger\Client\Model\MerchantID**](../Model/MerchantID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

