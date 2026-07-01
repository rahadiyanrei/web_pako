<?php

namespace App\Modules\VendorPortal\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class VendorPortalServiceProvider extends ServiceProvider
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
        // Load routes for VendorPortal module with specific prefix and middleware
        Route::middleware(['web', 'auth']) // Assuming 'auth' middleware for portal
            ->prefix('portal')
            ->group(__DIR__ . '/../Routes/web.php');
    }
}
