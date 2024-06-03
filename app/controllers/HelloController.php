<?php

namespace App\Controllers;

use AuroraLumina\View\View;
use App\Services\HelloService;
use AuroraLumina\Request\ServerRequest;
use AuroraLumina\Http\Response\Response;
use AuroraLumina\View\ViewConfiguration;
use AuroraLumina\Controller\BaseController;

class HelloController extends BaseController
{
    private View $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function index(ServerRequest $request, array $args, HelloService $helloService): Response
    {
        return self::response($this->view->render("hello.lumina", [
                'name' => $args['name'],
                'hourMinute' => $helloService->hourMinute()
            ]
        ));
    }
}