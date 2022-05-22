# DNSConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bootstrap_dns** | **string[]** | Bootstrap servers, port is optional after colon.  Empty value will reset it to default values. | [optional] 
**upstream_dns** | **string[]** | Upstream servers, port is optional after colon.  Empty value will reset it to default values. | [optional] 
**upstream_dns_file** | **string** |  | [optional] 
**protection_enabled** | **bool** |  | [optional] 
**dhcp_available** | **bool** |  | [optional] 
**ratelimit** | **int** |  | [optional] 
**blocking_mode** | **string** |  | [optional] 
**blocking_ipv4** | **string** |  | [optional] 
**blocking_ipv6** | **string** |  | [optional] 
**edns_cs_enabled** | **bool** |  | [optional] 
**disable_ipv6** | **bool** |  | [optional] 
**dnssec_enabled** | **bool** |  | [optional] 
**cache_size** | **int** |  | [optional] 
**cache_ttl_min** | **int** |  | [optional] 
**cache_ttl_max** | **int** |  | [optional] 
**cache_optimistic** | **bool** |  | [optional] 
**upstream_mode** | **string** |  | [optional] 
**use_private_ptr_resolvers** | **bool** |  | [optional] 
**resolve_clients** | **bool** |  | [optional] 
**local_ptr_upstreams** | **string[]** | Upstream servers, port is optional after colon.  Empty value will reset it to default values. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

