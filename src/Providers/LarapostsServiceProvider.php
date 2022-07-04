<?php

namespace Slymbo\Laraposts\Providers;

use Illuminate\Support\ServiceProvider;
use Slymbo\Laraposts\Commands\InstallLaraPosts;

class LarapostsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . './../Routes/routes.php';

        //Register the command
        if ($this->app->runningInConsole()){
            $this->commands(InstallLaraPosts::class);
        }

        $this->publishes([
            __DIR__.'/../Config/laraposts.php' => config_path('laraposts.php')
        ], 'config');
    }
}
