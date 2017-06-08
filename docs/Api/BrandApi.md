# Swagger\Client\BrandApi

All URIs are relative to *http://api.trustanduse.7indigo.website/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserBrand**](BrandApi.md#addUserBrand) | **POST** /brand/{id}/user | 
[**allBrands**](BrandApi.md#allBrands) | **GET** /brand/all | 
[**createBrand**](BrandApi.md#createBrand) | **POST** /brand/create | 
[**createCouponBrand**](BrandApi.md#createCouponBrand) | **POST** /brand/{id}/coupon/create | 
[**createProductBrand**](BrandApi.md#createProductBrand) | **POST** /brand/{id}/product/create | 
[**getBrandDetails**](BrandApi.md#getBrandDetails) | **GET** /brand/details/{id} | 
[**getBrandProducts**](BrandApi.md#getBrandProducts) | **GET** /brand/{id}/products | 
[**removeUserBrandPrivileges**](BrandApi.md#removeUserBrandPrivileges) | **DELETE** /brand/{id}/user | 
[**updateBrand**](BrandApi.md#updateBrand) | **PUT** /brand/details/{id} | 


# **addUserBrand**
> \Swagger\Client\Model\UserID addUserBrand($id, $createBrandUserRoles, $productID, $couponID)



Adds a User for a Brand based on selected roles. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for brandID(id) connected parameter productID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. productID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand
$createBrandUserRoles = new \Swagger\Client\Model\CreateBrandUserRoles(); // \Swagger\Client\Model\CreateBrandUserRoles | Brand's User Priveleges Parameters for the brand ID and UserID.
$productID = "productID_example"; // string | ID of the Product connected with the Brand
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Brand

try {
    $result = $api_instance->addUserBrand($id, $createBrandUserRoles, $productID, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->addUserBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Brand |
 **createBrandUserRoles** | [**\Swagger\Client\Model\CreateBrandUserRoles**](../Model/\Swagger\Client\Model\CreateBrandUserRoles.md)| Brand&#39;s User Priveleges Parameters for the brand ID and UserID. |
 **productID** | **string**| ID of the Product connected with the Brand | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Brand | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allBrands**
> \Swagger\Client\Model\BrandsArray allBrands()



Searches for all existing Brands. Returns array of JSON Brand Objects with brand id and brand name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();

try {
    $result = $api_instance->allBrands();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->allBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BrandsArray**](../Model/BrandsArray.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBrand**
> \Swagger\Client\Model\Brand createBrand($brandCreateParameters)



Creates a new Brand by included brand parameters consisting of User ID, brand name, description, main image URL and logo image URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$brandCreateParameters = new \Swagger\Client\Model\BrandCreateParameters(); // \Swagger\Client\Model\BrandCreateParameters | Brand parameters for creating new brand consisting of User ID, brand name, description, main image URL and logo image URL.

try {
    $result = $api_instance->createBrand($brandCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->createBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brandCreateParameters** | [**\Swagger\Client\Model\BrandCreateParameters**](../Model/\Swagger\Client\Model\BrandCreateParameters.md)| Brand parameters for creating new brand consisting of User ID, brand name, description, main image URL and logo image URL. |

### Return type

[**\Swagger\Client\Model\Brand**](../Model/Brand.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponBrand**
> \Swagger\Client\Model\Coupon createCouponBrand($id, $brandCouponCreateParameters)



Creates a new Coupon for a Brand, for a single user id, based on included parameters of userid who initiated the creation proccess, products ids, categories ids and subcategories ids and primitives ids, optionally storeids. Validation must ensure userid who initiated the creation has required privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand
$brandCouponCreateParameters = new \Swagger\Client\Model\BrandCouponCreateParameters(); // \Swagger\Client\Model\BrandCouponCreateParameters | Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids.

try {
    $result = $api_instance->createCouponBrand($id, $brandCouponCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->createCouponBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Brand |
 **brandCouponCreateParameters** | [**\Swagger\Client\Model\BrandCouponCreateParameters**](../Model/\Swagger\Client\Model\BrandCouponCreateParameters.md)| Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids. |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductBrand**
> \Swagger\Client\Model\Product createProductBrand($id, $brandProductCreateParameters)



Creates a new Product for a Brand by included product parameters product type, product name, description, brandID, images and optionally merchantids . Returns JSON Product Object consisting of productID, product name and product description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the brand
$brandProductCreateParameters = new \Swagger\Client\Model\BrandProductCreateParameters(); // \Swagger\Client\Model\BrandProductCreateParameters | Product parameters for creating new product consisting of product type, name, description, brandID, images and optionally merchantids.

try {
    $result = $api_instance->createProductBrand($id, $brandProductCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->createProductBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the brand |
 **brandProductCreateParameters** | [**\Swagger\Client\Model\BrandProductCreateParameters**](../Model/\Swagger\Client\Model\BrandProductCreateParameters.md)| Product parameters for creating new product consisting of product type, name, description, brandID, images and optionally merchantids. |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandDetails**
> \Swagger\Client\Model\Brand getBrandDetails($id, $companyID)



Searches a Brand based on single brand id. Returns JSON Brand Object with brand id and brand name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand being searched for.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the brand is connected to.Required only if the brand is connected with a company.

try {
    $result = $api_instance->getBrandDetails($id, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->getBrandDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Brand being searched for. |
 **companyID** | **string**| Company ID Parameter for the company that the brand is connected to.Required only if the brand is connected with a company. | [optional]

### Return type

[**\Swagger\Client\Model\Brand**](../Model/Brand.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBrandProducts**
> \Swagger\Client\Model\Product getBrandProducts($id)



Searches for a Brands Products based on single brand id. Returns array of JSON Product Objects consisting of product id, product name and description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand to find the products for.

try {
    $result = $api_instance->getBrandProducts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->getBrandProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Brand to find the products for. |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserBrandPrivileges**
> \Swagger\Client\Model\UserID removeUserBrandPrivileges($id, $deleteBrandUserRoles, $productID, $couponID)



Removes a User Role for a Brand. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for brandID(id) connected parameter productID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. productID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand
$deleteBrandUserRoles = new \Swagger\Client\Model\DeleteBrandUserRoles(); // \Swagger\Client\Model\DeleteBrandUserRoles | Brand's User ID and privileges to be removed  for the brand ID.
$productID = "productID_example"; // string | ID of the Product connected with the Brand
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Brand

try {
    $result = $api_instance->removeUserBrandPrivileges($id, $deleteBrandUserRoles, $productID, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->removeUserBrandPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Brand |
 **deleteBrandUserRoles** | [**\Swagger\Client\Model\DeleteBrandUserRoles**](../Model/\Swagger\Client\Model\DeleteBrandUserRoles.md)| Brand&#39;s User ID and privileges to be removed  for the brand ID. |
 **productID** | **string**| ID of the Product connected with the Brand | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Brand | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBrand**
> \Swagger\Client\Model\BrandID updateBrand($id, $brandUpdateDetailsParameters, $companyID)



Updates a Brand's details based on posted parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand to be updated.
$brandUpdateDetailsParameters = new \Swagger\Client\Model\BrandUpdateDetailsParameters(); // \Swagger\Client\Model\BrandUpdateDetailsParameters | Brand Parameters for the brand to be updated and User ID for the User who makes the update.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the brand is connected to.Required only if the brand is connected with a company.

try {
    $result = $api_instance->updateBrand($id, $brandUpdateDetailsParameters, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->updateBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Brand to be updated. |
 **brandUpdateDetailsParameters** | [**\Swagger\Client\Model\BrandUpdateDetailsParameters**](../Model/\Swagger\Client\Model\BrandUpdateDetailsParameters.md)| Brand Parameters for the brand to be updated and User ID for the User who makes the update. |
 **companyID** | **string**| Company ID Parameter for the company that the brand is connected to.Required only if the brand is connected with a company. | [optional]

### Return type

[**\Swagger\Client\Model\BrandID**](../Model/BrandID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

