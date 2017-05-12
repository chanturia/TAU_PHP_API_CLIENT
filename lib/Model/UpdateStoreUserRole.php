<?php
/**
 * UpdateStoreUserRole
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * UpdateStoreUserRole Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateStoreUserRole implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'updateStoreUserRole';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'user_id' => 'string',
        'role_to_update' => 'string',
        'new_role' => 'string',
        'product_id' => 'string',
        'coupon_id' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'user_id' => 'userID',
        'role_to_update' => 'roleToUpdate',
        'new_role' => 'newRole',
        'product_id' => 'productID',
        'coupon_id' => 'couponID'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'user_id' => 'setUserId',
        'role_to_update' => 'setRoleToUpdate',
        'new_role' => 'setNewRole',
        'product_id' => 'setProductId',
        'coupon_id' => 'setCouponId'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'user_id' => 'getUserId',
        'role_to_update' => 'getRoleToUpdate',
        'new_role' => 'getNewRole',
        'product_id' => 'getProductId',
        'coupon_id' => 'getCouponId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['role_to_update'] = isset($data['role_to_update']) ? $data['role_to_update'] : null;
        $this->container['new_role'] = isset($data['new_role']) ? $data['new_role'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['coupon_id'] = isset($data['coupon_id']) ? $data['coupon_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['role_to_update'] === null) {
            $invalid_properties[] = "'role_to_update' can't be null";
        }
        if ($this->container['new_role'] === null) {
            $invalid_properties[] = "'new_role' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['role_to_update'] === null) {
            return false;
        }
        if ($this->container['new_role'] === null) {
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
     * Gets role_to_update
     * @return string
     */
    public function getRoleToUpdate()
    {
        return $this->container['role_to_update'];
    }

    /**
     * Sets role_to_update
     * @param string $role_to_update
     * @return $this
     */
    public function setRoleToUpdate($role_to_update)
    {
        $this->container['role_to_update'] = $role_to_update;

        return $this;
    }

    /**
     * Gets new_role
     * @return string
     */
    public function getNewRole()
    {
        return $this->container['new_role'];
    }

    /**
     * Sets new_role
     * @param string $new_role
     * @return $this
     */
    public function setNewRole($new_role)
    {
        $this->container['new_role'] = $new_role;

        return $this;
    }

    /**
     * Gets product_id
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param string $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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


