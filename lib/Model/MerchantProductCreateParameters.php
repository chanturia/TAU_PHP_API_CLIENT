<?php
/**
 * MerchantProductCreateParameters
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
 * MerchantProductCreateParameters Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MerchantProductCreateParameters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'merchantProductCreateParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productype' => 'string',
        'name' => 'string',
        'description' => 'string',
        'imagesUris' => 'string[]',
        'brandID' => 'string',
        'userID' => 'string'
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
        'productype' => 'productype',
        'name' => 'name',
        'description' => 'description',
        'imagesUris' => 'imagesUris',
        'brandID' => 'brandID',
        'userID' => 'userID'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'productype' => 'setProductype',
        'name' => 'setName',
        'description' => 'setDescription',
        'imagesUris' => 'setImagesUris',
        'brandID' => 'setBrandID',
        'userID' => 'setUserID'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'productype' => 'getProductype',
        'name' => 'getName',
        'description' => 'getDescription',
        'imagesUris' => 'getImagesUris',
        'brandID' => 'getBrandID',
        'userID' => 'getUserID'
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
        $this->container['productype'] = isset($data['productype']) ? $data['productype'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['imagesUris'] = isset($data['imagesUris']) ? $data['imagesUris'] : null;
        $this->container['brandID'] = isset($data['brandID']) ? $data['brandID'] : null;
        $this->container['userID'] = isset($data['userID']) ? $data['userID'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['productype'] === null) {
            $invalid_properties[] = "'productype' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['imagesUris'] === null) {
            $invalid_properties[] = "'imagesUris' can't be null";
        }
        if ($this->container['userID'] === null) {
            $invalid_properties[] = "'userID' can't be null";
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

        if ($this->container['productype'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['imagesUris'] === null) {
            return false;
        }
        if ($this->container['userID'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets productype
     * @return string
     */
    public function getProductype()
    {
        return $this->container['productype'];
    }

    /**
     * Sets productype
     * @param string $productype Product type must be between 2 and 1084 characters and can contain only letters, digits and dashes
     * @return $this
     */
    public function setProductype($productype)
    {
        $this->container['productype'] = $productype;

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
     * @param string $name Product name must be between 2 and 1084 characters
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Product description must be between 2 and 1284 characters
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets imagesUris
     * @return string[]
     */
    public function getImagesUris()
    {
        return $this->container['imagesUris'];
    }

    /**
     * Sets imagesUris
     * @param string[] $imagesUris imagesUris contain array with elements valid image url
     * @return $this
     */
    public function setImagesUris($imagesUris)
    {
        $this->container['imagesUris'] = $imagesUris;

        return $this;
    }

    /**
     * Gets brandID
     * @return string
     */
    public function getBrandID()
    {
        return $this->container['brandID'];
    }

    /**
     * Sets brandID
     * @param string $brandID Brand ID for the Brand that the product will be connected with
     * @return $this
     */
    public function setBrandID($brandID)
    {
        $this->container['brandID'] = $brandID;

        return $this;
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
     * @param string $userID UserID for user who is making the creation of product
     * @return $this
     */
    public function setUserID($userID)
    {
        $this->container['userID'] = $userID;

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


