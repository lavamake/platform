<?php

namespace App\Supports;

use App\Constracts\AesInterface;
use App\Constracts\ApiTokenInterface;
use App\Models\App;
use Illuminate\Support\Str;

class ApiTokenSupport implements ApiTokenInterface
{
    public static function generate()
    {
        $api_key = Str::random(18);
//        if (self::exists($api_key)){
//            return self::generate();
//        }

        return [
            'api_key' => $api_key,
            'api_secret' => Str::random(64)
        ];
    }

    public static function exists($api_key)
    {
        return App::where(['api_key' => $api_key])->exists();
    }

    public static function check($api_key, $api_secret)
    {

    }

}
