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
        $dm = $this->container->get('doctrine_mongodb')->getManager();

        $negatives = $dm->createQueryBuilder('WebBundle:Parliamentarian')->field('votes')->lt(0)->sort(
            'votes', 'asc'
        )->limit(5)->getQuery()->execute();

        $positives = $dm->createQueryBuilder('WebBundle:Parliamentarian')->field('votes')->gt(0)->sort(
            'votes', 'desc'
        )->limit(5)->getQuery()->execute();

        return $this->render("WebBundle:Default:index.html.twig", [
            'positives' => $positives,
            'negatives' => $negatives,
        ]);
    }
}
