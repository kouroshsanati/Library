<?php

namespace Modules\Book\Provider;

use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../Route/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations/');
        $this->loadViewsFrom(__DIR__.'/../resources/views','book');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
