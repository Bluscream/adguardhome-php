# QueryLogItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**answer** | [**\Swagger\Client\Model\DnsAnswer[]**](DnsAnswer.md) |  | [optional] 
**original_answer** | [**\Swagger\Client\Model\DnsAnswer[]**](DnsAnswer.md) | Answer from upstream server (optional) | [optional] 
**cached** | **bool** | Defines if the response has been served from cache. | [optional] 
**upstream** | **string** | Upstream URL starting with tcp://, tls://, https://, or with an IP address. | [optional] 
**answer_dnssec** | **bool** | If true, the response had the Authenticated Data (AD) flag set. | [optional] 
**client** | **string** | The client&#x27;s IP address. | [optional] 
**client_id** | **string** | The ClientID, if provided in DoH, DoQ, or DoT. | [optional] 
**client_info** | [**\Swagger\Client\Model\QueryLogItemClient**](QueryLogItemClient.md) |  | [optional] 
**client_proto** | **string** |  | [optional] 
**ecs** | **string** | The IP network defined by an EDNS Client-Subnet option in the request message if any. | [optional] 
**elapsed_ms** | **string** |  | [optional] 
**question** | [**\Swagger\Client\Model\DnsQuestion**](DnsQuestion.md) |  | [optional] 
**filter_id** | **int** | In case if there&#x27;s a rule applied to this DNS request, this is ID of the filter list that the rule belongs to. Deprecated: use &#x60;rules[*].filter_list_id&#x60; instead. | [optional] 
**rule** | **string** | Filtering rule applied to the request (if any). Deprecated: use &#x60;rules[*].text&#x60; instead. | [optional] 
**rules** | [**\Swagger\Client\Model\ResultRule[]**](ResultRule.md) | Applied rules. | [optional] 
**reason** | **string** | Request filtering status. | [optional] 
**service_name** | **string** | Set if reason&#x3D;FilteredBlockedService | [optional] 
**status** | **string** | DNS response status | [optional] 
**time** | **string** | DNS request processing start time | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

