# EndpointLinks

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rest_interactive** | **string** | The REST endpoint for short requests up to 15 seconds. | [optional] 
**rest_conversation** | **string** | The REST endpoint for requests up to 60 seconds. | [optional] 
**rest_dictation** | **string** | The REST endpoint for requests up to 60 seconds, supporting dictation of punctuation marks. | [optional] 
**web_socket_interactive** | **string** | The Speech SDK endpoint for short requests up to 15 seconds with a single final result. | [optional] 
**web_socket_conversation** | **string** | The Speech SDK endpoint for long requests with multiple final results. | [optional] 
**web_socket_dictation** | **string** | The Speech SDK endpoint for long requests with multiple final results, supporting dictation of  punctuation marks. | [optional] 
**logs** | **string** | The audio and transcription logs for this endpoint.  See operation \&quot;Endpoints_ListLogs\&quot; for more details. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


