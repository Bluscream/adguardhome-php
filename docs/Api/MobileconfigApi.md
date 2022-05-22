# Swagger\Client\MobileconfigApi

All URIs are relative to */control*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mobileConfigDoH**](MobileconfigApi.md#mobileconfigdoh) | **GET** /apple/doh.mobileconfig | Get DNS over HTTPS .mobileconfig.
[**mobileConfigDoT**](MobileconfigApi.md#mobileconfigdot) | **GET** /apple/dot.mobileconfig | Get DNS over TLS .mobileconfig.

# **mobileConfigDoH**
> mobileConfigDoH($host, $client_id)

Get DNS over HTTPS .mobileconfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MobileconfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$host = "host_example"; // string | Host for which the config is generated.  If no host is provided, `tls.server_name` from the configuration file is used.  If `tls.server_name` is not set, the API returns an error with a 500 status.
$client_id = "client_id_example"; // string | ClientID.

try {
    $apiInstance->mobileConfigDoH($host, $client_id);
} catch (Exception $e) {
    echo 'Exception when calling MobileconfigApi->mobileConfigDoH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **host** | **string**| Host for which the config is generated.  If no host is provided, &#x60;tls.server_name&#x60; from the configuration file is used.  If &#x60;tls.server_name&#x60; is not set, the API returns an error with a 500 status. |
 **client_id** | **string**| ClientID. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mobileConfigDoT**
> mobileConfigDoT($host, $client_id)

Get DNS over TLS .mobileconfig.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\MobileconfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$host = "host_example"; // string | Host for which the config is generated.  If no host is provided, `tls.server_name` from the configuration file is used.  If `tls.server_name` is not set, the API returns an error with a 500 status.
$client_id = "client_id_example"; // string | ClientID.

try {
    $apiInstance->mobileConfigDoT($host, $client_id);
} catch (Exception $e) {
    echo 'Exception when calling MobileconfigApi->mobileConfigDoT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **host** | **string**| Host for which the config is generated.  If no host is provided, &#x60;tls.server_name&#x60; from the configuration file is used.  If &#x60;tls.server_name&#x60; is not set, the API returns an error with a 500 status. |
 **client_id** | **string**| ClientID. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

