# FilterCheckHostResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | Request filtering status. | [optional] 
**filter_id** | **int** | In case if there&#x27;s a rule applied to this DNS request, this is ID of the filter list that the rule belongs to. Deprecated: use &#x60;rules[*].filter_list_id&#x60; instead. | [optional] 
**rule** | **string** | Filtering rule applied to the request (if any). Deprecated: use &#x60;rules[*].text&#x60; instead. | [optional] 
**rules** | [**\Swagger\Client\Model\ResultRule[]**](ResultRule.md) | Applied rules. | [optional] 
**service_name** | **string** | Set if reason&#x3D;FilteredBlockedService | [optional] 
**cname** | **string** | Set if reason&#x3D;Rewrite | [optional] 
**ip_addrs** | **string[]** | Set if reason&#x3D;Rewrite | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

