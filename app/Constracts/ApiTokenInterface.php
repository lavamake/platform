<?php

namespace App\Constracts;

interface ApiTokenInterface
{
    public static function generate();
    public static function check($api_key, $api_secret);
}
