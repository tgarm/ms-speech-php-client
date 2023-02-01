<?php
/**
 * Transcription
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Speech Services API v3.1
 *
 * Speech Services API v3.1.
 *
 * OpenAPI spec version: v3.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Transcription Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Transcription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Transcription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\Swagger\Client\Model\TranscriptionLinks',
        'properties' => '\Swagger\Client\Model\TranscriptionProperties',
        'self' => 'string',
        'model' => '\Swagger\Client\Model\EntityReference',
        'project' => '\Swagger\Client\Model\EntityReference',
        'dataset' => '\Swagger\Client\Model\EntityReference',
        'content_urls' => 'string[]',
        'content_container_url' => 'string',
        'locale' => 'string',
        'display_name' => 'string',
        'description' => 'string',
        'custom_properties' => 'map[string,string]',
        'last_action_date_time' => '\DateTime',
        'status' => '\Swagger\Client\Model\Status',
        'created_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'properties' => null,
        'self' => 'uri',
        'model' => null,
        'project' => null,
        'dataset' => null,
        'content_urls' => 'uri',
        'content_container_url' => 'uri',
        'locale' => null,
        'display_name' => null,
        'description' => null,
        'custom_properties' => null,
        'last_action_date_time' => 'date-time',
        'status' => null,
        'created_date_time' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'links' => 'links',
        'properties' => 'properties',
        'self' => 'self',
        'model' => 'model',
        'project' => 'project',
        'dataset' => 'dataset',
        'content_urls' => 'contentUrls',
        'content_container_url' => 'contentContainerUrl',
        'locale' => 'locale',
        'display_name' => 'displayName',
        'description' => 'description',
        'custom_properties' => 'customProperties',
        'last_action_date_time' => 'lastActionDateTime',
        'status' => 'status',
        'created_date_time' => 'createdDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'properties' => 'setProperties',
        'self' => 'setSelf',
        'model' => 'setModel',
        'project' => 'setProject',
        'dataset' => 'setDataset',
        'content_urls' => 'setContentUrls',
        'content_container_url' => 'setContentContainerUrl',
        'locale' => 'setLocale',
        'display_name' => 'setDisplayName',
        'description' => 'setDescription',
        'custom_properties' => 'setCustomProperties',
        'last_action_date_time' => 'setLastActionDateTime',
        'status' => 'setStatus',
        'created_date_time' => 'setCreatedDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'properties' => 'getProperties',
        'self' => 'getSelf',
        'model' => 'getModel',
        'project' => 'getProject',
        'dataset' => 'getDataset',
        'content_urls' => 'getContentUrls',
        'content_container_url' => 'getContentContainerUrl',
        'locale' => 'getLocale',
        'display_name' => 'getDisplayName',
        'description' => 'getDescription',
        'custom_properties' => 'getCustomProperties',
        'last_action_date_time' => 'getLastActionDateTime',
        'status' => 'getStatus',
        'created_date_time' => 'getCreatedDateTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['dataset'] = isset($data['dataset']) ? $data['dataset'] : null;
        $this->container['content_urls'] = isset($data['content_urls']) ? $data['content_urls'] : null;
        $this->container['content_container_url'] = isset($data['content_container_url']) ? $data['content_container_url'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['custom_properties'] = isset($data['custom_properties']) ? $data['custom_properties'] : null;
        $this->container['last_action_date_time'] = isset($data['last_action_date_time']) ? $data['last_action_date_time'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ((mb_strlen($this->container['locale']) < 1)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ((mb_strlen($this->container['display_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\TranscriptionLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\TranscriptionLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Swagger\Client\Model\TranscriptionProperties
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Swagger\Client\Model\TranscriptionProperties $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets self
     *
     * @return string
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param string $self The location of this entity.
     *
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \Swagger\Client\Model\EntityReference
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Swagger\Client\Model\EntityReference $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Swagger\Client\Model\EntityReference
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Swagger\Client\Model\EntityReference $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets dataset
     *
     * @return \Swagger\Client\Model\EntityReference
     */
    public function getDataset()
    {
        return $this->container['dataset'];
    }

    /**
     * Sets dataset
     *
     * @param \Swagger\Client\Model\EntityReference $dataset dataset
     *
     * @return $this
     */
    public function setDataset($dataset)
    {
        $this->container['dataset'] = $dataset;

        return $this;
    }

    /**
     * Gets content_urls
     *
     * @return string[]
     */
    public function getContentUrls()
    {
        return $this->container['content_urls'];
    }

    /**
     * Sets content_urls
     *
     * @param string[] $content_urls A list of content urls to get audio files to transcribe. Up to 1000 urls are allowed.  This property will not be returned in a response.
     *
     * @return $this
     */
    public function setContentUrls($content_urls)
    {
        $this->container['content_urls'] = $content_urls;

        return $this;
    }

    /**
     * Gets content_container_url
     *
     * @return string
     */
    public function getContentContainerUrl()
    {
        return $this->container['content_container_url'];
    }

    /**
     * Sets content_container_url
     *
     * @param string $content_container_url A URL for an Azure blob container that contains the audio files. A container is allowed to have a maximum size of 5GB and a maximum number of 10000 blobs.  The maximum size for a blob is 2.5GB.  Container SAS should contain 'r' (read) and 'l' (list) permissions.  This property will not be returned in a response.
     *
     * @return $this
     */
    public function setContentContainerUrl($content_container_url)
    {
        $this->container['content_container_url'] = $content_container_url;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The locale of the contained data. If Language Identification is used, this locale is used to transcribe speech for which no language could be detected.
     *
     * @return $this
     */
    public function setLocale($locale)
    {

        if ((mb_strlen($locale) < 1)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling Transcription., must be bigger than or equal to 1.');
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name The display name of the object.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {

        if ((mb_strlen($display_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling Transcription., must be bigger than or equal to 1.');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the object.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets custom_properties
     *
     * @return map[string,string]
     */
    public function getCustomProperties()
    {
        return $this->container['custom_properties'];
    }

    /**
     * Sets custom_properties
     *
     * @param map[string,string] $custom_properties The custom properties of this entity. The maximum allowed key length is 64 characters, the maximum  allowed value length is 256 characters and the count of allowed entries is 10.
     *
     * @return $this
     */
    public function setCustomProperties($custom_properties)
    {
        $this->container['custom_properties'] = $custom_properties;

        return $this;
    }

    /**
     * Gets last_action_date_time
     *
     * @return \DateTime
     */
    public function getLastActionDateTime()
    {
        return $this->container['last_action_date_time'];
    }

    /**
     * Sets last_action_date_time
     *
     * @param \DateTime $last_action_date_time The time-stamp when the current status was entered.  The time stamp is encoded as ISO 8601 date and time format  (\"YYYY-MM-DDThh:mm:ssZ\", see https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations).
     *
     * @return $this
     */
    public function setLastActionDateTime($last_action_date_time)
    {
        $this->container['last_action_date_time'] = $last_action_date_time;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\Status $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_date_time
     *
     * @return \DateTime
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     *
     * @param \DateTime $created_date_time The time-stamp when the object was created.  The time stamp is encoded as ISO 8601 date and time format  (\"YYYY-MM-DDThh:mm:ssZ\", see https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations).
     *
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


