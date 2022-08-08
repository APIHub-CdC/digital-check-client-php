<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_ok';
    
    protected static $RCCPMTypes = [
        'registered' => 'bool',
        'city' => 'string',
        'age' => 'int',
        'date_joined' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'registered' => null,
        'city' => null,
        'age' => null,
        'date_joined' => null
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
        'city' => 'city',
        'age' => 'age',
        'date_joined' => 'date_joined'
    ];
    
    protected static $setters = [
        'registered' => 'setRegistered',
        'city' => 'setCity',
        'age' => 'setAge',
        'date_joined' => 'setDateJoined'
    ];
    
    protected static $getters = [
        'registered' => 'getRegistered',
        'city' => 'getCity',
        'age' => 'getAge',
        'date_joined' => 'getDateJoined'
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
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['date_joined'] = isset($data['date_joined']) ? $data['date_joined'] : null;
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
    
    public function getCity()
    {
        return $this->container['city'];
    }
    
    public function setCity($city)
    {
        $this->container['city'] = $city;
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
    
    public function getDateJoined()
    {
        return $this->container['date_joined'];
    }
    
    public function setDateJoined($date_joined)
    {
        $this->container['date_joined'] = $date_joined;
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
