<?php

namespace App\Routes;

use AuroraLumina\Application;
use App\Controllers\HomeController;
use AuroraLumina\Request\ServerRequest;

return function (Application $app)
{
    $app->get('/hello', [HomeController::class, 'index']);
    $app->get('/hello/{name}', function(ServerRequest $request, array $args) use ($app)
    {
        $name = $args['name'];
        return "Hello {$name}";
    });
};