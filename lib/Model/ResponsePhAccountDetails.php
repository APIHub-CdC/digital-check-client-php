<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponsePhAccountDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_ph_account_details';
    
    protected static $RCCPMTypes = [
        'facebook' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhFacebook',
        'google' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhGoogle',
        'twitter' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhTwitter',
        'instagram' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhInstagram',
        'yahoo' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhYahoo',
        'microsoft' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhMicrosoft',
        'snapchat' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhSnapchat',
        'skype' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhSkype',
        'whatsapp' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhWhatsapp',
        'telegram' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhTelegram',
        'viber' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhViber',
        'kakao' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhKakao',
        'ok' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhOk',
        'zalo' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhZalo',
        'line' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhLine',
        'flipkart' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhFlipkart',
        'bukalapak' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhBukalapak',
        'jdid' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePhJdid'
    ];
    
    protected static $RCCPMFormats = [
        'facebook' => null,
        'google' => null,
        'twitter' => null,
        'instagram' => null,
        'yahoo' => null,
        'microsoft' => null,
        'snapchat' => null,
        'skype' => null,
        'whatsapp' => null,
        'telegram' => null,
        'viber' => null,
        'kakao' => null,
        'ok' => null,
        'zalo' => null,
        'line' => null,
        'flipkart' => null,
        'bukalapak' => null,
        'jdid' => null
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
        'facebook' => 'facebook',
        'google' => 'google',
        'twitter' => 'twitter',
        'instagram' => 'instagram',
        'yahoo' => 'yahoo',
        'microsoft' => 'microsoft',
        'snapchat' => 'snapchat',
        'skype' => 'skype',
        'whatsapp' => 'whatsapp',
        'telegram' => 'telegram',
        'viber' => 'viber',
        'kakao' => 'kakao',
        'ok' => 'ok',
        'zalo' => 'zalo',
        'line' => 'line',
        'flipkart' => 'flipkart',
        'bukalapak' => 'bukalapak',
        'jdid' => 'jdid'
    ];
    
    protected static $setters = [
        'facebook' => 'setFacebook',
        'google' => 'setGoogle',
        'twitter' => 'setTwitter',
        'instagram' => 'setInstagram',
        'yahoo' => 'setYahoo',
        'microsoft' => 'setMicrosoft',
        'snapchat' => 'setSnapchat',
        'skype' => 'setSkype',
        'whatsapp' => 'setWhatsapp',
        'telegram' => 'setTelegram',
        'viber' => 'setViber',
        'kakao' => 'setKakao',
        'ok' => 'setOk',
        'zalo' => 'setZalo',
        'line' => 'setLine',
        'flipkart' => 'setFlipkart',
        'bukalapak' => 'setBukalapak',
        'jdid' => 'setJdid'
    ];
    
    protected static $getters = [
        'facebook' => 'getFacebook',
        'google' => 'getGoogle',
        'twitter' => 'getTwitter',
        'instagram' => 'getInstagram',
        'yahoo' => 'getYahoo',
        'microsoft' => 'getMicrosoft',
        'snapchat' => 'getSnapchat',
        'skype' => 'getSkype',
        'whatsapp' => 'getWhatsapp',
        'telegram' => 'getTelegram',
        'viber' => 'getViber',
        'kakao' => 'getKakao',
        'ok' => 'getOk',
        'zalo' => 'getZalo',
        'line' => 'getLine',
        'flipkart' => 'getFlipkart',
        'bukalapak' => 'getBukalapak',
        'jdid' => 'getJdid'
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
        $this->container['facebook'] = isset($data['facebook']) ? $data['facebook'] : null;
        $this->container['google'] = isset($data['google']) ? $data['google'] : null;
        $this->container['twitter'] = isset($data['twitter']) ? $data['twitter'] : null;
        $this->container['instagram'] = isset($data['instagram']) ? $data['instagram'] : null;
        $this->container['yahoo'] = isset($data['yahoo']) ? $data['yahoo'] : null;
        $this->container['microsoft'] = isset($data['microsoft']) ? $data['microsoft'] : null;
        $this->container['snapchat'] = isset($data['snapchat']) ? $data['snapchat'] : null;
        $this->container['skype'] = isset($data['skype']) ? $data['skype'] : null;
        $this->container['whatsapp'] = isset($data['whatsapp']) ? $data['whatsapp'] : null;
        $this->container['telegram'] = isset($data['telegram']) ? $data['telegram'] : null;
        $this->container['viber'] = isset($data['viber']) ? $data['viber'] : null;
        $this->container['kakao'] = isset($data['kakao']) ? $data['kakao'] : null;
        $this->container['ok'] = isset($data['ok']) ? $data['ok'] : null;
        $this->container['zalo'] = isset($data['zalo']) ? $data['zalo'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['flipkart'] = isset($data['flipkart']) ? $data['flipkart'] : null;
        $this->container['bukalapak'] = isset($data['bukalapak']) ? $data['bukalapak'] : null;
        $this->container['jdid'] = isset($data['jdid']) ? $data['jdid'] : null;
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
    
    public function getFacebook()
    {
        return $this->container['facebook'];
    }
    
    public function setFacebook($facebook)
    {
        $this->container['facebook'] = $facebook;
        return $this;
    }
    
    public function getGoogle()
    {
        return $this->container['google'];
    }
    
    public function setGoogle($google)
    {
        $this->container['google'] = $google;
        return $this;
    }
    
    public function getTwitter()
    {
        return $this->container['twitter'];
    }
    
    public function setTwitter($twitter)
    {
        $this->container['twitter'] = $twitter;
        return $this;
    }
    
    public function getInstagram()
    {
        return $this->container['instagram'];
    }
    
    public function setInstagram($instagram)
    {
        $this->container['instagram'] = $instagram;
        return $this;
    }
    
    public function getYahoo()
    {
        return $this->container['yahoo'];
    }
    
    public function setYahoo($yahoo)
    {
        $this->container['yahoo'] = $yahoo;
        return $this;
    }
    
    public function getMicrosoft()
    {
        return $this->container['microsoft'];
    }
    
    public function setMicrosoft($microsoft)
    {
        $this->container['microsoft'] = $microsoft;
        return $this;
    }
    
    public function getSnapchat()
    {
        return $this->container['snapchat'];
    }
    
    public function setSnapchat($snapchat)
    {
        $this->container['snapchat'] = $snapchat;
        return $this;
    }
    
    public function getSkype()
    {
        return $this->container['skype'];
    }
    
    public function setSkype($skype)
    {
        $this->container['skype'] = $skype;
        return $this;
    }
    
    public function getWhatsapp()
    {
        return $this->container['whatsapp'];
    }
    
    public function setWhatsapp($whatsapp)
    {
        $this->container['whatsapp'] = $whatsapp;
        return $this;
    }
    
    public function getTelegram()
    {
        return $this->container['telegram'];
    }
    
    public function setTelegram($telegram)
    {
        $this->container['telegram'] = $telegram;
        return $this;
    }
    
    public function getViber()
    {
        return $this->container['viber'];
    }
    
    public function setViber($viber)
    {
        $this->container['viber'] = $viber;
        return $this;
    }
    
    public function getKakao()
    {
        return $this->container['kakao'];
    }
    
    public function setKakao($kakao)
    {
        $this->container['kakao'] = $kakao;
        return $this;
    }
    
    public function getOk()
    {
        return $this->container['ok'];
    }
    
    public function setOk($ok)
    {
        $this->container['ok'] = $ok;
        return $this;
    }
    
    public function getZalo()
    {
        return $this->container['zalo'];
    }
    
    public function setZalo($zalo)
    {
        $this->container['zalo'] = $zalo;
        return $this;
    }
    
    public function getLine()
    {
        return $this->container['line'];
    }
    
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }
    
    public function getFlipkart()
    {
        return $this->container['flipkart'];
    }
    
    public function setFlipkart($flipkart)
    {
        $this->container['flipkart'] = $flipkart;
        return $this;
    }
    
    public function getBukalapak()
    {
        return $this->container['bukalapak'];
    }
    
    public function setBukalapak($bukalapak)
    {
        $this->container['bukalapak'] = $bukalapak;
        return $this;
    }
    
    public function getJdid()
    {
        return $this->container['jdid'];
    }
    
    public function setJdid($jdid)
    {
        $this->container['jdid'] = $jdid;
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
