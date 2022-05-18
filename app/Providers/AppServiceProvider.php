<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // // Creating Custom Services
        // app()->bind('fist_service_provider', function ($app) {
        //     dd("This is first service container");
        // });

        // # App::getFacadeApplication()->bind();

        // app()->bind('Second_service_provider', function ($app) {
        //     dd("This is Second service container");
        // });

        // app()->bind('Third_service_provider', function ($app) {
        //     dd("This is Third service container");
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
