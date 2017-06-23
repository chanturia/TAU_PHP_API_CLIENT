# Swagger\Client\CompanyApi

All URIs are relative to *http://api.trustanduse.com/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserCompanyRoles**](CompanyApi.md#addUserCompanyRoles) | **POST** /company/{id}/user | 
[**companyGetDetails**](CompanyApi.md#companyGetDetails) | **GET** /company/details/{id} | 
[**createBrandForCompany**](CompanyApi.md#createBrandForCompany) | **POST** /company/{id}/brand/create | 
[**createCompany**](CompanyApi.md#createCompany) | **POST** /company/create | 
[**createCouponForCompany**](CompanyApi.md#createCouponForCompany) | **POST** /company/{id}/coupon/create | 
[**createProductCompany**](CompanyApi.md#createProductCompany) | **POST** /company/{id}/product/create | 
[**createStoreForCompany**](CompanyApi.md#createStoreForCompany) | **POST** /company/{id}/store/create | 
[**removeAdminUserCompany**](CompanyApi.md#removeAdminUserCompany) | **DELETE** /company/{id}/user | 
[**updateCompany**](CompanyApi.md#updateCompany) | **PUT** /company/details/{id} | 


# **addUserCompanyRoles**
> \Swagger\Client\Model\UserID addUserCompanyRoles($id, $brandID, $storeID, $productID, $couponID, $createCompanyUserRoles)



Adds Role for a User for a Company. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for companyID(id) connected parameter storeID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. storeID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | Required ID for the Company the role is for.
$brandID = "brandID_example"; // string | ID of the Brand connected with the Company (only required for Authorization for the User making the request)
$storeID = "storeID_example"; // string | ID of the Store connected with the Company (only required for Authorization for the User making the request)
$productID = "productID_example"; // string | ID of the Product connected with the Company (only required for Authorization for the User making the request)
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Company (only required for Authorization for the User making the request)
$createCompanyUserRoles = new \Swagger\Client\Model\CreateCompanyUserRoles(); // \Swagger\Client\Model\CreateCompanyUserRoles | Company's User Priveleges Parameters for the company ID and userID.

try {
    $result = $api_instance->addUserCompanyRoles($id, $brandID, $storeID, $productID, $couponID, $createCompanyUserRoles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->addUserCompanyRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Required ID for the Company the role is for. |
 **brandID** | **string**| ID of the Brand connected with the Company (only required for Authorization for the User making the request) | [optional]
 **storeID** | **string**| ID of the Store connected with the Company (only required for Authorization for the User making the request) | [optional]
 **productID** | **string**| ID of the Product connected with the Company (only required for Authorization for the User making the request) | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Company (only required for Authorization for the User making the request) | [optional]
 **createCompanyUserRoles** | [**\Swagger\Client\Model\CreateCompanyUserRoles**](../Model/\Swagger\Client\Model\CreateCompanyUserRoles.md)| Company&#39;s User Priveleges Parameters for the company ID and userID. | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyGetDetails**
> \Swagger\Client\Model\Company companyGetDetails($id)



Searches for a Company details by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the company to find the details for.

try {
    $result = $api_instance->companyGetDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyGetDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the company to find the details for. |

### Return type

[**\Swagger\Client\Model\Company**](../Model/Company.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBrandForCompany**
> \Swagger\Client\Model\Brand createBrandForCompany($id, $companyBrandCreateParameters)



Creates a new Brand for a Company by included brand parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$companyBrandCreateParameters = new \Swagger\Client\Model\CompanyBrandCreateParameters(); // \Swagger\Client\Model\CompanyBrandCreateParameters | Brand parameters for creating new brand consisting of User ID, brand name, description, main image URL and logo image URL.

try {
    $result = $api_instance->createBrandForCompany($id, $companyBrandCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createBrandForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Company |
 **companyBrandCreateParameters** | [**\Swagger\Client\Model\CompanyBrandCreateParameters**](../Model/\Swagger\Client\Model\CompanyBrandCreateParameters.md)| Brand parameters for creating new brand consisting of User ID, brand name, description, main image URL and logo image URL. |

### Return type

[**\Swagger\Client\Model\Brand**](../Model/Brand.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCompany**
> \Swagger\Client\Model\Company createCompany($createCompanyParameters)



Creates a new Company based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$createCompanyParameters = new \Swagger\Client\Model\CreateCompanyParameters(); // \Swagger\Client\Model\CreateCompanyParameters | Company Parameters for the company to be created and User ID of User who creates the company.

try {
    $result = $api_instance->createCompany($createCompanyParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createCompanyParameters** | [**\Swagger\Client\Model\CreateCompanyParameters**](../Model/\Swagger\Client\Model\CreateCompanyParameters.md)| Company Parameters for the company to be created and User ID of User who creates the company. |

### Return type

[**\Swagger\Client\Model\Company**](../Model/Company.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponForCompany**
> \Swagger\Client\Model\Coupon createCouponForCompany($id, $companyCouponCreateParameters)



Creates a new Coupon for a Company, for a single user id, based on included parameters and userid who initiated the creation proccess

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$companyCouponCreateParameters = new \Swagger\Client\Model\CompanyCouponCreateParameters(); // \Swagger\Client\Model\CompanyCouponCreateParameters | Coupon Parameters and userid who initiated the creation proccess

try {
    $result = $api_instance->createCouponForCompany($id, $companyCouponCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createCouponForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Company |
 **companyCouponCreateParameters** | [**\Swagger\Client\Model\CompanyCouponCreateParameters**](../Model/\Swagger\Client\Model\CompanyCouponCreateParameters.md)| Coupon Parameters and userid who initiated the creation proccess |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductCompany**
> \Swagger\Client\Model\Product createProductCompany($id, $companyProductCreateParameters)



Creates a new Product for a Company by included product parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$companyProductCreateParameters = new \Swagger\Client\Model\CompanyProductCreateParameters(); // \Swagger\Client\Model\CompanyProductCreateParameters | Product parameters for creating new product

try {
    $result = $api_instance->createProductCompany($id, $companyProductCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createProductCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Company |
 **companyProductCreateParameters** | [**\Swagger\Client\Model\CompanyProductCreateParameters**](../Model/\Swagger\Client\Model\CompanyProductCreateParameters.md)| Product parameters for creating new product |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStoreForCompany**
> \Swagger\Client\Model\Store createStoreForCompany($id, $companyStoreCreateParameters)



Creates a new Store for a Company based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$companyStoreCreateParameters = new \Swagger\Client\Model\CompanyStoreCreateParameters(); // \Swagger\Client\Model\CompanyStoreCreateParameters | Store Parameters for the store to be created and User ID of User that creates the store.

try {
    $result = $api_instance->createStoreForCompany($id, $companyStoreCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createStoreForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Company |
 **companyStoreCreateParameters** | [**\Swagger\Client\Model\CompanyStoreCreateParameters**](../Model/\Swagger\Client\Model\CompanyStoreCreateParameters.md)| Store Parameters for the store to be created and User ID of User that creates the store. |

### Return type

[**\Swagger\Client\Model\Store**](../Model/Store.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAdminUserCompany**
> \Swagger\Client\Model\UserID removeAdminUserCompany($id, $deleteCompanyUserRoles, $brandID, $storeID, $productID, $couponID)



Removes a User Role for a Company. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for companyID(id) connected parameter storeID then grant roles parameter connected entity's id must match the authorization parameter connected entitys id in the previous ex. storeID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$deleteCompanyUserRoles = new \Swagger\Client\Model\DeleteCompanyUserRoles(); // \Swagger\Client\Model\DeleteCompanyUserRoles | Company's User ID and privileges to be removed for the company ID.
$brandID = "brandID_example"; // string | ID of the Brand connected with the Company (only required for Authorization for the User making the request)
$storeID = "storeID_example"; // string | ID of the Store connected with the Company (only required for Authorization for the User making the request)
$productID = "productID_example"; // string | ID of the Product connected with the Company (only required for Authorization for the User making the request)
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Company (only required for Authorization for the User making the request)

try {
    $result = $api_instance->removeAdminUserCompany($id, $deleteCompanyUserRoles, $brandID, $storeID, $productID, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->removeAdminUserCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Company |
 **deleteCompanyUserRoles** | [**\Swagger\Client\Model\DeleteCompanyUserRoles**](../Model/\Swagger\Client\Model\DeleteCompanyUserRoles.md)| Company&#39;s User ID and privileges to be removed for the company ID. |
 **brandID** | **string**| ID of the Brand connected with the Company (only required for Authorization for the User making the request) | [optional]
 **storeID** | **string**| ID of the Store connected with the Company (only required for Authorization for the User making the request) | [optional]
 **productID** | **string**| ID of the Product connected with the Company (only required for Authorization for the User making the request) | [optional]
 **couponID** | **string**| ID of the Coupon connected with the Company (only required for Authorization for the User making the request) | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCompany**
> \Swagger\Client\Model\CompanyID updateCompany($id, $updateCompanyParameters)



Updates a Company's details based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the company to be updated.
$updateCompanyParameters = new \Swagger\Client\Model\UpdateCompanyParameters(); // \Swagger\Client\Model\UpdateCompanyParameters | Company Parameters for the company to be updated and User ID for the User who makes the update.

try {
    $result = $api_instance->updateCompany($id, $updateCompanyParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->updateCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the company to be updated. |
 **updateCompanyParameters** | [**\Swagger\Client\Model\UpdateCompanyParameters**](../Model/\Swagger\Client\Model\UpdateCompanyParameters.md)| Company Parameters for the company to be updated and User ID for the User who makes the update. |

### Return type

[**\Swagger\Client\Model\CompanyID**](../Model/CompanyID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

