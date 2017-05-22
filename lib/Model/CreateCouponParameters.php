<?php
/**
 * CreateCouponParameters
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
 * CreateCouponParameters Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateCouponParameters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createCouponParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userid' => 'string',
        'name' => 'string',
        'description' => 'string',
        'kind' => 'string',
        'primitives' => 'string[]',
        'categories' => 'string[]',
        'subcategories' => 'string[]',
        'products' => 'string[]',
        'storeids' => 'string[]'
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
        'userid' => 'userid',
        'name' => 'name',
        'description' => 'description',
        'kind' => 'kind',
        'primitives' => 'primitives',
        'categories' => 'categories',
        'subcategories' => 'subcategories',
        'products' => 'products',
        'storeids' => 'storeids'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'userid' => 'setUserid',
        'name' => 'setName',
        'description' => 'setDescription',
        'kind' => 'setKind',
        'primitives' => 'setPrimitives',
        'categories' => 'setCategories',
        'subcategories' => 'setSubcategories',
        'products' => 'setProducts',
        'storeids' => 'setStoreids'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'userid' => 'getUserid',
        'name' => 'getName',
        'description' => 'getDescription',
        'kind' => 'getKind',
        'primitives' => 'getPrimitives',
        'categories' => 'getCategories',
        'subcategories' => 'getSubcategories',
        'products' => 'getProducts',
        'storeids' => 'getStoreids'
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
        $this->container['userid'] = isset($data['userid']) ? $data['userid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['primitives'] = isset($data['primitives']) ? $data['primitives'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['subcategories'] = isset($data['subcategories']) ? $data['subcategories'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['storeids'] = isset($data['storeids']) ? $data['storeids'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['userid'] === null) {
            $invalid_properties[] = "'userid' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['kind'] === null) {
            $invalid_properties[] = "'kind' can't be null";
        }
        if ($this->container['primitives'] === null) {
            $invalid_properties[] = "'primitives' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalid_properties[] = "'categories' can't be null";
        }
        if ($this->container['subcategories'] === null) {
            $invalid_properties[] = "'subcategories' can't be null";
        }
        if ($this->container['products'] === null) {
            $invalid_properties[] = "'products' can't be null";
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

        if ($this->container['userid'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['kind'] === null) {
            return false;
        }
        if ($this->container['primitives'] === null) {
            return false;
        }
        if ($this->container['categories'] === null) {
            return false;
        }
        if ($this->container['subcategories'] === null) {
            return false;
        }
        if ($this->container['products'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets userid
     * @return string
     */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
     * Sets userid
     * @param string $userid
     * @return $this
     */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;

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
     * @param string $name
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
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets primitives
     * @return string[]
     */
    public function getPrimitives()
    {
        return $this->container['primitives'];
    }

    /**
     * Sets primitives
     * @param string[] $primitives
     * @return $this
     */
    public function setPrimitives($primitives)
    {
        $this->container['primitives'] = $primitives;

        return $this;
    }

    /**
     * Gets categories
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     * @param string[] $categories
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets subcategories
     * @return string[]
     */
    public function getSubcategories()
    {
        return $this->container['subcategories'];
    }

    /**
     * Sets subcategories
     * @param string[] $subcategories
     * @return $this
     */
    public function setSubcategories($subcategories)
    {
        $this->container['subcategories'] = $subcategories;

        return $this;
    }

    /**
     * Gets products
     * @return string[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param string[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets storeids
     * @return string[]
     */
    public function getStoreids()
    {
        return $this->container['storeids'];
    }

    /**
     * Sets storeids
     * @param string[] $storeids
     * @return $this
     */
    public function setStoreids($storeids)
    {
        $this->container['storeids'] = $storeids;

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


