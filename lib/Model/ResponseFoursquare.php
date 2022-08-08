<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseFoursquare implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_foursquare';
    
    protected static $RCCPMTypes = [
        'registered' => 'bool',
        'photo' => 'string',
        'url' => 'string',
        'bio' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'registered' => null,
        'photo' => null,
        'url' => null,
        'bio' => null
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
        'url' => 'url',
        'bio' => 'bio'
    ];
    
    protected static $setters = [
        'registered' => 'setRegistered',
        'photo' => 'setPhoto',
        'url' => 'setUrl',
        'bio' => 'setBio'
    ];
    
    protected static $getters = [
        'registered' => 'getRegistered',
        'photo' => 'getPhoto',
        'url' => 'getUrl',
        'bio' => 'getBio'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['bio'] = isset($data['bio']) ? $data['bio'] : null;
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
    
    public function getUrl()
    {
        return $this->container['url'];
    }
    
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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
