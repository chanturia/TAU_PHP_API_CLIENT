# Swagger\Client\UsersApi

All URIs are relative to *http://api.trustanduse.com/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allUsers**](UsersApi.md#allUsers) | **GET** /user/all | 
[**authorizeReturnAccessToken**](UsersApi.md#authorizeReturnAccessToken) | **POST** /oauth2/token | 
[**authorizeReturnCode**](UsersApi.md#authorizeReturnCode) | **GET** /oauth2/authorize | 
[**changeMobile**](UsersApi.md#changeMobile) | **POST** /user/changeMobile | 
[**confirmMobilePin**](UsersApi.md#confirmMobilePin) | **POST** /user/confirmMobilePin | 
[**createUser**](UsersApi.md#createUser) | **POST** /user/create | 
[**editDetails**](UsersApi.md#editDetails) | **PUT** /user/details/{id} | 
[**generatePasswordResetToken**](UsersApi.md#generatePasswordResetToken) | **POST** /user/generatePasswordResetToken | 
[**getRoleGrants**](UsersApi.md#getRoleGrants) | **GET** /rolegrants/{role} | 
[**loginUser**](UsersApi.md#loginUser) | **POST** /user/login | 
[**logoutUser**](UsersApi.md#logoutUser) | **GET** /user/{id}/logout | 
[**resetPassword**](UsersApi.md#resetPassword) | **POST** /user/resetPassword | 
[**submitMobile**](UsersApi.md#submitMobile) | **POST** /user/submitMobile | 
[**userDelete**](UsersApi.md#userDelete) | **DELETE** /user/{id}/delete | 
[**userGetDetails**](UsersApi.md#userGetDetails) | **GET** /user/details/{id} | 


# **allUsers**
> \Swagger\Client\Model\UsersArray allUsers($name, $lastName, $email, $dateOfBirth)



Searches for all existing Users. Returns array of JSON User Objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$name = "name_example"; // string | Optional filter parameter to search for users with a name that contains value of parameter name.
$lastName = "lastName_example"; // string | Optional filter parameter to search for brands with lastName that contains value of parameter lastName.
$email = "email_example"; // string | Optional filter parameter to search for brands with email that contains value of parameter email.
$dateOfBirth = "dateOfBirth_example"; // string | Optional filter parameter to search for brands with dateOfBirth that contains value of parameter dateOfBirth.

try {
    $result = $api_instance->allUsers($name, $lastName, $email, $dateOfBirth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->allUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Optional filter parameter to search for users with a name that contains value of parameter name. | [optional]
 **lastName** | **string**| Optional filter parameter to search for brands with lastName that contains value of parameter lastName. | [optional]
 **email** | **string**| Optional filter parameter to search for brands with email that contains value of parameter email. | [optional]
 **dateOfBirth** | **string**| Optional filter parameter to search for brands with dateOfBirth that contains value of parameter dateOfBirth. | [optional]

### Return type

[**\Swagger\Client\Model\UsersArray**](../Model/UsersArray.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authorizeReturnAccessToken**
> \Swagger\Client\Model\AccessToken authorizeReturnAccessToken($activationCodeParameters)



Given an Activation Code, Client App Username and Password header parameters, returns an Access Token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuthClient
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UsersApi();
$activationCodeParameters = new \Swagger\Client\Model\ActivationCodeParameters(); // \Swagger\Client\Model\ActivationCodeParameters | Activation Code parameters consisting of grant_type that must have the default value \"authorization_code\" and code parameters that must be the Activation Code returned from /oauth2/authorize.

try {
    $result = $api_instance->authorizeReturnAccessToken($activationCodeParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->authorizeReturnAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activationCodeParameters** | [**\Swagger\Client\Model\ActivationCodeParameters**](../Model/\Swagger\Client\Model\ActivationCodeParameters.md)| Activation Code parameters consisting of grant_type that must have the default value \&quot;authorization_code\&quot; and code parameters that must be the Activation Code returned from /oauth2/authorize. |

### Return type

[**\Swagger\Client\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

[basicAuthClient](../../README.md#basicAuthClient)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authorizeReturnCode**
> \Swagger\Client\Model\ActivationCode authorizeReturnCode($clientId, $responseType)



User Authorization functionality based on client app id and user logged-in information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuthUser
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Swagger\Client\Api\UsersApi();
$clientId = "clientId_example"; // string | Client ID for the Application that requests access to the User.
$responseType = "responseType_example"; // string | response_type must equals the value code for the default functionality.

try {
    $result = $api_instance->authorizeReturnCode($clientId, $responseType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->authorizeReturnCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**| Client ID for the Application that requests access to the User. |
 **responseType** | **string**| response_type must equals the value code for the default functionality. |

### Return type

[**\Swagger\Client\Model\ActivationCode**](../Model/ActivationCode.md)

### Authorization

[basicAuthUser](../../README.md#basicAuthUser)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeMobile**
> \Swagger\Client\Model\PIN changeMobile($changeMobileNumberParameter)



Change Mobile Number for client by user single id.Functionality deletes previous mobile number, generates new pin number that must be submited by the user for the new mobile number to be stored as valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$changeMobileNumberParameter = new \Swagger\Client\Model\ChangeMobileNumberParameter(); // \Swagger\Client\Model\ChangeMobileNumberParameter | Id for the user and new mobile number.

try {
    $result = $api_instance->changeMobile($changeMobileNumberParameter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->changeMobile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **changeMobileNumberParameter** | [**\Swagger\Client\Model\ChangeMobileNumberParameter**](../Model/\Swagger\Client\Model\ChangeMobileNumberParameter.md)| Id for the user and new mobile number. |

### Return type

[**\Swagger\Client\Model\PIN**](../Model/PIN.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmMobilePin**
> \Swagger\Client\Model\UserID confirmMobilePin($idPinNumber)



Confirm Mobile PIN for client by single user id. Validation requires temporary pin generated for user to be the same with user submited pin number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$idPinNumber = new \Swagger\Client\Model\IdPinNumber(); // \Swagger\Client\Model\IdPinNumber | Id for the user and pinNumber to validate.

try {
    $result = $api_instance->confirmMobilePin($idPinNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->confirmMobilePin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idPinNumber** | [**\Swagger\Client\Model\IdPinNumber**](../Model/\Swagger\Client\Model\IdPinNumber.md)| Id for the user and pinNumber to validate. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUser**
> \Swagger\Client\Model\User createUser($userCreateCredentials)



Creates and registers a new user based on personal details parameters including full name, email, date of birth, gender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$userCreateCredentials = new \Swagger\Client\Model\UserCreateCredentials(); // \Swagger\Client\Model\UserCreateCredentials | User credentials consisting of first name, last name , email and password. Optionally date of birth, gender, position coordinates and custom defined properties. Also a User can be created by its Facebook ID and optionally a Facebook image URL or by its Google ID and optionally a Google image URL.

try {
    $result = $api_instance->createUser($userCreateCredentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userCreateCredentials** | [**\Swagger\Client\Model\UserCreateCredentials**](../Model/\Swagger\Client\Model\UserCreateCredentials.md)| User credentials consisting of first name, last name , email and password. Optionally date of birth, gender, position coordinates and custom defined properties. Also a User can be created by its Facebook ID and optionally a Facebook image URL or by its Google ID and optionally a Google image URL. |

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



Apply changes on User Details first name, last name, email, date of birth, gender by user single id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | Id for the user to update the details for.
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
 **id** | **string**| Id for the user to update the details for. |
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
> \Swagger\Client\Model\PasswordResetToken generatePasswordResetToken($passwordTokenCredentials)



Sends a password reset link to user's email address and generates an AccessToken to validate password reset functionality.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$passwordTokenCredentials = new \Swagger\Client\Model\PasswordTokenCredentials(); // \Swagger\Client\Model\PasswordTokenCredentials | User credentials consisting of id.

try {
    $result = $api_instance->generatePasswordResetToken($passwordTokenCredentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->generatePasswordResetToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **passwordTokenCredentials** | [**\Swagger\Client\Model\PasswordTokenCredentials**](../Model/\Swagger\Client\Model\PasswordTokenCredentials.md)| User credentials consisting of id. |

### Return type

[**\Swagger\Client\Model\PasswordResetToken**](../Model/PasswordResetToken.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoleGrants**
> \Swagger\Client\Model\RolesGrants getRoleGrants($role)



Returns which roles can be granted by a certain role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$role = "role_example"; // string | Role that we want to find the possible grant roles.

try {
    $result = $api_instance->getRoleGrants($role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getRoleGrants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **string**| Role that we want to find the possible grant roles. |

### Return type

[**\Swagger\Client\Model\RolesGrants**](../Model/RolesGrants.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginUser**
> \Swagger\Client\Model\User loginUser($userLoginCredentials)



Base auth login with email as username and password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$userLoginCredentials = new \Swagger\Client\Model\UserLoginCredentials(); // \Swagger\Client\Model\UserLoginCredentials | The user credentials consisting of email as username and password. Also Facebook ID or Google ID if the User is performing login with Social Networks.

try {
    $result = $api_instance->loginUser($userLoginCredentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->loginUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userLoginCredentials** | [**\Swagger\Client\Model\UserLoginCredentials**](../Model/\Swagger\Client\Model\UserLoginCredentials.md)| The user credentials consisting of email as username and password. Also Facebook ID or Google ID if the User is performing login with Social Networks. |

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
> \Swagger\Client\Model\UserID resetPassword($resetPasswordCredentials)



Resets user password based on userID and previously generated Access Token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$resetPasswordCredentials = new \Swagger\Client\Model\ResetPasswordCredentials(); // \Swagger\Client\Model\ResetPasswordCredentials | Credentials for the User to reset password consisting of User id , ResetTokenToken and new password.

try {
    $result = $api_instance->resetPassword($resetPasswordCredentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resetPasswordCredentials** | [**\Swagger\Client\Model\ResetPasswordCredentials**](../Model/\Swagger\Client\Model\ResetPasswordCredentials.md)| Credentials for the User to reset password consisting of User id , ResetTokenToken and new password. |

### Return type

[**\Swagger\Client\Model\UserID**](../Model/UserID.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitMobile**
> \Swagger\Client\Model\PIN submitMobile($submitMobileNumberParameter)



Submits Mobile Phonenumber for client by user single id. Functionality validation requires unique phonenumber, and if passed generates pin number. Pin-number must be submited by user before the phone number is stored as valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$submitMobileNumberParameter = new \Swagger\Client\Model\SubmitMobileNumberParameter(); // \Swagger\Client\Model\SubmitMobileNumberParameter | Single UserId for the user which submits mobile and mobile phone number.

try {
    $result = $api_instance->submitMobile($submitMobileNumberParameter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->submitMobile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **submitMobileNumberParameter** | [**\Swagger\Client\Model\SubmitMobileNumberParameter**](../Model/\Swagger\Client\Model\SubmitMobileNumberParameter.md)| Single UserId for the user which submits mobile and mobile phone number. |

### Return type

[**\Swagger\Client\Model\PIN**](../Model/PIN.md)

### Authorization

[OauthSecurityApplications](../../README.md#OauthSecurityApplications)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDelete**
> \Swagger\Client\Model\Success userDelete($id)



Functionality to delete a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OauthSecurityApplications
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = "id_example"; // string | ID for the user to be deleted.

try {
    $result = $api_instance->userDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID for the user to be deleted. |

### Return type

[**\Swagger\Client\Model\Success**](../Model/Success.md)

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

