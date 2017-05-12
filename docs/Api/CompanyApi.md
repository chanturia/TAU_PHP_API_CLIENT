# Swagger\Client\CompanyApi

All URIs are relative to *http://api.trustanduse.7indigo.website/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserCompanyRoles**](CompanyApi.md#addUserCompanyRoles) | **POST** /company/{id}/user | 
[**changeCompanyUserRoles**](CompanyApi.md#changeCompanyUserRoles) | **PUT** /company/{id}/user | 
[**companyGetDetails**](CompanyApi.md#companyGetDetails) | **GET** /company/details/{id} | 
[**createBrandForCompany**](CompanyApi.md#createBrandForCompany) | **POST** /company/{id}/brand/create | 
[**createCompany**](CompanyApi.md#createCompany) | **POST** /company/create | 
[**createCouponForCompany**](CompanyApi.md#createCouponForCompany) | **POST** /company/{id}/coupon/create | 
[**createProductCompany**](CompanyApi.md#createProductCompany) | **POST** /company/{id}/product/create | 
[**createStoreForCompany**](CompanyApi.md#createStoreForCompany) | **POST** /company/{id}/store/create | 
[**removeAdminUserCompany**](CompanyApi.md#removeAdminUserCompany) | **DELETE** /company/{id}/user | 
[**updateCompany**](CompanyApi.md#updateCompany) | **PUT** /company/details/{id} | 


# **addUserCompanyRoles**
> \Swagger\Client\Model\UserID addUserCompanyRoles($id, $brand_id, $store_id, $product_id, $coupon_id, $create_company_user_roles)



Adds an Administrator User for a Company based on selected roles. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for companyID(id) connected parameter storeID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. storeID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | Required ID for the Company the role is for.
$brand_id = "brand_id_example"; // string | ID of the Brand connected with the Company
$store_id = "store_id_example"; // string | ID of the Store connected with the Company
$product_id = "product_id_example"; // string | ID of the Product connected with the Company
$coupon_id = "coupon_id_example"; // string | ID of the Coupon connected with the Company
$create_company_user_roles = new \Swagger\Client\Model\CreateCompanyUserRoles(); // \Swagger\Client\Model\CreateCompanyUserRoles | Company's User Priveleges Parameters for the company ID and userID.

try {
    $result = $api_instance->addUserCompanyRoles($id, $brand_id, $store_id, $product_id, $coupon_id, $create_company_user_roles);
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
 **brand_id** | **string**| ID of the Brand connected with the Company | [optional]
 **store_id** | **string**| ID of the Store connected with the Company | [optional]
 **product_id** | **string**| ID of the Product connected with the Company | [optional]
 **coupon_id** | **string**| ID of the Coupon connected with the Company | [optional]
 **create_company_user_roles** | [**\Swagger\Client\Model\CreateCompanyUserRoles**](../Model/\Swagger\Client\Model\CreateCompanyUserRoles.md)| Company&#39;s User Priveleges Parameters for the company ID and userID. | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeCompanyUserRoles**
> \Swagger\Client\Model\UserID changeCompanyUserRoles($id, $update_company_user_roles, $brand_id, $store_id, $product_id, $coupon_id)



Changes a User Roles for a Company based on selected roles. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for companyID(id) connected parameter storeID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. storeID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$update_company_user_roles = new \Swagger\Client\Model\UpdateCompanyUserRoles(); // \Swagger\Client\Model\UpdateCompanyUserRoles | Company's User Priveleges Parameters for the Company ID and UserID.
$brand_id = "brand_id_example"; // string | ID of the Brand connected with the Company
$store_id = "store_id_example"; // string | ID of the Store connected with the Company
$product_id = "product_id_example"; // string | ID of the Product connected with the Company
$coupon_id = "coupon_id_example"; // string | ID of the Coupon connected with the Company

try {
    $result = $api_instance->changeCompanyUserRoles($id, $update_company_user_roles, $brand_id, $store_id, $product_id, $coupon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->changeCompanyUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Company |
 **update_company_user_roles** | [**\Swagger\Client\Model\UpdateCompanyUserRoles**](../Model/\Swagger\Client\Model\UpdateCompanyUserRoles.md)| Company&#39;s User Priveleges Parameters for the Company ID and UserID. |
 **brand_id** | **string**| ID of the Brand connected with the Company | [optional]
 **store_id** | **string**| ID of the Store connected with the Company | [optional]
 **product_id** | **string**| ID of the Product connected with the Company | [optional]
 **coupon_id** | **string**| ID of the Coupon connected with the Company | [optional]

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



Searches for a Company details by ID and returns JSON Company Object with company id, type, createdBy, name, inChargePersonName, mainAddress, mainImageURL, logoURL, contactPhone, companyType and optionally description and facebookPageURL.

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
> \Swagger\Client\Model\Brand createBrandForCompany($id, $company_brand_create_parameters)



Creates a new Brand for a Company by included brand parameters consisting of User ID, brand name, description, main image URL and logo image URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$company_brand_create_parameters = new \Swagger\Client\Model\CompanyBrandCreateParameters(); // \Swagger\Client\Model\CompanyBrandCreateParameters | Brand parameters for creating new brand consisting of User ID, brand name, description, main image URL and logo image URL.

try {
    $result = $api_instance->createBrandForCompany($id, $company_brand_create_parameters);
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
 **company_brand_create_parameters** | [**\Swagger\Client\Model\CompanyBrandCreateParameters**](../Model/\Swagger\Client\Model\CompanyBrandCreateParameters.md)| Brand parameters for creating new brand consisting of User ID, brand name, description, main image URL and logo image URL. |

### Return type

[**\Swagger\Client\Model\Brand**](../Model/Brand.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCompany**
> \Swagger\Client\Model\Company createCompany($create_company_parameters)



Creates a new Company based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$create_company_parameters = new \Swagger\Client\Model\CreateCompanyParameters(); // \Swagger\Client\Model\CreateCompanyParameters | Company Parameters for the company to be created and User ID of User that creates the company.

try {
    $result = $api_instance->createCompany($create_company_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_company_parameters** | [**\Swagger\Client\Model\CreateCompanyParameters**](../Model/\Swagger\Client\Model\CreateCompanyParameters.md)| Company Parameters for the company to be created and User ID of User that creates the company. |

### Return type

[**\Swagger\Client\Model\Company**](../Model/Company.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponForCompany**
> \Swagger\Client\Model\Coupon createCouponForCompany($id, $company_coupon_create_parameters)



Creates a new Coupon for a Company, for a single user id, based on included parameters of userid who initiated the creation proccess, products ids, categories ids and subcategories ids and primitives ids, optionally storeids and offerproviderids. Validation must ensure userid who initiated the creation has required privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$company_coupon_create_parameters = new \Swagger\Client\Model\CompanyCouponCreateParameters(); // \Swagger\Client\Model\CompanyCouponCreateParameters | Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids and offerproviderids.

try {
    $result = $api_instance->createCouponForCompany($id, $company_coupon_create_parameters);
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
 **company_coupon_create_parameters** | [**\Swagger\Client\Model\CompanyCouponCreateParameters**](../Model/\Swagger\Client\Model\CompanyCouponCreateParameters.md)| Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids and offerproviderids. |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductCompany**
> \Swagger\Client\Model\Product createProductCompany($id, $company_product_create_parameters)



Creates a new Product for a Company by included product parameters product type, product name, description, brandID, images and optionally merchantids . Returns JSON Product Object consisting of productID, product name and product description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$company_product_create_parameters = new \Swagger\Client\Model\CompanyProductCreateParameters(); // \Swagger\Client\Model\CompanyProductCreateParameters | Product parameters for creating new product consisting of product type, name, description, brandID, images and optionally merchantids.

try {
    $result = $api_instance->createProductCompany($id, $company_product_create_parameters);
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
 **company_product_create_parameters** | [**\Swagger\Client\Model\CompanyProductCreateParameters**](../Model/\Swagger\Client\Model\CompanyProductCreateParameters.md)| Product parameters for creating new product consisting of product type, name, description, brandID, images and optionally merchantids. |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStoreForCompany**
> \Swagger\Client\Model\Store createStoreForCompany($id, $company_store_create_parameters)



Creates a new Store for a Company based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$company_store_create_parameters = new \Swagger\Client\Model\CompanyStoreCreateParameters(); // \Swagger\Client\Model\CompanyStoreCreateParameters | Store Parameters for the store to be created and User ID of User that creates the store.

try {
    $result = $api_instance->createStoreForCompany($id, $company_store_create_parameters);
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
 **company_store_create_parameters** | [**\Swagger\Client\Model\CompanyStoreCreateParameters**](../Model/\Swagger\Client\Model\CompanyStoreCreateParameters.md)| Store Parameters for the store to be created and User ID of User that creates the store. |

### Return type

[**\Swagger\Client\Model\Store**](../Model/Store.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAdminUserCompany**
> \Swagger\Client\Model\UserID removeAdminUserCompany($id, $delete_company_user_roles, $brand_id, $store_id, $product_id, $coupon_id)



Removes an User Role for a Company. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for companyID(id) connected parameter storeID then grant roles parameter connected entity's id must match the authorization parameter connected entitys id in the previous ex. storeID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the Company
$delete_company_user_roles = new \Swagger\Client\Model\DeleteCompanyUserRoles(); // \Swagger\Client\Model\DeleteCompanyUserRoles | Company's User ID and privileges to be removed  for the company ID.
$brand_id = "brand_id_example"; // string | ID of the Brand connected with the Company
$store_id = "store_id_example"; // string | ID of the Store connected with the Company
$product_id = "product_id_example"; // string | ID of the Product connected with the Company
$coupon_id = "coupon_id_example"; // string | ID of the Coupon connected with the Company

try {
    $result = $api_instance->removeAdminUserCompany($id, $delete_company_user_roles, $brand_id, $store_id, $product_id, $coupon_id);
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
 **delete_company_user_roles** | [**\Swagger\Client\Model\DeleteCompanyUserRoles**](../Model/\Swagger\Client\Model\DeleteCompanyUserRoles.md)| Company&#39;s User ID and privileges to be removed  for the company ID. |
 **brand_id** | **string**| ID of the Brand connected with the Company | [optional]
 **store_id** | **string**| ID of the Store connected with the Company | [optional]
 **product_id** | **string**| ID of the Product connected with the Company | [optional]
 **coupon_id** | **string**| ID of the Coupon connected with the Company | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCompany**
> \Swagger\Client\Model\CompanyID updateCompany($id, $update_company_parameters)



Updates a Company's details based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CompanyApi();
$id = "id_example"; // string | ID for the company to be updated.
$update_company_parameters = new \Swagger\Client\Model\UpdateCompanyParameters(); // \Swagger\Client\Model\UpdateCompanyParameters | Company Parameters for the company to be updated and User ID for the User who makes the update.

try {
    $result = $api_instance->updateCompany($id, $update_company_parameters);
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
 **update_company_parameters** | [**\Swagger\Client\Model\UpdateCompanyParameters**](../Model/\Swagger\Client\Model\UpdateCompanyParameters.md)| Company Parameters for the company to be updated and User ID for the User who makes the update. |

### Return type

[**\Swagger\Client\Model\CompanyID**](../Model/CompanyID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

