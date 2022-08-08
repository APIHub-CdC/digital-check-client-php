<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseDomainDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_domain_details';
    
    protected static $RCCPMTypes = [
        'domain' => 'string',
        'tld' => 'string',
        'registered' => 'bool',
        'created' => 'string',
        'updated' => 'string',
        'expires' => 'string',
        'registrar_name' => 'string',
        'registered_to' => 'string',
        'disposable' => 'bool',
        'free' => 'bool',
        'custom' => 'bool',
        'dmarc_enforced' => 'bool',
        'spf_strict' => 'bool',
        'valid_mx' => 'bool',
        'accept_all' => 'bool',
        'suspicious_tld' => 'bool',
        'website_exists' => 'bool'
    ];
    
    protected static $RCCPMFormats = [
        'domain' => null,
        'tld' => null,
        'registered' => null,
        'created' => null,
        'updated' => null,
        'expires' => null,
        'registrar_name' => null,
        'registered_to' => null,
        'disposable' => null,
        'free' => null,
        'custom' => null,
        'dmarc_enforced' => null,
        'spf_strict' => null,
        'valid_mx' => null,
        'accept_all' => null,
        'suspicious_tld' => null,
        'website_exists' => null
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
        'domain' => 'domain',
        'tld' => 'tld',
        'registered' => 'registered',
        'created' => 'created',
        'updated' => 'updated',
        'expires' => 'expires',
        'registrar_name' => 'registrar_name',
        'registered_to' => 'registered_to',
        'disposable' => 'disposable',
        'free' => 'free',
        'custom' => 'custom',
        'dmarc_enforced' => 'dmarc_enforced',
        'spf_strict' => 'spf_strict',
        'valid_mx' => 'valid_mx',
        'accept_all' => 'accept_all',
        'suspicious_tld' => 'suspicious_tld',
        'website_exists' => 'website_exists'
    ];
    
    protected static $setters = [
        'domain' => 'setDomain',
        'tld' => 'setTld',
        'registered' => 'setRegistered',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'expires' => 'setExpires',
        'registrar_name' => 'setRegistrarName',
        'registered_to' => 'setRegisteredTo',
        'disposable' => 'setDisposable',
        'free' => 'setFree',
        'custom' => 'setCustom',
        'dmarc_enforced' => 'setDmarcEnforced',
        'spf_strict' => 'setSpfStrict',
        'valid_mx' => 'setValidMx',
        'accept_all' => 'setAcceptAll',
        'suspicious_tld' => 'setSuspiciousTld',
        'website_exists' => 'setWebsiteExists'
    ];
    
    protected static $getters = [
        'domain' => 'getDomain',
        'tld' => 'getTld',
        'registered' => 'getRegistered',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'expires' => 'getExpires',
        'registrar_name' => 'getRegistrarName',
        'registered_to' => 'getRegisteredTo',
        'disposable' => 'getDisposable',
        'free' => 'getFree',
        'custom' => 'getCustom',
        'dmarc_enforced' => 'getDmarcEnforced',
        'spf_strict' => 'getSpfStrict',
        'valid_mx' => 'getValidMx',
        'accept_all' => 'getAcceptAll',
        'suspicious_tld' => 'getSuspiciousTld',
        'website_exists' => 'getWebsiteExists'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['tld'] = isset($data['tld']) ? $data['tld'] : null;
        $this->container['registered'] = isset($data['registered']) ? $data['registered'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['registrar_name'] = isset($data['registrar_name']) ? $data['registrar_name'] : null;
        $this->container['registered_to'] = isset($data['registered_to']) ? $data['registered_to'] : null;
        $this->container['disposable'] = isset($data['disposable']) ? $data['disposable'] : null;
        $this->container['free'] = isset($data['free']) ? $data['free'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['dmarc_enforced'] = isset($data['dmarc_enforced']) ? $data['dmarc_enforced'] : null;
        $this->container['spf_strict'] = isset($data['spf_strict']) ? $data['spf_strict'] : null;
        $this->container['valid_mx'] = isset($data['valid_mx']) ? $data['valid_mx'] : null;
        $this->container['accept_all'] = isset($data['accept_all']) ? $data['accept_all'] : null;
        $this->container['suspicious_tld'] = isset($data['suspicious_tld']) ? $data['suspicious_tld'] : null;
        $this->container['website_exists'] = isset($data['website_exists']) ? $data['website_exists'] : null;
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
    
    public function getDomain()
    {
        return $this->container['domain'];
    }
    
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }
    
    public function getTld()
    {
        return $this->container['tld'];
    }
    
    public function setTld($tld)
    {
        $this->container['tld'] = $tld;
        return $this;
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
    
    public function getCreated()
    {
        return $this->container['created'];
    }
    
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }
    
    public function getUpdated()
    {
        return $this->container['updated'];
    }
    
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }
    
    public function getExpires()
    {
        return $this->container['expires'];
    }
    
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;
        return $this;
    }
    
    public function getRegistrarName()
    {
        return $this->container['registrar_name'];
    }
    
    public function setRegistrarName($registrar_name)
    {
        $this->container['registrar_name'] = $registrar_name;
        return $this;
    }
    
    public function getRegisteredTo()
    {
        return $this->container['registered_to'];
    }
    
    public function setRegisteredTo($registered_to)
    {
        $this->container['registered_to'] = $registered_to;
        return $this;
    }
    
    public function getDisposable()
    {
        return $this->container['disposable'];
    }
    
    public function setDisposable($disposable)
    {
        $this->container['disposable'] = $disposable;
        return $this;
    }
    
    public function getFree()
    {
        return $this->container['free'];
    }
    
    public function setFree($free)
    {
        $this->container['free'] = $free;
        return $this;
    }
    
    public function getCustom()
    {
        return $this->container['custom'];
    }
    
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;
        return $this;
    }
    
    public function getDmarcEnforced()
    {
        return $this->container['dmarc_enforced'];
    }
    
    public function setDmarcEnforced($dmarc_enforced)
    {
        $this->container['dmarc_enforced'] = $dmarc_enforced;
        return $this;
    }
    
    public function getSpfStrict()
    {
        return $this->container['spf_strict'];
    }
    
    public function setSpfStrict($spf_strict)
    {
        $this->container['spf_strict'] = $spf_strict;
        return $this;
    }
    
    public function getValidMx()
    {
        return $this->container['valid_mx'];
    }
    
    public function setValidMx($valid_mx)
    {
        $this->container['valid_mx'] = $valid_mx;
        return $this;
    }
    
    public function getAcceptAll()
    {
        return $this->container['accept_all'];
    }
    
    public function setAcceptAll($accept_all)
    {
        $this->container['accept_all'] = $accept_all;
        return $this;
    }
    
    public function getSuspiciousTld()
    {
        return $this->container['suspicious_tld'];
    }
    
    public function setSuspiciousTld($suspicious_tld)
    {
        $this->container['suspicious_tld'] = $suspicious_tld;
        return $this;
    }
    
    public function getWebsiteExists()
    {
        return $this->container['website_exists'];
    }
    
    public function setWebsiteExists($website_exists)
    {
        $this->container['website_exists'] = $website_exists;
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
