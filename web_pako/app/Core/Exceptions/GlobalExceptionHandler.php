<?php

namespace App\Core\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Throwable;
use Illuminate\Support\Facades\Log;

/**
 * Global Exception Handler.
 * 
 * Prevents information leakage by hiding stack traces and sensitive details in production.
 * Logs all critical errors for security monitoring.
 */
class GlobalExceptionHandler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     */
    public function report(Throwable $exception): void
    {
        // Log all exceptions for audit trail
        if ($this->shouldReport($exception)) {
            Log::error('Exception occurred', [
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine(),
                'url' => request()->fullUrl(),
                'ip' => request()->ip(),
                'user_agent' => request()->userAgent(),
                // Do NOT log stack trace or sensitive data in plain text in production logs without masking
            ]);
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, Throwable $e): Response|JsonResponse
    {
        // Handle 404 specifically to avoid leaking path info
        if ($e instanceof NotFoundHttpException || $e instanceof ModelNotFoundException) {
            return response()->view('errors.404', [], 404);
        }

        // Handle 403 Forbidden
        if ($e instanceof AccessDeniedHttpException) {
            return response()->view('errors.403', [], 403);
        }

        // Handle Authentication errors
        if ($e instanceof AuthenticationException) {
            return response()->view('errors.401', [], 401);
        }

        // In production, hide detailed error messages
        if (config('app.debug') === false) {
            // Prevent default Laravel debug page
            return response()->view('errors.500', [], 500);
        }

        return parent::render($request, $e);
    }
}
