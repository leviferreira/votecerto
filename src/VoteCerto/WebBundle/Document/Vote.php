<?php
/**
* Deputy document
*/
namespace VoteCerto\WebBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
* Class Deputy
* Represents an Deputy
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
     * @var VoteCerto\WebBundle\Document\Deputy
     */
    protected $deputy;


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
     * Set deputy
     *
     * @param VoteCerto\WebBundle\Document\Deputy $deputy
     * @return self
     */
    public function setDeputy(\VoteCerto\WebBundle\Document\Deputy $deputy)
    {
        $this->deputy = $deputy;
        return $this;
    }

    /**
     * Get deputy
     *
     * @return VoteCerto\WebBundle\Document\Deputy $deputy
     */
    public function getDeputy()
    {
        return $this->deputy;
    }
}
