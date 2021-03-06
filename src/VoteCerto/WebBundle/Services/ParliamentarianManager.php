<?php
/**
 * Parliamentarian manager used to manage parliamentarian actions
 */
namespace VoteCerto\WebBundle\Services;

use VoteCerto\WebBundle\Document\Comments;
use VoteCerto\WebBundle\Document\Parliamentarian;

/**
 * Class ParliamentarianManager
 * @package VoteCerto\WebBundle\Services
 */
class ParliamentarianManager
{
    /**
     * @var ServiceContainer
     */
    protected $container;

    /**
     * Construct the manager
     * @param $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     * Finds one parliamentarian by slug
     * @param $slug
     * @return mixed
     */
    public function findBySlug($slug)
    {
        $dm = $this->container->get('doctrine_mongodb')->getManager();
        $profile = $dm->getRepository('WebBundle:Parliamentarian')->findOneBySlug($slug);

        return $profile;
    }

    /**
     * Vote in one parliamentarian
     * @param Parliamentarian $profile
     * @return bool
     */
    public function vote(Parliamentarian $profile)
    {
        $request = $this->container->get('request')->request->all();

        $vote = new Comments();
        $vote->setVote(false);

        $sum = -1;
        if($request['option'] == '1') {
            $vote->setVote(true);
            $sum = 1;
        }

        $user = $this->container->get('security.context')->getToken()->getUser();

        $vote->setParliamentarian($profile);
        $vote->setComment($request['comment']);

        $vote->setFacebookId($user->getUsername());
        $vote->setFacebookName($this->getFacebookName($user->getUsername()));

        $dm = $this->container->get('doctrine_mongodb')->getManager();

        $profile->setVotes( ((int)$profile->getVotes())+$sum );
        $profile->addComment($vote);

        $dm->persist($vote);
        $dm->merge($profile);
        $dm->flush();

        return true;
    }

    /**
     * Get the facebook name based on fbId
     * @param $fbId
     * @return string
     */
    public function getFacebookName($fbId)
    {
        if(!$fbId){
            return "Anônimo";
        }
        $fbUser = $this->container->get('my.facebook.user')->loadUserByUsername($fbId);

        return $fbUser->getFirstName()." ".$fbUser->getLastName();
    }
}


?>