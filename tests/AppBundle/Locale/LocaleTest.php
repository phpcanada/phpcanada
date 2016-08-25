<?php

namespace Tests\AppBundle\Locale;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LocaleTest extends WebTestCase
{
    public function testFrenchButtonIsAvailable()
    {
        $client = static::createClient();

        $crawler = $client->request('GET',
            $client
                ->getContainer()
                ->get('router')
                ->generate('switch_locale', ['_locale' => 'en'])
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('French',
            $crawler->filter('body > header > div:nth-child(1) > div.top-bar-right > ul > li > a')->text()
        );
    }

    public function testEnglishButtonIsAvailable()
    {
        $client = static::createClient();

        $crawler = $client->request('GET',
            $client
                ->getContainer()
                ->get('router')
                ->generate('switch_locale', ['_locale' => 'fr'])
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('English',
            $crawler->filter('body > header > div:nth-child(1) > div.top-bar-right > ul > li > a')->text()
        );
    }
}