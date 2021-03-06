<?php
/**
 * Company
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
 * Company Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Company implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'type' => 'string',
        'createdBy' => 'string',
        'name' => 'string',
        'inChargePersonName' => 'string',
        'mainAddress' => 'string',
        'mainImageURL' => 'string',
        'logoURL' => 'string',
        'contactPhone' => 'string',
        'companyType' => 'string',
        'pointsOfInterest' => '\Swagger\Client\Model\Store[]',
        'brands' => '\Swagger\Client\Model\Brand[]',
        'products' => '\Swagger\Client\Model\Product[]',
        'coupons' => '\Swagger\Client\Model\Coupon[]',
        'description' => 'string',
        'geoPosition' => '\Swagger\Client\Model\Geometry',
        'userDefined' => 'object'
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
        'id' => 'id',
        'type' => 'type',
        'createdBy' => 'createdBy',
        'name' => 'name',
        'inChargePersonName' => 'inChargePersonName',
        'mainAddress' => 'mainAddress',
        'mainImageURL' => 'mainImageURL',
        'logoURL' => 'logoURL',
        'contactPhone' => 'contactPhone',
        'companyType' => 'companyType',
        'pointsOfInterest' => 'pointsOfInterest',
        'brands' => 'brands',
        'products' => 'products',
        'coupons' => 'coupons',
        'description' => 'description',
        'geoPosition' => 'geoPosition',
        'userDefined' => 'userDefined'
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
        'id' => 'setId',
        'type' => 'setType',
        'createdBy' => 'setCreatedBy',
        'name' => 'setName',
        'inChargePersonName' => 'setInChargePersonName',
        'mainAddress' => 'setMainAddress',
        'mainImageURL' => 'setMainImageURL',
        'logoURL' => 'setLogoURL',
        'contactPhone' => 'setContactPhone',
        'companyType' => 'setCompanyType',
        'pointsOfInterest' => 'setPointsOfInterest',
        'brands' => 'setBrands',
        'products' => 'setProducts',
        'coupons' => 'setCoupons',
        'description' => 'setDescription',
        'geoPosition' => 'setGeoPosition',
        'userDefined' => 'setUserDefined'
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
        'id' => 'getId',
        'type' => 'getType',
        'createdBy' => 'getCreatedBy',
        'name' => 'getName',
        'inChargePersonName' => 'getInChargePersonName',
        'mainAddress' => 'getMainAddress',
        'mainImageURL' => 'getMainImageURL',
        'logoURL' => 'getLogoURL',
        'contactPhone' => 'getContactPhone',
        'companyType' => 'getCompanyType',
        'pointsOfInterest' => 'getPointsOfInterest',
        'brands' => 'getBrands',
        'products' => 'getProducts',
        'coupons' => 'getCoupons',
        'description' => 'getDescription',
        'geoPosition' => 'getGeoPosition',
        'userDefined' => 'getUserDefined'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['inChargePersonName'] = isset($data['inChargePersonName']) ? $data['inChargePersonName'] : null;
        $this->container['mainAddress'] = isset($data['mainAddress']) ? $data['mainAddress'] : null;
        $this->container['mainImageURL'] = isset($data['mainImageURL']) ? $data['mainImageURL'] : null;
        $this->container['logoURL'] = isset($data['logoURL']) ? $data['logoURL'] : null;
        $this->container['contactPhone'] = isset($data['contactPhone']) ? $data['contactPhone'] : null;
        $this->container['companyType'] = isset($data['companyType']) ? $data['companyType'] : null;
        $this->container['pointsOfInterest'] = isset($data['pointsOfInterest']) ? $data['pointsOfInterest'] : null;
        $this->container['brands'] = isset($data['brands']) ? $data['brands'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['coupons'] = isset($data['coupons']) ? $data['coupons'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['geoPosition'] = isset($data['geoPosition']) ? $data['geoPosition'] : null;
        $this->container['userDefined'] = isset($data['userDefined']) ? $data['userDefined'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
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
        if ($this->container['id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets createdBy
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     * @param string $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

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
     * Gets inChargePersonName
     * @return string
     */
    public function getInChargePersonName()
    {
        return $this->container['inChargePersonName'];
    }

    /**
     * Sets inChargePersonName
     * @param string $inChargePersonName
     * @return $this
     */
    public function setInChargePersonName($inChargePersonName)
    {
        $this->container['inChargePersonName'] = $inChargePersonName;

        return $this;
    }

    /**
     * Gets mainAddress
     * @return string
     */
    public function getMainAddress()
    {
        return $this->container['mainAddress'];
    }

    /**
     * Sets mainAddress
     * @param string $mainAddress
     * @return $this
     */
    public function setMainAddress($mainAddress)
    {
        $this->container['mainAddress'] = $mainAddress;

        return $this;
    }

    /**
     * Gets mainImageURL
     * @return string
     */
    public function getMainImageURL()
    {
        return $this->container['mainImageURL'];
    }

    /**
     * Sets mainImageURL
     * @param string $mainImageURL
     * @return $this
     */
    public function setMainImageURL($mainImageURL)
    {
        $this->container['mainImageURL'] = $mainImageURL;

        return $this;
    }

    /**
     * Gets logoURL
     * @return string
     */
    public function getLogoURL()
    {
        return $this->container['logoURL'];
    }

    /**
     * Sets logoURL
     * @param string $logoURL
     * @return $this
     */
    public function setLogoURL($logoURL)
    {
        $this->container['logoURL'] = $logoURL;

        return $this;
    }

    /**
     * Gets contactPhone
     * @return string
     */
    public function getContactPhone()
    {
        return $this->container['contactPhone'];
    }

    /**
     * Sets contactPhone
     * @param string $contactPhone
     * @return $this
     */
    public function setContactPhone($contactPhone)
    {
        $this->container['contactPhone'] = $contactPhone;

        return $this;
    }

    /**
     * Gets companyType
     * @return string
     */
    public function getCompanyType()
    {
        return $this->container['companyType'];
    }

    /**
     * Sets companyType
     * @param string $companyType
     * @return $this
     */
    public function setCompanyType($companyType)
    {
        $this->container['companyType'] = $companyType;

        return $this;
    }

    /**
     * Gets pointsOfInterest
     * @return \Swagger\Client\Model\Store[]
     */
    public function getPointsOfInterest()
    {
        return $this->container['pointsOfInterest'];
    }

    /**
     * Sets pointsOfInterest
     * @param \Swagger\Client\Model\Store[] $pointsOfInterest
     * @return $this
     */
    public function setPointsOfInterest($pointsOfInterest)
    {
        $this->container['pointsOfInterest'] = $pointsOfInterest;

        return $this;
    }

    /**
     * Gets brands
     * @return \Swagger\Client\Model\Brand[]
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     * @param \Swagger\Client\Model\Brand[] $brands
     * @return $this
     */
    public function setBrands($brands)
    {
        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets products
     * @return \Swagger\Client\Model\Product[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param \Swagger\Client\Model\Product[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets coupons
     * @return \Swagger\Client\Model\Coupon[]
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     * @param \Swagger\Client\Model\Coupon[] $coupons
     * @return $this
     */
    public function setCoupons($coupons)
    {
        $this->container['coupons'] = $coupons;

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
     * Gets userDefined
     * @return object
     */
    public function getUserDefined()
    {
        return $this->container['userDefined'];
    }

    /**
     * Sets userDefined
     * @param object $userDefined a free form user defined object that includes key - value pairs
     * @return $this
     */
    public function setUserDefined($userDefined)
    {
        $this->container['userDefined'] = $userDefined;

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


