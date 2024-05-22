<?php

namespace App\Controllers;

use AuroraLumina\Request\ServerRequest;
use AuroraLumina\Http\Response\Response;
use AuroraLumina\Controller\BaseController;

class HomeController extends BaseController
{
    public function index(ServerRequest $request, $args): Response
    {
        return self::response('Hello!');
    }
}