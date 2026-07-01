<?php

namespace App\Core\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Add critical security headers to every response.
 * Mitigates: XSS, Clickjacking, MIME-sniffing, Information Disclosure.
 */
class SecurityHeadersMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Prevent MIME type sniffing
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // Enable XSS Protection in older browsers
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // Prevent Clickjacking (allow same origin framing only if needed, otherwise DENY)
        // Using SAMEORIGIN to allow internal iframes if necessary, change to DENY for strictness
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // Referrer Policy: Limit information sent in Referer header
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Permissions Policy (formerly Feature-Policy): Disable unnecessary browser features
        $response->headers->set(
            'Permissions-Policy',
            'geolocation=(), microphone=(), camera=(), payment=()'
        );

        // Content Security Policy (CSP) - Strict default
        // In production, replace 'unsafe-inline' with specific nonces or hashes
        $csp = "default-src 'self'; " .
               "script-src 'self' 'unsafe-inline' 'unsafe-eval'; " .
               "style-src 'self' 'unsafe-inline'; " .
               "img-src 'self' data: https:; " .
               "font-src 'self'; " .
               "connect-src 'self'; " .
               "frame-ancestors 'self'; " .
               "base-uri 'self'; " .
               "form-action 'self';";

        $response->headers->set('Content-Security-Policy', $csp);

        // HSTS (Strict-Transport-Security)
        // Only enable this if you are sure HTTPS is enforced everywhere
        // Uncomment below when HTTPS is ready:
        // $response->headers->set(
        //     'Strict-Transport-Security',
        //     'max-age=31536000; includeSubDomains; preload'
        // );

        return $response;
    }
}
