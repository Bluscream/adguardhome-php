# Swagger\Client\InstallApi

All URIs are relative to */control*

Method | HTTP request | Description
------------- | ------------- | -------------
[**installCheckConfig**](InstallApi.md#installcheckconfig) | **POST** /install/check_config | Checks configuration
[**installCheckConfigBeta**](InstallApi.md#installcheckconfigbeta) | **POST** /install/check_config_beta | &#x27;UNSTABLE!: Checks configuration&#x27;
[**installConfigure**](InstallApi.md#installconfigure) | **POST** /install/configure | Applies the initial configuration.
[**installConfigureBeta**](InstallApi.md#installconfigurebeta) | **POST** /install/configure_beta | &#x27;UNSTABLE!: Applies the initial configuration.&#x27;
[**installGetAddresses**](InstallApi.md#installgetaddresses) | **GET** /install/get_addresses | Gets the network interfaces information.
[**installGetAddressesBeta**](InstallApi.md#installgetaddressesbeta) | **GET** /install/get_addresses_beta | &#x27;UNSTABLE!: Gets the network interfaces information.&#x27;

# **installCheckConfig**
> \Swagger\Client\Model\CheckConfigResponse installCheckConfig($body)

Checks configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CheckConfigRequest(); // \Swagger\Client\Model\CheckConfigRequest | Configuration to be checked

try {
    $result = $apiInstance->installCheckConfig($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->installCheckConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CheckConfigRequest**](../Model/CheckConfigRequest.md)| Configuration to be checked |

### Return type

[**\Swagger\Client\Model\CheckConfigResponse**](../Model/CheckConfigResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installCheckConfigBeta**
> \Swagger\Client\Model\CheckConfigResponse installCheckConfigBeta($body)

'UNSTABLE!: Checks configuration'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CheckConfigRequestBeta(); // \Swagger\Client\Model\CheckConfigRequestBeta | Configuration to be checked

try {
    $result = $apiInstance->installCheckConfigBeta($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->installCheckConfigBeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CheckConfigRequestBeta**](../Model/CheckConfigRequestBeta.md)| Configuration to be checked |

### Return type

[**\Swagger\Client\Model\CheckConfigResponse**](../Model/CheckConfigResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installConfigure**
> installConfigure($body)

Applies the initial configuration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\InitialConfiguration(); // \Swagger\Client\Model\InitialConfiguration | Initial configuration JSON

try {
    $apiInstance->installConfigure($body);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->installConfigure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InitialConfiguration**](../Model/InitialConfiguration.md)| Initial configuration JSON |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installConfigureBeta**
> installConfigureBeta($body)

'UNSTABLE!: Applies the initial configuration.'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\InitialConfigurationBeta(); // \Swagger\Client\Model\InitialConfigurationBeta | Initial configuration JSON

try {
    $apiInstance->installConfigureBeta($body);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->installConfigureBeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\InitialConfigurationBeta**](../Model/InitialConfigurationBeta.md)| Initial configuration JSON |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installGetAddresses**
> \Swagger\Client\Model\AddressesInfo installGetAddresses()

Gets the network interfaces information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->installGetAddresses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->installGetAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AddressesInfo**](../Model/AddressesInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **installGetAddressesBeta**
> \Swagger\Client\Model\AddressesInfoBeta installGetAddressesBeta()

'UNSTABLE!: Gets the network interfaces information.'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->installGetAddressesBeta();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->installGetAddressesBeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AddressesInfoBeta**](../Model/AddressesInfoBeta.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

