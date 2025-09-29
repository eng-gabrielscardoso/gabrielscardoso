<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (app()->environment('production')) {
            $response->headers->set('Strict-Transport-Security', 'max-age=63072000; includeSubDomains; preload');
            $response->headers->set('X-Content-Type-Options', 'nosniff');
            $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
            $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
            $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=()');
            $response->headers->set('Cross-Origin-Opener-Policy', 'same-origin-allow-popups');
            $response->headers->set('Cross-Origin-Embedder-Policy', 'require-corp');

            $csp = "default-src 'self'; ".
                "script-src 'self' blob: 'unsafe-inline' 'unsafe-eval' https://*.googletagmanager.com https://*.clarity.ms https://*.fontawesome.com; ".
                "style-src 'self' 'unsafe-inline' https://*.googleapis.com; ".
                "img-src 'self' data: blob: https://*.googletagmanager.com https://*.clarity.ms https://*.gravatar.com https://gravatar.com https://go-skill-icons.vercel.app https://*.bing.com https://img.shields.io; ".
                "font-src 'self' https://*.gstatic.com https://*.fontawesome.com; ".
                "connect-src 'self' blob: data: https://*.clarity.ms https://*.livewire.io https://*.fontawesome.com; ".
                'frame-src https://*.googletagmanager.com; '.
                "object-src 'none'; ".
                "base-uri 'self'; ".
                "form-action 'self'; ".
                "frame-ancestors 'self';";
        } else {
            $csp = "default-src 'self'; ".
                "script-src 'self' blob: 'unsafe-inline' 'unsafe-eval' https://*.googletagmanager.com https://*.clarity.ms https://*.fontawesome.com http://localhost:* https://localhost:*; ".
                "style-src 'self' 'unsafe-inline' https://*.googleapis.com http://localhost:* https://localhost:*; ".
                "img-src 'self' data: blob: https://*.googletagmanager.com https://*.clarity.ms ws://localhost:* wss://localhost:* http://localhost:* https://localhost:* https://*.gravatar.com https://gravatar.com https://go-skill-icons.vercel.app https://*.bing.com https://img.shields.io; ".
                "font-src 'self' https://*.gstatic.com https://*.fontawesome.com; ".
                "connect-src 'self' blob: data: ws://localhost:* wss://localhost:* http://localhost:* https://localhost:* https://*.clarity.ms https://*.livewire.io https://*.fontawesome.com; ".
                'frame-src https://*.googletagmanager.com; '.
                "object-src 'none'; ".
                "base-uri 'self'; ".
                "form-action 'self'; ".
                "frame-ancestors 'self';";
        }

        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
}
