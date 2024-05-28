<?php

namespace App\Routes;

use App\Services\HelloService;
use App\Controllers\HomeController;
use AuroraLumina\Request\ServerRequest;
use AuroraLumina\Interface\RouterInterface;

return function (RouterInterface $route)
{
    $route->get('/hello/{name}', [HomeController::class, 'index']);
    $route->get('/hello/2/{name}', function(ServerRequest $request, array $args, HelloService $helloService)
    {
        $name = $args['name'];
        return "Hello {$name} {$helloService->xD()}";
    });
};