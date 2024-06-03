<?php

use App\Services\HelloService;
use App\Controllers\HelloController;
use AuroraLumina\Request\ServerRequest;
use AuroraLumina\Interface\RouterInterface;

return function (RouterInterface $route)
{
    $route->get('/hello/controller/{name}', [HelloController::class, 'index']);
    $route->get('/hello/{name}', function(ServerRequest $request, array $args, HelloService $helloService)
    {
        $name = $args['name'];
        return ['name' => $name];
    });
};