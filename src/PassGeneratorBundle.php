<?php

namespace PassGeneratorBundle;

use PassGeneratorBundle\DependencyInjection\PassGeneratorExtension;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class PassGeneratorBundle extends AbstractBundle
{
    public function getContainerExtension(): ?PassGeneratorExtension
    {
        return new PassGeneratorExtension();
    }
}