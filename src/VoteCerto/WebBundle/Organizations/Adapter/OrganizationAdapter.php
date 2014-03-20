<?php
namespace VoteCerto\WebBundle\Organizations\Adapter;

use VoteCerto\WebBundle\Organizations\Interfaces\OrganizationInterface;
use VoteCerto\WebBundle\Organizations;

class OrganizationAdapter
{
    protected $organization;

    public function __construct($class, $url)
    {
        if(!class_exists($class)){
            throw new \InvalidArgumentException('Class of type: '.$class.' does not exists');
        }

        $organization = new $class($url);

        if(!$organization instanceof OrganizationInterface){
            throw new \InvalidArgumentException("Class of type $class must be a instance of Organization Interface");
        }

        $this->organization = $organization;
    }

    public function getDeputies()
    {
        return $this->organization->getDeputies();
    }
}

?>