<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/../boot.php';

class RequisicoesTest extends PHPUnit\Framework\TestCase {

    protected $client;

    protected function setUp() {
        $this->client = new GuzzleHttp\Client([
            // 'base_uri' => 'http://192.168.0.140'
        ]);
    }

    public function testRequisicoesBasicas() {
        // $response = $this->client->request('GET');
        // $this->assertEquals(200, $response->getStatusCode());

        // $response = $this->client->request('GET', 'python/');
        // $this->assertEquals(200, $response->getStatusCode());

        // $response = $this->client->request('GET', 'python/built-in/');
        // $this->assertEquals(200, $response->getStatusCode());

        // $response = $this->client->request('GET', 'php/');
        // $this->assertEquals(200, $response->getStatusCode());
    }

    public function testRequisicoesRedirecionamentos() {
        // $response = $this->client->request('GET', 'html-css/');
        // $this->assertEquals(200, $response->getStatusCode());

        // $response = $this->client->request('GET', 'html-css/basico/');
        // $this->assertEquals(200, $response->getStatusCode());
    }

}

?>