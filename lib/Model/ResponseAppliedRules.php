<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseAppliedRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_applied_rules';
    
    protected static $RCCPMTypes = [
        'id' => 'string',
        'name' => 'string',
        'operation' => 'string',
        'score' => 'float'
    ];
    
    protected static $RCCPMFormats = [
        'id' => null,
        'name' => null,
        'operation' => null,
        'score' => null
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
        'name' => 'name',
        'operation' => 'operation',
        'score' => 'score'
    ];
    
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'operation' => 'setOperation',
        'score' => 'setScore'
    ];
    
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'operation' => 'getOperation',
        'score' => 'getScore'
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
    const OPERATION_PLUS = '+';
    const OPERATION_QUOTE = '\'';
    const OPERATION_APPROVE = 'APPROVE';
    const OPERATION_REVIEW = 'REVIEW';
    const OPERATION_DECLINE = 'DECLINE';
    const OPERATION_BLACKLIST = 'BLACKLIST';
    const OPERATION_WHITELIST = 'WHITELIST';
    const OPERATION__LIST = 'LIST';
    
    
    
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_PLUS,
            self::OPERATION_QUOTE,
            self::OPERATION_APPROVE,
            self::OPERATION_REVIEW,
            self::OPERATION_DECLINE,
            self::OPERATION_BLACKLIST,
            self::OPERATION_WHITELIST,
            self::OPERATION__LIST,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
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
    
    public function getName()
    {
        return $this->container['name'];
    }
    
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }
    
    public function getOperation()
    {
        return $this->container['operation'];
    }
    
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;
        return $this;
    }
    
    public function getScore()
    {
        return $this->container['score'];
    }
    
    public function setScore($score)
    {
        $this->container['score'] = $score;
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
