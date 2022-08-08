<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseBreachDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_breach_details';
    
    protected static $RCCPMTypes = [
        'haveibeenpwned_listed' => 'bool',
        'number_of_breaches' => 'int',
        'first_breach' => 'string',
        'breaches' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseBreaches'
    ];
    
    protected static $RCCPMFormats = [
        'haveibeenpwned_listed' => null,
        'number_of_breaches' => null,
        'first_breach' => null,
        'breaches' => null
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
        'haveibeenpwned_listed' => 'haveibeenpwned_listed',
        'number_of_breaches' => 'number_of_breaches',
        'first_breach' => 'first_breach',
        'breaches' => 'breaches'
    ];
    
    protected static $setters = [
        'haveibeenpwned_listed' => 'setHaveibeenpwnedListed',
        'number_of_breaches' => 'setNumberOfBreaches',
        'first_breach' => 'setFirstBreach',
        'breaches' => 'setBreaches'
    ];
    
    protected static $getters = [
        'haveibeenpwned_listed' => 'getHaveibeenpwnedListed',
        'number_of_breaches' => 'getNumberOfBreaches',
        'first_breach' => 'getFirstBreach',
        'breaches' => 'getBreaches'
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
        $this->container['haveibeenpwned_listed'] = isset($data['haveibeenpwned_listed']) ? $data['haveibeenpwned_listed'] : null;
        $this->container['number_of_breaches'] = isset($data['number_of_breaches']) ? $data['number_of_breaches'] : null;
        $this->container['first_breach'] = isset($data['first_breach']) ? $data['first_breach'] : null;
        $this->container['breaches'] = isset($data['breaches']) ? $data['breaches'] : null;
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
    
    public function getHaveibeenpwnedListed()
    {
        return $this->container['haveibeenpwned_listed'];
    }
    
    public function setHaveibeenpwnedListed($haveibeenpwned_listed)
    {
        $this->container['haveibeenpwned_listed'] = $haveibeenpwned_listed;
        return $this;
    }
    
    public function getNumberOfBreaches()
    {
        return $this->container['number_of_breaches'];
    }
    
    public function setNumberOfBreaches($number_of_breaches)
    {
        $this->container['number_of_breaches'] = $number_of_breaches;
        return $this;
    }
    
    public function getFirstBreach()
    {
        return $this->container['first_breach'];
    }
    
    public function setFirstBreach($first_breach)
    {
        $this->container['first_breach'] = $first_breach;
        return $this;
    }
    
    public function getBreaches()
    {
        return $this->container['breaches'];
    }
    
    public function setBreaches($breaches)
    {
        $this->container['breaches'] = $breaches;
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
