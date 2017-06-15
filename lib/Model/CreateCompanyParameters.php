<?php
/**
 * CreateCompanyParameters
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
 * CreateCompanyParameters Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateCompanyParameters implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'createCompanyParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'userID' => 'string',
        'name' => 'string',
        'inChargePersonName' => 'string',
        'mainAddress' => 'string',
        'mainImageURL' => 'string',
        'logoURL' => 'string',
        'contactPhone' => 'string',
        'companyType' => 'string',
        'description' => 'string',
        'facebookPageURL' => 'string'
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
        'userID' => 'userID',
        'name' => 'name',
        'inChargePersonName' => 'inChargePersonName',
        'mainAddress' => 'mainAddress',
        'mainImageURL' => 'mainImageURL',
        'logoURL' => 'logoURL',
        'contactPhone' => 'contactPhone',
        'companyType' => 'companyType',
        'description' => 'description',
        'facebookPageURL' => 'facebookPageURL'
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
        'userID' => 'setUserID',
        'name' => 'setName',
        'inChargePersonName' => 'setInChargePersonName',
        'mainAddress' => 'setMainAddress',
        'mainImageURL' => 'setMainImageURL',
        'logoURL' => 'setLogoURL',
        'contactPhone' => 'setContactPhone',
        'companyType' => 'setCompanyType',
        'description' => 'setDescription',
        'facebookPageURL' => 'setFacebookPageURL'
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
        'userID' => 'getUserID',
        'name' => 'getName',
        'inChargePersonName' => 'getInChargePersonName',
        'mainAddress' => 'getMainAddress',
        'mainImageURL' => 'getMainImageURL',
        'logoURL' => 'getLogoURL',
        'contactPhone' => 'getContactPhone',
        'companyType' => 'getCompanyType',
        'description' => 'getDescription',
        'facebookPageURL' => 'getFacebookPageURL'
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
        $this->container['userID'] = isset($data['userID']) ? $data['userID'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['inChargePersonName'] = isset($data['inChargePersonName']) ? $data['inChargePersonName'] : null;
        $this->container['mainAddress'] = isset($data['mainAddress']) ? $data['mainAddress'] : null;
        $this->container['mainImageURL'] = isset($data['mainImageURL']) ? $data['mainImageURL'] : null;
        $this->container['logoURL'] = isset($data['logoURL']) ? $data['logoURL'] : null;
        $this->container['contactPhone'] = isset($data['contactPhone']) ? $data['contactPhone'] : null;
        $this->container['companyType'] = isset($data['companyType']) ? $data['companyType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['facebookPageURL'] = isset($data['facebookPageURL']) ? $data['facebookPageURL'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['userID'] === null) {
            $invalid_properties[] = "'userID' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['inChargePersonName'] === null) {
            $invalid_properties[] = "'inChargePersonName' can't be null";
        }
        if ($this->container['mainAddress'] === null) {
            $invalid_properties[] = "'mainAddress' can't be null";
        }
        if ($this->container['mainImageURL'] === null) {
            $invalid_properties[] = "'mainImageURL' can't be null";
        }
        if ($this->container['logoURL'] === null) {
            $invalid_properties[] = "'logoURL' can't be null";
        }
        if ($this->container['contactPhone'] === null) {
            $invalid_properties[] = "'contactPhone' can't be null";
        }
        if ($this->container['companyType'] === null) {
            $invalid_properties[] = "'companyType' can't be null";
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
        if ($this->container['userID'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['inChargePersonName'] === null) {
            return false;
        }
        if ($this->container['mainAddress'] === null) {
            return false;
        }
        if ($this->container['mainImageURL'] === null) {
            return false;
        }
        if ($this->container['logoURL'] === null) {
            return false;
        }
        if ($this->container['contactPhone'] === null) {
            return false;
        }
        if ($this->container['companyType'] === null) {
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
     * @param string $userID userID for user who is making the creation of company
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
     * @param string $name Company name must be between 2 and 484 characters
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
     * @param string $inChargePersonName In Chanrge Person name must be between 2 and 1084 characters and can contain only letters, digits and dashes
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
     * @param string $mainAddress Company main address must be in the form House Number, Street Direction, Street Name, Street Suffix, City, State, Zip, Country
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
     * @param string $mainImageURL Company main image URL must have valid URL form
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
     * @param string $logoURL Company logo URL must have valid URL form
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
     * @param string $contactPhone Company contact phone can contain only numbers and symbols plus sign and dash
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
     * @param string $companyType Company type
     * @return $this
     */
    public function setCompanyType($companyType)
    {
        $this->container['companyType'] = $companyType;

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
     * @param string $description Company description must be between 2 and 1284 characters
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets facebookPageURL
     * @return string
     */
    public function getFacebookPageURL()
    {
        return $this->container['facebookPageURL'];
    }

    /**
     * Sets facebookPageURL
     * @param string $facebookPageURL Company Facebook Page URL must have valid URL form
     * @return $this
     */
    public function setFacebookPageURL($facebookPageURL)
    {
        $this->container['facebookPageURL'] = $facebookPageURL;

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


