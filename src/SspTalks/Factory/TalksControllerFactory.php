<?php

namespace SspTalks\Factory;

use Interop\Container\ContainerInterface;
use SspTalks\Controller\TalksController;

class TalksControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new TalksController($container->get('SessionsTable'));
    }
}
