<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
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
            app_path('Modules/Admin/resources/views'),
            'admin'
        );

        $this->loadRoutesFrom(
            app_path('Modules/Admin/routes/web.php')
        );
    }
}
