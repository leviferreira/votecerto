<?php
namespace VoteCerto\WebBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

class Deputy
{
    protected $id;
    protected $idDeputy;
    protected $condition;
    protected $registration;
    protected $name;
    protected $fantasyName;
    protected $photo;
    protected $sex;
    protected $state;
    protected $filiation;
    protected $cabinet;
    protected $attachment;
    protected $phone;
    protected $email;
    protected $localizer;
    protected $committees;

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
     * Set idDeputy
     *
     * @param int $idDeputy
     * @return self
     */
    public function setIdDeputy($idDeputy)
    {
        $this->idDeputy = $idDeputy;
        return $this;
    }

    /**
     * Get idDeputy
     *
     * @return int $idDeputy
     */
    public function getIdDeputy()
    {
        return $this->idDeputy;
    }

    /**
     * Set condition
     *
     * @param string $condition
     * @return self
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Get condition
     *
     * @return string $condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set registration
     *
     * @param int $registration
     * @return self
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;
        return $this;
    }

    /**
     * Get registration
     *
     * @return int $registration
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fantasyName
     *
     * @param string $fantasyName
     * @return self
     */
    public function setFantasyName($fantasyName)
    {
        $this->fantasyName = $fantasyName;
        return $this;
    }

    /**
     * Get fantasyName
     *
     * @return string $fantasyName
     */
    public function getFantasyName()
    {
        return $this->fantasyName;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return self
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * Get photo
     *
     * @return string $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return self
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * Get sex
     *
     * @return string $sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return string $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set filiation
     *
     * @param string $filiation
     * @return self
     */
    public function setFiliation($filiation)
    {
        $this->filiation = $filiation;
        return $this;
    }

    /**
     * Get filiation
     *
     * @return string $filiation
     */
    public function getFiliation()
    {
        return $this->filiation;
    }

    /**
     * Set cabinet
     *
     * @param string $cabinet
     * @return self
     */
    public function setCabinet($cabinet)
    {
        $this->cabinet = $cabinet;
        return $this;
    }

    /**
     * Get cabinet
     *
     * @return string $cabinet
     */
    public function getCabinet()
    {
        return $this->cabinet;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     * @return self
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * Get attachment
     *
     * @return string $attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set localizer
     *
     * @param int $localizer
     * @return self
     */
    public function setLocalizer($localizer)
    {
        $this->localizer = $localizer;
        return $this;
    }

    /**
     * Get localizer
     *
     * @return int $localizer
     */
    public function getLocalizer()
    {
        return $this->localizer;
    }

    /**
     * Set committees
     *
     * @param collection $committees
     * @return self
     */
    public function setCommittees($committees)
    {
        $this->committees = $committees;
        return $this;
    }

    /**
     * Get committees
     *
     * @return collection $committees
     */
    public function getCommittees()
    {
        return $this->committees;
    }
}
