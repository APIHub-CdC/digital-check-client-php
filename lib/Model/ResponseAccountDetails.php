<?php

namespace CirculoDeCredito\DigitalCheck\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;

class ResponseAccountDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'response_account_details';
    
    protected static $RCCPMTypes = [
        'apple' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseApple',
        'ebay' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseEbay',
        'facebook' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseFacebook',
        'flickr' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseFlickr',
        'foursquare' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseFoursquare',
        'github' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseGithub',
        'google' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseGoogle',
        'gravatar' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseGravatar',
        'instagram' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseInstagram',
        'lastfm' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseLastfm',
        'linkedin' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseLinkedin',
        'microsoft' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseMicrosoft',
        'myspace' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseMyspace',
        'pinterest' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePinterest',
        'skype' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseSkype',
        'spotify' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseSpotify',
        'tumblr' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseTumblr',
        'twitter' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseTwitter',
        'vimeo' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseVimeo',
        'weibo' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseWeibo',
        'yahoo' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseYahoo',
        'discord' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseDiscord',
        'ok' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseOk',
        'kakao' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseKakao',
        'booking' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseBooking',
        'airbnb' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseAirbnb',
        'amazon' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseAmazon',
        'qzone' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseQzone',
        'adobe' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseAdobe',
        'mailru' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseMailru',
        'wordpress' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseWordpress',
        'imgur' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseImgur',
        'disneyplus' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseDisneyplus',
        'netflix' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseNetflix',
        'jdid' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseJdid',
        'flipkart' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseFlipkart',
        'bukalapak' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseBukalapak',
        'archiveorg' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseArchiveorg',
        'lazada' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseLazada',
        'zoho' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseZoho',
        'samsung' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseSamsung',
        'evernote' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseEvernote',
        'envato' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseEnvato',
        'patreon' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponsePatreon',
        'tokopedia' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseTokopedia',
        'rambler' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseRambler',
        'quora' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseQuora',
        'atlassian' => 'CirculoDeCredito\DigitalCheck\Client\Model\ResponseAtlassian'
    ];
    
    protected static $RCCPMFormats = [
        'apple' => null,
        'ebay' => null,
        'facebook' => null,
        'flickr' => null,
        'foursquare' => null,
        'github' => null,
        'google' => null,
        'gravatar' => null,
        'instagram' => null,
        'lastfm' => null,
        'linkedin' => null,
        'microsoft' => null,
        'myspace' => null,
        'pinterest' => null,
        'skype' => null,
        'spotify' => null,
        'tumblr' => null,
        'twitter' => null,
        'vimeo' => null,
        'weibo' => null,
        'yahoo' => null,
        'discord' => null,
        'ok' => null,
        'kakao' => null,
        'booking' => null,
        'airbnb' => null,
        'amazon' => null,
        'qzone' => null,
        'adobe' => null,
        'mailru' => null,
        'wordpress' => null,
        'imgur' => null,
        'disneyplus' => null,
        'netflix' => null,
        'jdid' => null,
        'flipkart' => null,
        'bukalapak' => null,
        'archiveorg' => null,
        'lazada' => null,
        'zoho' => null,
        'samsung' => null,
        'evernote' => null,
        'envato' => null,
        'patreon' => null,
        'tokopedia' => null,
        'rambler' => null,
        'quora' => null,
        'atlassian' => null
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
        'apple' => 'apple',
        'ebay' => 'ebay',
        'facebook' => 'facebook',
        'flickr' => 'flickr',
        'foursquare' => 'foursquare',
        'github' => 'github',
        'google' => 'google',
        'gravatar' => 'gravatar',
        'instagram' => 'instagram',
        'lastfm' => 'lastfm',
        'linkedin' => 'linkedin',
        'microsoft' => 'microsoft',
        'myspace' => 'myspace',
        'pinterest' => 'pinterest',
        'skype' => 'skype',
        'spotify' => 'spotify',
        'tumblr' => 'tumblr',
        'twitter' => 'twitter',
        'vimeo' => 'vimeo',
        'weibo' => 'weibo',
        'yahoo' => 'yahoo',
        'discord' => 'discord',
        'ok' => 'ok',
        'kakao' => 'kakao',
        'booking' => 'booking',
        'airbnb' => 'airbnb',
        'amazon' => 'amazon',
        'qzone' => 'qzone',
        'adobe' => 'adobe',
        'mailru' => 'mailru',
        'wordpress' => 'wordpress',
        'imgur' => 'imgur',
        'disneyplus' => 'disneyplus',
        'netflix' => 'netflix',
        'jdid' => 'jdid',
        'flipkart' => 'flipkart',
        'bukalapak' => 'bukalapak',
        'archiveorg' => 'archiveorg',
        'lazada' => 'lazada',
        'zoho' => 'zoho',
        'samsung' => 'samsung',
        'evernote' => 'evernote',
        'envato' => 'envato',
        'patreon' => 'patreon',
        'tokopedia' => 'tokopedia',
        'rambler' => 'rambler',
        'quora' => 'quora',
        'atlassian' => 'atlassian'
    ];
    
    protected static $setters = [
        'apple' => 'setApple',
        'ebay' => 'setEbay',
        'facebook' => 'setFacebook',
        'flickr' => 'setFlickr',
        'foursquare' => 'setFoursquare',
        'github' => 'setGithub',
        'google' => 'setGoogle',
        'gravatar' => 'setGravatar',
        'instagram' => 'setInstagram',
        'lastfm' => 'setLastfm',
        'linkedin' => 'setLinkedin',
        'microsoft' => 'setMicrosoft',
        'myspace' => 'setMyspace',
        'pinterest' => 'setPinterest',
        'skype' => 'setSkype',
        'spotify' => 'setSpotify',
        'tumblr' => 'setTumblr',
        'twitter' => 'setTwitter',
        'vimeo' => 'setVimeo',
        'weibo' => 'setWeibo',
        'yahoo' => 'setYahoo',
        'discord' => 'setDiscord',
        'ok' => 'setOk',
        'kakao' => 'setKakao',
        'booking' => 'setBooking',
        'airbnb' => 'setAirbnb',
        'amazon' => 'setAmazon',
        'qzone' => 'setQzone',
        'adobe' => 'setAdobe',
        'mailru' => 'setMailru',
        'wordpress' => 'setWordpress',
        'imgur' => 'setImgur',
        'disneyplus' => 'setDisneyplus',
        'netflix' => 'setNetflix',
        'jdid' => 'setJdid',
        'flipkart' => 'setFlipkart',
        'bukalapak' => 'setBukalapak',
        'archiveorg' => 'setArchiveorg',
        'lazada' => 'setLazada',
        'zoho' => 'setZoho',
        'samsung' => 'setSamsung',
        'evernote' => 'setEvernote',
        'envato' => 'setEnvato',
        'patreon' => 'setPatreon',
        'tokopedia' => 'setTokopedia',
        'rambler' => 'setRambler',
        'quora' => 'setQuora',
        'atlassian' => 'setAtlassian'
    ];
    
    protected static $getters = [
        'apple' => 'getApple',
        'ebay' => 'getEbay',
        'facebook' => 'getFacebook',
        'flickr' => 'getFlickr',
        'foursquare' => 'getFoursquare',
        'github' => 'getGithub',
        'google' => 'getGoogle',
        'gravatar' => 'getGravatar',
        'instagram' => 'getInstagram',
        'lastfm' => 'getLastfm',
        'linkedin' => 'getLinkedin',
        'microsoft' => 'getMicrosoft',
        'myspace' => 'getMyspace',
        'pinterest' => 'getPinterest',
        'skype' => 'getSkype',
        'spotify' => 'getSpotify',
        'tumblr' => 'getTumblr',
        'twitter' => 'getTwitter',
        'vimeo' => 'getVimeo',
        'weibo' => 'getWeibo',
        'yahoo' => 'getYahoo',
        'discord' => 'getDiscord',
        'ok' => 'getOk',
        'kakao' => 'getKakao',
        'booking' => 'getBooking',
        'airbnb' => 'getAirbnb',
        'amazon' => 'getAmazon',
        'qzone' => 'getQzone',
        'adobe' => 'getAdobe',
        'mailru' => 'getMailru',
        'wordpress' => 'getWordpress',
        'imgur' => 'getImgur',
        'disneyplus' => 'getDisneyplus',
        'netflix' => 'getNetflix',
        'jdid' => 'getJdid',
        'flipkart' => 'getFlipkart',
        'bukalapak' => 'getBukalapak',
        'archiveorg' => 'getArchiveorg',
        'lazada' => 'getLazada',
        'zoho' => 'getZoho',
        'samsung' => 'getSamsung',
        'evernote' => 'getEvernote',
        'envato' => 'getEnvato',
        'patreon' => 'getPatreon',
        'tokopedia' => 'getTokopedia',
        'rambler' => 'getRambler',
        'quora' => 'getQuora',
        'atlassian' => 'getAtlassian'
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
        $this->container['apple'] = isset($data['apple']) ? $data['apple'] : null;
        $this->container['ebay'] = isset($data['ebay']) ? $data['ebay'] : null;
        $this->container['facebook'] = isset($data['facebook']) ? $data['facebook'] : null;
        $this->container['flickr'] = isset($data['flickr']) ? $data['flickr'] : null;
        $this->container['foursquare'] = isset($data['foursquare']) ? $data['foursquare'] : null;
        $this->container['github'] = isset($data['github']) ? $data['github'] : null;
        $this->container['google'] = isset($data['google']) ? $data['google'] : null;
        $this->container['gravatar'] = isset($data['gravatar']) ? $data['gravatar'] : null;
        $this->container['instagram'] = isset($data['instagram']) ? $data['instagram'] : null;
        $this->container['lastfm'] = isset($data['lastfm']) ? $data['lastfm'] : null;
        $this->container['linkedin'] = isset($data['linkedin']) ? $data['linkedin'] : null;
        $this->container['microsoft'] = isset($data['microsoft']) ? $data['microsoft'] : null;
        $this->container['myspace'] = isset($data['myspace']) ? $data['myspace'] : null;
        $this->container['pinterest'] = isset($data['pinterest']) ? $data['pinterest'] : null;
        $this->container['skype'] = isset($data['skype']) ? $data['skype'] : null;
        $this->container['spotify'] = isset($data['spotify']) ? $data['spotify'] : null;
        $this->container['tumblr'] = isset($data['tumblr']) ? $data['tumblr'] : null;
        $this->container['twitter'] = isset($data['twitter']) ? $data['twitter'] : null;
        $this->container['vimeo'] = isset($data['vimeo']) ? $data['vimeo'] : null;
        $this->container['weibo'] = isset($data['weibo']) ? $data['weibo'] : null;
        $this->container['yahoo'] = isset($data['yahoo']) ? $data['yahoo'] : null;
        $this->container['discord'] = isset($data['discord']) ? $data['discord'] : null;
        $this->container['ok'] = isset($data['ok']) ? $data['ok'] : null;
        $this->container['kakao'] = isset($data['kakao']) ? $data['kakao'] : null;
        $this->container['booking'] = isset($data['booking']) ? $data['booking'] : null;
        $this->container['airbnb'] = isset($data['airbnb']) ? $data['airbnb'] : null;
        $this->container['amazon'] = isset($data['amazon']) ? $data['amazon'] : null;
        $this->container['qzone'] = isset($data['qzone']) ? $data['qzone'] : null;
        $this->container['adobe'] = isset($data['adobe']) ? $data['adobe'] : null;
        $this->container['mailru'] = isset($data['mailru']) ? $data['mailru'] : null;
        $this->container['wordpress'] = isset($data['wordpress']) ? $data['wordpress'] : null;
        $this->container['imgur'] = isset($data['imgur']) ? $data['imgur'] : null;
        $this->container['disneyplus'] = isset($data['disneyplus']) ? $data['disneyplus'] : null;
        $this->container['netflix'] = isset($data['netflix']) ? $data['netflix'] : null;
        $this->container['jdid'] = isset($data['jdid']) ? $data['jdid'] : null;
        $this->container['flipkart'] = isset($data['flipkart']) ? $data['flipkart'] : null;
        $this->container['bukalapak'] = isset($data['bukalapak']) ? $data['bukalapak'] : null;
        $this->container['archiveorg'] = isset($data['archiveorg']) ? $data['archiveorg'] : null;
        $this->container['lazada'] = isset($data['lazada']) ? $data['lazada'] : null;
        $this->container['zoho'] = isset($data['zoho']) ? $data['zoho'] : null;
        $this->container['samsung'] = isset($data['samsung']) ? $data['samsung'] : null;
        $this->container['evernote'] = isset($data['evernote']) ? $data['evernote'] : null;
        $this->container['envato'] = isset($data['envato']) ? $data['envato'] : null;
        $this->container['patreon'] = isset($data['patreon']) ? $data['patreon'] : null;
        $this->container['tokopedia'] = isset($data['tokopedia']) ? $data['tokopedia'] : null;
        $this->container['rambler'] = isset($data['rambler']) ? $data['rambler'] : null;
        $this->container['quora'] = isset($data['quora']) ? $data['quora'] : null;
        $this->container['atlassian'] = isset($data['atlassian']) ? $data['atlassian'] : null;
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
    
    public function getApple()
    {
        return $this->container['apple'];
    }
    
    public function setApple($apple)
    {
        $this->container['apple'] = $apple;
        return $this;
    }
    
    public function getEbay()
    {
        return $this->container['ebay'];
    }
    
    public function setEbay($ebay)
    {
        $this->container['ebay'] = $ebay;
        return $this;
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
    
    public function getFlickr()
    {
        return $this->container['flickr'];
    }
    
    public function setFlickr($flickr)
    {
        $this->container['flickr'] = $flickr;
        return $this;
    }
    
    public function getFoursquare()
    {
        return $this->container['foursquare'];
    }
    
    public function setFoursquare($foursquare)
    {
        $this->container['foursquare'] = $foursquare;
        return $this;
    }
    
    public function getGithub()
    {
        return $this->container['github'];
    }
    
    public function setGithub($github)
    {
        $this->container['github'] = $github;
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
    
    public function getGravatar()
    {
        return $this->container['gravatar'];
    }
    
    public function setGravatar($gravatar)
    {
        $this->container['gravatar'] = $gravatar;
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
    
    public function getLastfm()
    {
        return $this->container['lastfm'];
    }
    
    public function setLastfm($lastfm)
    {
        $this->container['lastfm'] = $lastfm;
        return $this;
    }
    
    public function getLinkedin()
    {
        return $this->container['linkedin'];
    }
    
    public function setLinkedin($linkedin)
    {
        $this->container['linkedin'] = $linkedin;
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
    
    public function getMyspace()
    {
        return $this->container['myspace'];
    }
    
    public function setMyspace($myspace)
    {
        $this->container['myspace'] = $myspace;
        return $this;
    }
    
    public function getPinterest()
    {
        return $this->container['pinterest'];
    }
    
    public function setPinterest($pinterest)
    {
        $this->container['pinterest'] = $pinterest;
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
    
    public function getSpotify()
    {
        return $this->container['spotify'];
    }
    
    public function setSpotify($spotify)
    {
        $this->container['spotify'] = $spotify;
        return $this;
    }
    
    public function getTumblr()
    {
        return $this->container['tumblr'];
    }
    
    public function setTumblr($tumblr)
    {
        $this->container['tumblr'] = $tumblr;
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
    
    public function getVimeo()
    {
        return $this->container['vimeo'];
    }
    
    public function setVimeo($vimeo)
    {
        $this->container['vimeo'] = $vimeo;
        return $this;
    }
    
    public function getWeibo()
    {
        return $this->container['weibo'];
    }
    
    public function setWeibo($weibo)
    {
        $this->container['weibo'] = $weibo;
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
    
    public function getDiscord()
    {
        return $this->container['discord'];
    }
    
    public function setDiscord($discord)
    {
        $this->container['discord'] = $discord;
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
    
    public function getKakao()
    {
        return $this->container['kakao'];
    }
    
    public function setKakao($kakao)
    {
        $this->container['kakao'] = $kakao;
        return $this;
    }
    
    public function getBooking()
    {
        return $this->container['booking'];
    }
    
    public function setBooking($booking)
    {
        $this->container['booking'] = $booking;
        return $this;
    }
    
    public function getAirbnb()
    {
        return $this->container['airbnb'];
    }
    
    public function setAirbnb($airbnb)
    {
        $this->container['airbnb'] = $airbnb;
        return $this;
    }
    
    public function getAmazon()
    {
        return $this->container['amazon'];
    }
    
    public function setAmazon($amazon)
    {
        $this->container['amazon'] = $amazon;
        return $this;
    }
    
    public function getQzone()
    {
        return $this->container['qzone'];
    }
    
    public function setQzone($qzone)
    {
        $this->container['qzone'] = $qzone;
        return $this;
    }
    
    public function getAdobe()
    {
        return $this->container['adobe'];
    }
    
    public function setAdobe($adobe)
    {
        $this->container['adobe'] = $adobe;
        return $this;
    }
    
    public function getMailru()
    {
        return $this->container['mailru'];
    }
    
    public function setMailru($mailru)
    {
        $this->container['mailru'] = $mailru;
        return $this;
    }
    
    public function getWordpress()
    {
        return $this->container['wordpress'];
    }
    
    public function setWordpress($wordpress)
    {
        $this->container['wordpress'] = $wordpress;
        return $this;
    }
    
    public function getImgur()
    {
        return $this->container['imgur'];
    }
    
    public function setImgur($imgur)
    {
        $this->container['imgur'] = $imgur;
        return $this;
    }
    
    public function getDisneyplus()
    {
        return $this->container['disneyplus'];
    }
    
    public function setDisneyplus($disneyplus)
    {
        $this->container['disneyplus'] = $disneyplus;
        return $this;
    }
    
    public function getNetflix()
    {
        return $this->container['netflix'];
    }
    
    public function setNetflix($netflix)
    {
        $this->container['netflix'] = $netflix;
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
    
    public function getArchiveorg()
    {
        return $this->container['archiveorg'];
    }
    
    public function setArchiveorg($archiveorg)
    {
        $this->container['archiveorg'] = $archiveorg;
        return $this;
    }
    
    public function getLazada()
    {
        return $this->container['lazada'];
    }
    
    public function setLazada($lazada)
    {
        $this->container['lazada'] = $lazada;
        return $this;
    }
    
    public function getZoho()
    {
        return $this->container['zoho'];
    }
    
    public function setZoho($zoho)
    {
        $this->container['zoho'] = $zoho;
        return $this;
    }
    
    public function getSamsung()
    {
        return $this->container['samsung'];
    }
    
    public function setSamsung($samsung)
    {
        $this->container['samsung'] = $samsung;
        return $this;
    }
    
    public function getEvernote()
    {
        return $this->container['evernote'];
    }
    
    public function setEvernote($evernote)
    {
        $this->container['evernote'] = $evernote;
        return $this;
    }
    
    public function getEnvato()
    {
        return $this->container['envato'];
    }
    
    public function setEnvato($envato)
    {
        $this->container['envato'] = $envato;
        return $this;
    }
    
    public function getPatreon()
    {
        return $this->container['patreon'];
    }
    
    public function setPatreon($patreon)
    {
        $this->container['patreon'] = $patreon;
        return $this;
    }
    
    public function getTokopedia()
    {
        return $this->container['tokopedia'];
    }
    
    public function setTokopedia($tokopedia)
    {
        $this->container['tokopedia'] = $tokopedia;
        return $this;
    }
    
    public function getRambler()
    {
        return $this->container['rambler'];
    }
    
    public function setRambler($rambler)
    {
        $this->container['rambler'] = $rambler;
        return $this;
    }
    
    public function getQuora()
    {
        return $this->container['quora'];
    }
    
    public function setQuora($quora)
    {
        $this->container['quora'] = $quora;
        return $this;
    }
    
    public function getAtlassian()
    {
        return $this->container['atlassian'];
    }
    
    public function setAtlassian($atlassian)
    {
        $this->container['atlassian'] = $atlassian;
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
