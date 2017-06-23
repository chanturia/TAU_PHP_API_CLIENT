<?php
/**
 * UpdateCouponParameters
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
 * UpdateCouponParameters Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateCouponParameters implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'updateCouponParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
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
     * @param string $name Name for the Coupon to be updated with
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
     * @param string $description Description for the Coupon to be updated with
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
     * @param string $kind Kind for the Coupon to be updated with
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
     * @param string[] $primitives Contains array with primitives ids for the coupon
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
     * @param string[] $categories Contains array with categories ids for the coupon
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
     * @param string[] $subcategories Contains array with subcategories ids for the coupon
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
     * @param string[] $products Contains array with products ids for the coupon
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
     * @param string[] $storeids Contains array with stores ids for the coupon
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


