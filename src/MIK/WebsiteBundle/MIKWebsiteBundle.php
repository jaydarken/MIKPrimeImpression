<?php

namespace MIK\WebsiteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MIKWebsiteBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
