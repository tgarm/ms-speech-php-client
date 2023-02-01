# CustomModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project** | [**\Swagger\Client\Model\EntityReference**](EntityReference.md) |  | [optional] 
**links** | [**\Swagger\Client\Model\CustomModelLinks**](CustomModelLinks.md) |  | [optional] 
**properties** | [**\Swagger\Client\Model\CustomModelProperties**](CustomModelProperties.md) |  | [optional] 
**text** | **string** | The text used to adapt this language model. | [optional] 
**base_model** | [**\Swagger\Client\Model\EntityReference**](EntityReference.md) |  | [optional] 
**datasets** | [**\Swagger\Client\Model\EntityReference[]**](EntityReference.md) | Datasets used for adaptation. | [optional] 
**custom_properties** | **map[string,string]** | The custom properties of this entity. The maximum allowed key length is 64 characters, the maximum  allowed value length is 256 characters and the count of allowed entries is 10. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


