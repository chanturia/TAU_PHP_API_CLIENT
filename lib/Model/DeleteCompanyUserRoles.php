<?php
/**
 * DeleteCompanyUserRoles
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
 * DeleteCompanyUserRoles Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeleteCompanyUserRoles implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'deleteCompanyUserRoles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userID' => 'string',
        'roleToRemove' => 'string',
        'brandID' => 'string',
        'storeID' => 'string',
        'productID' => 'string',
        'couponID' => 'string'
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
        'roleToRemove' => 'roleToRemove',
        'brandID' => 'brandID',
        'storeID' => 'storeID',
        'productID' => 'productID',
        'couponID' => 'couponID'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'userID' => 'setUserID',
        'roleToRemove' => 'setRoleToRemove',
        'brandID' => 'setBrandID',
        'storeID' => 'setStoreID',
        'productID' => 'setProductID',
        'couponID' => 'setCouponID'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'userID' => 'getUserID',
        'roleToRemove' => 'getRoleToRemove',
        'brandID' => 'getBrandID',
        'storeID' => 'getStoreID',
        'productID' => 'getProductID',
        'couponID' => 'getCouponID'
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
        $this->container['roleToRemove'] = isset($data['roleToRemove']) ? $data['roleToRemove'] : null;
        $this->container['brandID'] = isset($data['brandID']) ? $data['brandID'] : null;
        $this->container['storeID'] = isset($data['storeID']) ? $data['storeID'] : null;
        $this->container['productID'] = isset($data['productID']) ? $data['productID'] : null;
        $this->container['couponID'] = isset($data['couponID']) ? $data['couponID'] : null;
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
        if ($this->container['roleToRemove'] === null) {
            $invalid_properties[] = "'roleToRemove' can't be null";
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
        if ($this->container['roleToRemove'] === null) {
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
     * @param string $userID
     * @return $this
     */
    public function setUserID($userID)
    {
        $this->container['userID'] = $userID;

        return $this;
    }

    /**
     * Gets roleToRemove
     * @return string
     */
    public function getRoleToRemove()
    {
        return $this->container['roleToRemove'];
    }

    /**
     * Sets roleToRemove
     * @param string $roleToRemove
     * @return $this
     */
    public function setRoleToRemove($roleToRemove)
    {
        $this->container['roleToRemove'] = $roleToRemove;

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
     * @param string $brandID
     * @return $this
     */
    public function setBrandID($brandID)
    {
        $this->container['brandID'] = $brandID;

        return $this;
    }

    /**
     * Gets storeID
     * @return string
     */
    public function getStoreID()
    {
        return $this->container['storeID'];
    }

    /**
     * Sets storeID
     * @param string $storeID
     * @return $this
     */
    public function setStoreID($storeID)
    {
        $this->container['storeID'] = $storeID;

        return $this;
    }

    /**
     * Gets productID
     * @return string
     */
    public function getProductID()
    {
        return $this->container['productID'];
    }

    /**
     * Sets productID
     * @param string $productID
     * @return $this
     */
    public function setProductID($productID)
    {
        $this->container['productID'] = $productID;

        return $this;
    }

    /**
     * Gets couponID
     * @return string
     */
    public function getCouponID()
    {
        return $this->container['couponID'];
    }

    /**
     * Sets couponID
     * @param string $couponID
     * @return $this
     */
    public function setCouponID($couponID)
    {
        $this->container['couponID'] = $couponID;

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


