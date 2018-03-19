<?php

namespace Akina\ImmobilierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RestFullControllerTest extends WebTestCase
{
    public function testListbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list');
    }

    public function testUpdatebien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateBien');
    }

    public function testFindbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/findBien');
    }

    public function testDeletebien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteBien');
    }

    public function testDetailbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/detailBien');
    }

    public function testAddbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addBien');
    }

    public function testEditbien()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editBien');
    }

}
