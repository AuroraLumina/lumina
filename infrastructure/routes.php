<?php

use App\Services\HelloService;
use App\Controllers\HelloController;
use AuroraLumina\Request\ServerRequest;
use AuroraLumina\Request\RequestArguments;
use AuroraLumina\Interface\RouterInterface;

return function (RouterInterface $route)
{
    $route->get('/hello/controller/{name}', [HelloController::class, 'index']);
    $route->get('/hello/{name}', function(ServerRequest $request, RequestArguments $args, HelloService $helloService)
    {
        $name = $args->name;
        $hourMinute = $helloService->hourMinute();
        return ['name' => $name, 'hourMinute' => $hourMinute];
    });
};