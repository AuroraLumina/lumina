<?php

use AuroraLumina\Application;
use AuroraLumina\Request\ServerRequest;

return function (Application $app)
{
    $app->get('/hello/{name}', function(ServerRequest $request, array $args) use ($app)
    {
        $name = $args['name'];
        return "Hello {$name}";
    });
};