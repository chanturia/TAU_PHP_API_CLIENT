# Swagger\Client\ProductApi

All URIs are relative to *http://api.trustanduse.7indigo.website/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductBarcode**](ProductApi.md#addProductBarcode) | **POST** /product/{id}/barcodes | 
[**addUserProduct**](ProductApi.md#addUserProduct) | **POST** /product/{id}/user | 
[**createCouponProduct**](ProductApi.md#createCouponProduct) | **POST** /product/{id}/coupon/create | 
[**createProduct**](ProductApi.md#createProduct) | **POST** /product/create | 
[**getProductById**](ProductApi.md#getProductById) | **GET** /product/details/{id} | 
[**getProductCoupons**](ProductApi.md#getProductCoupons) | **GET** /product/{id}/coupons | 
[**removeUserProductPrivileges**](ProductApi.md#removeUserProductPrivileges) | **DELETE** /product/{id}/user | 
[**updateBarcodes**](ProductApi.md#updateBarcodes) | **PUT** /product/{id}/barcodes | 
[**updateProduct**](ProductApi.md#updateProduct) | **PUT** /product/details/{id} | 


# **addProductBarcode**
> \Swagger\Client\Model\ProductID addProductBarcode($id, $addBarcode, $companyID, $brandID, $storeID, $merchantID)



Adds Barcodes for a Product by included array of barcode strings. Returns productID of updated product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProductApi();
$id = "id_example"; // string | ID for the product to be updated.
$addBarcode = new \Swagger\Client\Model\AddBarcode(); // \Swagger\Client\Model\AddBarcode | Barcode parameters for updating product consisting of productID, barcodes array of strings and userID for authorization.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the product is connected to.Required only if the product is connected with a company.
$brandID = "brandID_example"; // string | Brand ID Parameter for the Brand that the product is connected to.Required only if the product is connected with a Brand.
$storeID = "storeID_example"; // string | Store ID Parameter for the Store that the product is connected to.Required only if the product is connected with a Store.
$merchantID = "merchantID_example"; // string | Merchant ID Parameter for the Merchant that the product is connected to.Required only if the product is connected with a Merchant.

try {
    $result = $api_instance->addProductBarcode($id, $addBarcode, $companyID, $brandID, $storeID, $merchantID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->addProductBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the product to be updated. |
 **addBarcode** | [**\Swagger\Client\Model\AddBarcode**](../Model/\Swagger\Client\Model\AddBarcode.md)| Barcode parameters for updating product consisting of productID, barcodes array of strings and userID for authorization. |
 **companyID** | **string**| Company ID Parameter for the company that the product is connected to.Required only if the product is connected with a company. | [optional]
 **brandID** | **string**| Brand ID Parameter for the Brand that the product is connected to.Required only if the product is connected with a Brand. | [optional]
 **storeID** | **string**| Store ID Parameter for the Store that the product is connected to.Required only if the product is connected with a Store. | [optional]
 **merchantID** | **string**| Merchant ID Parameter for the Merchant that the product is connected to.Required only if the product is connected with a Merchant. | [optional]

### Return type

[**\Swagger\Client\Model\ProductID**](../Model/ProductID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addUserProduct**
> \Swagger\Client\Model\UserID addUserProduct($id, $productAdminRole, $couponID)



Adds an User for a Product based on selected role. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for productID(id) connected parameter couponID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. couponID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProductApi();
$id = "id_example"; // string | ID for the Product
$productAdminRole = new \Swagger\Client\Model\ProductAdminRole(); // \Swagger\Client\Model\ProductAdminRole | Product's User Priveleges Parameters for the productID and UserID.
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Product

try {
    $result = $api_instance->addUserProduct($id, $productAdminRole, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->addUserProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Product |
 **productAdminRole** | [**\Swagger\Client\Model\ProductAdminRole**](../Model/\Swagger\Client\Model\ProductAdminRole.md)| Product&#39;s User Priveleges Parameters for the productID and UserID. |
 **couponID** | **string**| ID of the Coupon connected with the Product | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCouponProduct**
> \Swagger\Client\Model\Coupon createCouponProduct($id, $productCouponCreateParameters)



Creates a new Coupon for a Product, for a single user id, based on included parameters of userid who initiated the creation proccess, products ids, categories ids and subcategories ids and primitives ids and optionally storeids . Validation must ensure userid who initiated the creation has required privileges.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProductApi();
$id = "id_example"; // string | ID for the Product
$productCouponCreateParameters = new \Swagger\Client\Model\ProductCouponCreateParameters(); // \Swagger\Client\Model\ProductCouponCreateParameters | Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids.

try {
    $result = $api_instance->createCouponProduct($id, $productCouponCreateParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createCouponProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Product |
 **productCouponCreateParameters** | [**\Swagger\Client\Model\ProductCouponCreateParameters**](../Model/\Swagger\Client\Model\ProductCouponCreateParameters.md)| Coupon Parameters consisting of userid who initiated the creation proccess, products ids, categories ids, subcategories ids, primitives ids and optionally store ids. |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProduct**
> \Swagger\Client\Model\Product createProduct($productParameters)



Creates a new Product by included product parameters product type, product name, description, brandID, images and optionally merchantids . Returns JSON Product Object consisting of productID, product name and product description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProductApi();
$productParameters = new \Swagger\Client\Model\ProductParameters(); // \Swagger\Client\Model\ProductParameters | Product parameters for creating new product consisting of product type, name, description, brandID, images and optionally merchantids.

try {
    $result = $api_instance->createProduct($productParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productParameters** | [**\Swagger\Client\Model\ProductParameters**](../Model/\Swagger\Client\Model\ProductParameters.md)| Product parameters for creating new product consisting of product type, name, description, brandID, images and optionally merchantids. |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductById**
> \Swagger\Client\Model\Product getProductById($id, $companyID, $brandID, $storeID, $merchantID)



Searches a Product based on single product id. Returns JSON Product Object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProductApi();
$id = "id_example"; // string | ID for the product being searched for.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the product is connected to.Required only if the product is connected with a company.
$brandID = "brandID_example"; // string | Brand ID Parameter for the Brand that the product is connected to.Required only if the product is connected with a Brand.
$storeID = "storeID_example"; // string | Store ID Parameter for the Store that the product is connected to.Required only if the product is connected with a Store.
$merchantID = "merchantID_example"; // string | Merchant ID Parameter for the Merchant that the product is connected to.Required only if the product is connected with a Merchant.

try {
    $result = $api_instance->getProductById($id, $companyID, $brandID, $storeID, $merchantID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the product being searched for. |
 **companyID** | **string**| Company ID Parameter for the company that the product is connected to.Required only if the product is connected with a company. | [optional]
 **brandID** | **string**| Brand ID Parameter for the Brand that the product is connected to.Required only if the product is connected with a Brand. | [optional]
 **storeID** | **string**| Store ID Parameter for the Store that the product is connected to.Required only if the product is connected with a Store. | [optional]
 **merchantID** | **string**| Merchant ID Parameter for the Merchant that the product is connected to.Required only if the product is connected with a Merchant. | [optional]

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCoupons**
> \Swagger\Client\Model\Coupon getProductCoupons($id)



Searches Product associated Coupons based on single product id.  Returns array of JSON Coupon Objects consisting of couponID, coupon type, coupon categories, coupon subcategories, coupon products and coupon brands.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProductApi();
$id = "id_example"; // string | ID for the product to find the coupons for

try {
    $result = $api_instance->getProductCoupons($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the product to find the coupons for |

### Return type

[**\Swagger\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserProductPrivileges**
> \Swagger\Client\Model\UserID removeUserProductPrivileges($id, $deleteProductUserRole, $couponID)



Removes a User Role for a Product. Authorization parameters must be in URL query. Grant Role parameters must be in the body. If authorization parameters include a connected Entitys id ex. for productID(id) connected parameter couponID then grant roles parameter connected entitys id must match the authorization parameter connected entitys id in the previous ex. couponID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProductApi();
$id = "id_example"; // string | ID for the Product
$deleteProductUserRole = new \Swagger\Client\Model\DeleteProductUserRole(); // \Swagger\Client\Model\DeleteProductUserRole | Product's User ID and privileges to be removed  for the product ID.
$couponID = "couponID_example"; // string | ID of the Coupon connected with the Product

try {
    $result = $api_instance->removeUserProductPrivileges($id, $deleteProductUserRole, $couponID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->removeUserProductPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the Product |
 **deleteProductUserRole** | [**\Swagger\Client\Model\DeleteProductUserRole**](../Model/\Swagger\Client\Model\DeleteProductUserRole.md)| Product&#39;s User ID and privileges to be removed  for the product ID. |
 **couponID** | **string**| ID of the Coupon connected with the Product | [optional]

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBarcodes**
> \Swagger\Client\Model\ProductID updateBarcodes($id, $updateBarcode, $companyID, $brandID, $storeID, $merchantID)



Updates an existing Products Barcodes by included array of barcodes. Returns JSON Object consisting of array of updated products barcodes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProductApi();
$id = "id_example"; // string | ID for the product to be updated.
$updateBarcode = new \Swagger\Client\Model\UpdateBarcode(); // \Swagger\Client\Model\UpdateBarcode | Product parameters for updating product consisting of productID for which to update the barcodes, userID for Authorization to grand permission and barcodes array.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the product is connected to.Required only if the product is connected with a company.
$brandID = "brandID_example"; // string | Brand ID Parameter for the Brand that the product is connected to.Required only if the product is connected with a Brand.
$storeID = "storeID_example"; // string | Store ID Parameter for the Store that the product is connected to.Required only if the product is connected with a Store.
$merchantID = "merchantID_example"; // string | Merchant ID Parameter for the Merchant that the product is connected to.Required only if the product is connected with a Merchant.

try {
    $result = $api_instance->updateBarcodes($id, $updateBarcode, $companyID, $brandID, $storeID, $merchantID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateBarcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the product to be updated. |
 **updateBarcode** | [**\Swagger\Client\Model\UpdateBarcode**](../Model/\Swagger\Client\Model\UpdateBarcode.md)| Product parameters for updating product consisting of productID for which to update the barcodes, userID for Authorization to grand permission and barcodes array. |
 **companyID** | **string**| Company ID Parameter for the company that the product is connected to.Required only if the product is connected with a company. | [optional]
 **brandID** | **string**| Brand ID Parameter for the Brand that the product is connected to.Required only if the product is connected with a Brand. | [optional]
 **storeID** | **string**| Store ID Parameter for the Store that the product is connected to.Required only if the product is connected with a Store. | [optional]
 **merchantID** | **string**| Merchant ID Parameter for the Merchant that the product is connected to.Required only if the product is connected with a Merchant. | [optional]

### Return type

[**\Swagger\Client\Model\ProductID**](../Model/ProductID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProduct**
> \Swagger\Client\Model\ProductID updateProduct($id, $updateProductParameters, $companyID, $brandID, $storeID, $merchantID)



Updates an existing Product by included product parameters product type, name, description, brandID, images and optionally merchantids . Returns JSON Product Object consisting of productID, product name and product description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\ProductApi();
$id = "id_example"; // string | ID for the product to be updated.
$updateProductParameters = new \Swagger\Client\Model\UpdateProductParameters(); // \Swagger\Client\Model\UpdateProductParameters | Product parameters for updating product consisting of product type, name, description, brandID, images and optionally merchantids.
$companyID = "companyID_example"; // string | Company ID Parameter for the company that the product is connected to.Required only if the product is connected with a company.
$brandID = "brandID_example"; // string | Brand ID Parameter for the Brand that the product is connected to.Required only if the product is connected with a Brand.
$storeID = "storeID_example"; // string | Store ID Parameter for the Store that the product is connected to.Required only if the product is connected with a Store.
$merchantID = "merchantID_example"; // string | Merchant ID Parameter for the Merchant that the product is connected to.Required only if the product is connected with a Merchant.

try {
    $result = $api_instance->updateProduct($id, $updateProductParameters, $companyID, $brandID, $storeID, $merchantID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the product to be updated. |
 **updateProductParameters** | [**\Swagger\Client\Model\UpdateProductParameters**](../Model/\Swagger\Client\Model\UpdateProductParameters.md)| Product parameters for updating product consisting of product type, name, description, brandID, images and optionally merchantids. |
 **companyID** | **string**| Company ID Parameter for the company that the product is connected to.Required only if the product is connected with a company. | [optional]
 **brandID** | **string**| Brand ID Parameter for the Brand that the product is connected to.Required only if the product is connected with a Brand. | [optional]
 **storeID** | **string**| Store ID Parameter for the Store that the product is connected to.Required only if the product is connected with a Store. | [optional]
 **merchantID** | **string**| Merchant ID Parameter for the Merchant that the product is connected to.Required only if the product is connected with a Merchant. | [optional]

### Return type

[**\Swagger\Client\Model\ProductID**](../Model/ProductID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

