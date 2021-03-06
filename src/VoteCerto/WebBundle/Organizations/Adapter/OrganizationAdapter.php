<?php
namespace VoteCerto\WebBundle\Organizations\Adapter;

use VoteCerto\WebBundle\Organizations\Interfaces\OrganizationInterface;
use VoteCerto\WebBundle\Organizations;

/**
 * Class OrganizationAdapter
 * @package VoteCerto\WebBundle\Organizations\Adapter
 */
class OrganizationAdapter
{
    /**
     * @var \VoteCerto\WebBundle\Organizations\Interfaces\OrganizationInterface
     */
    protected $organization;

    /**
     * @param $class
     * @param $url
     */
    public function __construct($class, $url)
    {
        if(!class_exists($class)){
            throw new \InvalidArgumentException('Class of type: '.$class.' does not exists');
        }

        $organization = new $class($url);

        if(!$organization instanceof OrganizationInterface){
            throw new \InvalidArgumentException("Class of type $class must be a instance of OrganizationInterface");
        }

        $this->organization = $organization;
    }

    /**
     * Get the Deputies from the organization adapted
     * @return array
     */
    public function getParliamentarians()
    {
        return $this->organization->getParliamentarians();
    }
}

?>