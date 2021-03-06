# Swagger\Client\BrandApi

All URIs are relative to *http://api.trustanduse.com/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserBrand**](BrandApi.md#addUserBrand) | **POST** /brand/{id}/user | 
[**allBrands**](BrandApi.md#allBrands) | **GET** /brand/all | 
[**brandDelete**](BrandApi.md#brandDelete) | **DELETE** /brand/{id}/delete | 
[**createBrand**](BrandApi.md#createBrand) | **POST** /brand/create | 
[**createCouponBrand**](BrandApi.md#createCouponBrand) | **POST** /brand/{id}/coupon/create | 
[**createProductBrand**](BrandApi.md#createProductBrand) | **POST** /brand/{id}/product/create | 
[**getBrandDetails**](BrandApi.md#getBrandDetails) | **GET** /brand/details/{id} | 
[**removeUserBrand**](BrandApi.md#removeUserBrand) | **DELETE** /brand/{id}/user | 
[**updateBrand**](BrandApi.md#updateBrand) | **PUT** /brand/details/{id} | 


# **addUserBrand**
> \Swagger\Client\Model\UserID addUserBrand($id, $createBrandUserRole, $productID, $couponID)



Adds a User for a Brand based on selected roles. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for brandID(id) connected parameter productID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. productID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand
$createBrandUserRole = new \Swagger\Client\Model\CreateBrandUserRole(); // \Swagger\Client\Model\CreateBrandUserRole | Brand's User Priveleges Parameters for the brand ID and UserID.
$productID = "productID_example"; // string | ID of the Product connected with the Brand (only required for Authorization for the User making the request)
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Brand (only required for Authorization for the User making the request)

try {
    $result = $api_instance->addUserBrand($id, $createBrandUserRole, $productID, $couponID);
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
 **createBrandUserRole** | [**\Swagger\Client\Model\CreateBrandUserRole**](../Model/\Swagger\Client\Model\CreateBrandUserRole.md)| Brand&#39;s User Priveleges Parameters for the brand ID and UserID. |
 **productID** | **string**| ID of the Product connected with the Brand (only required for Authorization for the User making the request) | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Brand (only required for Authorization for the User making the request) | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allBrands**
> \Swagger\Client\Model\BrandsArray allBrands($name, $description)



Searches for all existing Brands. Returns array of JSON Brand Objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$name = "name_example"; // string | Optional filter parameter to search for brands with a name that contains value of parameter name.
$description = "description_example"; // string | Optional filter parameter to search for brands with description that contains value of parameter description.

try {
    $result = $api_instance->allBrands($name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->allBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Optional filter parameter to search for brands with a name that contains value of parameter name. | [optional]
 **description** | **string**| Optional filter parameter to search for brands with description that contains value of parameter description. | [optional]

### Return type

[**\Swagger\Client\Model\BrandsArray**](../Model/BrandsArray.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **brandDelete**
> \Swagger\Client\Model\Success brandDelete($id, $companyID)



Functionality to delete a Brand

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the brand to be deleted.
$companyID = "companyID_example"; // string | ID of the Company connected with the Brand (required for Authorization for the User making the request)

try {
    $result = $api_instance->brandDelete($id, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->brandDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the brand to be deleted. |
 **companyID** | **string**| ID of the Company connected with the Brand (required for Authorization for the User making the request) | [optional]

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBrand**
> \Swagger\Client\Model\Brand createBrand($brandCreateParameters)



Creates a new Brand by included brand parameters

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



Creates a new Coupon for a Brand, for a single user id, based on included parameters

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



Creates a new Product for a Brand by included product parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the brand
$brandProductCreateParameters = new \Swagger\Client\Model\BrandProductCreateParameters(); // \Swagger\Client\Model\BrandProductCreateParameters | Product parameters for creating new product

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
 **brandProductCreateParameters** | [**\Swagger\Client\Model\BrandProductCreateParameters**](../Model/\Swagger\Client\Model\BrandProductCreateParameters.md)| Product parameters for creating new product |

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



Searches a Brand based on single brand id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand being searched for.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the brand is connected to. Required only if the brand is connected with a company.

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
 **companyID** | **string**| Company ID Parameter for the company that the brand is connected to. Required only if the brand is connected with a company. | [optional]

### Return type

[**\Swagger\Client\Model\Brand**](../Model/Brand.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserBrand**
> \Swagger\Client\Model\UserID removeUserBrand($id, $deleteBrandUserRole, $productID, $couponID)



Removes a User Role for a Brand. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for brandID(id) connected parameter productID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. productID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand
$deleteBrandUserRole = new \Swagger\Client\Model\DeleteBrandUserRole(); // \Swagger\Client\Model\DeleteBrandUserRole | Brand's User ID and privileges to be removed  for the brand ID.
$productID = "productID_example"; // string | ID of the Product connected with the Brand (only required for Authorization for the User making the request)
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Brand (only required for Authorization for the User making the request)

try {
    $result = $api_instance->removeUserBrand($id, $deleteBrandUserRole, $productID, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->removeUserBrand: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Brand |
 **deleteBrandUserRole** | [**\Swagger\Client\Model\DeleteBrandUserRole**](../Model/\Swagger\Client\Model\DeleteBrandUserRole.md)| Brand&#39;s User ID and privileges to be removed  for the brand ID. |
 **productID** | **string**| ID of the Product connected with the Brand (only required for Authorization for the User making the request) | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Brand (only required for Authorization for the User making the request) | [optional]

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



Updates Brand's details based on posted parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand to be updated.
$brandUpdateDetailsParameters = new \Swagger\Client\Model\BrandUpdateDetailsParameters(); // \Swagger\Client\Model\BrandUpdateDetailsParameters | Brand Parameters for the brand to be updated
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the brand is connected to. Required only if the brand is connected with a company.

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
 **brandUpdateDetailsParameters** | [**\Swagger\Client\Model\BrandUpdateDetailsParameters**](../Model/\Swagger\Client\Model\BrandUpdateDetailsParameters.md)| Brand Parameters for the brand to be updated |
 **companyID** | **string**| Company ID Parameter for the company that the brand is connected to. Required only if the brand is connected with a company. | [optional]

### Return type

[**\Swagger\Client\Model\BrandID**](../Model/BrandID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

