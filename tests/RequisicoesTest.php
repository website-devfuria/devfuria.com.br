<?php

require_once dirname(__FILE__) . '/../_site/vendor/autoload.php';
require_once dirname(__FILE__) . '/../app.php';

class RequisicoesTest extends PHPUnit\Framework\TestCase {

    protected $client;

    protected function setUp() {
        $this->client = new GuzzleHttp\Client(['base_uri' => 'http://www.devfuria.local/']);
    }

    public function testRequisicoesBasicas() {
        $response = $this->client->request('GET');
        $this->assertEquals(200, $response->getStatusCode());

        $response = $this->client->request('GET', 'python/');
        $this->assertEquals(200, $response->getStatusCode());

        $response = $this->client->request('GET', 'python/built-in/');
        $this->assertEquals(200, $response->getStatusCode());

        $response = $this->client->request('GET', 'php/');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testRequisicoesRedirecionamentos() {
        $response = $this->client->request('GET', 'html-css/');
        $this->assertEquals(200, $response->getStatusCode());

        $response = $this->client->request('GET', 'html-css/basico/');
        $this->assertEquals(200, $response->getStatusCode());
    }

}

?>