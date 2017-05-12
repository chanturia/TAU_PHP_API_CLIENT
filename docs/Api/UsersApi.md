# Swagger\Client\UsersApi

All URIs are relative to *http://api.trustanduse.7indigo.website/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeMobile**](UsersApi.md#changeMobile) | **POST** /user/changeMobile | 
[**changeStore**](UsersApi.md#changeStore) | **POST** /user/changeStore | 
[**confirmMobilePin**](UsersApi.md#confirmMobilePin) | **POST** /user/confirmMobilePin | 
[**createUser**](UsersApi.md#createUser) | **POST** /user/create | 
[**editDetails**](UsersApi.md#editDetails) | **PUT** /user/details/{id} | 
[**generatePasswordResetToken**](UsersApi.md#generatePasswordResetToken) | **POST** /user/generatePasswordResetToken | 
[**getPurchases**](UsersApi.md#getPurchases) | **GET** /user/{id}/getPurchases | 
[**getUserRoles**](UsersApi.md#getUserRoles) | **GET** /user/{id}/roles | 
[**getkeyid**](UsersApi.md#getkeyid) | **GET** /user/{id}/getkeyid | 
[**loginUser**](UsersApi.md#loginUser) | **POST** /user/login | 
[**logoutUser**](UsersApi.md#logoutUser) | **GET** /user/{id}/logout | 
[**resetPassword**](UsersApi.md#resetPassword) | **POST** /user/resetPassword | 
[**selectStore**](UsersApi.md#selectStore) | **POST** /user/selectStore | 
[**submitMobile**](UsersApi.md#submitMobile) | **POST** /user/submitMobile | 
[**userGetDetails**](UsersApi.md#userGetDetails) | **GET** /user/details/{id} | 


# **changeMobile**
> \Swagger\Client\Model\PIN changeMobile($change_mobile_number_parameter)



Change Mobile Number for client by user single id.Functionality deletes previous mobile number, generates new pin number that must be submited by the user for the new mobile number to be stored as valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$change_mobile_number_parameter = new \Swagger\Client\Model\ChangeMobileNumberParameter(); // \Swagger\Client\Model\ChangeMobileNumberParameter | Id for the user and new mobile number.

try {
    $result = $api_instance->changeMobile($change_mobile_number_parameter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->changeMobile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_mobile_number_parameter** | [**\Swagger\Client\Model\ChangeMobileNumberParameter**](../Model/\Swagger\Client\Model\ChangeMobileNumberParameter.md)| Id for the user and new mobile number. |

### Return type

[**\Swagger\Client\Model\PIN**](../Model/PIN.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeStore**
> \Swagger\Client\Model\UserID changeStore($change_client_id_store_id)



Client by single user id changes selection for Store by providing new store id. Returns JSON with userID and new storeID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$change_client_id_store_id = new \Swagger\Client\Model\ChangeClientIDStoreID(); // \Swagger\Client\Model\ChangeClientIDStoreID | Id for the user and Id for the new Store being selected.

try {
    $result = $api_instance->changeStore($change_client_id_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->changeStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_client_id_store_id** | [**\Swagger\Client\Model\ChangeClientIDStoreID**](../Model/\Swagger\Client\Model\ChangeClientIDStoreID.md)| Id for the user and Id for the new Store being selected. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmMobilePin**
> \Swagger\Client\Model\UserID confirmMobilePin($id_pin_number)



Confirm Mobile PIN for client by single user id. Validation requires temporary pin generated for user to be the same with user submited pin number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$id_pin_number = new \Swagger\Client\Model\IdPinNumber(); // \Swagger\Client\Model\IdPinNumber | Id for the user and pinNumber to validate.

try {
    $result = $api_instance->confirmMobilePin($id_pin_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->confirmMobilePin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_pin_number** | [**\Swagger\Client\Model\IdPinNumber**](../Model/\Swagger\Client\Model\IdPinNumber.md)| Id for the user and pinNumber to validate. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUser**
> \Swagger\Client\Model\User createUser($create_credentials)



Creates and registers a new user based on personal details parameters including full name, email, date of birth, gender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$create_credentials = new \Swagger\Client\Model\CreateCredentials(); // \Swagger\Client\Model\CreateCredentials | User credentials consisting of first name, last name , email and password and optional date of birth and gender.Also User can be created by its facebookID and optionallu a facebook image URL or by its Google ID anad optionally a Google image URL.

try {
    $result = $api_instance->createUser($create_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_credentials** | [**\Swagger\Client\Model\CreateCredentials**](../Model/\Swagger\Client\Model\CreateCredentials.md)| User credentials consisting of first name, last name , email and password and optional date of birth and gender.Also User can be created by its facebookID and optionallu a facebook image URL or by its Google ID anad optionally a Google image URL. |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editDetails**
> \Swagger\Client\Model\UserID editDetails($id, $userdetails)



Apply changes on User-Details first name, last name, email, date of birth, gender by user single id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Id for the user to find the details for.
$userdetails = new \Swagger\Client\Model\Userdetails(); // \Swagger\Client\Model\Userdetails | User-details for the user to be updated.

try {
    $result = $api_instance->editDetails($id, $userdetails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->editDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id for the user to find the details for. |
 **userdetails** | [**\Swagger\Client\Model\Userdetails**](../Model/\Swagger\Client\Model\Userdetails.md)| User-details for the user to be updated. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generatePasswordResetToken**
> \Swagger\Client\Model\PasswordResetToken generatePasswordResetToken($password_token_credentials)



Sends a password reset link to user's email address and generates an AccessToken to validate password reset functionality.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$password_token_credentials = new \Swagger\Client\Model\PasswordTokenCredentials(); // \Swagger\Client\Model\PasswordTokenCredentials | User credentials consisting of id, email.

try {
    $result = $api_instance->generatePasswordResetToken($password_token_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->generatePasswordResetToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_token_credentials** | [**\Swagger\Client\Model\PasswordTokenCredentials**](../Model/\Swagger\Client\Model\PasswordTokenCredentials.md)| User credentials consisting of id, email. |

### Return type

[**\Swagger\Client\Model\PasswordResetToken**](../Model/PasswordResetToken.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchases**
> \Swagger\Client\Model\Product getPurchases($id)



Searches a client purchases by single user id. Returns array of JSON Products objects(Products can be any User purchase Service or Product).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Id for the user to find the purchases for.

try {
    $result = $api_instance->getPurchases($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id for the user to find the purchases for. |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRoles**
> \Swagger\Client\Model\Role getUserRoles($id)



Finds user roles by provided single user id and returns array of JSON roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Id for the user to get the roles for.

try {
    $result = $api_instance->getUserRoles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id for the user to get the roles for. |

### Return type

[**\Swagger\Client\Model\Role**](../Model/Role.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getkeyid**
> \Swagger\Client\Model\Key getkeyid($id)



Searches for a client unique key id, by specified user single id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Id for the user to find the unique key for.

try {
    $result = $api_instance->getkeyid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getkeyid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id for the user to find the unique key for. |

### Return type

[**\Swagger\Client\Model\Key**](../Model/Key.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginUser**
> \Swagger\Client\Model\User loginUser($login_credentials)



Base auth login with email as username and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$login_credentials = new \Swagger\Client\Model\LoginCredentials(); // \Swagger\Client\Model\LoginCredentials | The user credentials consisting of email as username and password. Also Facebook ID or Google ID if the User is performing login with Social Networks.

try {
    $result = $api_instance->loginUser($login_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->loginUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_credentials** | [**\Swagger\Client\Model\LoginCredentials**](../Model/\Swagger\Client\Model\LoginCredentials.md)| The user credentials consisting of email as username and password. Also Facebook ID or Google ID if the User is performing login with Social Networks. |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logoutUser**
> \Swagger\Client\Model\Success logoutUser($id)



User Logout functionality based on user id and with precondition that user has been logged in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | User ID of user being loged-out

try {
    $result = $api_instance->logoutUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->logoutUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID of user being loged-out |

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPassword**
> \Swagger\Client\Model\UserID resetPassword($reset_password_credentials)



Resets user password based on userID and previously generated Access Token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$reset_password_credentials = new \Swagger\Client\Model\ResetPasswordCredentials(); // \Swagger\Client\Model\ResetPasswordCredentials | Credentials for the User to reset password consisting of User id , ResetTokenToken and new password.

try {
    $result = $api_instance->resetPassword($reset_password_credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reset_password_credentials** | [**\Swagger\Client\Model\ResetPasswordCredentials**](../Model/\Swagger\Client\Model\ResetPasswordCredentials.md)| Credentials for the User to reset password consisting of User id , ResetTokenToken and new password. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **selectStore**
> \Swagger\Client\Model\UserID selectStore($select_store_client_id_store_id)



Client by single user id selects Store by store id. Returns JSON with userID and storeID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$select_store_client_id_store_id = new \Swagger\Client\Model\SelectStoreClientIDStoreID(); // \Swagger\Client\Model\SelectStoreClientIDStoreID | Id for the user and Id for the Store.

try {
    $result = $api_instance->selectStore($select_store_client_id_store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->selectStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select_store_client_id_store_id** | [**\Swagger\Client\Model\SelectStoreClientIDStoreID**](../Model/\Swagger\Client\Model\SelectStoreClientIDStoreID.md)| Id for the user and Id for the Store. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitMobile**
> \Swagger\Client\Model\PIN submitMobile($submit_mobile_number_parameter)



Submits Mobile Phonenumber for client by user single id. Functionality validation requires unique phonenumber, and if passed generates pin number. Pin-number must be submited by user before the phone number is stored as valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$submit_mobile_number_parameter = new \Swagger\Client\Model\SubmitMobileNumberParameter(); // \Swagger\Client\Model\SubmitMobileNumberParameter | Single UserId for the user which submits mobile and mobile phone number.

try {
    $result = $api_instance->submitMobile($submit_mobile_number_parameter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->submitMobile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submit_mobile_number_parameter** | [**\Swagger\Client\Model\SubmitMobileNumberParameter**](../Model/\Swagger\Client\Model\SubmitMobileNumberParameter.md)| Single UserId for the user which submits mobile and mobile phone number. |

### Return type

[**\Swagger\Client\Model\PIN**](../Model/PIN.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGetDetails**
> \Swagger\Client\Model\User userGetDetails($id)



Searches a users details by user single Id and returns JSON User-Details Object with first name, last name, email, date of birth, gender and unique_key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Id for the user to find the details for.

try {
    $result = $api_instance->userGetDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userGetDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id for the user to find the details for. |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
