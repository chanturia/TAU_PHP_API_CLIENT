<?php
/**
 * CreateStoreParameters
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Coupons Api
 *
 * TrustAndUse coupons api in the swagger-2.0 specification
 *
 * OpenAPI spec version: 1.0.0
 * Contact: sp@7indigo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CreateStoreParameters Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateStoreParameters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createStoreParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userID' => 'string',
        'name' => 'string',
        'kind' => 'string',
        'address' => 'string',
        'userDefinedObject' => 'object',
        'geoPosition' => '\Swagger\Client\Model\Geometry'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'userID' => 'userID',
        'name' => 'name',
        'kind' => 'kind',
        'address' => 'address',
        'userDefinedObject' => 'userDefinedObject',
        'geoPosition' => 'geoPosition'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'userID' => 'setUserID',
        'name' => 'setName',
        'kind' => 'setKind',
        'address' => 'setAddress',
        'userDefinedObject' => 'setUserDefinedObject',
        'geoPosition' => 'setGeoPosition'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'userID' => 'getUserID',
        'name' => 'getName',
        'kind' => 'getKind',
        'address' => 'getAddress',
        'userDefinedObject' => 'getUserDefinedObject',
        'geoPosition' => 'getGeoPosition'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['userID'] = isset($data['userID']) ? $data['userID'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['userDefinedObject'] = isset($data['userDefinedObject']) ? $data['userDefinedObject'] : null;
        $this->container['geoPosition'] = isset($data['geoPosition']) ? $data['geoPosition'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['userID'] === null) {
            $invalid_properties[] = "'userID' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['kind'] === null) {
            $invalid_properties[] = "'kind' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalid_properties[] = "'address' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['userID'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['kind'] === null) {
            return false;
        }
        if ($this->container['address'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets userID
     * @return string
     */
    public function getUserID()
    {
        return $this->container['userID'];
    }

    /**
     * Sets userID
     * @param string $userID UserID of the user who is making the creation of store
     * @return $this
     */
    public function setUserID($userID)
    {
        $this->container['userID'] = $userID;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Store name must be between 2 and 484 characters
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets kind
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     * @param string $kind Store type must be between 2 and 484 characters and can contain only letters, digits and dashes
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address Store main address must be in the form House Number, Street Direction, Street Name, Street Suffix, City, State, Zip, Country
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets userDefinedObject
     * @return object
     */
    public function getUserDefinedObject()
    {
        return $this->container['userDefinedObject'];
    }

    /**
     * Sets userDefinedObject
     * @param object $userDefinedObject a free form user defined object that includes a key - value array.Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars.
     * @return $this
     */
    public function setUserDefinedObject($userDefinedObject)
    {
        $this->container['userDefinedObject'] = $userDefinedObject;

        return $this;
    }

    /**
     * Gets geoPosition
     * @return \Swagger\Client\Model\Geometry
     */
    public function getGeoPosition()
    {
        return $this->container['geoPosition'];
    }

    /**
     * Sets geoPosition
     * @param \Swagger\Client\Model\Geometry $geoPosition
     * @return $this
     */
    public function setGeoPosition($geoPosition)
    {
        $this->container['geoPosition'] = $geoPosition;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


