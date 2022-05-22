# Swagger\Client\LogApi

All URIs are relative to */control*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queryLog**](LogApi.md#querylog) | **GET** /querylog | Get DNS server query log.
[**queryLogConfig**](LogApi.md#querylogconfig) | **POST** /querylog_config | Set query log parameters
[**queryLogInfo**](LogApi.md#queryloginfo) | **GET** /querylog_info | Get query log parameters
[**querylogClear**](LogApi.md#querylogclear) | **POST** /querylog_clear | Clear query log

# **queryLog**
> \Swagger\Client\Model\QueryLog queryLog($older_than, $offset, $limit, $search, $response_status)

Get DNS server query log.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$older_than = "older_than_example"; // string | Filter by older than
$offset = 56; // int | Specify the ranking number of the first item on the page.  Even though it is possible to use \"offset\" and \"older_than\", we recommend choosing one of them and sticking to it.
$limit = 56; // int | Limit the number of records to be returned
$search = "search_example"; // string | Filter by domain name or client IP
$response_status = "response_status_example"; // string | Filter by response status

try {
    $result = $apiInstance->queryLog($older_than, $offset, $limit, $search, $response_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->queryLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **older_than** | **string**| Filter by older than | [optional]
 **offset** | **int**| Specify the ranking number of the first item on the page.  Even though it is possible to use \&quot;offset\&quot; and \&quot;older_than\&quot;, we recommend choosing one of them and sticking to it. | [optional]
 **limit** | **int**| Limit the number of records to be returned | [optional]
 **search** | **string**| Filter by domain name or client IP | [optional]
 **response_status** | **string**| Filter by response status | [optional]

### Return type

[**\Swagger\Client\Model\QueryLog**](../Model/QueryLog.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryLogConfig**
> queryLogConfig($body)

Set query log parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\QueryLogConfig(); // \Swagger\Client\Model\QueryLogConfig | 

try {
    $apiInstance->queryLogConfig($body);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->queryLogConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\QueryLogConfig**](../Model/QueryLogConfig.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryLogInfo**
> \Swagger\Client\Model\QueryLogConfig queryLogInfo()

Get query log parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->queryLogInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogApi->queryLogInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\QueryLogConfig**](../Model/QueryLogConfig.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **querylogClear**
> querylogClear()

Clear query log

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\LogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->querylogClear();
} catch (Exception $e) {
    echo 'Exception when calling LogApi->querylogClear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

