<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CatalogServiceProvider extends ServiceProvider
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
            app_path('Modules/Catalog/resources/views'),
            'catalog'
        );

        $this->loadRoutesFrom(
            app_path('Modules/Catalog/routes/web.php')
        );
    }
}
