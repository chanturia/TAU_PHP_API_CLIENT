# Swagger\Client\CouponApi

All URIs are relative to *http://api.trustanduse.7indigo.website/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserCoupon**](CouponApi.md#addUserCoupon) | **POST** /coupon/{id}/user | 
[**allCouponCategories**](CouponApi.md#allCouponCategories) | **GET** /coupon/categories | 
[**allCouponPrimitives**](CouponApi.md#allCouponPrimitives) | **GET** /coupon/primitive/all | 
[**changeUserCouponPrivileges**](CouponApi.md#changeUserCouponPrivileges) | **PUT** /coupon/{id}/user | 
[**couponCategoryCreate**](CouponApi.md#couponCategoryCreate) | **POST** /coupon/category/create | 
[**createCoupon**](CouponApi.md#createCoupon) | **POST** /coupon/create | 
[**createCouponPrimitive**](CouponApi.md#createCouponPrimitive) | **POST** /coupon/primitive/create | 
[**editCouponCategory**](CouponApi.md#editCouponCategory) | **PUT** /coupon/category/{couponCategoryID} | 
[**editCouponPrimitive**](CouponApi.md#editCouponPrimitive) | **PUT** /coupon/primitive/{primitiveID}/details | 
[**getCouponById**](CouponApi.md#getCouponById) | **GET** /coupon/{id}/details | 
[**getCouponCategoryById**](CouponApi.md#getCouponCategoryById) | **GET** /coupon/category/{couponCategoryID} | 
[**getCouponPrimitiveById**](CouponApi.md#getCouponPrimitiveById) | **GET** /coupon/primitive/{primitiveID}/details | 
[**getCouponTerms**](CouponApi.md#getCouponTerms) | **GET** /coupon/{id}/terms | 
[**removeUserCouponPrivileges**](CouponApi.md#removeUserCouponPrivileges) | **DELETE** /coupon/{id}/user | 
[**setCouponTerms**](CouponApi.md#setCouponTerms) | **POST** /coupon/{id}/terms | 
[**updateCoupon**](CouponApi.md#updateCoupon) | **PUT** /coupon/{id}/details | 


# **addUserCoupon**
> \Swagger\Client\Model\UserID addUserCoupon($id, $create_coupon_user_role)



Adds an User for a Coupon based on selected role. Authorization parameters must be in URL query. Grant Role parameters must be in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the Coupon
$create_coupon_user_role = new \Swagger\Client\Model\CreateCouponUserRole(); // \Swagger\Client\Model\CreateCouponUserRole | Coupon's User Priveleges Parameters for the couponID and UserID.

try {
    $result = $api_instance->addUserCoupon($id, $create_coupon_user_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->addUserCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Coupon |
 **create_coupon_user_role** | [**\Swagger\Client\Model\CreateCouponUserRole**](../Model/\Swagger\Client\Model\CreateCouponUserRole.md)| Coupon&#39;s User Priveleges Parameters for the couponID and UserID. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allCouponCategories**
> \Swagger\Client\Model\CouponCategory allCouponCategories()



Searches for all existing Coupon categories. Returns array of JSON CouponCategory Objects consisting of category id, name, description and subcategories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();

try {
    $result = $api_instance->allCouponCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->allCouponCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CouponCategory**](../Model/CouponCategory.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allCouponPrimitives**
> \Swagger\Client\Model\CouponPrimitive allCouponPrimitives()



Searches for all existing Coupon primitives. Returns array of JSON CouponPrimitive Objects with primitive id, name, description, validator URL, validator inputs and validator outputs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();

try {
    $result = $api_instance->allCouponPrimitives();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->allCouponPrimitives: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CouponPrimitive**](../Model/CouponPrimitive.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeUserCouponPrivileges**
> \Swagger\Client\Model\UserID changeUserCouponPrivileges($id, $update_coupon_user_role)



Changes a User Role for a Coupon. Authorization parameters must be in URL query. Grant Role parameters must be in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the Coupon
$update_coupon_user_role = new \Swagger\Client\Model\UpdateCouponUserRole(); // \Swagger\Client\Model\UpdateCouponUserRole | Store's User Role Parameters for the CouponID and UserID.

try {
    $result = $api_instance->changeUserCouponPrivileges($id, $update_coupon_user_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->changeUserCouponPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Coupon |
 **update_coupon_user_role** | [**\Swagger\Client\Model\UpdateCouponUserRole**](../Model/\Swagger\Client\Model\UpdateCouponUserRole.md)| Store&#39;s User Role Parameters for the CouponID and UserID. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **couponCategoryCreate**
> \Swagger\Client\Model\CouponCategory couponCategoryCreate($create_coupon_category_parameters)



Creates a new Category for Coupons by included category parameters consisting of category name, description, subcategories. Returns CouponCategory Object with category id, name, description and subcategories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$create_coupon_category_parameters = new \Swagger\Client\Model\CreateCouponCategoryParameters(); // \Swagger\Client\Model\CreateCouponCategoryParameters | CouponCategory parameters for creating new category consisting of category name, description and subcategories.

try {
    $result = $api_instance->couponCategoryCreate($create_coupon_category_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->couponCategoryCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_coupon_category_parameters** | [**\Swagger\Client\Model\CreateCouponCategoryParameters**](../Model/\Swagger\Client\Model\CreateCouponCategoryParameters.md)| CouponCategory parameters for creating new category consisting of category name, description and subcategories. |

### Return type

[**\Swagger\Client\Model\CouponCategory**](../Model/CouponCategory.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCoupon**
> \Swagger\Client\Model\Coupon createCoupon($create_coupon_parameters)



Creates a new Coupon for a single user id, based on included parameters of userid who initiated the creation proccess, products ids, categories ids and subcategories ids and primitives ids, optionally storeids and offerproviderids. Validation must ensure userid who initiated the creation has required privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$create_coupon_parameters = new \Swagger\Client\Model\CreateCouponParameters(); // \Swagger\Client\Model\CreateCouponParameters | Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids and offerproviderids.

try {
    $result = $api_instance->createCoupon($create_coupon_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->createCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_coupon_parameters** | [**\Swagger\Client\Model\CreateCouponParameters**](../Model/\Swagger\Client\Model\CreateCouponParameters.md)| Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids and offerproviderids. |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponPrimitive**
> \Swagger\Client\Model\CouponPrimitive createCouponPrimitive($primitive_parameters)



Creates a new Primitive for Coupons by included primitive parameters consisting of primitive name, description and primitive validator URL, validator inputs and validator outputs. Returns JSON CouponPrimitive Object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$primitive_parameters = new \Swagger\Client\Model\PrimitiveParameters(); // \Swagger\Client\Model\PrimitiveParameters | Coupon Primitive parameters including primitive name, description and primitive validator URL, validator inputs and validator outputs.

try {
    $result = $api_instance->createCouponPrimitive($primitive_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->createCouponPrimitive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **primitive_parameters** | [**\Swagger\Client\Model\PrimitiveParameters**](../Model/\Swagger\Client\Model\PrimitiveParameters.md)| Coupon Primitive parameters including primitive name, description and primitive validator URL, validator inputs and validator outputs. |

### Return type

[**\Swagger\Client\Model\CouponPrimitive**](../Model/CouponPrimitive.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editCouponCategory**
> \Swagger\Client\Model\CouponCategoryID editCouponCategory($coupon_category_id, $update_coupon_category_parameters)



Edit a Coupon Category by included category parameters of category id, name, description and subcategories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$coupon_category_id = "coupon_category_id_example"; // string | ID for the Coupon Category to be updated.
$update_coupon_category_parameters = new \Swagger\Client\Model\UpdateCouponCategoryParameters(); // \Swagger\Client\Model\UpdateCouponCategoryParameters | Coupon Category parameters consisting of category id, name, description and subcategories.

try {
    $result = $api_instance->editCouponCategory($coupon_category_id, $update_coupon_category_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->editCouponCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_category_id** | **string**| ID for the Coupon Category to be updated. |
 **update_coupon_category_parameters** | [**\Swagger\Client\Model\UpdateCouponCategoryParameters**](../Model/\Swagger\Client\Model\UpdateCouponCategoryParameters.md)| Coupon Category parameters consisting of category id, name, description and subcategories. |

### Return type

[**\Swagger\Client\Model\CouponCategoryID**](../Model/CouponCategoryID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editCouponPrimitive**
> \Swagger\Client\Model\CouponPrimitiveID editCouponPrimitive($primitive_id, $coupon_primitive_parameters)



Edit a Coupon Primitive by included primitive parameters. Returns JSON CouponPrimitive Object with primitive id, name, description and primitive validator URL, validator inputs and validator outputs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$primitive_id = "primitive_id_example"; // string | ID for the Coupon Primitive to be updated.
$coupon_primitive_parameters = new \Swagger\Client\Model\CouponPrimitiveParameters(); // \Swagger\Client\Model\CouponPrimitiveParameters | Coupon Primitive parameters including primitive id and primitive name, description, validator URL, validator inputs and validator outputs.

try {
    $result = $api_instance->editCouponPrimitive($primitive_id, $coupon_primitive_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->editCouponPrimitive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **primitive_id** | **string**| ID for the Coupon Primitive to be updated. |
 **coupon_primitive_parameters** | [**\Swagger\Client\Model\CouponPrimitiveParameters**](../Model/\Swagger\Client\Model\CouponPrimitiveParameters.md)| Coupon Primitive parameters including primitive id and primitive name, description, validator URL, validator inputs and validator outputs. |

### Return type

[**\Swagger\Client\Model\CouponPrimitiveID**](../Model/CouponPrimitiveID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponById**
> \Swagger\Client\Model\Coupon getCouponById($id, $company_parameter, $brand_parameter, $store_parameter, $merchant_parameter, $product_parameter)



Searches for a Coupon based on single coupon id. Returns JSON Coupon Object consisting of couponid, name, description, coupon createdby userid, coupon kind, coupon primitives, coupon categories and subcategories, coupon products, and optionally stores or offerproviders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the coupon being searched for.
$company_parameter = "company_parameter_example"; // string | Company ID Parameter for the company that the Coupon is connected to.Required only if the Coupon is connected with a company.
$brand_parameter = "brand_parameter_example"; // string | Brand ID Parameter for the Brand that the Coupon is connected to.Required only if the Coupon is connected with a Brand.
$store_parameter = "store_parameter_example"; // string | Store ID Parameter for the Store that the Coupon is connected to.Required only if the Coupon is connected with a Store.
$merchant_parameter = "merchant_parameter_example"; // string | Merchant ID Parameter for the Merchant that the Coupon is connected to.Required only if the Coupon is connected with a Merchant.
$product_parameter = "product_parameter_example"; // string | Product ID Parameter for the Product that the Coupon is connected to.Required only if the Coupon is connected with a Product.

try {
    $result = $api_instance->getCouponById($id, $company_parameter, $brand_parameter, $store_parameter, $merchant_parameter, $product_parameter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the coupon being searched for. |
 **company_parameter** | **string**| Company ID Parameter for the company that the Coupon is connected to.Required only if the Coupon is connected with a company. | [optional]
 **brand_parameter** | **string**| Brand ID Parameter for the Brand that the Coupon is connected to.Required only if the Coupon is connected with a Brand. | [optional]
 **store_parameter** | **string**| Store ID Parameter for the Store that the Coupon is connected to.Required only if the Coupon is connected with a Store. | [optional]
 **merchant_parameter** | **string**| Merchant ID Parameter for the Merchant that the Coupon is connected to.Required only if the Coupon is connected with a Merchant. | [optional]
 **product_parameter** | **string**| Product ID Parameter for the Product that the Coupon is connected to.Required only if the Coupon is connected with a Product. | [optional]

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponCategoryById**
> \Swagger\Client\Model\CouponCategory getCouponCategoryById($coupon_category_id)



Finds a Coupon Category based on single category id. Returns JSON CouponCategory Object with category id, name, description and subcategories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$coupon_category_id = "coupon_category_id_example"; // string | ID for the Coupon Category being searched for.

try {
    $result = $api_instance->getCouponCategoryById($coupon_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponCategoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_category_id** | **string**| ID for the Coupon Category being searched for. |

### Return type

[**\Swagger\Client\Model\CouponCategory**](../Model/CouponCategory.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponPrimitiveById**
> \Swagger\Client\Model\CouponPrimitive getCouponPrimitiveById($primitive_id)



Searches for a CouponPrimitive based on single primitive id. Returns JSON CouponPrimitive Object with primitive id, name,description, validator URL, validator inputs and validator outputs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$primitive_id = "primitive_id_example"; // string | ID for the Coupon Primitive being searched for.

try {
    $result = $api_instance->getCouponPrimitiveById($primitive_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponPrimitiveById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **primitive_id** | **string**| ID for the Coupon Primitive being searched for. |

### Return type

[**\Swagger\Client\Model\CouponPrimitive**](../Model/CouponPrimitive.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponTerms**
> \Swagger\Client\Model\CouponTerms getCouponTerms($id)



Finds a Coupons Terms & Conditions based on single coupon id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the coupon being searched for

try {
    $result = $api_instance->getCouponTerms($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the coupon being searched for |

### Return type

[**\Swagger\Client\Model\CouponTerms**](../Model/CouponTerms.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserCouponPrivileges**
> \Swagger\Client\Model\UserID removeUserCouponPrivileges($id, $delete_coupon_user_role)



Removes a User Role for a Coupon. Authorization parameters must be in URL query. Grant Role parameters must be in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the Coupon
$delete_coupon_user_role = new \Swagger\Client\Model\DeleteCouponUserRole(); // \Swagger\Client\Model\DeleteCouponUserRole | Coupons User ID and Role to be removed  for the coupon ID.

try {
    $result = $api_instance->removeUserCouponPrivileges($id, $delete_coupon_user_role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->removeUserCouponPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Coupon |
 **delete_coupon_user_role** | [**\Swagger\Client\Model\DeleteCouponUserRole**](../Model/\Swagger\Client\Model\DeleteCouponUserRole.md)| Coupons User ID and Role to be removed  for the coupon ID. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCouponTerms**
> \Swagger\Client\Model\Coupon setCouponTerms($id, $set_coupon_terms_parameters)



Sets a Coupons Terms & Conditions based on single coupon id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the coupon being searched for
$set_coupon_terms_parameters = new \Swagger\Client\Model\SetCouponTermsParameters(); // \Swagger\Client\Model\SetCouponTermsParameters | Coupon Parameters for the coupon to be updated

try {
    $result = $api_instance->setCouponTerms($id, $set_coupon_terms_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->setCouponTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the coupon being searched for |
 **set_coupon_terms_parameters** | [**\Swagger\Client\Model\SetCouponTermsParameters**](../Model/\Swagger\Client\Model\SetCouponTermsParameters.md)| Coupon Parameters for the coupon to be updated |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCoupon**
> \Swagger\Client\Model\CouponID updateCoupon($id, $update_coupon_parameters, $company_parameter, $brand_parameter, $store_parameter, $merchant_parameter, $product_parameter)



Updates a Coupon for a single user id, based on posted parameters of coupon id, userid (user who initiated the update proccess), name, description, kind, products ids, categories ids, subcategories ids, primitives ids and optionally storeids and offerproviderids. Validation must ensure userid who initiated the update process has required privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the coupon to be updated.
$update_coupon_parameters = new \Swagger\Client\Model\UpdateCouponParameters(); // \Swagger\Client\Model\UpdateCouponParameters | Coupon Parameters consisting of coupon id, userid who initiated the update proccess, name, description, kind, products ids, categories ids, subcategories ids, primitives ids and optionally store ids and offerproviderids.
$company_parameter = "company_parameter_example"; // string | Company ID Parameter for the company that the Coupon is connected to.Required only if the Coupon is connected with a company.
$brand_parameter = "brand_parameter_example"; // string | Brand ID Parameter for the Brand that the Coupon is connected to.Required only if the Coupon is connected with a Brand.
$store_parameter = "store_parameter_example"; // string | Store ID Parameter for the Store that the Coupon is connected to.Required only if the Coupon is connected with a Store.
$merchant_parameter = "merchant_parameter_example"; // string | Merchant ID Parameter for the Merchant that the Coupon is connected to.Required only if the Coupon is connected with a Merchant.
$product_parameter = "product_parameter_example"; // string | Product ID Parameter for the Product that the Coupon is connected to.Required only if the Coupon is connected with a Product.

try {
    $result = $api_instance->updateCoupon($id, $update_coupon_parameters, $company_parameter, $brand_parameter, $store_parameter, $merchant_parameter, $product_parameter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the coupon to be updated. |
 **update_coupon_parameters** | [**\Swagger\Client\Model\UpdateCouponParameters**](../Model/\Swagger\Client\Model\UpdateCouponParameters.md)| Coupon Parameters consisting of coupon id, userid who initiated the update proccess, name, description, kind, products ids, categories ids, subcategories ids, primitives ids and optionally store ids and offerproviderids. |
 **company_parameter** | **string**| Company ID Parameter for the company that the Coupon is connected to.Required only if the Coupon is connected with a company. | [optional]
 **brand_parameter** | **string**| Brand ID Parameter for the Brand that the Coupon is connected to.Required only if the Coupon is connected with a Brand. | [optional]
 **store_parameter** | **string**| Store ID Parameter for the Store that the Coupon is connected to.Required only if the Coupon is connected with a Store. | [optional]
 **merchant_parameter** | **string**| Merchant ID Parameter for the Merchant that the Coupon is connected to.Required only if the Coupon is connected with a Merchant. | [optional]
 **product_parameter** | **string**| Product ID Parameter for the Product that the Coupon is connected to.Required only if the Coupon is connected with a Product. | [optional]

### Return type

[**\Swagger\Client\Model\CouponID**](../Model/CouponID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

