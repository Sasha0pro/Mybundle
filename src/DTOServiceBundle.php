<?php

namespace DTOServiceBundle;

use DTOServiceBundle\DependencyInjection\DTOServiceExtension;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class DTOServiceBundle extends AbstractBundle
{
    public function getContainerExtension(): ?DTOServiceExtension
    {
        return new DTOServiceExtension();
    }
}