<?php

namespace App\Controllers;

use App\Services\HelloService;
use AuroraLumina\Request\ServerRequest;
use AuroraLumina\Http\Response\Response;
use AuroraLumina\Controller\BaseController;

class HelloController extends BaseController
{
    public function index(ServerRequest $request, array $args, HelloService $helloService): Response
    {
        return self::response('Hello ' . $helloService->working() . '!');
    }
}