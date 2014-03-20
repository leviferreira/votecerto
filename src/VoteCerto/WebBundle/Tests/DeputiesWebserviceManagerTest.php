<?php
namespace VoteCerto\WebBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DeputiesWebserviceManagerTest extends WebTestCase
{
    protected $container;

    public function setUp()
    {
        $this->container = $this->getKernelClass()->getContainer();
    }
    public function testDeputiesUpdate()
    {
        $this->container->get('deputies_webservice_manager')->updateDeputies();
    }
}