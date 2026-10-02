<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ReportingServiceProvider extends ServiceProvider
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
            app_path('Modules/Reporting/resources/views'),
            'reporting'
        );

        $this->loadRoutesFrom(
            app_path('Modules/Reporting/routes/web.php')
        );
    }
}
