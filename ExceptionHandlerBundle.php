<?php

namespace kejwmen\ExceptionHandlerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Bundle\TwigBundle\DependencyInjection\Compiler\TwigEnvironmentPass;
use Symfony\Bundle\TwigBundle\DependencyInjection\Compiler\TwigLoaderPass;
use Symfony\Bundle\TwigBundle\DependencyInjection\Compiler\ExceptionListenerPass;
use Symfony\Bundle\TwigBundle\DependencyInjection\Compiler\ExtensionPass;

class ExceptionHandlerBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}
