<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseSkype implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_skype';
    
    protected static $RCCPMTypes = [
        'registered' => 'bool',
        'photo' => 'string',
        'name' => 'string',
        'country' => 'string',
        'city' => 'string',
        'gender' => 'int',
        'id' => 'string',
        'handle' => 'string',
        'bio' => 'string',
        'age' => 'int',
        'language' => 'string',
        'state' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'registered' => null,
        'photo' => null,
        'name' => null,
        'country' => null,
        'city' => null,
        'gender' => null,
        'id' => null,
        'handle' => null,
        'bio' => null,
        'age' => null,
        'language' => null,
        'state' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes;
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats;
    }
    
    protected static $attributeMap = [
        'registered' => 'registered',
        'photo' => 'photo',
        'name' => 'name',
        'country' => 'country',
        'city' => 'city',
        'gender' => 'gender',
        'id' => 'id',
        'handle' => 'handle',
        'bio' => 'bio',
        'age' => 'age',
        'language' => 'language',
        'state' => 'state'
    ];
    
    protected static $setters = [
        'registered' => 'setRegistered',
        'photo' => 'setPhoto',
        'name' => 'setName',
        'country' => 'setCountry',
        'city' => 'setCity',
        'gender' => 'setGender',
        'id' => 'setId',
        'handle' => 'setHandle',
        'bio' => 'setBio',
        'age' => 'setAge',
        'language' => 'setLanguage',
        'state' => 'setState'
    ];
    
    protected static $getters = [
        'registered' => 'getRegistered',
        'photo' => 'getPhoto',
        'name' => 'getName',
        'country' => 'getCountry',
        'city' => 'getCity',
        'gender' => 'getGender',
        'id' => 'getId',
        'handle' => 'getHandle',
        'bio' => 'getBio',
        'age' => 'getAge',
        'language' => 'getLanguage',
        'state' => 'getState'
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
    
    public function getModelName()
    {
        return self::$RCCPMModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['registered'] = isset($data['registered']) ? $data['registered'] : null;
        $this->container['photo'] = isset($data['photo']) ? $data['photo'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['bio'] = isset($data['bio']) ? $data['bio'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getRegistered()
    {
        return $this->container['registered'];
    }
    
    public function setRegistered($registered)
    {
        $this->container['registered'] = $registered;
        return $this;
    }
    
    public function getPhoto()
    {
        return $this->container['photo'];
    }
    
    public function setPhoto($photo)
    {
        $this->container['photo'] = $photo;
        return $this;
    }
    
    public function getName()
    {
        return $this->container['name'];
    }
    
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }
    
    public function getCountry()
    {
        return $this->container['country'];
    }
    
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }
    
    public function getCity()
    {
        return $this->container['city'];
    }
    
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }
    
    public function getGender()
    {
        return $this->container['gender'];
    }
    
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;
        return $this;
    }
    
    public function getId()
    {
        return $this->container['id'];
    }
    
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }
    
    public function getHandle()
    {
        return $this->container['handle'];
    }
    
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;
        return $this;
    }
    
    public function getBio()
    {
        return $this->container['bio'];
    }
    
    public function setBio($bio)
    {
        $this->container['bio'] = $bio;
        return $this;
    }
    
    public function getAge()
    {
        return $this->container['age'];
    }
    
    public function setAge($age)
    {
        $this->container['age'] = $age;
        return $this;
    }
    
    public function getLanguage()
    {
        return $this->container['language'];
    }
    
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }
    
    public function getState()
    {
        return $this->container['state'];
    }
    
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
