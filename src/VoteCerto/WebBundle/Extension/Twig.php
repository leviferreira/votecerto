<?php

namespace VoteCerto\WebBundle\Extension;


class Twig extends \Twig_Extension
{
    protected $container;

    /**
     * Sets the container
     * @param Symfony\Component\DependencyInjection\Container $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }


    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'get_parliamentarians' => new \Twig_Function_Method($this, 'getParliamentarians'),
            'is_facebook_logged' =>  new \Twig_Function_Method($this, 'isFacebookLogged')
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return "twig_extension";
    }

    public function getParliamentarians()
    {
        $dm = $this->container->get('doctrine_mongodb')->getManager();
        $parliamentarians = $dm->createQueryBuilder('WebBundle:Parliamentarian')->getQuery()->execute();

        $array = [];
        foreach($parliamentarians as $parliamentarian){
            $array[] = [
                'slug' => $parliamentarian->getSlug(),
                'name' => $parliamentarian->getName()
            ];
        }

        return $array;
    }

    public function isFacebookLogged()
    {
       return $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY');
    }
}
