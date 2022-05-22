# TlsConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | enabled is the encryption (DoT/DoH/HTTPS) status | [optional] 
**server_name** | **string** | server_name is the hostname of your HTTPS/TLS server | [optional] 
**force_https** | **bool** | if true, forces HTTP-&gt;HTTPS redirect | [optional] 
**port_https** | **int** | HTTPS port. If 0, HTTPS will be disabled. | [optional] 
**port_dns_over_tls** | **int** | DNS-over-TLS port. If 0, DoT will be disabled. | [optional] 
**port_dns_over_quic** | **int** | DNS-over-QUIC port. If 0, DoQ will be disabled. | [optional] 
**certificate_chain** | **string** | Base64 string with PEM-encoded certificates chain | [optional] 
**private_key** | **string** | Base64 string with PEM-encoded private key | [optional] 
**private_key_saved** | **bool** | Set to true if the user has previously saved a private key as a string.  This is used so that the server and the client don&#x27;t have to send the private key between each other every time, which might lead to security issues. | [optional] 
**certificate_path** | **string** | Path to certificate file | [optional] 
**private_key_path** | **string** | Path to private key file | [optional] 
**valid_cert** | **bool** | Set to true if the specified certificates chain is a valid chain of X509 certificates. | [optional] 
**valid_chain** | **bool** | Set to true if the specified certificates chain is verified and issued by a known CA. | [optional] 
**subject** | **string** | The subject of the first certificate in the chain. | [optional] 
**issuer** | **string** | The issuer of the first certificate in the chain. | [optional] 
**not_before** | **string** | The NotBefore field of the first certificate in the chain. | [optional] 
**not_after** | **string** | The NotAfter field of the first certificate in the chain. | [optional] 
**dns_names** | **string[]** | The value of SubjectAltNames field of the first certificate in the chain. | [optional] 
**valid_key** | **bool** | Set to true if the key is a valid private key. | [optional] 
**key_type** | **string** | Key type. | [optional] 
**warning_validation** | **string** | A validation warning message with the issue description. | [optional] 
**valid_pair** | **bool** | Set to true if both certificate and private key are correct. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

