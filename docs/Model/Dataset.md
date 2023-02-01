# Dataset

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Swagger\Client\Model\DatasetLinks**](DatasetLinks.md) |  | [optional] 
**properties** | [**\Swagger\Client\Model\DatasetProperties**](DatasetProperties.md) |  | [optional] 
**kind** | [**\Swagger\Client\Model\DatasetKind**](DatasetKind.md) |  | 
**self** | **string** | The location of this entity. | [optional] 
**display_name** | **string** | The display name of the object. | 
**description** | **string** | The description of the object. | [optional] 
**project** | [**\Swagger\Client\Model\EntityReference**](EntityReference.md) |  | [optional] 
**content_url** | **string** | The URL of the data for the dataset. | [optional] 
**custom_properties** | **map[string,string]** | The custom properties of this entity. The maximum allowed key length is 64 characters, the maximum  allowed value length is 256 characters and the count of allowed entries is 10. | [optional] 
**locale** | **string** | The locale of the contained data. | 
**last_action_date_time** | [**\DateTime**](\DateTime.md) | The time-stamp when the current status was entered.  The time stamp is encoded as ISO 8601 date and time format  (\&quot;YYYY-MM-DDThh:mm:ssZ\&quot;, see https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations). | [optional] 
**status** | [**\Swagger\Client\Model\Status**](Status.md) |  | [optional] 
**created_date_time** | [**\DateTime**](\DateTime.md) | The time-stamp when the object was created.  The time stamp is encoded as ISO 8601 date and time format  (\&quot;YYYY-MM-DDThh:mm:ssZ\&quot;, see https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


