<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseEmailDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_email_details';
    
    protected static $RCCPMTypes = [
        'email' => 'string',
        'grade' => 'string',
        'deliverable' => 'bool',
        'domain_details' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseDomainDetails',
        'account_details' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseAccountDetails',
        'breach_details' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseBreachDetails'
    ];
    
    protected static $RCCPMFormats = [
        'email' => null,
        'grade' => null,
        'deliverable' => null,
        'domain_details' => null,
        'account_details' => null,
        'breach_details' => null
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
        'email' => 'email',
        'grade' => 'grade',
        'deliverable' => 'deliverable',
        'domain_details' => 'domain_details',
        'account_details' => 'account_details',
        'breach_details' => 'breach_details'
    ];
    
    protected static $setters = [
        'email' => 'setEmail',
        'grade' => 'setGrade',
        'deliverable' => 'setDeliverable',
        'domain_details' => 'setDomainDetails',
        'account_details' => 'setAccountDetails',
        'breach_details' => 'setBreachDetails'
    ];
    
    protected static $getters = [
        'email' => 'getEmail',
        'grade' => 'getGrade',
        'deliverable' => 'getDeliverable',
        'domain_details' => 'getDomainDetails',
        'account_details' => 'getAccountDetails',
        'breach_details' => 'getBreachDetails'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['grade'] = isset($data['grade']) ? $data['grade'] : null;
        $this->container['deliverable'] = isset($data['deliverable']) ? $data['deliverable'] : null;
        $this->container['domain_details'] = isset($data['domain_details']) ? $data['domain_details'] : null;
        $this->container['account_details'] = isset($data['account_details']) ? $data['account_details'] : null;
        $this->container['breach_details'] = isset($data['breach_details']) ? $data['breach_details'] : null;
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
    
    public function getEmail()
    {
        return $this->container['email'];
    }
    
    public function setEmail($email)
    {
        $this->container['email'] = $email;
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
    
    public function getDeliverable()
    {
        return $this->container['deliverable'];
    }
    
    public function setDeliverable($deliverable)
    {
        $this->container['deliverable'] = $deliverable;
        return $this;
    }
    
    public function getDomainDetails()
    {
        return $this->container['domain_details'];
    }
    
    public function setDomainDetails($domain_details)
    {
        $this->container['domain_details'] = $domain_details;
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
    
    public function getBreachDetails()
    {
        return $this->container['breach_details'];
    }
    
    public function setBreachDetails($breach_details)
    {
        $this->container['breach_details'] = $breach_details;
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
