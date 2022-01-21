<?php

namespace App\Providers;

use App\Actions\App\GenerateANewApp;
use App\Constracts\ApiTokenInterface;
use App\Supports\AesSupport;
use App\Supports\ApiTokenSupport;
use App\Supports\LavamakePlatform;
use Illuminate\Support\ServiceProvider;

class LavamakePlatfromServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias('lavamake.token', ApiTokenInterface::class);
        $this->app->singleton('lavamake.aes', function () {
            return new AesSupport();
        });
        $this->app->singleton('lavamake.token.api', function () {
            return new ApiTokenSupport();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        LavamakePlatform::addAppUsing(GenerateANewApp::class);
    }
}
