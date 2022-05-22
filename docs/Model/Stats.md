# Stats

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time_units** | **string** | Time units | [optional] 
**num_dns_queries** | **int** | Total number of DNS queries | [optional] 
**num_blocked_filtering** | **int** | Number of requests blocked by filtering rules | [optional] 
**num_replaced_safebrowsing** | **int** | Number of requests blocked by safebrowsing module | [optional] 
**num_replaced_safesearch** | **int** | Number of requests blocked by safesearch module | [optional] 
**num_replaced_parental** | **int** | Number of blocked adult websites | [optional] 
**avg_processing_time** | **float** | Average time in milliseconds on processing a DNS | [optional] 
**top_queried_domains** | [**\Swagger\Client\Model\TopArrayEntry[]**](TopArrayEntry.md) |  | [optional] 
**top_clients** | [**\Swagger\Client\Model\TopArrayEntry[]**](TopArrayEntry.md) |  | [optional] 
**top_blocked_domains** | [**\Swagger\Client\Model\TopArrayEntry[]**](TopArrayEntry.md) |  | [optional] 
**dns_queries** | **int[]** |  | [optional] 
**blocked_filtering** | **int[]** |  | [optional] 
**replaced_safebrowsing** | **int[]** |  | [optional] 
**replaced_parental** | **int[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

