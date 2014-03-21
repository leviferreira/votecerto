<?php
namespace VoteCerto\WebBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use VoteCerto\WebBundle\Services\WebserviceManager;

class DeputiesWebserviceManagerTest extends WebTestCase
{
    protected $container;

    public function setUp()
    {
        $this->container = $this->getKernelClass()->getContainer();
    }
    public function testParliamentariansUpdate()
    {
        $webserviceManager = new WebserviceManager(
            $this->container, [
                'name' => 'MockedOrganization',
                'url' => '',
                'class' => 'VoteCerto\WebBundle\Organizations\MockedOrganization'
            ]
        );

        $this->assertTrue($webserviceManager->updateParliamentarians());

        $dm = $this->container->get('doctrine_mongodb')->getManager();
        $found = $dm->getRepository('WebBundle:Parliamentarian')->findOneByIdParliamentarian('1234567890');
        $this->assertInstanceOf('Parliamentarian', $found);

        $dm->remove($found);
        $dm->flush();
    }
}