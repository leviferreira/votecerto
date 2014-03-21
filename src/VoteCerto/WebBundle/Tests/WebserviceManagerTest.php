<?php
namespace VoteCerto\WebBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use VoteCerto\WebBundle\Services\WebserviceManager;

class DeputiesWebserviceManagerTest extends WebTestCase
{
    protected $container;

    public function setUp()
    {
        $client = static::createClient();
        $this->container = $client->getContainer();
    }
    public function testParliamentariansUpdate()
    {
        $webserviceManager = new WebserviceManager(
            $this->container, [
                [
                    'name' => 'MockedOrganization',
                    'url' => '',
                    'class' => 'VoteCerto\WebBundle\Organizations\MockedOrganization'
                ]
            ]
        );
        $this->assertTrue($webserviceManager->updateParliamentarians());

        $dm = $this->container->get('doctrine_mongodb')->getManager();
        $found = $dm->getRepository('WebBundle:Parliamentarian')->findOneByEmail('fake@fake.com');

        $this->assertInstanceOf('VoteCerto\WebBundle\Document\Parliamentarian', $found);

        $dm->remove($found);
        $dm->flush();
    }
}