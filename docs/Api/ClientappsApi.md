# Swagger\Client\ClientappsApi

All URIs are relative to *http://api.trustanduse.com/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClientApplication**](ClientappsApi.md#createClientApplication) | **POST** /clientapp | 
[**generateAccessTokenForClientApp**](ClientappsApi.md#generateAccessTokenForClientApp) | **POST** /clientapp/generateAccessToken | 
[**getClientAppDetails**](ClientappsApi.md#getClientAppDetails) | **GET** /clientapp/{id} | 


# **createClientApplication**
> \Swagger\Client\Model\ClientApplicationID createClientApplication($createClientAppParameters)



Creates a new Client Application based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ClientappsApi();
$createClientAppParameters = new \Swagger\Client\Model\CreateClientAppParameters(); // \Swagger\Client\Model\CreateClientAppParameters | Client Application parameters including client name and client secret

try {
    $result = $api_instance->createClientApplication($createClientAppParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientappsApi->createClientApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createClientAppParameters** | [**\Swagger\Client\Model\CreateClientAppParameters**](../Model/\Swagger\Client\Model\CreateClientAppParameters.md)| Client Application parameters including client name and client secret |

### Return type

[**\Swagger\Client\Model\ClientApplicationID**](../Model/ClientApplicationID.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateAccessTokenForClientApp**
> \Swagger\Client\Model\ClientAppAccessToken generateAccessTokenForClientApp($generateAccessTokenClientAppParameters)



Generates an AccessToken for a Client Application based on posted parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ClientappsApi();
$generateAccessTokenClientAppParameters = new \Swagger\Client\Model\GenerateAccessTokenClientAppParameters(); // \Swagger\Client\Model\GenerateAccessTokenClientAppParameters | Client Application parameters including client name and client secret

try {
    $result = $api_instance->generateAccessTokenForClientApp($generateAccessTokenClientAppParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientappsApi->generateAccessTokenForClientApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generateAccessTokenClientAppParameters** | [**\Swagger\Client\Model\GenerateAccessTokenClientAppParameters**](../Model/\Swagger\Client\Model\GenerateAccessTokenClientAppParameters.md)| Client Application parameters including client name and client secret |

### Return type

[**\Swagger\Client\Model\ClientAppAccessToken**](../Model/ClientAppAccessToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientAppDetails**
> \Swagger\Client\Model\ClientApplication getClientAppDetails($id)



Finds the details for a client application by provided client application id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ClientappsApi();
$id = "id_example"; // string | Client application ID to find the details for.

try {
    $result = $api_instance->getClientAppDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientappsApi->getClientAppDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Client application ID to find the details for. |

### Return type

[**\Swagger\Client\Model\ClientApplication**](../Model/ClientApplication.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

