<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseLinkedin implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_linkedin';
    
    protected static $RCCPMTypes = [
        'registered' => 'bool',
        'photo' => 'string',
        'url' => 'string',
        'location' => 'string',
        'name' => 'string',
        'company' => 'string',
        'title' => 'string',
        'website' => 'string',
        'twitter' => 'string',
        'connection_count' => 'float'
    ];
    
    protected static $RCCPMFormats = [
        'registered' => null,
        'photo' => null,
        'url' => null,
        'location' => null,
        'name' => null,
        'company' => null,
        'title' => null,
        'website' => null,
        'twitter' => null,
        'connection_count' => null
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
        'location' => 'location',
        'name' => 'name',
        'company' => 'company',
        'title' => 'title',
        'website' => 'website',
        'twitter' => 'twitter',
        'connection_count' => 'connection_count'
    ];
    
    protected static $setters = [
        'registered' => 'setRegistered',
        'photo' => 'setPhoto',
        'url' => 'setUrl',
        'location' => 'setLocation',
        'name' => 'setName',
        'company' => 'setCompany',
        'title' => 'setTitle',
        'website' => 'setWebsite',
        'twitter' => 'setTwitter',
        'connection_count' => 'setConnectionCount'
    ];
    
    protected static $getters = [
        'registered' => 'getRegistered',
        'photo' => 'getPhoto',
        'url' => 'getUrl',
        'location' => 'getLocation',
        'name' => 'getName',
        'company' => 'getCompany',
        'title' => 'getTitle',
        'website' => 'getWebsite',
        'twitter' => 'getTwitter',
        'connection_count' => 'getConnectionCount'
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
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['twitter'] = isset($data['twitter']) ? $data['twitter'] : null;
        $this->container['connection_count'] = isset($data['connection_count']) ? $data['connection_count'] : null;
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
    
    public function getCompany()
    {
        return $this->container['company'];
    }
    
    public function setCompany($company)
    {
        $this->container['company'] = $company;
        return $this;
    }
    
    public function getTitle()
    {
        return $this->container['title'];
    }
    
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }
    
    public function getWebsite()
    {
        return $this->container['website'];
    }
    
    public function setWebsite($website)
    {
        $this->container['website'] = $website;
        return $this;
    }
    
    public function getTwitter()
    {
        return $this->container['twitter'];
    }
    
    public function setTwitter($twitter)
    {
        $this->container['twitter'] = $twitter;
        return $this;
    }
    
    public function getConnectionCount()
    {
        return $this->container['connection_count'];
    }
    
    public function setConnectionCount($connection_count)
    {
        $this->container['connection_count'] = $connection_count;
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
