<?php

namespace Slymbo\Laraposts\Providers;

use Illuminate\Support\ServiceProvider;

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
    }
}
