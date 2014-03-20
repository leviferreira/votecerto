<?php
namespace VoteCerto\WebBundle\Organizations\Interfaces;

interface OrganizationInterface
{
    public function getDeputies();
    public function executeAction($action);
}