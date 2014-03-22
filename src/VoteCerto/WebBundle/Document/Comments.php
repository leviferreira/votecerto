<?php
/**
* Comments document
*/
namespace VoteCerto\WebBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
* Class Comments
* Represents an Parliamentarian
* @package VoteCerto\WebBundle\Document
*/
class Comments {

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
    public function setDeputy(\VoteCerto\WebBundle\Document\Parliamentarian $deputy)
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
    /**
     * @var string $comment
     */
    protected $comment;


    /**
     * Set comment
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Get comment
     *
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * @var string $facebookId
     */
    protected $facebookId;


    /**
     * Set facebookId
     *
     * @param string $facebookId
     * @return self
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string $facebookId
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }
    /**
     * @var string $facebookName
     */
    protected $facebookName;


    /**
     * Set facebookName
     *
     * @param string $facebookName
     * @return self
     */
    public function setFacebookName($facebookName)
    {
        $this->facebookName = $facebookName;
        return $this;
    }

    /**
     * Get facebookName
     *
     * @return string $facebookName
     */
    public function getFacebookName()
    {
        return $this->facebookName;
    }
}
