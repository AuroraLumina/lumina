<?php

namespace App\Services;

use AuroraLumina\Interface\ServiceInterface;

class HelloService implements ServiceInterface
{
    public function working()
    {
        return ' service is working';
    }
}