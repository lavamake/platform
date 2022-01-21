<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ApiToken extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lavamake.token.api';
    }
}
