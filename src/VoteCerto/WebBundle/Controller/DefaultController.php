<?php
/**
 * Default Controlle with home page actionsr
 */
namespace VoteCerto\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package VoteCerto\WebBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * Home page action
     * @return Response
     */
    public function indexAction()
    {
        return new Response();
    }
}
