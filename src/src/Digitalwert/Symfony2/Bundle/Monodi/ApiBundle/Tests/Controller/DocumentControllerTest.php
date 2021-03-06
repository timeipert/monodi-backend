<?php

namespace Digitalwert\Symfony2\Bundle\Monodi\ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * 
 */
class DocumentControllerTest extends WebTestCase
{
    public function testGetdocument()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/document/{id}');
    }

    public function testPostdocument()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/document/{id}');
    }
    
    /**
     * Update eines Dokumentes Testen
     */
    public function testPutdocument()
    {
        $client = static::createClient();
      
        $crawler = $client->request(
            'PUT',
            '/document/{id}',
            array(),
            array(),
            array('CONTENT_TYPE' => 'application/json'),
            '{"title":"testdocument","content":"<foo>sadfsadf</foo>"}'
        );       
        
        var_dump($client->getResponse()->isSuccessful());
        var_dump($client->getResponse()->getContent());
    }

    public function testPatchdocument()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/document/{id}');
    }

    public function testOptionsdocument()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/documents');
    }

    public function testDeletedocument()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/documents/{id}');
    }

}
