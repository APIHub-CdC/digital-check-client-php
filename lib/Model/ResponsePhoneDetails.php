<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponsePhoneDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_phone_details';
    
    protected static $RCCPMTypes = [
        'number' => 'int',
        'valid' => 'bool',
        'type' => 'string',
        'country' => 'string',
        'carrier' => 'string',
        'grade' => 'float',
        'account_details' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhAccountDetails'
    ];
    
    protected static $RCCPMFormats = [
        'number' => null,
        'valid' => null,
        'type' => null,
        'country' => null,
        'carrier' => null,
        'grade' => null,
        'account_details' => null
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
        'number' => 'number',
        'valid' => 'valid',
        'type' => 'type',
        'country' => 'country',
        'carrier' => 'carrier',
        'grade' => 'grade',
        'account_details' => 'account_details'
    ];
    
    protected static $setters = [
        'number' => 'setNumber',
        'valid' => 'setValid',
        'type' => 'setType',
        'country' => 'setCountry',
        'carrier' => 'setCarrier',
        'grade' => 'setGrade',
        'account_details' => 'setAccountDetails'
    ];
    
    protected static $getters = [
        'number' => 'getNumber',
        'valid' => 'getValid',
        'type' => 'getType',
        'country' => 'getCountry',
        'carrier' => 'getCarrier',
        'grade' => 'getGrade',
        'account_details' => 'getAccountDetails'
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
    const TYPE_PREMIUM_RATE = 'PREMIUM_RATE';
    const TYPE_TOLL_FREE = 'TOLL_FREE';
    const TYPE_SHARED_COST = 'SHARED_COST';
    const TYPE_VOIP = 'VOIP';
    const TYPE_PERSONAL_NUMBER = 'PERSONAL_NUMBER';
    const TYPE_PAGER = 'PAGER';
    const TYPE_UAN = 'UAN';
    const TYPE_VOICEMAIL = 'VOICEMAIL';
    const TYPE_FIXED_LINE_OR_MOBILE = 'FIXED_LINE_OR_MOBILE';
    const TYPE_FIXED_LINE = 'FIXED_LINE';
    const TYPE_MOBILE = 'MOBILE';
    
    
    
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PREMIUM_RATE,
            self::TYPE_TOLL_FREE,
            self::TYPE_SHARED_COST,
            self::TYPE_VOIP,
            self::TYPE_PERSONAL_NUMBER,
            self::TYPE_PAGER,
            self::TYPE_UAN,
            self::TYPE_VOICEMAIL,
            self::TYPE_FIXED_LINE_OR_MOBILE,
            self::TYPE_FIXED_LINE,
            self::TYPE_MOBILE,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['valid'] = isset($data['valid']) ? $data['valid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['grade'] = isset($data['grade']) ? $data['grade'] : null;
        $this->container['account_details'] = isset($data['account_details']) ? $data['account_details'] : null;
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
    
    public function getNumber()
    {
        return $this->container['number'];
    }
    
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }
    
    public function getValid()
    {
        return $this->container['valid'];
    }
    
    public function setValid($valid)
    {
        $this->container['valid'] = $valid;
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
    
    public function getCountry()
    {
        return $this->container['country'];
    }
    
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }
    
    public function getCarrier()
    {
        return $this->container['carrier'];
    }
    
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;
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
    
    public function getAccountDetails()
    {
        return $this->container['account_details'];
    }
    
    public function setAccountDetails($account_details)
    {
        $this->container['account_details'] = $account_details;
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
