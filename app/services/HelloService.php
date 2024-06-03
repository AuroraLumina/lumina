<?php

namespace App\Services;

class HelloService
{
    public function hourMinute()
    {
        return date("H:i");
    }
}