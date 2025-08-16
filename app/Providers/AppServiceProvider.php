<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MicroserviceConsumer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(MicroserviceConsumer::class, function ($app) {
            $config = $app['config']['services.microservice'];

            return new MicroserviceConsumer(
                $config['base_uri']
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
