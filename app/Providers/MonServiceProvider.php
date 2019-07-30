<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MonServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\TestInterface','App\Test');
    }

    public function provides()
    {
        return ['App\TestInterface'];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
