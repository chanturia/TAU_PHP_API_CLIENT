# SwaggerClient-php
TrustAndUse coupons api in the swagger-2.0 specification

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build date: 2017-04-26T18:46:09.231Z
- Build package: class io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://specs.api.trustanduse.7indigo.website](http://specs.api.trustanduse.7indigo.website)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/vaspapa7/tau-api-v1.git"
    }
  ],
  "require": {
    "vaspapa7/tau-api-v1": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\BrandApi();
$id = "id_example"; // string | ID for the Brand
$create_brand_user_roles = new \Swagger\Client\Model\CreateBrandUserRoles(); // \Swagger\Client\Model\CreateBrandUserRoles | Brand's User Priveleges Parameters for the brand ID and UserID.
$product_id = "product_id_example"; // string | ID of the Product connected with the Brand
$coupon_id = "coupon_id_example"; // string | ID of the Coupon connected with the Brand

try {
    $result = $api_instance->addUserBrand($id, $create_brand_user_roles, $product_id, $coupon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->addUserBrand: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://api.trustanduse.7indigo.website/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BrandApi* | [**addUserBrand**](docs/Api/BrandApi.md#adduserbrand) | **POST** /brand/{id}/user | 
*BrandApi* | [**allBrands**](docs/Api/BrandApi.md#allbrands) | **GET** /brand/all | 
*BrandApi* | [**changeUserBrandPrivileges**](docs/Api/BrandApi.md#changeuserbrandprivileges) | **PUT** /brand/{id}/user | 
*BrandApi* | [**createBrand**](docs/Api/BrandApi.md#createbrand) | **POST** /brand/create | 
*BrandApi* | [**createCouponBrand**](docs/Api/BrandApi.md#createcouponbrand) | **POST** /brand/{id}/coupon/create | 
*BrandApi* | [**createProductBrand**](docs/Api/BrandApi.md#createproductbrand) | **POST** /brand/{id}/product/create | 
*BrandApi* | [**getBrandDetails**](docs/Api/BrandApi.md#getbranddetails) | **GET** /brand/details/{id} | 
*BrandApi* | [**getBrandProducts**](docs/Api/BrandApi.md#getbrandproducts) | **GET** /brand/{id}/products | 
*BrandApi* | [**removeUserBrandPrivileges**](docs/Api/BrandApi.md#removeuserbrandprivileges) | **DELETE** /brand/{id}/user | 
*BrandApi* | [**updateBrand**](docs/Api/BrandApi.md#updatebrand) | **PUT** /brand/details/{id} | 
*CompanyApi* | [**addUserCompanyRoles**](docs/Api/CompanyApi.md#addusercompanyroles) | **POST** /company/{id}/user | 
*CompanyApi* | [**changeCompanyUserRoles**](docs/Api/CompanyApi.md#changecompanyuserroles) | **PUT** /company/{id}/user | 
*CompanyApi* | [**companyGetDetails**](docs/Api/CompanyApi.md#companygetdetails) | **GET** /company/details/{id} | 
*CompanyApi* | [**createBrandForCompany**](docs/Api/CompanyApi.md#createbrandforcompany) | **POST** /company/{id}/brand/create | 
*CompanyApi* | [**createCompany**](docs/Api/CompanyApi.md#createcompany) | **POST** /company/create | 
*CompanyApi* | [**createCouponForCompany**](docs/Api/CompanyApi.md#createcouponforcompany) | **POST** /company/{id}/coupon/create | 
*CompanyApi* | [**createProductCompany**](docs/Api/CompanyApi.md#createproductcompany) | **POST** /company/{id}/product/create | 
*CompanyApi* | [**createStoreForCompany**](docs/Api/CompanyApi.md#createstoreforcompany) | **POST** /company/{id}/store/create | 
*CompanyApi* | [**removeAdminUserCompany**](docs/Api/CompanyApi.md#removeadminusercompany) | **DELETE** /company/{id}/user | 
*CompanyApi* | [**updateCompany**](docs/Api/CompanyApi.md#updatecompany) | **PUT** /company/details/{id} | 
*CouponApi* | [**addUserCoupon**](docs/Api/CouponApi.md#addusercoupon) | **POST** /coupon/{id}/user | 
*CouponApi* | [**allCouponCategories**](docs/Api/CouponApi.md#allcouponcategories) | **GET** /coupon/categories | 
*CouponApi* | [**allCouponPrimitives**](docs/Api/CouponApi.md#allcouponprimitives) | **GET** /coupon/primitive/all | 
*CouponApi* | [**changeUserCouponPrivileges**](docs/Api/CouponApi.md#changeusercouponprivileges) | **PUT** /coupon/{id}/user | 
*CouponApi* | [**couponCategoryCreate**](docs/Api/CouponApi.md#couponcategorycreate) | **POST** /coupon/category/create | 
*CouponApi* | [**createCoupon**](docs/Api/CouponApi.md#createcoupon) | **POST** /coupon/create | 
*CouponApi* | [**createCouponPrimitive**](docs/Api/CouponApi.md#createcouponprimitive) | **POST** /coupon/primitive/create | 
*CouponApi* | [**editCouponCategory**](docs/Api/CouponApi.md#editcouponcategory) | **PUT** /coupon/category/{couponCategoryID} | 
*CouponApi* | [**editCouponPrimitive**](docs/Api/CouponApi.md#editcouponprimitive) | **PUT** /coupon/primitive/{primitiveID}/details | 
*CouponApi* | [**getCouponById**](docs/Api/CouponApi.md#getcouponbyid) | **GET** /coupon/{id}/details | 
*CouponApi* | [**getCouponCategoryById**](docs/Api/CouponApi.md#getcouponcategorybyid) | **GET** /coupon/category/{couponCategoryID} | 
*CouponApi* | [**getCouponPrimitiveById**](docs/Api/CouponApi.md#getcouponprimitivebyid) | **GET** /coupon/primitive/{primitiveID}/details | 
*CouponApi* | [**getCouponTerms**](docs/Api/CouponApi.md#getcouponterms) | **GET** /coupon/{id}/terms | 
*CouponApi* | [**removeUserCouponPrivileges**](docs/Api/CouponApi.md#removeusercouponprivileges) | **DELETE** /coupon/{id}/user | 
*CouponApi* | [**setCouponTerms**](docs/Api/CouponApi.md#setcouponterms) | **POST** /coupon/{id}/terms | 
*CouponApi* | [**updateCoupon**](docs/Api/CouponApi.md#updatecoupon) | **PUT** /coupon/{id}/details | 
*MerchantApi* | [**addUserMerchantPrivileges**](docs/Api/MerchantApi.md#addusermerchantprivileges) | **POST** /merchant/{id}/user | 
*MerchantApi* | [**changeUserMerchantPrivileges**](docs/Api/MerchantApi.md#changeusermerchantprivileges) | **PUT** /merchant/{id}/user | 
*MerchantApi* | [**createCouponMerchant**](docs/Api/MerchantApi.md#createcouponmerchant) | **POST** /merchant/{id}/coupon/create | 
*MerchantApi* | [**createMerchant**](docs/Api/MerchantApi.md#createmerchant) | **POST** /merchant/create | 
*MerchantApi* | [**createProductMerchant**](docs/Api/MerchantApi.md#createproductmerchant) | **POST** /merchant/{id}/product/create | 
*MerchantApi* | [**getMerchantById**](docs/Api/MerchantApi.md#getmerchantbyid) | **GET** /merchant/details/{id} | 
*MerchantApi* | [**merchantGetProducts**](docs/Api/MerchantApi.md#merchantgetproducts) | **GET** /merchant/{id}/getProducts | 
*MerchantApi* | [**removeUserMerchantPrivileges**](docs/Api/MerchantApi.md#removeusermerchantprivileges) | **DELETE** /merchant/{id}/user | 
*MerchantApi* | [**updateMerchant**](docs/Api/MerchantApi.md#updatemerchant) | **PUT** /merchant/details/{id} | 
*ProductApi* | [**addProductBarcode**](docs/Api/ProductApi.md#addproductbarcode) | **POST** /product/{id}/barcodes | 
*ProductApi* | [**addUserProduct**](docs/Api/ProductApi.md#adduserproduct) | **POST** /product/{id}/user | 
*ProductApi* | [**changeUserProductPrivileges**](docs/Api/ProductApi.md#changeuserproductprivileges) | **PUT** /product/{id}/user | 
*ProductApi* | [**createCouponProduct**](docs/Api/ProductApi.md#createcouponproduct) | **POST** /product/{id}/coupon/create | 
*ProductApi* | [**createProduct**](docs/Api/ProductApi.md#createproduct) | **POST** /product/create | 
*ProductApi* | [**getProductById**](docs/Api/ProductApi.md#getproductbyid) | **GET** /product/details/{id} | 
*ProductApi* | [**getProductCoupons**](docs/Api/ProductApi.md#getproductcoupons) | **GET** /product/{id}/coupons | 
*ProductApi* | [**removeUserProductPrivileges**](docs/Api/ProductApi.md#removeuserproductprivileges) | **DELETE** /product/{id}/user | 
*ProductApi* | [**updateBarcodes**](docs/Api/ProductApi.md#updatebarcodes) | **PUT** /product/{id}/barcodes | 
*ProductApi* | [**updateProduct**](docs/Api/ProductApi.md#updateproduct) | **PUT** /product/details/{id} | 
*StoreApi* | [**addUserRoleForStore**](docs/Api/StoreApi.md#adduserroleforstore) | **POST** /store/{id}/user | 
*StoreApi* | [**allStores**](docs/Api/StoreApi.md#allstores) | **GET** /store/all | 
*StoreApi* | [**changeUserStorePrivileges**](docs/Api/StoreApi.md#changeuserstoreprivileges) | **PUT** /store/{id}/user | 
*StoreApi* | [**createCouponForStore**](docs/Api/StoreApi.md#createcouponforstore) | **POST** /store/{id}/coupon/create | 
*StoreApi* | [**createProductStore**](docs/Api/StoreApi.md#createproductstore) | **POST** /store/{id}/product/create | 
*StoreApi* | [**createStore**](docs/Api/StoreApi.md#createstore) | **POST** /store/create | 
*StoreApi* | [**removeUserStorePrivileges**](docs/Api/StoreApi.md#removeuserstoreprivileges) | **DELETE** /store/{id}/user | 
*StoreApi* | [**storeGetCoupons**](docs/Api/StoreApi.md#storegetcoupons) | **GET** /store/{id}/getCoupons | 
*StoreApi* | [**storeGetDetails**](docs/Api/StoreApi.md#storegetdetails) | **GET** /store/details/{id} | 
*StoreApi* | [**updateStore**](docs/Api/StoreApi.md#updatestore) | **PUT** /store/details/{id} | 
*UsersApi* | [**changeMobile**](docs/Api/UsersApi.md#changemobile) | **POST** /user/changeMobile | 
*UsersApi* | [**changeStore**](docs/Api/UsersApi.md#changestore) | **POST** /user/changeStore | 
*UsersApi* | [**confirmMobilePin**](docs/Api/UsersApi.md#confirmmobilepin) | **POST** /user/confirmMobilePin | 
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /user/create | 
*UsersApi* | [**editDetails**](docs/Api/UsersApi.md#editdetails) | **PUT** /user/details/{id} | 
*UsersApi* | [**generatePasswordResetToken**](docs/Api/UsersApi.md#generatepasswordresettoken) | **POST** /user/generatePasswordResetToken | 
*UsersApi* | [**getPurchases**](docs/Api/UsersApi.md#getpurchases) | **GET** /user/{id}/getPurchases | 
*UsersApi* | [**getUserRoles**](docs/Api/UsersApi.md#getuserroles) | **GET** /user/{id}/roles | 
*UsersApi* | [**getkeyid**](docs/Api/UsersApi.md#getkeyid) | **GET** /user/{id}/getkeyid | 
*UsersApi* | [**loginUser**](docs/Api/UsersApi.md#loginuser) | **POST** /user/login | 
*UsersApi* | [**logoutUser**](docs/Api/UsersApi.md#logoutuser) | **GET** /user/{id}/logout | 
*UsersApi* | [**resetPassword**](docs/Api/UsersApi.md#resetpassword) | **POST** /user/resetPassword | 
*UsersApi* | [**selectStore**](docs/Api/UsersApi.md#selectstore) | **POST** /user/selectStore | 
*UsersApi* | [**submitMobile**](docs/Api/UsersApi.md#submitmobile) | **POST** /user/submitMobile | 
*UsersApi* | [**userGetDetails**](docs/Api/UsersApi.md#usergetdetails) | **GET** /user/details/{id} | 


## Documentation For Models

 - [AddBarcode](docs/Model/AddBarcode.md)
 - [Brand](docs/Model/Brand.md)
 - [BrandCouponCreateParameters](docs/Model/BrandCouponCreateParameters.md)
 - [BrandCreateParameters](docs/Model/BrandCreateParameters.md)
 - [BrandID](docs/Model/BrandID.md)
 - [BrandProductCreateParameters](docs/Model/BrandProductCreateParameters.md)
 - [BrandUpdateDetailsParameters](docs/Model/BrandUpdateDetailsParameters.md)
 - [ChangeClientIDStoreID](docs/Model/ChangeClientIDStoreID.md)
 - [ChangeMobileNumberParameter](docs/Model/ChangeMobileNumberParameter.md)
 - [Company](docs/Model/Company.md)
 - [CompanyBrandCreateParameters](docs/Model/CompanyBrandCreateParameters.md)
 - [CompanyCouponCreateParameters](docs/Model/CompanyCouponCreateParameters.md)
 - [CompanyID](docs/Model/CompanyID.md)
 - [CompanyProductCreateParameters](docs/Model/CompanyProductCreateParameters.md)
 - [CompanyStoreCreateParameters](docs/Model/CompanyStoreCreateParameters.md)
 - [Coupon](docs/Model/Coupon.md)
 - [CouponCategory](docs/Model/CouponCategory.md)
 - [CouponCategoryID](docs/Model/CouponCategoryID.md)
 - [CouponID](docs/Model/CouponID.md)
 - [CouponPrimitive](docs/Model/CouponPrimitive.md)
 - [CouponPrimitiveID](docs/Model/CouponPrimitiveID.md)
 - [CouponPrimitiveParameters](docs/Model/CouponPrimitiveParameters.md)
 - [CouponSubcategory](docs/Model/CouponSubcategory.md)
 - [CouponTerms](docs/Model/CouponTerms.md)
 - [CreateBrandUserRoles](docs/Model/CreateBrandUserRoles.md)
 - [CreateCompanyParameters](docs/Model/CreateCompanyParameters.md)
 - [CreateCompanyUserRoles](docs/Model/CreateCompanyUserRoles.md)
 - [CreateCouponCategoryParameters](docs/Model/CreateCouponCategoryParameters.md)
 - [CreateCouponParameters](docs/Model/CreateCouponParameters.md)
 - [CreateCouponUserRole](docs/Model/CreateCouponUserRole.md)
 - [CreateCredentials](docs/Model/CreateCredentials.md)
 - [CreateMerchantUserRole](docs/Model/CreateMerchantUserRole.md)
 - [CreateStoreParameters](docs/Model/CreateStoreParameters.md)
 - [CreateStoreUserRole](docs/Model/CreateStoreUserRole.md)
 - [DeleteBrandUserRoles](docs/Model/DeleteBrandUserRoles.md)
 - [DeleteCompanyUserRoles](docs/Model/DeleteCompanyUserRoles.md)
 - [DeleteCouponUserRole](docs/Model/DeleteCouponUserRole.md)
 - [DeleteMerchantUserRole](docs/Model/DeleteMerchantUserRole.md)
 - [DeleteProductUserRole](docs/Model/DeleteProductUserRole.md)
 - [DeleteStoreUserRole](docs/Model/DeleteStoreUserRole.md)
 - [Error](docs/Model/Error.md)
 - [IdPinNumber](docs/Model/IdPinNumber.md)
 - [Image](docs/Model/Image.md)
 - [Key](docs/Model/Key.md)
 - [LoginCredentials](docs/Model/LoginCredentials.md)
 - [Merchant](docs/Model/Merchant.md)
 - [MerchantCouponCreateParameters](docs/Model/MerchantCouponCreateParameters.md)
 - [MerchantCreateParameters](docs/Model/MerchantCreateParameters.md)
 - [MerchantID](docs/Model/MerchantID.md)
 - [MerchantProductCreateParameters](docs/Model/MerchantProductCreateParameters.md)
 - [MerchantUpdateParameters](docs/Model/MerchantUpdateParameters.md)
 - [Mobile](docs/Model/Mobile.md)
 - [PIN](docs/Model/PIN.md)
 - [PasswordResetToken](docs/Model/PasswordResetToken.md)
 - [PasswordTokenCredentials](docs/Model/PasswordTokenCredentials.md)
 - [PrimitiveParameters](docs/Model/PrimitiveParameters.md)
 - [Product](docs/Model/Product.md)
 - [ProductAdminRole](docs/Model/ProductAdminRole.md)
 - [ProductCouponCreateParameters](docs/Model/ProductCouponCreateParameters.md)
 - [ProductID](docs/Model/ProductID.md)
 - [ProductParameters](docs/Model/ProductParameters.md)
 - [ResetPasswordCredentials](docs/Model/ResetPasswordCredentials.md)
 - [Role](docs/Model/Role.md)
 - [SelectStoreClientIDStoreID](docs/Model/SelectStoreClientIDStoreID.md)
 - [SetCouponTermsParameters](docs/Model/SetCouponTermsParameters.md)
 - [Store](docs/Model/Store.md)
 - [StoreCouponcreateParameters](docs/Model/StoreCouponcreateParameters.md)
 - [StoreID](docs/Model/StoreID.md)
 - [StoreProductCreateParameters](docs/Model/StoreProductCreateParameters.md)
 - [SubmitMobileNumberParameter](docs/Model/SubmitMobileNumberParameter.md)
 - [Success](docs/Model/Success.md)
 - [UpdateBarcode](docs/Model/UpdateBarcode.md)
 - [UpdateBrandUserRoles](docs/Model/UpdateBrandUserRoles.md)
 - [UpdateCompanyParameters](docs/Model/UpdateCompanyParameters.md)
 - [UpdateCompanyUserRoles](docs/Model/UpdateCompanyUserRoles.md)
 - [UpdateCouponCategoryParameters](docs/Model/UpdateCouponCategoryParameters.md)
 - [UpdateCouponParameters](docs/Model/UpdateCouponParameters.md)
 - [UpdateCouponUserRole](docs/Model/UpdateCouponUserRole.md)
 - [UpdateMerchantUserRole](docs/Model/UpdateMerchantUserRole.md)
 - [UpdateProductParameters](docs/Model/UpdateProductParameters.md)
 - [UpdateProductUserRole](docs/Model/UpdateProductUserRole.md)
 - [UpdateStoreParameters](docs/Model/UpdateStoreParameters.md)
 - [UpdateStoreUserRole](docs/Model/UpdateStoreUserRole.md)
 - [User](docs/Model/User.md)
 - [UserDetails](docs/Model/UserDetails.md)
 - [UserID](docs/Model/UserID.md)
 - [Userdetails](docs/Model/Userdetails.md)


## Documentation For Authorization


## OauthSecurityApplications

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://api.trustanduse.com/v.1.0/auth/authorize
- **Scopes**: 
 - **manageUsersOwnData**: Scope that permits Users accessing and modifying Personal Info and details.
 - **createEntity**: Scope for the creation of entities company, brand, store, merchant, product and coupon.
 - **readEntityUsers**: Scope for getting an Entity's Users.
 - **editEntityUsers**: Scope for editing an Entity's Users.
 - **readEntityDetails**: Scope for reading an Entity's details.
 - **editEntityDetails**: Scope for editing an Entity's details.

## OauthUsersAuth

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - **manageUsersOwnData**: Scope that permits Users accessing and modifying Personal Info and details.
 - **createEntity**: Scope for the creation of entities company, brand, store, merchant, product and coupon.
 - **readEntityUsers**: Scope for getting an Entity's Users.
 - **editEntityUsers**: Scope for editing an Entity's Users.
 - **readEntityDetails**: Scope for reading an Entity's details.
 - **editEntityDetails**: Scope for editing an Entity's details.


## Author

sp@7indigo.com


