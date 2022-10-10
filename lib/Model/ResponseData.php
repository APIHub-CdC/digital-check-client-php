<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_data';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'state' => 'string',
        'fraud_grade' => 'float',
        'version' => 'string',
        'applied_rules' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseAppliedRules[]',
        'ip_details' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseIpDetails',
        'email_details' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseEmailDetails',
        'phone_details' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhoneDetails'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'state' => null,
        'fraud_grade' => null,
        'version' => null,
        'applied_rules' => null,
        'ip_details' => null,
        'email_details' => null,
        'phone_details' => null
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
        'id' => 'id',
        'state' => 'state',
        'fraud_grade' => 'fraud_grade',
        'version' => 'version',
        'applied_rules' => 'applied_rules',
        'ip_details' => 'ip_details',
        'email_details' => 'email_details',
        'phone_details' => 'phone_details'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'fraud_grade' => 'setFraudGrade',
        'version' => 'setVersion',
        'applied_rules' => 'setAppliedRules',
        'ip_details' => 'setIpDetails',
        'email_details' => 'setEmailDetails',
        'phone_details' => 'setPhoneDetails'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'fraud_grade' => 'getFraudGrade',
        'version' => 'getVersion',
        'applied_rules' => 'getAppliedRules',
        'ip_details' => 'getIpDetails',
        'email_details' => 'getEmailDetails',
        'phone_details' => 'getPhoneDetails'
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
    const STATE_APPROVE = 'APPROVE';
    const STATE_REVIEW = 'REVIEW';
    const STATE_DECLINE = 'DECLINE';
    
    
    
    public function getStateAllowableValues()
    {
        return [
            self::STATE_APPROVE,
            self::STATE_REVIEW,
            self::STATE_DECLINE,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['fraud_grade'] = isset($data['fraud_grade']) ? $data['fraud_grade'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['applied_rules'] = isset($data['applied_rules']) ? $data['applied_rules'] : null;
        $this->container['ip_details'] = isset($data['ip_details']) ? $data['ip_details'] : null;
        $this->container['email_details'] = isset($data['email_details']) ? $data['email_details'] : null;
        $this->container['phone_details'] = isset($data['phone_details']) ? $data['phone_details'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getId()
    {
        return $this->container['id'];
    }
    
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }
    
    public function getState()
    {
        return $this->container['state'];
    }
    
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;
        return $this;
    }
    
    public function getFraudGrade()
    {
        return $this->container['fraud_grade'];
    }
    
    public function setFraudGrade($fraud_grade)
    {
        $this->container['fraud_grade'] = $fraud_grade;
        return $this;
    }
    
    public function getVersion()
    {
        return $this->container['version'];
    }
    
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }
    
    public function getAppliedRules()
    {
        return $this->container['applied_rules'];
    }
    
    public function setAppliedRules($applied_rules)
    {
        $this->container['applied_rules'] = $applied_rules;
        return $this;
    }
    
    public function getIpDetails()
    {
        return $this->container['ip_details'];
    }
    
    public function setIpDetails($ip_details)
    {
        $this->container['ip_details'] = $ip_details;
        return $this;
    }
    
    public function getEmailDetails()
    {
        return $this->container['email_details'];
    }
    
    public function setEmailDetails($email_details)
    {
        $this->container['email_details'] = $email_details;
        return $this;
    }
    
    public function getPhoneDetails()
    {
        return $this->container['phone_details'];
    }
    
    public function setPhoneDetails($phone_details)
    {
        $this->container['phone_details'] = $phone_details;
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
