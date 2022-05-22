# Swagger\Client\I18nApi

All URIs are relative to */control*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeLanguage**](I18nApi.md#changelanguage) | **POST** /i18n/change_language | Change current language.  Argument must be an ISO 639-1 two-letter code.
[**currentLanguage**](I18nApi.md#currentlanguage) | **GET** /i18n/current_language | Get currently set language.  Result is ISO 639-1 two-letter code.  Empty result means default language.

# **changeLanguage**
> changeLanguage($body)

Change current language.  Argument must be an ISO 639-1 two-letter code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\I18nApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | New language.  It must be known to the server and must be an ISO 639-1 two-letter code.


try {
    $apiInstance->changeLanguage($body);
} catch (Exception $e) {
    echo 'Exception when calling I18nApi->changeLanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| New language.  It must be known to the server and must be an ISO 639-1 two-letter code.
 | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currentLanguage**
> currentLanguage()

Get currently set language.  Result is ISO 639-1 two-letter code.  Empty result means default language.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\I18nApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->currentLanguage();
} catch (Exception $e) {
    echo 'Exception when calling I18nApi->currentLanguage: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

