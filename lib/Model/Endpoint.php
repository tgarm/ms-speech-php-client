<?php
/**
 * Endpoint
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
 * Endpoint Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Endpoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Endpoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project' => '\Swagger\Client\Model\EntityReference',
        'links' => '\Swagger\Client\Model\EndpointLinks',
        'properties' => '\Swagger\Client\Model\EndpointProperties',
        'self' => 'string',
        'display_name' => 'string',
        'description' => 'string',
        'text' => 'string',
        'model' => '\Swagger\Client\Model\EntityReference',
        'locale' => 'string',
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
        'project' => null,
        'links' => null,
        'properties' => null,
        'self' => 'uri',
        'display_name' => null,
        'description' => null,
        'text' => null,
        'model' => null,
        'locale' => null,
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
        'project' => 'project',
        'links' => 'links',
        'properties' => 'properties',
        'self' => 'self',
        'display_name' => 'displayName',
        'description' => 'description',
        'text' => 'text',
        'model' => 'model',
        'locale' => 'locale',
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
        'project' => 'setProject',
        'links' => 'setLinks',
        'properties' => 'setProperties',
        'self' => 'setSelf',
        'display_name' => 'setDisplayName',
        'description' => 'setDescription',
        'text' => 'setText',
        'model' => 'setModel',
        'locale' => 'setLocale',
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
        'project' => 'getProject',
        'links' => 'getLinks',
        'properties' => 'getProperties',
        'self' => 'getSelf',
        'display_name' => 'getDisplayName',
        'description' => 'getDescription',
        'text' => 'getText',
        'model' => 'getModel',
        'locale' => 'getLocale',
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
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
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

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ((mb_strlen($this->container['display_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ((mb_strlen($this->container['locale']) < 1)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be bigger than or equal to 1.";
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
     * Gets links
     *
     * @return \Swagger\Client\Model\EndpointLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\EndpointLinks $links links
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
     * @return \Swagger\Client\Model\EndpointProperties
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Swagger\Client\Model\EndpointProperties $properties properties
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
            throw new \InvalidArgumentException('invalid length for $display_name when calling Endpoint., must be bigger than or equal to 1.');
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
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The text used to adapt a language model for this endpoint.
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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
     * @param string $locale The locale of the contained data.
     *
     * @return $this
     */
    public function setLocale($locale)
    {

        if ((mb_strlen($locale) < 1)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling Endpoint., must be bigger than or equal to 1.');
        }

        $this->container['locale'] = $locale;

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


