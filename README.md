# SwaggerClient-php
Speech Services API v3.1.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v3.1
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://docs.microsoft.com/azure/cognitive-services/speech-service/support](https://docs.microsoft.com/azure/cognitive-services/speech-service/support)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');
// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CustomSpeechDatasetsForModelAdaptationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | The identifier of the dataset.
$block_list = array(new \Swagger\Client\Model\CommitBlocksEntry()); // \Swagger\Client\Model\CommitBlocksEntry[] | The list of blocks that compile the dataset.

try {
    $apiInstance->datasetsCommitBlocks($id, $block_list);
} catch (Exception $e) {
    echo 'Exception when calling CustomSpeechDatasetsForModelAdaptationApi->datasetsCommitBlocks: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsCommitBlocks**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetscommitblocks) | **POST** /datasets/{id}/blocks:commit | Commit block list to complete the upload of the dataset.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsCreate**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetscreate) | **POST** /datasets | Uploads and creates a new dataset by getting the data from a specified URL or starts waiting for data blocks to be uploaded.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsDelete**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetsdelete) | **DELETE** /datasets/{id} | Deletes the specified dataset.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsGet**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetsget) | **GET** /datasets/{id} | Gets the dataset identified by the given ID.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsGetBlocks**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetsgetblocks) | **GET** /datasets/{id}/blocks | Gets the list of uploaded blocks for this dataset.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsGetFile**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetsgetfile) | **GET** /datasets/{id}/files/{fileId} | Gets one specific file (identified with fileId) from a dataset (identified with id).
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsList**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetslist) | **GET** /datasets | Gets a list of datasets for the authenticated subscription.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsListFiles**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetslistfiles) | **GET** /datasets/{id}/files | Gets the files of the dataset identified by the given ID.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsListSupportedLocales**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetslistsupportedlocales) | **GET** /datasets/locales | Gets a list of supported locales for datasets.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsUpdate**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetsupdate) | **PATCH** /datasets/{id} | Updates the mutable details of the dataset identified by its ID.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsUpload**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetsupload) | **POST** /datasets/upload | Uploads data and creates a new dataset.
*CustomSpeechDatasetsForModelAdaptationApi* | [**datasetsUploadBlock**](docs/Api/CustomSpeechDatasetsForModelAdaptationApi.md#datasetsuploadblock) | **PUT** /datasets/{id}/blocks | Upload a block of data for the dataset. The maximum size of the block is 8MiB.
*CustomSpeechEndpointsApi* | [**endpointsCreate**](docs/Api/CustomSpeechEndpointsApi.md#endpointscreate) | **POST** /endpoints | Creates a new endpoint.
*CustomSpeechEndpointsApi* | [**endpointsDelete**](docs/Api/CustomSpeechEndpointsApi.md#endpointsdelete) | **DELETE** /endpoints/{id} | Deletes the endpoint identified by the given ID.
*CustomSpeechEndpointsApi* | [**endpointsDeleteBaseModelLog**](docs/Api/CustomSpeechEndpointsApi.md#endpointsdeletebasemodellog) | **DELETE** /endpoints/base/{locale}/files/logs/{logId} | Deletes one audio or transcription log that have been stored when using the default base model of a given language.
*CustomSpeechEndpointsApi* | [**endpointsDeleteBaseModelLogs**](docs/Api/CustomSpeechEndpointsApi.md#endpointsdeletebasemodellogs) | **DELETE** /endpoints/base/{locale}/files/logs | Deletes the specified audio and transcription logs that have been stored when using the default base model of a given language. It deletes all logs before (and including) a specific day.
*CustomSpeechEndpointsApi* | [**endpointsDeleteLog**](docs/Api/CustomSpeechEndpointsApi.md#endpointsdeletelog) | **DELETE** /endpoints/{id}/files/logs/{logId} | Deletes one audio or transcription log that have been stored for a given endpoint.
*CustomSpeechEndpointsApi* | [**endpointsDeleteLogs**](docs/Api/CustomSpeechEndpointsApi.md#endpointsdeletelogs) | **DELETE** /endpoints/{id}/files/logs | Deletes the specified audio and transcription logs that have been stored for a given endpoint. It deletes all logs before (and including) a specific day.
*CustomSpeechEndpointsApi* | [**endpointsGet**](docs/Api/CustomSpeechEndpointsApi.md#endpointsget) | **GET** /endpoints/{id} | Gets the endpoint identified by the given ID.
*CustomSpeechEndpointsApi* | [**endpointsGetBaseModelLog**](docs/Api/CustomSpeechEndpointsApi.md#endpointsgetbasemodellog) | **GET** /endpoints/base/{locale}/files/logs/{logId} | Gets a specific audio or transcription log for the default base model in a given language.
*CustomSpeechEndpointsApi* | [**endpointsGetLog**](docs/Api/CustomSpeechEndpointsApi.md#endpointsgetlog) | **GET** /endpoints/{id}/files/logs/{logId} | Gets a specific audio or transcription log for a given endpoint.
*CustomSpeechEndpointsApi* | [**endpointsList**](docs/Api/CustomSpeechEndpointsApi.md#endpointslist) | **GET** /endpoints | Gets the list of endpoints for the authenticated subscription.
*CustomSpeechEndpointsApi* | [**endpointsListBaseModelLogs**](docs/Api/CustomSpeechEndpointsApi.md#endpointslistbasemodellogs) | **GET** /endpoints/base/{locale}/files/logs | Gets the list of audio and transcription logs that have been stored when using the default base model of a given language.
*CustomSpeechEndpointsApi* | [**endpointsListLogs**](docs/Api/CustomSpeechEndpointsApi.md#endpointslistlogs) | **GET** /endpoints/{id}/files/logs | Gets the list of audio and transcription logs that have been stored for a given endpoint.
*CustomSpeechEndpointsApi* | [**endpointsListSupportedLocales**](docs/Api/CustomSpeechEndpointsApi.md#endpointslistsupportedlocales) | **GET** /endpoints/locales | Gets a list of supported locales for endpoint creations.
*CustomSpeechEndpointsApi* | [**endpointsUpdate**](docs/Api/CustomSpeechEndpointsApi.md#endpointsupdate) | **PATCH** /endpoints/{id} | Updates the metadata of the endpoint identified by the given ID.
*CustomSpeechModelEvaluationsApi* | [**evaluationsCreate**](docs/Api/CustomSpeechModelEvaluationsApi.md#evaluationscreate) | **POST** /evaluations | Creates a new evaluation.
*CustomSpeechModelEvaluationsApi* | [**evaluationsDelete**](docs/Api/CustomSpeechModelEvaluationsApi.md#evaluationsdelete) | **DELETE** /evaluations/{id} | Deletes the evaluation identified by the given ID.
*CustomSpeechModelEvaluationsApi* | [**evaluationsGet**](docs/Api/CustomSpeechModelEvaluationsApi.md#evaluationsget) | **GET** /evaluations/{id} | Gets the evaluation identified by the given ID.
*CustomSpeechModelEvaluationsApi* | [**evaluationsGetFile**](docs/Api/CustomSpeechModelEvaluationsApi.md#evaluationsgetfile) | **GET** /evaluations/{id}/files/{fileId} | Gets one specific file (identified with fileId) from an evaluation (identified with id).
*CustomSpeechModelEvaluationsApi* | [**evaluationsList**](docs/Api/CustomSpeechModelEvaluationsApi.md#evaluationslist) | **GET** /evaluations | Gets the list of evaluations for the authenticated subscription.
*CustomSpeechModelEvaluationsApi* | [**evaluationsListFiles**](docs/Api/CustomSpeechModelEvaluationsApi.md#evaluationslistfiles) | **GET** /evaluations/{id}/files | Gets the files of the evaluation identified by the given ID.
*CustomSpeechModelEvaluationsApi* | [**evaluationsListSupportedLocales**](docs/Api/CustomSpeechModelEvaluationsApi.md#evaluationslistsupportedlocales) | **GET** /evaluations/locales | Gets a list of supported locales for evaluations.
*CustomSpeechModelEvaluationsApi* | [**evaluationsUpdate**](docs/Api/CustomSpeechModelEvaluationsApi.md#evaluationsupdate) | **PATCH** /evaluations/{id} | Updates the mutable details of the evaluation identified by its id.
*CustomSpeechModelsApi* | [**modelsCopyTo**](docs/Api/CustomSpeechModelsApi.md#modelscopyto) | **POST** /models/{id}:copyto | Copies a model from one subscription to another.
*CustomSpeechModelsApi* | [**modelsCreate**](docs/Api/CustomSpeechModelsApi.md#modelscreate) | **POST** /models | Creates a new model.
*CustomSpeechModelsApi* | [**modelsDelete**](docs/Api/CustomSpeechModelsApi.md#modelsdelete) | **DELETE** /models/{id} | Deletes the model identified by the given ID.
*CustomSpeechModelsApi* | [**modelsGetBaseModel**](docs/Api/CustomSpeechModelsApi.md#modelsgetbasemodel) | **GET** /models/base/{id} | Gets the base model identified by the given ID.
*CustomSpeechModelsApi* | [**modelsGetBaseModelManifest**](docs/Api/CustomSpeechModelsApi.md#modelsgetbasemodelmanifest) | **GET** /models/base/{id}/manifest | Returns an manifest for this base model which can be used in an on-premise container.
*CustomSpeechModelsApi* | [**modelsGetCustomModel**](docs/Api/CustomSpeechModelsApi.md#modelsgetcustommodel) | **GET** /models/{id} | Gets the model identified by the given ID.
*CustomSpeechModelsApi* | [**modelsGetCustomModelManifest**](docs/Api/CustomSpeechModelsApi.md#modelsgetcustommodelmanifest) | **GET** /models/{id}/manifest | Returns an manifest for this model which can be used in an on-premise container.
*CustomSpeechModelsApi* | [**modelsGetFile**](docs/Api/CustomSpeechModelsApi.md#modelsgetfile) | **GET** /models/{id}/files/{fileId} | Gets one specific file (identified with fileId) from a model (identified with id).
*CustomSpeechModelsApi* | [**modelsListBaseModels**](docs/Api/CustomSpeechModelsApi.md#modelslistbasemodels) | **GET** /models/base | Gets the list of base models for the authenticated subscription.
*CustomSpeechModelsApi* | [**modelsListCustomModels**](docs/Api/CustomSpeechModelsApi.md#modelslistcustommodels) | **GET** /models | Gets the list of custom models for the authenticated subscription.
*CustomSpeechModelsApi* | [**modelsListFiles**](docs/Api/CustomSpeechModelsApi.md#modelslistfiles) | **GET** /models/{id}/files | Gets the files of the model identified by the given ID.
*CustomSpeechModelsApi* | [**modelsListSupportedLocales**](docs/Api/CustomSpeechModelsApi.md#modelslistsupportedlocales) | **GET** /models/locales | Gets a list of supported locales for model adaptation.
*CustomSpeechModelsApi* | [**modelsUpdate**](docs/Api/CustomSpeechModelsApi.md#modelsupdate) | **PATCH** /models/{id} | Updates the metadata of the model identified by the given ID.
*CustomSpeechProjectsApi* | [**projectsCreate**](docs/Api/CustomSpeechProjectsApi.md#projectscreate) | **POST** /projects | Creates a new project.
*CustomSpeechProjectsApi* | [**projectsDelete**](docs/Api/CustomSpeechProjectsApi.md#projectsdelete) | **DELETE** /projects/{id} | Deletes the project identified by the given ID.
*CustomSpeechProjectsApi* | [**projectsGet**](docs/Api/CustomSpeechProjectsApi.md#projectsget) | **GET** /projects/{id} | Gets the project identified by the given ID.
*CustomSpeechProjectsApi* | [**projectsList**](docs/Api/CustomSpeechProjectsApi.md#projectslist) | **GET** /projects | Gets the list of projects for the authenticated subscription.
*CustomSpeechProjectsApi* | [**projectsListDatasets**](docs/Api/CustomSpeechProjectsApi.md#projectslistdatasets) | **GET** /projects/{id}/datasets | Gets the list of datasets for specified project.
*CustomSpeechProjectsApi* | [**projectsListEndpoints**](docs/Api/CustomSpeechProjectsApi.md#projectslistendpoints) | **GET** /projects/{id}/endpoints | Gets the list of endpoints for specified project.
*CustomSpeechProjectsApi* | [**projectsListEvaluations**](docs/Api/CustomSpeechProjectsApi.md#projectslistevaluations) | **GET** /projects/{id}/evaluations | Gets the list of evaluations for specified project.
*CustomSpeechProjectsApi* | [**projectsListModels**](docs/Api/CustomSpeechProjectsApi.md#projectslistmodels) | **GET** /projects/{id}/models | Gets the list of models for specified project.
*CustomSpeechProjectsApi* | [**projectsListSupportedLocales**](docs/Api/CustomSpeechProjectsApi.md#projectslistsupportedlocales) | **GET** /projects/locales | Gets the list of supported locales.
*CustomSpeechProjectsApi* | [**projectsListTranscriptions**](docs/Api/CustomSpeechProjectsApi.md#projectslisttranscriptions) | **GET** /projects/{id}/transcriptions | Gets the list of transcriptions for specified project.
*CustomSpeechProjectsApi* | [**projectsUpdate**](docs/Api/CustomSpeechProjectsApi.md#projectsupdate) | **PATCH** /projects/{id} | Updates the project identified by the given ID.
*CustomSpeechTranscriptionsApi* | [**transcriptionsCreate**](docs/Api/CustomSpeechTranscriptionsApi.md#transcriptionscreate) | **POST** /transcriptions | Creates a new transcription.
*CustomSpeechTranscriptionsApi* | [**transcriptionsDelete**](docs/Api/CustomSpeechTranscriptionsApi.md#transcriptionsdelete) | **DELETE** /transcriptions/{id} | Deletes the specified transcription task.
*CustomSpeechTranscriptionsApi* | [**transcriptionsGet**](docs/Api/CustomSpeechTranscriptionsApi.md#transcriptionsget) | **GET** /transcriptions/{id} | Gets the transcription identified by the given ID.
*CustomSpeechTranscriptionsApi* | [**transcriptionsGetFile**](docs/Api/CustomSpeechTranscriptionsApi.md#transcriptionsgetfile) | **GET** /transcriptions/{id}/files/{fileId} | Gets one specific file (identified with fileId) from a transcription (identified with id).
*CustomSpeechTranscriptionsApi* | [**transcriptionsList**](docs/Api/CustomSpeechTranscriptionsApi.md#transcriptionslist) | **GET** /transcriptions | Gets a list of transcriptions for the authenticated subscription.
*CustomSpeechTranscriptionsApi* | [**transcriptionsListFiles**](docs/Api/CustomSpeechTranscriptionsApi.md#transcriptionslistfiles) | **GET** /transcriptions/{id}/files | Gets the files of the transcription identified by the given ID.
*CustomSpeechTranscriptionsApi* | [**transcriptionsListSupportedLocales**](docs/Api/CustomSpeechTranscriptionsApi.md#transcriptionslistsupportedlocales) | **GET** /transcriptions/locales | Gets a list of supported locales for offline transcriptions.
*CustomSpeechTranscriptionsApi* | [**transcriptionsUpdate**](docs/Api/CustomSpeechTranscriptionsApi.md#transcriptionsupdate) | **PATCH** /transcriptions/{id} | Updates the mutable details of the transcription identified by its ID.
*CustomSpeechWebHooksApi* | [**webHooksCreate**](docs/Api/CustomSpeechWebHooksApi.md#webhookscreate) | **POST** /webhooks | Creates a new web hook.
*CustomSpeechWebHooksApi* | [**webHooksDelete**](docs/Api/CustomSpeechWebHooksApi.md#webhooksdelete) | **DELETE** /webhooks/{id} | Deletes the web hook identified by the given ID.
*CustomSpeechWebHooksApi* | [**webHooksGet**](docs/Api/CustomSpeechWebHooksApi.md#webhooksget) | **GET** /webhooks/{id} | Gets the web hook identified by the given ID.
*CustomSpeechWebHooksApi* | [**webHooksList**](docs/Api/CustomSpeechWebHooksApi.md#webhookslist) | **GET** /webhooks | Gets the list of web hooks for the authenticated subscription.
*CustomSpeechWebHooksApi* | [**webHooksPing**](docs/Api/CustomSpeechWebHooksApi.md#webhooksping) | **POST** /webhooks/{id}:ping | Sends a ping event to the registered URL.
*CustomSpeechWebHooksApi* | [**webHooksTest**](docs/Api/CustomSpeechWebHooksApi.md#webhookstest) | **POST** /webhooks/{id}:test | Sends a request for each registered event type to the registered URL.
*CustomSpeechWebHooksApi* | [**webHooksUpdate**](docs/Api/CustomSpeechWebHooksApi.md#webhooksupdate) | **PATCH** /webhooks/{id} | Updates the web hook identified by the given ID.
*ServiceHealthApi* | [**serviceHealthGet**](docs/Api/ServiceHealthApi.md#servicehealthget) | **GET** /healthstatus | Returns the overall health of the service and optionally of the different subcomponents.


## Documentation For Models

 - [BaseModel](docs/Model/BaseModel.md)
 - [BaseModelDeprecationDates](docs/Model/BaseModelDeprecationDates.md)
 - [BaseModelFeatures](docs/Model/BaseModelFeatures.md)
 - [BaseModelLinks](docs/Model/BaseModelLinks.md)
 - [BaseModelProperties](docs/Model/BaseModelProperties.md)
 - [BlockKind](docs/Model/BlockKind.md)
 - [CommitBlocksEntry](docs/Model/CommitBlocksEntry.md)
 - [Component](docs/Model/Component.md)
 - [CustomModel](docs/Model/CustomModel.md)
 - [CustomModelDeprecationDates](docs/Model/CustomModelDeprecationDates.md)
 - [CustomModelFeatures](docs/Model/CustomModelFeatures.md)
 - [CustomModelLinks](docs/Model/CustomModelLinks.md)
 - [CustomModelProperties](docs/Model/CustomModelProperties.md)
 - [Dataset](docs/Model/Dataset.md)
 - [DatasetKind](docs/Model/DatasetKind.md)
 - [DatasetLinks](docs/Model/DatasetLinks.md)
 - [DatasetLocales](docs/Model/DatasetLocales.md)
 - [DatasetProperties](docs/Model/DatasetProperties.md)
 - [DatasetUpdate](docs/Model/DatasetUpdate.md)
 - [DetailedErrorCode](docs/Model/DetailedErrorCode.md)
 - [DiarizationProperties](docs/Model/DiarizationProperties.md)
 - [DiarizationSpeakersProperties](docs/Model/DiarizationSpeakersProperties.md)
 - [Endpoint](docs/Model/Endpoint.md)
 - [EndpointLinks](docs/Model/EndpointLinks.md)
 - [EndpointProperties](docs/Model/EndpointProperties.md)
 - [EndpointPropertiesUpdate](docs/Model/EndpointPropertiesUpdate.md)
 - [EndpointUpdate](docs/Model/EndpointUpdate.md)
 - [EntityError](docs/Model/EntityError.md)
 - [EntityReference](docs/Model/EntityReference.md)
 - [Error](docs/Model/Error.md)
 - [ErrorCode](docs/Model/ErrorCode.md)
 - [Evaluation](docs/Model/Evaluation.md)
 - [EvaluationLinks](docs/Model/EvaluationLinks.md)
 - [EvaluationProperties](docs/Model/EvaluationProperties.md)
 - [EvaluationUpdate](docs/Model/EvaluationUpdate.md)
 - [File](docs/Model/File.md)
 - [FileKind](docs/Model/FileKind.md)
 - [FileLinks](docs/Model/FileLinks.md)
 - [FileProperties](docs/Model/FileProperties.md)
 - [HealthStatus](docs/Model/HealthStatus.md)
 - [InnerError](docs/Model/InnerError.md)
 - [LanguageIdentificationProperties](docs/Model/LanguageIdentificationProperties.md)
 - [ModelCopy](docs/Model/ModelCopy.md)
 - [ModelFile](docs/Model/ModelFile.md)
 - [ModelManifest](docs/Model/ModelManifest.md)
 - [ModelUpdate](docs/Model/ModelUpdate.md)
 - [PaginatedBaseModels](docs/Model/PaginatedBaseModels.md)
 - [PaginatedCustomModels](docs/Model/PaginatedCustomModels.md)
 - [PaginatedDatasets](docs/Model/PaginatedDatasets.md)
 - [PaginatedEndpoints](docs/Model/PaginatedEndpoints.md)
 - [PaginatedEvaluations](docs/Model/PaginatedEvaluations.md)
 - [PaginatedFiles](docs/Model/PaginatedFiles.md)
 - [PaginatedProjects](docs/Model/PaginatedProjects.md)
 - [PaginatedTranscriptions](docs/Model/PaginatedTranscriptions.md)
 - [PaginatedWebHooks](docs/Model/PaginatedWebHooks.md)
 - [ProfanityFilterMode](docs/Model/ProfanityFilterMode.md)
 - [Project](docs/Model/Project.md)
 - [ProjectLinks](docs/Model/ProjectLinks.md)
 - [ProjectProperties](docs/Model/ProjectProperties.md)
 - [ProjectUpdate](docs/Model/ProjectUpdate.md)
 - [PunctuationMode](docs/Model/PunctuationMode.md)
 - [ResponseBlock](docs/Model/ResponseBlock.md)
 - [ServiceHealth](docs/Model/ServiceHealth.md)
 - [SharedModel](docs/Model/SharedModel.md)
 - [SharedModelFeatures](docs/Model/SharedModelFeatures.md)
 - [Status](docs/Model/Status.md)
 - [Transcription](docs/Model/Transcription.md)
 - [TranscriptionLinks](docs/Model/TranscriptionLinks.md)
 - [TranscriptionProperties](docs/Model/TranscriptionProperties.md)
 - [TranscriptionUpdate](docs/Model/TranscriptionUpdate.md)
 - [UploadedBlocks](docs/Model/UploadedBlocks.md)
 - [WebHook](docs/Model/WebHook.md)
 - [WebHookEvents](docs/Model/WebHookEvents.md)
 - [WebHookLinks](docs/Model/WebHookLinks.md)
 - [WebHookProperties](docs/Model/WebHookProperties.md)
 - [WebHookPropertiesUpdate](docs/Model/WebHookPropertiesUpdate.md)
 - [WebHookUpdate](docs/Model/WebHookUpdate.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: Ocp-Apim-Subscription-Key
- **Location**: HTTP header

## token

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



