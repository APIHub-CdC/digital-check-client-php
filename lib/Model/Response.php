<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class Response implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response';
    
    protected static $RCCPMTypes = [
        'success' => 'bool',
        'folio_otorgante' => 'string',
        'folio_consulta' => 'string',
        'error' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseError',
        'data' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseData'
    ];
    
    protected static $RCCPMFormats = [
        'success' => null,
        'folio_otorgante' => null,
        'folio_consulta' => null,
        'error' => null,
        'data' => null
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
        'success' => 'success',
        'folio_otorgante' => 'folioOtorgante',
        'folio_consulta' => 'folioConsulta',
        'error' => 'error',
        'data' => 'data'
    ];
    
    protected static $setters = [
        'success' => 'setSuccess',
        'folio_otorgante' => 'setFolioOtorgante',
        'folio_consulta' => 'setFolioConsulta',
        'error' => 'setError',
        'data' => 'setData'
    ];
    
    protected static $getters = [
        'success' => 'getSuccess',
        'folio_otorgante' => 'getFolioOtorgante',
        'folio_consulta' => 'getFolioConsulta',
        'error' => 'getError',
        'data' => 'getData'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['folio_otorgante'] = isset($data['folio_otorgante']) ? $data['folio_otorgante'] : null;
        $this->container['folio_consulta'] = isset($data['folio_consulta']) ? $data['folio_consulta'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
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
    
    public function getSuccess()
    {
        return $this->container['success'];
    }
    
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }
    
    public function getFolioOtorgante()
    {
        return $this->container['folio_otorgante'];
    }
    
    public function setFolioOtorgante($folio_otorgante)
    {
        $this->container['folio_otorgante'] = $folio_otorgante;
        return $this;
    }
    
    public function getFolioConsulta()
    {
        return $this->container['folio_consulta'];
    }
    
    public function setFolioConsulta($folio_consulta)
    {
        $this->container['folio_consulta'] = $folio_consulta;
        return $this;
    }
    
    public function getError()
    {
        return $this->container['error'];
    }
    
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }
    
    public function getData()
    {
        return $this->container['data'];
    }
    
    public function setData($data)
    {
        $this->container['data'] = $data;
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
