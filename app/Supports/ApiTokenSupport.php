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
        $app_key = Str::random(18);
        if (self::exists($app_key)){
            return self::generate();
        }

        return [
            'app_key' => $app_key,
            'app_secret' => Str::random(32)
        ];
    }

    public static function exists($app_key)
    {
        return App::where(['app_key' => $app_key])->exists();
    }

    public static function check($app_key, $app_secret)
    {

    }

}
