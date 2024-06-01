<?php

use App\Services\HelloService;
use AuroraLumina\Interface\ContainerInterface;

return function (ContainerInterface $container)
{
    $container->bindScoped(HelloService::class);
};