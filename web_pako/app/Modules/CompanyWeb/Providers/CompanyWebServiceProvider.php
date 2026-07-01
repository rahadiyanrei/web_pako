<?php

namespace App\Modules\CompanyWeb\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class CompanyWebServiceProvider extends ServiceProvider
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
        // Load routes for CompanyWeb module
        Route::middleware(['web'])
            ->group(__DIR__ . '/../Routes/web.php');
    }
}
