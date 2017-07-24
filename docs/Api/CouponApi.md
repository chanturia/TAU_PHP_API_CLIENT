# Swagger\Client\CouponApi

All URIs are relative to *http://api.trustanduse.com/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUserCoupon**](CouponApi.md#addUserCoupon) | **POST** /coupon/{id}/user | 
[**allCouponCategories**](CouponApi.md#allCouponCategories) | **GET** /coupon/categories | 
[**allCouponPrimitives**](CouponApi.md#allCouponPrimitives) | **GET** /coupon/primitive/all | 
[**allCoupons**](CouponApi.md#allCoupons) | **GET** /coupon/all | 
[**couponCategoryCreate**](CouponApi.md#couponCategoryCreate) | **POST** /coupon/category/create | 
[**couponCategoryDelete**](CouponApi.md#couponCategoryDelete) | **DELETE** /coupon/category/{id}/delete | 
[**couponPrimitiveDelete**](CouponApi.md#couponPrimitiveDelete) | **DELETE** /coupon/primitive/{id}/delete | 
[**createCoupon**](CouponApi.md#createCoupon) | **POST** /coupon/create | 
[**createCouponPrimitive**](CouponApi.md#createCouponPrimitive) | **POST** /coupon/primitive/create | 
[**deleteCoupon**](CouponApi.md#deleteCoupon) | **DELETE** /coupon/{id}/delete | 
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
> \Swagger\Client\Model\UserID addUserCoupon($id, $createCouponUserRole)



Adds an User for a Coupon based on selected role. Authorization parameters must be in URL query. Grant Role parameters must be in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the Coupon
$createCouponUserRole = new \Swagger\Client\Model\CreateCouponUserRole(); // \Swagger\Client\Model\CreateCouponUserRole | Coupon's User Priveleges Parameters for the couponID and UserID.

try {
    $result = $api_instance->addUserCoupon($id, $createCouponUserRole);
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
 **createCouponUserRole** | [**\Swagger\Client\Model\CreateCouponUserRole**](../Model/\Swagger\Client\Model\CreateCouponUserRole.md)| Coupon&#39;s User Priveleges Parameters for the couponID and UserID. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allCouponCategories**
> \Swagger\Client\Model\CouponCategoriesArray allCouponCategories($name, $description)



Searches for all existing Coupon categories. Returns array of JSON CouponCategory Objects consisting of category id, name, description and subcategories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$name = "name_example"; // string | Optional filter parameter to search for Coupon Categories with a name that contains value of parameter name.
$description = "description_example"; // string | Optional filter parameter to search for Coupon Categories with description that contains value of parameter description.

try {
    $result = $api_instance->allCouponCategories($name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->allCouponCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Optional filter parameter to search for Coupon Categories with a name that contains value of parameter name. | [optional]
 **description** | **string**| Optional filter parameter to search for Coupon Categories with description that contains value of parameter description. | [optional]

### Return type

[**\Swagger\Client\Model\CouponCategoriesArray**](../Model/CouponCategoriesArray.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allCouponPrimitives**
> \Swagger\Client\Model\CouponPrimitivesArray allCouponPrimitives($name, $description)



Searches for all existing Coupon primitives. Returns array of JSON CouponPrimitive Objects with primitive id, name, description, validator URL, validator inputs and validator outputs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$name = "name_example"; // string | Optional filter parameter to search for Coupon Primitive with a name that contains value of parameter name.
$description = "description_example"; // string | Optional filter parameter to search for Coupon Primitive with description that contains value of parameter description.

try {
    $result = $api_instance->allCouponPrimitives($name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->allCouponPrimitives: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Optional filter parameter to search for Coupon Primitive with a name that contains value of parameter name. | [optional]
 **description** | **string**| Optional filter parameter to search for Coupon Primitive with description that contains value of parameter description. | [optional]

### Return type

[**\Swagger\Client\Model\CouponPrimitivesArray**](../Model/CouponPrimitivesArray.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allCoupons**
> \Swagger\Client\Model\CouponsArray allCoupons($name, $description, $kind)



Searches for all existing Coupons. Returns array of JSON Coupon Objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$name = "name_example"; // string | Optional filter parameter to search for Coupons with a name that contains value of parameter name.
$description = "description_example"; // string | Optional filter parameter to search for Coupons with description that contains value of parameter description.
$kind = "kind_example"; // string | Optional filter parameter to search for Coupons with kind that contains value of parameter kind.

try {
    $result = $api_instance->allCoupons($name, $description, $kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->allCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Optional filter parameter to search for Coupons with a name that contains value of parameter name. | [optional]
 **description** | **string**| Optional filter parameter to search for Coupons with description that contains value of parameter description. | [optional]
 **kind** | **string**| Optional filter parameter to search for Coupons with kind that contains value of parameter kind. | [optional]

### Return type

[**\Swagger\Client\Model\CouponsArray**](../Model/CouponsArray.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **couponCategoryCreate**
> \Swagger\Client\Model\CouponCategory couponCategoryCreate($createCouponCategoryParameters)



Creates a new Category for Coupons by included category parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$createCouponCategoryParameters = new \Swagger\Client\Model\CreateCouponCategoryParameters(); // \Swagger\Client\Model\CreateCouponCategoryParameters | CouponCategory parameters for creating new category consisting of category name and description. Optionally free-form parameter in userDefinedObject and parent Coupon Category ID.

try {
    $result = $api_instance->couponCategoryCreate($createCouponCategoryParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->couponCategoryCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createCouponCategoryParameters** | [**\Swagger\Client\Model\CreateCouponCategoryParameters**](../Model/\Swagger\Client\Model\CreateCouponCategoryParameters.md)| CouponCategory parameters for creating new category consisting of category name and description. Optionally free-form parameter in userDefinedObject and parent Coupon Category ID. |

### Return type

[**\Swagger\Client\Model\CouponCategory**](../Model/CouponCategory.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **couponCategoryDelete**
> \Swagger\Client\Model\Success couponCategoryDelete($id)



Functionality to delete a Coupon category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the Coupon category to be deleted.

try {
    $result = $api_instance->couponCategoryDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->couponCategoryDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Coupon category to be deleted. |

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **couponPrimitiveDelete**
> \Swagger\Client\Model\Success couponPrimitiveDelete($id)



Functionality to delete a Coupon primitive

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the Coupon primitive to be deleted.

try {
    $result = $api_instance->couponPrimitiveDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->couponPrimitiveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Coupon primitive to be deleted. |

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCoupon**
> \Swagger\Client\Model\Coupon createCoupon($createCouponParameters)



Creates a new Coupon for a single user id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$createCouponParameters = new \Swagger\Client\Model\CreateCouponParameters(); // \Swagger\Client\Model\CreateCouponParameters | Coupon Parameters

try {
    $result = $api_instance->createCoupon($createCouponParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->createCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createCouponParameters** | [**\Swagger\Client\Model\CreateCouponParameters**](../Model/\Swagger\Client\Model\CreateCouponParameters.md)| Coupon Parameters | [optional]

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponPrimitive**
> \Swagger\Client\Model\CouponPrimitive createCouponPrimitive($primitiveParameters)



Creates a new Primitive for Coupons by included primitive parameters consisting of primitive name, description and primitive validator URL, validator inputs and validator outputs. Returns JSON CouponPrimitive Object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$primitiveParameters = new \Swagger\Client\Model\PrimitiveParameters(); // \Swagger\Client\Model\PrimitiveParameters | Coupon Primitive parameters including primitive name, description and primitive validator URL, validator inputs and validator outputs.

try {
    $result = $api_instance->createCouponPrimitive($primitiveParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->createCouponPrimitive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **primitiveParameters** | [**\Swagger\Client\Model\PrimitiveParameters**](../Model/\Swagger\Client\Model\PrimitiveParameters.md)| Coupon Primitive parameters including primitive name, description and primitive validator URL, validator inputs and validator outputs. |

### Return type

[**\Swagger\Client\Model\CouponPrimitive**](../Model/CouponPrimitive.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCoupon**
> \Swagger\Client\Model\Success deleteCoupon($id, $companyID, $brandID, $storeID, $merchantID, $productID)



Delete a Coupon based on single coupon id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the coupon being searched for.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the Coupon is connected to. Required only if the Coupon is connected with a company.
$brandID = "brandID_example"; // string | Brand ID Parameter for the Brand that the Coupon is connected to. Required only if the Coupon is connected with a Brand.
$storeID = "storeID_example"; // string | Store ID Parameter for the Store that the Coupon is connected to. Required only if the Coupon is connected with a Store.
$merchantID = "merchantID_example"; // string | Merchant ID Parameter for the Merchant that the Coupon is connected to. Required only if the Coupon is connected with a Merchant.
$productID = "productID_example"; // string | Product ID Parameter for the Product that the Coupon is connected to. Required only if the Coupon is connected with a Product.

try {
    $result = $api_instance->deleteCoupon($id, $companyID, $brandID, $storeID, $merchantID, $productID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->deleteCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the coupon being searched for. |
 **companyID** | **string**| Company ID Parameter for the company that the Coupon is connected to. Required only if the Coupon is connected with a company. | [optional]
 **brandID** | **string**| Brand ID Parameter for the Brand that the Coupon is connected to. Required only if the Coupon is connected with a Brand. | [optional]
 **storeID** | **string**| Store ID Parameter for the Store that the Coupon is connected to. Required only if the Coupon is connected with a Store. | [optional]
 **merchantID** | **string**| Merchant ID Parameter for the Merchant that the Coupon is connected to. Required only if the Coupon is connected with a Merchant. | [optional]
 **productID** | **string**| Product ID Parameter for the Product that the Coupon is connected to. Required only if the Coupon is connected with a Product. | [optional]

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editCouponCategory**
> \Swagger\Client\Model\CouponCategoryID editCouponCategory($couponCategoryID, $updateCouponCategoryParameters)



Edit a Coupon Category by included category parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$couponCategoryID = "couponCategoryID_example"; // string | ID for the Coupon Category to be updated.
$updateCouponCategoryParameters = new \Swagger\Client\Model\UpdateCouponCategoryParameters(); // \Swagger\Client\Model\UpdateCouponCategoryParameters | Coupon Category parameters

try {
    $result = $api_instance->editCouponCategory($couponCategoryID, $updateCouponCategoryParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->editCouponCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponCategoryID** | **string**| ID for the Coupon Category to be updated. |
 **updateCouponCategoryParameters** | [**\Swagger\Client\Model\UpdateCouponCategoryParameters**](../Model/\Swagger\Client\Model\UpdateCouponCategoryParameters.md)| Coupon Category parameters |

### Return type

[**\Swagger\Client\Model\CouponCategoryID**](../Model/CouponCategoryID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editCouponPrimitive**
> \Swagger\Client\Model\CouponPrimitiveID editCouponPrimitive($primitiveID, $couponPrimitiveParameters)



Edit a Coupon Primitive by included primitive parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$primitiveID = "primitiveID_example"; // string | ID for the Coupon Primitive to be updated.
$couponPrimitiveParameters = new \Swagger\Client\Model\CouponPrimitiveParameters(); // \Swagger\Client\Model\CouponPrimitiveParameters | Coupon Primitive parameters includingprimitive name, description, validator URL, validator inputs and validator outputs.

try {
    $result = $api_instance->editCouponPrimitive($primitiveID, $couponPrimitiveParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->editCouponPrimitive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **primitiveID** | **string**| ID for the Coupon Primitive to be updated. |
 **couponPrimitiveParameters** | [**\Swagger\Client\Model\CouponPrimitiveParameters**](../Model/\Swagger\Client\Model\CouponPrimitiveParameters.md)| Coupon Primitive parameters includingprimitive name, description, validator URL, validator inputs and validator outputs. |

### Return type

[**\Swagger\Client\Model\CouponPrimitiveID**](../Model/CouponPrimitiveID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponById**
> \Swagger\Client\Model\Coupon getCouponById($id, $companyID, $brandID, $storeID, $merchantID, $productID)



Searches for a Coupon based on single coupon id. Returns JSON Coupon Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the coupon being searched for.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the Coupon is connected to. Required only if the Coupon is connected with a company.
$brandID = "brandID_example"; // string | Brand ID Parameter for the Brand that the Coupon is connected to. Required only if the Coupon is connected with a Brand.
$storeID = "storeID_example"; // string | Store ID Parameter for the Store that the Coupon is connected to. Required only if the Coupon is connected with a Store.
$merchantID = "merchantID_example"; // string | Merchant ID Parameter for the Merchant that the Coupon is connected to. Required only if the Coupon is connected with a Merchant.
$productID = "productID_example"; // string | Product ID Parameter for the Product that the Coupon is connected to. Required only if the Coupon is connected with a Product.

try {
    $result = $api_instance->getCouponById($id, $companyID, $brandID, $storeID, $merchantID, $productID);
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
 **companyID** | **string**| Company ID Parameter for the company that the Coupon is connected to. Required only if the Coupon is connected with a company. | [optional]
 **brandID** | **string**| Brand ID Parameter for the Brand that the Coupon is connected to. Required only if the Coupon is connected with a Brand. | [optional]
 **storeID** | **string**| Store ID Parameter for the Store that the Coupon is connected to. Required only if the Coupon is connected with a Store. | [optional]
 **merchantID** | **string**| Merchant ID Parameter for the Merchant that the Coupon is connected to. Required only if the Coupon is connected with a Merchant. | [optional]
 **productID** | **string**| Product ID Parameter for the Product that the Coupon is connected to. Required only if the Coupon is connected with a Product. | [optional]

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponCategoryById**
> \Swagger\Client\Model\CouponCategory getCouponCategoryById($couponCategoryID)



Finds a Coupon Category based on single category id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$couponCategoryID = "couponCategoryID_example"; // string | ID for the Coupon Category being searched for.

try {
    $result = $api_instance->getCouponCategoryById($couponCategoryID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponCategoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **couponCategoryID** | **string**| ID for the Coupon Category being searched for. |

### Return type

[**\Swagger\Client\Model\CouponCategory**](../Model/CouponCategory.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCouponPrimitiveById**
> \Swagger\Client\Model\CouponPrimitive getCouponPrimitiveById($primitiveID)



Searches for a CouponPrimitive based on single primitive id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$primitiveID = "primitiveID_example"; // string | ID for the Coupon Primitive being searched for.

try {
    $result = $api_instance->getCouponPrimitiveById($primitiveID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponApi->getCouponPrimitiveById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **primitiveID** | **string**| ID for the Coupon Primitive being searched for. |

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
> \Swagger\Client\Model\UserID removeUserCouponPrivileges($id, $deleteCouponUserRole)



Removes a User Role for a Coupon. Authorization parameters must be in URL query. Grant Role parameters must be in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the Coupon
$deleteCouponUserRole = new \Swagger\Client\Model\DeleteCouponUserRole(); // \Swagger\Client\Model\DeleteCouponUserRole | Coupons User ID and Role to be removed  for the coupon ID.

try {
    $result = $api_instance->removeUserCouponPrivileges($id, $deleteCouponUserRole);
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
 **deleteCouponUserRole** | [**\Swagger\Client\Model\DeleteCouponUserRole**](../Model/\Swagger\Client\Model\DeleteCouponUserRole.md)| Coupons User ID and Role to be removed  for the coupon ID. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCouponTerms**
> \Swagger\Client\Model\Coupon setCouponTerms($id, $setCouponTermsParameters)



Sets a Coupons Terms & Conditions based on single coupon id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the coupon being searched for
$setCouponTermsParameters = new \Swagger\Client\Model\SetCouponTermsParameters(); // \Swagger\Client\Model\SetCouponTermsParameters | Coupon Parameters for the coupon to be updated

try {
    $result = $api_instance->setCouponTerms($id, $setCouponTermsParameters);
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
 **setCouponTermsParameters** | [**\Swagger\Client\Model\SetCouponTermsParameters**](../Model/\Swagger\Client\Model\SetCouponTermsParameters.md)| Coupon Parameters for the coupon to be updated |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCoupon**
> \Swagger\Client\Model\CouponID updateCoupon($id, $updateCouponParameters, $companyID, $brandID, $storeID, $merchantID, $productID)



Updates a Coupon for a single user id, based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\CouponApi();
$id = "id_example"; // string | ID for the coupon to be updated.
$updateCouponParameters = new \Swagger\Client\Model\UpdateCouponParameters(); // \Swagger\Client\Model\UpdateCouponParameters | Coupon Parameters consisting of name, description, kind, products ids, categories ids, subcategories ids, primitives ids and optionally store ids.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the Coupon is connected to. Required only if the Coupon is connected with a company.
$brandID = "brandID_example"; // string | Brand ID Parameter for the Brand that the Coupon is connected to. Required only if the Coupon is connected with a Brand.
$storeID = "storeID_example"; // string | Store ID Parameter for the Store that the Coupon is connected to. Required only if the Coupon is connected with a Store.
$merchantID = "merchantID_example"; // string | Merchant ID Parameter for the Merchant that the Coupon is connected to. Required only if the Coupon is connected with a Merchant.
$productID = "productID_example"; // string | Product ID Parameter for the Product that the Coupon is connected to. Required only if the Coupon is connected with a Product.

try {
    $result = $api_instance->updateCoupon($id, $updateCouponParameters, $companyID, $brandID, $storeID, $merchantID, $productID);
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
 **updateCouponParameters** | [**\Swagger\Client\Model\UpdateCouponParameters**](../Model/\Swagger\Client\Model\UpdateCouponParameters.md)| Coupon Parameters consisting of name, description, kind, products ids, categories ids, subcategories ids, primitives ids and optionally store ids. |
 **companyID** | **string**| Company ID Parameter for the company that the Coupon is connected to. Required only if the Coupon is connected with a company. | [optional]
 **brandID** | **string**| Brand ID Parameter for the Brand that the Coupon is connected to. Required only if the Coupon is connected with a Brand. | [optional]
 **storeID** | **string**| Store ID Parameter for the Store that the Coupon is connected to. Required only if the Coupon is connected with a Store. | [optional]
 **merchantID** | **string**| Merchant ID Parameter for the Merchant that the Coupon is connected to. Required only if the Coupon is connected with a Merchant. | [optional]
 **productID** | **string**| Product ID Parameter for the Product that the Coupon is connected to. Required only if the Coupon is connected with a Product. | [optional]

### Return type

[**\Swagger\Client\Model\CouponID**](../Model/CouponID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

