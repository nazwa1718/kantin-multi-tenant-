<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OrderingServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(
            app_path('Modules/Ordering/resources/views'),
            'ordering'
        );

        $this->loadRoutesFrom(
            app_path('Modules/Ordering/routes/web.php')
        );
    }
}
