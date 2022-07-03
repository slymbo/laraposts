<?php

namespace Slymbo\Laraposts\Providers;

use Illuminate\Console\Scheduling\Schedule;
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
            $this->app->booted(function (){
                $schedule = $this->app->make(Schedule::class);
                $schedule->command('laraposts:install')->everyMinute();
            });
        }
    }
}
