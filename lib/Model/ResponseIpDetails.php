<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseIpDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_ip_details';
    
    protected static $RCCPMTypes = [
        'ip' => 'string',
        'grade' => 'float',
        'country' => 'string',
        'state_prov' => 'string',
        'city' => 'string',
        'timezone_offset' => 'string',
        'isp_name' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'type' => 'string',
        'open_ports' => 'float[]',
        'tor' => 'bool',
        'harmful' => 'bool',
        'vpn' => 'bool',
        'web_proxy' => 'bool',
        'public_proxy' => 'bool',
        'spam_number' => 'int',
        'spam_urls' => 'string[]'
    ];
    
    protected static $RCCPMFormats = [
        'ip' => null,
        'grade' => null,
        'country' => null,
        'state_prov' => null,
        'city' => null,
        'timezone_offset' => null,
        'isp_name' => null,
        'latitude' => null,
        'longitude' => null,
        'type' => null,
        'open_ports' => null,
        'tor' => null,
        'harmful' => null,
        'vpn' => null,
        'web_proxy' => null,
        'public_proxy' => null,
        'spam_number' => null,
        'spam_urls' => null
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
        'ip' => 'ip',
        'grade' => 'grade',
        'country' => 'country',
        'state_prov' => 'state_prov',
        'city' => 'city',
        'timezone_offset' => 'timezone_offset',
        'isp_name' => 'isp_name',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'type' => 'type',
        'open_ports' => 'open_ports',
        'tor' => 'tor',
        'harmful' => 'harmful',
        'vpn' => 'vpn',
        'web_proxy' => 'web_proxy',
        'public_proxy' => 'public_proxy',
        'spam_number' => 'spam_number',
        'spam_urls' => 'spam_urls'
    ];
    
    protected static $setters = [
        'ip' => 'setIp',
        'grade' => 'setGrade',
        'country' => 'setCountry',
        'state_prov' => 'setStateProv',
        'city' => 'setCity',
        'timezone_offset' => 'setTimezoneOffset',
        'isp_name' => 'setIspName',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'type' => 'setType',
        'open_ports' => 'setOpenPorts',
        'tor' => 'setTor',
        'harmful' => 'setHarmful',
        'vpn' => 'setVpn',
        'web_proxy' => 'setWebProxy',
        'public_proxy' => 'setPublicProxy',
        'spam_number' => 'setSpamNumber',
        'spam_urls' => 'setSpamUrls'
    ];
    
    protected static $getters = [
        'ip' => 'getIp',
        'grade' => 'getGrade',
        'country' => 'getCountry',
        'state_prov' => 'getStateProv',
        'city' => 'getCity',
        'timezone_offset' => 'getTimezoneOffset',
        'isp_name' => 'getIspName',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'type' => 'getType',
        'open_ports' => 'getOpenPorts',
        'tor' => 'getTor',
        'harmful' => 'getHarmful',
        'vpn' => 'getVpn',
        'web_proxy' => 'getWebProxy',
        'public_proxy' => 'getPublicProxy',
        'spam_number' => 'getSpamNumber',
        'spam_urls' => 'getSpamUrls'
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
    const TYPE_COM__COMMERCIAL = 'COM';
    const TYPE_ORG__ORGANIZATION = 'ORG';
    const TYPE_EDU__SCHOOLCOLLEGEUNIVERSITY = 'EDU';
    const TYPE_LIB__LIBRARY = 'LIB';
    const TYPE_ISP__FIXED_LINE_ISP = 'ISP';
    const TYPE_MOB__MOBILE_ISP = 'MOB';
    const TYPE_DCH__DATA_CENTERWEB_HOSTING = 'DCH';
    const TYPE_RSV__RESERVED = 'RSV';
    const TYPE_MIL__MILITARY = 'MIL';
    const TYPE_CDN__CONTENT_DELIVERY_NETWORK = 'CDN';
    const TYPE_GOV__GOVERNMENT = 'GOV';
    const TYPE_SES__SEARCH_ENGINE_SPIDER = 'SES';
    
    
    
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COM__COMMERCIAL,
            self::TYPE_ORG__ORGANIZATION,
            self::TYPE_EDU__SCHOOLCOLLEGEUNIVERSITY,
            self::TYPE_LIB__LIBRARY,
            self::TYPE_ISP__FIXED_LINE_ISP,
            self::TYPE_MOB__MOBILE_ISP,
            self::TYPE_DCH__DATA_CENTERWEB_HOSTING,
            self::TYPE_RSV__RESERVED,
            self::TYPE_MIL__MILITARY,
            self::TYPE_CDN__CONTENT_DELIVERY_NETWORK,
            self::TYPE_GOV__GOVERNMENT,
            self::TYPE_SES__SEARCH_ENGINE_SPIDER,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['grade'] = isset($data['grade']) ? $data['grade'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['state_prov'] = isset($data['state_prov']) ? $data['state_prov'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['timezone_offset'] = isset($data['timezone_offset']) ? $data['timezone_offset'] : null;
        $this->container['isp_name'] = isset($data['isp_name']) ? $data['isp_name'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['open_ports'] = isset($data['open_ports']) ? $data['open_ports'] : null;
        $this->container['tor'] = isset($data['tor']) ? $data['tor'] : null;
        $this->container['harmful'] = isset($data['harmful']) ? $data['harmful'] : null;
        $this->container['vpn'] = isset($data['vpn']) ? $data['vpn'] : null;
        $this->container['web_proxy'] = isset($data['web_proxy']) ? $data['web_proxy'] : null;
        $this->container['public_proxy'] = isset($data['public_proxy']) ? $data['public_proxy'] : null;
        $this->container['spam_number'] = isset($data['spam_number']) ? $data['spam_number'] : null;
        $this->container['spam_urls'] = isset($data['spam_urls']) ? $data['spam_urls'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getIp()
    {
        return $this->container['ip'];
    }
    
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }
    
    public function getGrade()
    {
        return $this->container['grade'];
    }
    
    public function setGrade($grade)
    {
        $this->container['grade'] = $grade;
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
    
    public function getStateProv()
    {
        return $this->container['state_prov'];
    }
    
    public function setStateProv($state_prov)
    {
        $this->container['state_prov'] = $state_prov;
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
    
    public function getTimezoneOffset()
    {
        return $this->container['timezone_offset'];
    }
    
    public function setTimezoneOffset($timezone_offset)
    {
        $this->container['timezone_offset'] = $timezone_offset;
        return $this;
    }
    
    public function getIspName()
    {
        return $this->container['isp_name'];
    }
    
    public function setIspName($isp_name)
    {
        $this->container['isp_name'] = $isp_name;
        return $this;
    }
    
    public function getLatitude()
    {
        return $this->container['latitude'];
    }
    
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;
        return $this;
    }
    
    public function getLongitude()
    {
        return $this->container['longitude'];
    }
    
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;
        return $this;
    }
    
    public function getType()
    {
        return $this->container['type'];
    }
    
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;
        return $this;
    }
    
    public function getOpenPorts()
    {
        return $this->container['open_ports'];
    }
    
    public function setOpenPorts($open_ports)
    {
        $this->container['open_ports'] = $open_ports;
        return $this;
    }
    
    public function getTor()
    {
        return $this->container['tor'];
    }
    
    public function setTor($tor)
    {
        $this->container['tor'] = $tor;
        return $this;
    }
    
    public function getHarmful()
    {
        return $this->container['harmful'];
    }
    
    public function setHarmful($harmful)
    {
        $this->container['harmful'] = $harmful;
        return $this;
    }
    
    public function getVpn()
    {
        return $this->container['vpn'];
    }
    
    public function setVpn($vpn)
    {
        $this->container['vpn'] = $vpn;
        return $this;
    }
    
    public function getWebProxy()
    {
        return $this->container['web_proxy'];
    }
    
    public function setWebProxy($web_proxy)
    {
        $this->container['web_proxy'] = $web_proxy;
        return $this;
    }
    
    public function getPublicProxy()
    {
        return $this->container['public_proxy'];
    }
    
    public function setPublicProxy($public_proxy)
    {
        $this->container['public_proxy'] = $public_proxy;
        return $this;
    }
    
    public function getSpamNumber()
    {
        return $this->container['spam_number'];
    }
    
    public function setSpamNumber($spam_number)
    {
        $this->container['spam_number'] = $spam_number;
        return $this;
    }
    
    public function getSpamUrls()
    {
        return $this->container['spam_urls'];
    }
    
    public function setSpamUrls($spam_urls)
    {
        $this->container['spam_urls'] = $spam_urls;
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
