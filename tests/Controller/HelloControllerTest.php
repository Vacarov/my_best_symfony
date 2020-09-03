<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    /**
     * @return void
     */
    public function testSuccessIndexAction(): void
    {
        $client = static::createClient();

        $client->request("get", "/hello");

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals("Hello world!", $response->getContent());
    }
}
