<?php

use AuroraLumina\View\View;
use App\Services\HelloService;
use AuroraLumina\View\ViewConfiguration;
use AuroraLumina\Interface\ContainerInterface;

return function (ContainerInterface $container)
{
    $container->configuration(new ViewConfiguration([
        __DIR__ . '/../templates//'
    ]));
    $container->bindScoped(View::class);
    $container->bindScoped(HelloService::class);
};