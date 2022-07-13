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
        $this->mergeConfigFrom(__DIR__.'/../Config/laraposts.php', 'laraposts');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . './../Routes/routes.php';

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        //Register the command
        if ($this->app->runningInConsole()){
            $this->commands(InstallLaraPosts::class);

            // Auto publishing config file
            $this->publishes([
                __DIR__.'/../Config/laraposts.php' => config_path('laraposts.php')
            ], 'config');

            // Export the migration
            if (!class_exists('20220706100000createpoststable')) {
                $this->publishes([
                    __DIR__.'/../Database/Migrations/create_posts_table.php.stub'
                    => database_path('migrations/' . date('Y_m_d_His', time())) . '_create_posts_table.php'
                ], 'migrations');
            }
        }
    }
}
