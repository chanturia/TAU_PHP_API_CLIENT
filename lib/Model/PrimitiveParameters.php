<?php
/**
 * PrimitiveParameters
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
 * PrimitiveParameters Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PrimitiveParameters implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'primitiveParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'description' => 'string',
        'validatorURL' => 'string',
        'validatorInputs' => 'string[]',
        'validatorOutputs' => 'string[]',
        'userDefinedObject' => 'object'
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
        'name' => 'name',
        'description' => 'description',
        'validatorURL' => 'validatorURL',
        'validatorInputs' => 'validatorInputs',
        'validatorOutputs' => 'validatorOutputs',
        'userDefinedObject' => 'userDefinedObject'
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
        'name' => 'setName',
        'description' => 'setDescription',
        'validatorURL' => 'setValidatorURL',
        'validatorInputs' => 'setValidatorInputs',
        'validatorOutputs' => 'setValidatorOutputs',
        'userDefinedObject' => 'setUserDefinedObject'
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
        'name' => 'getName',
        'description' => 'getDescription',
        'validatorURL' => 'getValidatorURL',
        'validatorInputs' => 'getValidatorInputs',
        'validatorOutputs' => 'getValidatorOutputs',
        'userDefinedObject' => 'getUserDefinedObject'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['validatorURL'] = isset($data['validatorURL']) ? $data['validatorURL'] : null;
        $this->container['validatorInputs'] = isset($data['validatorInputs']) ? $data['validatorInputs'] : null;
        $this->container['validatorOutputs'] = isset($data['validatorOutputs']) ? $data['validatorOutputs'] : null;
        $this->container['userDefinedObject'] = isset($data['userDefinedObject']) ? $data['userDefinedObject'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['validatorURL'] === null) {
            $invalid_properties[] = "'validatorURL' can't be null";
        }
        if ($this->container['validatorInputs'] === null) {
            $invalid_properties[] = "'validatorInputs' can't be null";
        }
        if ($this->container['validatorOutputs'] === null) {
            $invalid_properties[] = "'validatorOutputs' can't be null";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['validatorURL'] === null) {
            return false;
        }
        if ($this->container['validatorInputs'] === null) {
            return false;
        }
        if ($this->container['validatorOutputs'] === null) {
            return false;
        }
        return true;
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
     * @param string $name Coupon primitive name must be between 2 and 484 characters
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
     * @param string $description Coupon primitive description must be between 2 and 1284 characters
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets validatorURL
     * @return string
     */
    public function getValidatorURL()
    {
        return $this->container['validatorURL'];
    }

    /**
     * Sets validatorURL
     * @param string $validatorURL Coupon primitive validator URL must have valid URL form
     * @return $this
     */
    public function setValidatorURL($validatorURL)
    {
        $this->container['validatorURL'] = $validatorURL;

        return $this;
    }

    /**
     * Gets validatorInputs
     * @return string[]
     */
    public function getValidatorInputs()
    {
        return $this->container['validatorInputs'];
    }

    /**
     * Sets validatorInputs
     * @param string[] $validatorInputs contain array with validation input constrains
     * @return $this
     */
    public function setValidatorInputs($validatorInputs)
    {
        $this->container['validatorInputs'] = $validatorInputs;

        return $this;
    }

    /**
     * Gets validatorOutputs
     * @return string[]
     */
    public function getValidatorOutputs()
    {
        return $this->container['validatorOutputs'];
    }

    /**
     * Sets validatorOutputs
     * @param string[] $validatorOutputs contain array with validation output results
     * @return $this
     */
    public function setValidatorOutputs($validatorOutputs)
    {
        $this->container['validatorOutputs'] = $validatorOutputs;

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
     * @param object $userDefinedObject a free form user defined object that includes a key - value array. Place your custom properties in array, the key corresponds to property name its length must be not longer that 40 chars and value for each custom key is limited to 2048 chars.
     * @return $this
     */
    public function setUserDefinedObject($userDefinedObject)
    {
        $this->container['userDefinedObject'] = $userDefinedObject;

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


