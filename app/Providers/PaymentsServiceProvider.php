<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PaymentsServiceProvider extends ServiceProvider
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
            app_path('Modules/Payments/resources/views'),
            'payments'
        );

        $this->loadRoutesFrom(
            app_path('Modules/Payments/routes/web.php')
        );
    }
}
