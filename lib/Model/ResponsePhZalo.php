<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponsePhZalo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_ph_zalo';
    
    protected static $RCCPMTypes = [
        'registered' => 'bool',
        'name' => 'string',
        'date_of_birth' => 'string',
        'uid' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'registered' => null,
        'name' => null,
        'date_of_birth' => null,
        'uid' => null
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
        'name' => 'name',
        'date_of_birth' => 'date_of_birth',
        'uid' => 'uid'
    ];
    
    protected static $setters = [
        'registered' => 'setRegistered',
        'name' => 'setName',
        'date_of_birth' => 'setDateOfBirth',
        'uid' => 'setUid'
    ];
    
    protected static $getters = [
        'registered' => 'getRegistered',
        'name' => 'getName',
        'date_of_birth' => 'getDateOfBirth',
        'uid' => 'getUid'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
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
    
    public function getName()
    {
        return $this->container['name'];
    }
    
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }
    
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }
    
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;
        return $this;
    }
    
    public function getUid()
    {
        return $this->container['uid'];
    }
    
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
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
