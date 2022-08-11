<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class RequestData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'otorgante';
    
    protected static $RCCPMTypes = [
        'folio_otorgante' => 'string',
        'folio_consulta' => 'string',
        'ip' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'folio_otorgante' => null,
        'folio_consulta' => null,
        'ip' => null,
        'email' => null,
        'phone' => null
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
        'folio_otorgante' => 'folioOtorgante',
        'folio_consulta' => 'folioConsulta',
        'ip' => 'ip',
        'email' => 'email',
        'phone' => 'phone'
    ];
    
    protected static $setters = [
        'folio_otorgante' => 'setFolioOtorgante',
        'folio_consulta' => 'setFolioConsulta',
        'ip' => 'setIp',
        'email' => 'setEmail',
        'phone' => 'setPhone'
    ];
    
    protected static $getters = [
        'folio_otorgante' => 'getFolioOtorgante',
        'folio_consulta' => 'getFolioConsulta',
        'ip' => 'getIp',
        'email' => 'getEmail',
        'phone' => 'getPhone'
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
        $this->container['folio_otorgante'] = isset($data['folio_otorgante']) ? $data['folio_otorgante'] : null;
        $this->container['folio_consulta'] = isset($data['folio_consulta']) ? $data['folio_consulta'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['folio_otorgante'] === null) {
            $invalidProperties[] = "'folio_otorgante' can't be null";
        }
        if ((mb_strlen($this->container['folio_otorgante']) > 25)) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', the character length must be smaller than or equal to 25.";
        }
        if ((mb_strlen($this->container['folio_otorgante']) < 4)) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', the character length must be bigger than or equal to 4.";
        }
        if ($this->container['folio_consulta'] === null) {
            $invalidProperties[] = "'folio_consulta' can't be null";
        }
        if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 25)) {
            $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) < 4)) {
            $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 4.";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) > 25)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 25.";
        }
        if ((mb_strlen($this->container['email']) < 4)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 4.";
        }
        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) < 4)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be bigger than or equal to 4.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioOtorgante()
    {
        return $this->container['folio_otorgante'];
    }
    
    public function setFolioOtorgante($folio_otorgante)
    {
        if ((mb_strlen($folio_otorgante) > 25)) {
            throw new \InvalidArgumentException('invalid length for $folio_otorgante when calling Otorgante., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($folio_otorgante) < 4)) {
            throw new \InvalidArgumentException('invalid length for $folio_otorgante when calling Otorgante., must be bigger than or equal to 4.');
        }
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
    
    public function getIp()
    {
        return $this->container['ip'];
    }
    
    public function setIp($ip)
    {
        if (!is_null($ip) && (mb_strlen($ip) > 25)) {
            throw new \InvalidArgumentException('invalid length for $ip when calling Otorgante., must be smaller than or equal to 25.');
        }
        if (!is_null($ip) && (mb_strlen($ip) < 4)) {
            throw new \InvalidArgumentException('invalid length for $ip when calling Otorgante., must be bigger than or equal to 4.');
        }
        $this->container['ip'] = $ip;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->container['email'];
    }
    
    public function setEmail($email)
    {
        if ((mb_strlen($email) > 25)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Otorgante., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($email) < 4)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Otorgante., must be bigger than or equal to 4.');
        }
        $this->container['email'] = $email;
        return $this;
    }
    
    public function getPhone()
    {
        return $this->container['phone'];
    }
    
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Otorgante., must be smaller than or equal to 25.');
        }
        if (!is_null($phone) && (mb_strlen($phone) < 4)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling Otorgante., must be bigger than or equal to 4.');
        }
        $this->container['phone'] = $phone;
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
