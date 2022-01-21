<?php

namespace App\Supports;

use App\Constracts\App\GenerateApp;

class LavamakePlatform
{
    public static $appModel = 'App\\Models\\App';

    public static function appModel()
    {
        return static::$appModel;
    }

    public static function newAppModel()
    {
        $model = static::appModel();

        return new $model;
    }

    public static function useAppModel(string $model)
    {
        static::$appModel = $model;

        return new static;
    }

    /**
     * addAppUsing
     *
     * @param string $class
     *
     * @return void
     */
    public static function addAppUsing(string $class)
    {
        return app()->singleton(GenerateApp::class, $class);
    }
}
