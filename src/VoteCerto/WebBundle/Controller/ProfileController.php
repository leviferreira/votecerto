<?php
/**
 * Default Controlle with home page actions
 */
namespace VoteCerto\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ProfileController
 * @package VoteCerto\WebBundle\Controller
 */
class ProfileController extends Controller
{
    /**
     * Profile action
     * @return Response
     */
    public function indexAction($slug)
    {
        $dm = $this->container->get('doctrine_mongodb')->getManager();
        $profile = $dm->getRepository('WebBundle:Parliamentarian')->findOneBySlug($slug);

        return new Response();
    }
}
