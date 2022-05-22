# ClientFindSubEntry

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name | [optional] 
**ids** | **string[]** | IP, CIDR, MAC, or ClientID. | [optional] 
**use_global_settings** | **bool** |  | [optional] 
**filtering_enabled** | **bool** |  | [optional] 
**parental_enabled** | **bool** |  | [optional] 
**safebrowsing_enabled** | **bool** |  | [optional] 
**safesearch_enabled** | **bool** |  | [optional] 
**use_global_blocked_services** | **bool** |  | [optional] 
**blocked_services** | **string[]** |  | [optional] 
**upstreams** | **string[]** |  | [optional] 
**whois_info** | [**\Swagger\Client\Model\WhoisInfo**](WhoisInfo.md) |  | [optional] 
**disallowed** | **bool** | Whether the client&#x27;s IP is blocked or not. | [optional] 
**disallowed_rule** | **string** | The rule due to which the client is disallowed.  If disallowed is set to true, and this string is empty, then the client IP is disallowed by the \&quot;allowed IP list\&quot;, that is it is not included in the allowed list. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

