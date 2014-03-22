<?php
namespace VoteCerto\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{

    public function connectFacebookWithAccountAction()
    {
        $fbService = $this->get('my.facebook.user');
        //todo: check if service is successfully connected.
        $fbService->connectExistingAccount();

        return $this->redirect($this->generateUrl('fos_user_profile_edit'));
    }

    public function loginFbAction() {
        return $this->redirect($this->generateUrl("web_homepage"));
    }

}