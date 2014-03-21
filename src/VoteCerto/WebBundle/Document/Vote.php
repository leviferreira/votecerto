<?php
/**
* Parliamentarian document
*/
namespace VoteCerto\WebBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
* Class Parliamentarian
* Represents an Parliamentarian
* @package VoteCerto\WebBundle\Document
*/
class Vote {

    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var boolean $vote
     */
    protected $vote;

    /**
     * @var VoteCerto\WebBundle\Document\Parliamentarian
     */
    protected $parliamentarian;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vote
     *
     * @param boolean $vote
     * @return self
     */
    public function setVote($vote)
    {
        $this->vote = $vote;
        return $this;
    }

    /**
     * Get vote
     *
     * @return boolean $vote
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set parliamentarian
     *
     * @param VoteCerto\WebBundle\Document\Parliamentarian $parliamentarian
     * @return self
     */
    public function setParliamentarian(\VoteCerto\WebBundle\Document\Parliamentarian $parliamentarian)
    {
        $this->parliamentarian = $parliamentarian;
        return $this;
    }

    /**
     * Get parliamentarian
     *
     * @return VoteCerto\WebBundle\Document\Parliamentarian $parliamentarian
     */
    public function getParliamentarian()
    {
        return $this->parliamentarian;
    }
    /**
     * @var VoteCerto\WebBundle\Document\Parliamentarians
     */
    protected $deputy;


    /**
     * Set deputy
     *
     * @param VoteCerto\WebBundle\Document\Parliamentarians $deputy
     * @return self
     */
    public function setDeputy(\VoteCerto\WebBundle\Document\Parliamentarians $deputy)
    {
        $this->deputy = $deputy;
        return $this;
    }

    /**
     * Get deputy
     *
     * @return VoteCerto\WebBundle\Document\Parliamentarians $deputy
     */
    public function getDeputy()
    {
        return $this->deputy;
    }
}
