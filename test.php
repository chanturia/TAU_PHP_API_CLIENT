<?php
require_once(__DIR__ . '/autoload.php');

$arrayCredentials = array('email'=>'test-postman@test.com', 'password'=>'test');

$apiClient = new ApiClient();
$apiClient->getConfig()->setHost('localhost:8080');//TODO check
$api_instance = new Swagger\Client\Api\UsersApi($apiClient);

$login_credentials = new \Swagger\Client\Model\LoginCredentials($arrayCredentials); 
// \Swagger\Client\Model\LoginCredentials | The user credentials consisting of email as username and password. Also Facebook ID or Google ID if the User is performing login with Social Networks.

try {
    $result = $api_instance->loginUser($login_credentials);
    
    echo $result;
    //print_r($result);
    //var_dump($result);

    echo '<br/>';
    echo '<br/>';
    echo '<br/>';
    echo '<br/>';

   
    echo $result->getId();
    echo '<br/>';

    echo $result->getEmail();
    echo '<br/>';

    echo $result->getLastName();
    echo '<br/>';

    echo $result->getMobile();
    echo '<br/>';

} catch (Exception $e) {
    echo 'Exception when calling UsersApi->loginUser: ', $e->getMessage(), PHP_EOL;
}




?>

