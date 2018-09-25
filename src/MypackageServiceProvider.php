<?php

namespace Kiendo\Mypackage;

use Illuminate\Support\ServiceProvider;

class MypackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Kiendo\Mypackage\MypackageController');
        $this->loadViewsFrom(__DIR__.'/views', 'teams');
    }
}
