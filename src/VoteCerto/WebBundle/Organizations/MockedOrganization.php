<?php
    namespace VoteCerto\WebBundle\Organizations;
    use VoteCerto\WebBundle\Document\Parliamentarian;
    use VoteCerto\WebBundle\Organizations\Interfaces\OrganizationInterface;

    /**
     * Class MockedOrganization
     * @package VoteCerto\WebBundle\Organizations
     */
    class MockedOrganization implements OrganizationInterface
    {
        public function __construct($file)
        {
            return;
        }
        /**
         * Get all deputies from this webservice
         * @return array
         */
        public function getParliamentarians()
        {
            $document = new Parliamentarian();
            $document->setIdParliamentarian('1234567890');
            $document->setCondition('Titular');
            $document->setRegistration('123');
            $document->setName('Teste Mocked');
            $document->setFantasyName('Fantasy Name');
            $document->setPhoto('UrlPhoto');
            $document->setSex('Male');
            $document->setState('SP');
            $document->setFiliation('PP');
            $document->setCabinet(123);
            $document->setAttachment(1);
            $document->setPhone('xxxx-xxxx');
            $document->setEmail('fake@fake.com');
            $document->setLocalizer('1');
            $document->setCommittees([]);

            yield $document;
        }

        /**
         * Executes an action at the webservice
         * @param $action
         * @return mixed
         */
        public function executeAction($action)
        {
           return;
        }
    }
?>