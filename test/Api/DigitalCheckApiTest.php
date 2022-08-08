<?php

namespace CirculoDeCredito\DigitalCheck\Client;

use CirculoDeCredito\DigitalCheck\Client\Api\ApiClient;
use CirculoDeCredito\DigitalCheck\Client\Configuration;
use CirculoDeCredito\DigitalCheck\Client\ApiException;
use CirculoDeCredito\DigitalCheck\Client\ObjectSerializer;
use CirculoDeCredito\DigitalCheck\Client\Model\RequestData;
use CirculoDeCredito\DigitalCheck\Client\Interceptor\KeyHandler;
use CirculoDeCredito\DigitalCheck\Client\Interceptor\MiddlewareEvents;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;

class DefaultApiTest extends \PHPUnit\Framework\TestCase
{
    private $username;
    private $password;
    private $apiKey;
    private $httpClient;
    private $config;

    public function setUp(): void
    {
	$this->username = "";
	$this->password = "";
	$this->apiKey = "";

	$apiUrl              = "";
	$keystorePassword    = "";
        $keystore            = "";
        $cdcCertificate      = "";

        $signer = new KeyHandler($keystore, $cdcCertificate, $keystorePassword);

        $events = new MiddlewareEvents($signer);
        $handler = HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

        $this->config = new Configuration();
        $this->config->setHost($apiUrl);

        $this->httpClient = new HttpClient([
            'handler' => $handler
        ]);

    }

    public function testFullfraud()
    {
        $requestPayload = new RequestData();
        $requestPayload->setFolioOtorgante("");
        $requestPayload->setFolioConsulta("");
        $requestPayload->setIp("");
        $requestPayload->setEmail("");
	$requestPayload->setPhone("");

	$response = null;

        try {

            $client = new ApiClient($this->httpClient, $this->config);
            $response = $client->fullfraud($this->apiKey, $this->username, $this->password, $requestPayload);

            print("\n".$response);

        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

        $this->assertNotNull($response);
    }
}
