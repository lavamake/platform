<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Aes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lavamake.aes';
    }
}
