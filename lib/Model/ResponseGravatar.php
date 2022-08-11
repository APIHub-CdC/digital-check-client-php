<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseGravatar implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_gravatar';
    
    protected static $RCCPMTypes = [
        'registered' => 'string',
        'url' => 'string',
        'location' => 'string',
        'name' => 'string',
        'username' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'registered' => null,
        'url' => null,
        'location' => null,
        'name' => null,
        'username' => null
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
        'url' => 'url',
        'location' => 'location',
        'name' => 'name',
        'username' => 'username'
    ];
    
    protected static $setters = [
        'registered' => 'setRegistered',
        'url' => 'setUrl',
        'location' => 'setLocation',
        'name' => 'setName',
        'username' => 'setUsername'
    ];
    
    protected static $getters = [
        'registered' => 'getRegistered',
        'url' => 'getUrl',
        'location' => 'getLocation',
        'name' => 'getName',
        'username' => 'getUsername'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
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
    
    public function getUrl()
    {
        return $this->container['url'];
    }
    
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }
    
    public function getLocation()
    {
        return $this->container['location'];
    }
    
    public function setLocation($location)
    {
        $this->container['location'] = $location;
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
    
    public function getUsername()
    {
        return $this->container['username'];
    }
    
    public function setUsername($username)
    {
        $this->container['username'] = $username;
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
