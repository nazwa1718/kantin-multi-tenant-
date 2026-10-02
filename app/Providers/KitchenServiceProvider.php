<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class KitchenServiceProvider extends ServiceProvider
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
            app_path('Modules/Kitchen/resources/views'),
            'kitchen'
        );

        $this->loadRoutesFrom(
            app_path('Modules/Kitchen/routes/web.php')
        );
    }
}
