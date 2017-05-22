<?php
/**
 * ProductAdminRole
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
 * ProductAdminRole Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductAdminRole implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'productAdminRole';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'user_id' => 'string',
        'role' => 'string',
        'coupon_id' => 'string'
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
        'user_id' => 'userID',
        'role' => 'role',
        'coupon_id' => 'couponID'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'role' => 'setRole',
        'coupon_id' => 'setCouponId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'role' => 'getRole',
        'coupon_id' => 'getCouponId'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['coupon_id'] = isset($data['coupon_id']) ? $data['coupon_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalid_properties[] = "'role' can't be null";
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

        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['role'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets role
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets coupon_id
     * @return string
     */
    public function getCouponId()
    {
        return $this->container['coupon_id'];
    }

    /**
     * Sets coupon_id
     * @param string $coupon_id
     * @return $this
     */
    public function setCouponId($coupon_id)
    {
        $this->container['coupon_id'] = $coupon_id;

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


