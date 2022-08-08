<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponsePhWhatsapp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_ph_whatsapp';
    
    protected static $RCCPMTypes = [
        'registered' => 'bool',
        'last_seen' => 'int',
        'photo' => 'string',
        'about' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'registered' => null,
        'last_seen' => null,
        'photo' => null,
        'about' => null
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
        'photo' => 'photo',
        'about' => 'about'
    ];
    
    protected static $setters = [
        'registered' => 'setRegistered',
        'last_seen' => 'setLastSeen',
        'photo' => 'setPhoto',
        'about' => 'setAbout'
    ];
    
    protected static $getters = [
        'registered' => 'getRegistered',
        'last_seen' => 'getLastSeen',
        'photo' => 'getPhoto',
        'about' => 'getAbout'
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
        $this->container['about'] = isset($data['about']) ? $data['about'] : null;
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
    
    public function getAbout()
    {
        return $this->container['about'];
    }
    
    public function setAbout($about)
    {
        $this->container['about'] = $about;
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
