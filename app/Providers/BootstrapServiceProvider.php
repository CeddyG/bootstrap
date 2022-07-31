<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\ModelBinding;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ModelBinding::class, function ($app) {
            return new ModelBinding();
        });
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
