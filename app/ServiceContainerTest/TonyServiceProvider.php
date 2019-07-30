<?php
namespace App\ServiceContainerTest;

use Illuminate\Support\ServiceProvider;

class TonyServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\ServiceContainerTest\TonyInterface::class, \App\ServiceContainerTest\TonyClass::class);
    }

}