<?php

namespace App\Providers;

use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind the UserInterface to UserService for dependency injection
        $this->app->bind(
            \App\Interfaces\UserInterface::class,
            function ($app) {
                return $app->make(UserService::class,[
                    'config' => 123, // You can pass any configuration value here
                ]);
            }
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    { 
        //
    }
}
