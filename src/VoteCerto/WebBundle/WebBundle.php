<?php

namespace VoteCerto\WebBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class WebBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
