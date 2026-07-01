<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Debug\ExceptionHandler;
use App\Core\Exceptions\GlobalExceptionHandler;
use App\Core\Services\FileUploadService;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind the Global Exception Handler
        $this->app->singleton(ExceptionHandler::class, GlobalExceptionHandler::class);

        // Bind File Upload Service as singleton for reuse
        $this->app->singleton(FileUploadService::class, function ($app) {
            return new FileUploadService(
                uploadPath: 'secure_uploads',
                allowedMimes: ['image/jpeg', 'image/png', 'application/pdf'],
                maxSize: 5120
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
