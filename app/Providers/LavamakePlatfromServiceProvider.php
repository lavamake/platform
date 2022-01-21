<?php

namespace App\Providers;

use App\Actions\App\GenerateANewApp;
use App\Constracts\ApiTokenInterface;
use App\Constracts\LavamakeApp;
use App\Models\App;
use App\Observers\AppObserver;
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
        App::observe(AppObserver::class);
        $this->registerAlias();
        $this->app->singleton('lavamake.aes', function () {
            return new AesSupport();
        });
        $this->app->singleton('lavamake.token.api', function ($app) {
            return new ApiTokenSupport();
        });
    }

    public function registerAlias()
    {
        $this->app->alias('lavamake.token', ApiTokenInterface::class);
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
