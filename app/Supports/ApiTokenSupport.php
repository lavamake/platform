<?php

namespace App\Supports;

use App\Constracts\AesInterface;
use App\Constracts\ApiTokenInterface;
use App\Constracts\LavamakeApp;
use App\Models\App;
use Illuminate\Support\Str;

class ApiTokenSupport implements ApiTokenInterface
{
    const APP_KEY_LENGTH = 18;
    const APP_SECRET_LENGTH = 32;

    /**
     * generate app key and app secret
     *
     * @return array
     */
    public static function generate()
    {
        $app_key = Str::random(self::APP_KEY_LENGTH);
        if (self::exists($app_key)){
            return self::generate();
        }

        return [
            'app_key' => $app_key,
            'app_secret' => Str::random(self::APP_SECRET_LENGTH)
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
