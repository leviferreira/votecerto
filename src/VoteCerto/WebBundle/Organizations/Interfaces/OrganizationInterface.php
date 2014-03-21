<?php
namespace VoteCerto\WebBundle\Organizations\Interfaces;

/**
 * Interface OrganizationInterface
 * This interface is used for any organization that has an endpoint
 * to get a list of deputies
 * @package VoteCerto\WebBundle\Organizations\Interfaces
 */
interface OrganizationInterface
{
    /**
     * Constructs the class with endpoint location
     * @param $endpoint
     */
    public function __construct($endpoint);

    /**
     * Get all deputies from this webservice
     * @return array
     */
    public function getParliamentarians();

    /**
     * Executes an action at the webservice
     * @param $action
     * @return mixed
     */
    public function executeAction($action);
}