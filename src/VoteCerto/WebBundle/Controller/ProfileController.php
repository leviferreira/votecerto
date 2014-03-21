<?php
/**
 * Default Controlle with home page actions
 */
namespace VoteCerto\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ProfileController
 * @package VoteCerto\WebBundle\Controller
 */
class ProfileController extends Controller
{
    /**
     * Profile action
     * @return Response
     */
    public function indexAction($slug)
    {
        $profile = $this->container->get('parliamentarian_manager')->findBySlug($slug);

        return $this->render("WebBundle:Profile:index.html.twig", ['profile' => $profile]);
    }

    public function voteAction($slug)
    {
        $profile = $this->container->get('parliamentarian_manager')->findBySlug($slug);

        $vote = $this->container->get('parliamentarian_manager')->vote($profile);

        if($vote) {
            $this->get('session')->getFlashBag()->add(
                'notice',
                'Voto recebido com sucesso!'
            );
        }




        return $this->redirect(
            $this->generateUrl('webbundle_profile', ['slug' => $profile->getSlug()])
        );

    }
}
