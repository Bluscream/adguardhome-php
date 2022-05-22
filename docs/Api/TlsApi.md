# Swagger\Client\TlsApi

All URIs are relative to */control*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tlsConfigure**](TlsApi.md#tlsconfigure) | **POST** /tls/configure | Updates current TLS configuration
[**tlsStatus**](TlsApi.md#tlsstatus) | **GET** /tls/status | Returns TLS configuration and its status
[**tlsValidate**](TlsApi.md#tlsvalidate) | **POST** /tls/validate | Checks if the current TLS configuration is valid

# **tlsConfigure**
> \Swagger\Client\Model\TlsConfig tlsConfigure($body)

Updates current TLS configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TlsConfig(); // \Swagger\Client\Model\TlsConfig | TLS configuration JSON

try {
    $result = $apiInstance->tlsConfigure($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsApi->tlsConfigure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TlsConfig**](../Model/TlsConfig.md)| TLS configuration JSON |

### Return type

[**\Swagger\Client\Model\TlsConfig**](../Model/TlsConfig.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tlsStatus**
> \Swagger\Client\Model\TlsConfig tlsStatus()

Returns TLS configuration and its status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tlsStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsApi->tlsStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TlsConfig**](../Model/TlsConfig.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tlsValidate**
> \Swagger\Client\Model\TlsConfig tlsValidate($body)

Checks if the current TLS configuration is valid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\TlsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TlsConfig(); // \Swagger\Client\Model\TlsConfig | TLS configuration JSON

try {
    $result = $apiInstance->tlsValidate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TlsApi->tlsValidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TlsConfig**](../Model/TlsConfig.md)| TLS configuration JSON |

### Return type

[**\Swagger\Client\Model\TlsConfig**](../Model/TlsConfig.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

