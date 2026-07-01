<?php

namespace App\Modules\VendorPortalInko\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class VendorPortalInkoServiceProvider extends ServiceProvider
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
        // Load routes for VendorPortalInko module with specific prefix and middleware
        Route::middleware(['web', 'auth']) // Assuming 'auth' middleware for portal
            ->prefix('portal-inko')
            ->group(__DIR__ . '/../Routes/web.php');
    }
}
