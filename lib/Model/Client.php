<?php
/**
 * Client
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AdGuard Home
 *
 * AdGuard Home REST-ish API.  Our admin web interface is built on top of this REST-ish API.
 *
 * OpenAPI spec version: 0.107
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
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
 * Client Class Doc Comment
 *
 * @category Class
 * @description Client information.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Client implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Client';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'ids' => 'string[]',
'use_global_settings' => 'bool',
'filtering_enabled' => 'bool',
'parental_enabled' => 'bool',
'safebrowsing_enabled' => 'bool',
'safesearch_enabled' => 'bool',
'use_global_blocked_services' => 'bool',
'blocked_services' => 'string[]',
'upstreams' => 'string[]',
'tags' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'ids' => null,
'use_global_settings' => null,
'filtering_enabled' => null,
'parental_enabled' => null,
'safebrowsing_enabled' => null,
'safesearch_enabled' => null,
'use_global_blocked_services' => null,
'blocked_services' => null,
'upstreams' => null,
'tags' => null    ];

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
        'name' => 'name',
'ids' => 'ids',
'use_global_settings' => 'use_global_settings',
'filtering_enabled' => 'filtering_enabled',
'parental_enabled' => 'parental_enabled',
'safebrowsing_enabled' => 'safebrowsing_enabled',
'safesearch_enabled' => 'safesearch_enabled',
'use_global_blocked_services' => 'use_global_blocked_services',
'blocked_services' => 'blocked_services',
'upstreams' => 'upstreams',
'tags' => 'tags'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'ids' => 'setIds',
'use_global_settings' => 'setUseGlobalSettings',
'filtering_enabled' => 'setFilteringEnabled',
'parental_enabled' => 'setParentalEnabled',
'safebrowsing_enabled' => 'setSafebrowsingEnabled',
'safesearch_enabled' => 'setSafesearchEnabled',
'use_global_blocked_services' => 'setUseGlobalBlockedServices',
'blocked_services' => 'setBlockedServices',
'upstreams' => 'setUpstreams',
'tags' => 'setTags'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'ids' => 'getIds',
'use_global_settings' => 'getUseGlobalSettings',
'filtering_enabled' => 'getFilteringEnabled',
'parental_enabled' => 'getParentalEnabled',
'safebrowsing_enabled' => 'getSafebrowsingEnabled',
'safesearch_enabled' => 'getSafesearchEnabled',
'use_global_blocked_services' => 'getUseGlobalBlockedServices',
'blocked_services' => 'getBlockedServices',
'upstreams' => 'getUpstreams',
'tags' => 'getTags'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['use_global_settings'] = isset($data['use_global_settings']) ? $data['use_global_settings'] : null;
        $this->container['filtering_enabled'] = isset($data['filtering_enabled']) ? $data['filtering_enabled'] : null;
        $this->container['parental_enabled'] = isset($data['parental_enabled']) ? $data['parental_enabled'] : null;
        $this->container['safebrowsing_enabled'] = isset($data['safebrowsing_enabled']) ? $data['safebrowsing_enabled'] : null;
        $this->container['safesearch_enabled'] = isset($data['safesearch_enabled']) ? $data['safesearch_enabled'] : null;
        $this->container['use_global_blocked_services'] = isset($data['use_global_blocked_services']) ? $data['use_global_blocked_services'] : null;
        $this->container['blocked_services'] = isset($data['blocked_services']) ? $data['blocked_services'] : null;
        $this->container['upstreams'] = isset($data['upstreams']) ? $data['upstreams'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param string[] $ids IP, CIDR, MAC, or ClientID.
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

        return $this;
    }

    /**
     * Gets use_global_settings
     *
     * @return bool
     */
    public function getUseGlobalSettings()
    {
        return $this->container['use_global_settings'];
    }

    /**
     * Sets use_global_settings
     *
     * @param bool $use_global_settings use_global_settings
     *
     * @return $this
     */
    public function setUseGlobalSettings($use_global_settings)
    {
        $this->container['use_global_settings'] = $use_global_settings;

        return $this;
    }

    /**
     * Gets filtering_enabled
     *
     * @return bool
     */
    public function getFilteringEnabled()
    {
        return $this->container['filtering_enabled'];
    }

    /**
     * Sets filtering_enabled
     *
     * @param bool $filtering_enabled filtering_enabled
     *
     * @return $this
     */
    public function setFilteringEnabled($filtering_enabled)
    {
        $this->container['filtering_enabled'] = $filtering_enabled;

        return $this;
    }

    /**
     * Gets parental_enabled
     *
     * @return bool
     */
    public function getParentalEnabled()
    {
        return $this->container['parental_enabled'];
    }

    /**
     * Sets parental_enabled
     *
     * @param bool $parental_enabled parental_enabled
     *
     * @return $this
     */
    public function setParentalEnabled($parental_enabled)
    {
        $this->container['parental_enabled'] = $parental_enabled;

        return $this;
    }

    /**
     * Gets safebrowsing_enabled
     *
     * @return bool
     */
    public function getSafebrowsingEnabled()
    {
        return $this->container['safebrowsing_enabled'];
    }

    /**
     * Sets safebrowsing_enabled
     *
     * @param bool $safebrowsing_enabled safebrowsing_enabled
     *
     * @return $this
     */
    public function setSafebrowsingEnabled($safebrowsing_enabled)
    {
        $this->container['safebrowsing_enabled'] = $safebrowsing_enabled;

        return $this;
    }

    /**
     * Gets safesearch_enabled
     *
     * @return bool
     */
    public function getSafesearchEnabled()
    {
        return $this->container['safesearch_enabled'];
    }

    /**
     * Sets safesearch_enabled
     *
     * @param bool $safesearch_enabled safesearch_enabled
     *
     * @return $this
     */
    public function setSafesearchEnabled($safesearch_enabled)
    {
        $this->container['safesearch_enabled'] = $safesearch_enabled;

        return $this;
    }

    /**
     * Gets use_global_blocked_services
     *
     * @return bool
     */
    public function getUseGlobalBlockedServices()
    {
        return $this->container['use_global_blocked_services'];
    }

    /**
     * Sets use_global_blocked_services
     *
     * @param bool $use_global_blocked_services use_global_blocked_services
     *
     * @return $this
     */
    public function setUseGlobalBlockedServices($use_global_blocked_services)
    {
        $this->container['use_global_blocked_services'] = $use_global_blocked_services;

        return $this;
    }

    /**
     * Gets blocked_services
     *
     * @return string[]
     */
    public function getBlockedServices()
    {
        return $this->container['blocked_services'];
    }

    /**
     * Sets blocked_services
     *
     * @param string[] $blocked_services blocked_services
     *
     * @return $this
     */
    public function setBlockedServices($blocked_services)
    {
        $this->container['blocked_services'] = $blocked_services;

        return $this;
    }

    /**
     * Gets upstreams
     *
     * @return string[]
     */
    public function getUpstreams()
    {
        return $this->container['upstreams'];
    }

    /**
     * Sets upstreams
     *
     * @param string[] $upstreams upstreams
     *
     * @return $this
     */
    public function setUpstreams($upstreams)
    {
        $this->container['upstreams'] = $upstreams;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
