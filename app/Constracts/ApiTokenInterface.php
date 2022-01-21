<?php

namespace App\Constracts;

interface ApiTokenInterface
{
    public static function generate();
    public static function check($app_key, $app_secret);
}
