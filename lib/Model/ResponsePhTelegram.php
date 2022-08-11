<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponsePhTelegram implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_ph_telegram';
    
    protected static $RCCPMTypes = [
        'registered' => 'bool',
        'last_seen' => 'string',
        'photo' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'registered' => null,
        'last_seen' => null,
        'photo' => null
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
        'last_seen' => 'last_seen',
        'photo' => 'photo'
    ];
    
    protected static $setters = [
        'registered' => 'setRegistered',
        'last_seen' => 'setLastSeen',
        'photo' => 'setPhoto'
    ];
    
    protected static $getters = [
        'registered' => 'getRegistered',
        'last_seen' => 'getLastSeen',
        'photo' => 'getPhoto'
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
        $this->container['last_seen'] = isset($data['last_seen']) ? $data['last_seen'] : null;
        $this->container['photo'] = isset($data['photo']) ? $data['photo'] : null;
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
    
    public function getLastSeen()
    {
        return $this->container['last_seen'];
    }
    
    public function setLastSeen($last_seen)
    {
        $this->container['last_seen'] = $last_seen;
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
