<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseAirbnb implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_airbnb';
    
    protected static $RCCPMTypes = [
        'registered' => 'bool',
        'image' => 'string',
        'location' => 'string',
        'about' => 'string',
        'first_name' => 'string',
        'created_at' => 'string',
        'reviewee_count' => 'string',
        'trips' => 'int',
        'work' => 'string',
        'identity_verified' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'registered' => null,
        'image' => null,
        'location' => null,
        'about' => null,
        'first_name' => null,
        'created_at' => null,
        'reviewee_count' => null,
        'trips' => null,
        'work' => null,
        'identity_verified' => null
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
        'image' => 'image',
        'location' => 'location',
        'about' => 'about',
        'first_name' => 'first_name',
        'created_at' => 'created_at',
        'reviewee_count' => 'reviewee_count',
        'trips' => 'trips',
        'work' => 'work',
        'identity_verified' => 'identity_verified'
    ];
    
    protected static $setters = [
        'registered' => 'setRegistered',
        'image' => 'setImage',
        'location' => 'setLocation',
        'about' => 'setAbout',
        'first_name' => 'setFirstName',
        'created_at' => 'setCreatedAt',
        'reviewee_count' => 'setRevieweeCount',
        'trips' => 'setTrips',
        'work' => 'setWork',
        'identity_verified' => 'setIdentityVerified'
    ];
    
    protected static $getters = [
        'registered' => 'getRegistered',
        'image' => 'getImage',
        'location' => 'getLocation',
        'about' => 'getAbout',
        'first_name' => 'getFirstName',
        'created_at' => 'getCreatedAt',
        'reviewee_count' => 'getRevieweeCount',
        'trips' => 'getTrips',
        'work' => 'getWork',
        'identity_verified' => 'getIdentityVerified'
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
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['about'] = isset($data['about']) ? $data['about'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['reviewee_count'] = isset($data['reviewee_count']) ? $data['reviewee_count'] : null;
        $this->container['trips'] = isset($data['trips']) ? $data['trips'] : null;
        $this->container['work'] = isset($data['work']) ? $data['work'] : null;
        $this->container['identity_verified'] = isset($data['identity_verified']) ? $data['identity_verified'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['reviewee_count']) && (mb_strlen($this->container['reviewee_count']) > 50)) {
            $invalidProperties[] = "invalid value for 'reviewee_count', the character length must be smaller than or equal to 50.";
        }
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
    
    public function getImage()
    {
        return $this->container['image'];
    }
    
    public function setImage($image)
    {
        $this->container['image'] = $image;
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
    
    public function getAbout()
    {
        return $this->container['about'];
    }
    
    public function setAbout($about)
    {
        $this->container['about'] = $about;
        return $this;
    }
    
    public function getFirstName()
    {
        return $this->container['first_name'];
    }
    
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;
        return $this;
    }
    
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }
    
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;
        return $this;
    }
    
    public function getRevieweeCount()
    {
        return $this->container['reviewee_count'];
    }
    
    public function setRevieweeCount($reviewee_count)
    {
        if (!is_null($reviewee_count) && (mb_strlen($reviewee_count) > 50)) {
            throw new \InvalidArgumentException('invalid length for $reviewee_count when calling ResponseAirbnb., must be smaller than or equal to 50.');
        }
        $this->container['reviewee_count'] = $reviewee_count;
        return $this;
    }
    
    public function getTrips()
    {
        return $this->container['trips'];
    }
    
    public function setTrips($trips)
    {
        $this->container['trips'] = $trips;
        return $this;
    }
    
    public function getWork()
    {
        return $this->container['work'];
    }
    
    public function setWork($work)
    {
        $this->container['work'] = $work;
        return $this;
    }
    
    public function getIdentityVerified()
    {
        return $this->container['identity_verified'];
    }
    
    public function setIdentityVerified($identity_verified)
    {
        $this->container['identity_verified'] = $identity_verified;
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
